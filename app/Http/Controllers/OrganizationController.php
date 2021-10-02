<?php

namespace App\Http\Controllers;

use App\Mail\DeclineOrgnization;
use App\Mail\VerifyOrganization;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrganizationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.global');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = Organization::all()->where('verified', true);
        return view('admin.org-list',  ['organizations' => $organizations]);
    }

    public function placement()
    {
        $organizations = Organization::all()->where('verified', true);
        return view('students.placement',  ['organizations' => $organizations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-org');
    }


    public function application(Organization $organization)
    {
        return view('organization.application');
    }


    public function apply(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'placement_description' => 'required',
            'website',
            'placement_attachment' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        $student_id = auth('student')->user()->id;

        if($request->hasFile('placement_attachment')) {

            $request->file('placement_attachment')->storePublicly('public');

            $fileName = $request->file('placement_attachment')->hashName('storage');

            Organization::create(['request_id' => $student_id, 'name'=> $request->name, 'state' => $request->state,
                'city' => $request->city, 'email' => $request->email, 'contact' => $request->contact,
                'address' => $request->address, 'placement_description' => $request->placement_description,
                'website' => $request->website ,'placement_attachment' => $fileName]);

            flashStatus('Adding of Organization will be under review, check back', 'Success');
        }
        return back();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required',
            'state' => 'required',
            'city' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'website',
        ]);

        $data['verified'] =  true;

        Organization::create(
            [ 'name' => $request->name, 'state' => $request->state, 'city' => $request->city,
                'email' => $request->email, 'contact' => $request->contact, 'address' => $request->address,
                'website' => $request->website, 'verified' => true
            ]
        );

        flashStatus('Organization successfully created', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     */


    public function organizationsFalse()
    {
        $organizations = Organization::where('verified', false)->get();
        return view('admin.org-request-list',  ['organizations' => $organizations]);
    }

    public function verifyOrganization(Organization $organization)
    {
        $student = Organization::find($organization->id)->studentRequest;

        $data = $student[0];

        Organization::where('id', $organization->id)->update(['verified' => true]);

        Mail::to($data->email)->send(new VerifyOrganization($data));

        flashStatus('Organization is successfully verified', 'Success');
        return back();
    }

    public function show(Organisation $organization)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Organisation $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Organization $organization)
    {
        $student = Organization::find($organization->id)->studentRequest;

        Organization::where('id', $organization->id)->delete();

        Mail::to($data->email)->send(new DeclineOrgnization($data));

        flashStatus('Organization is declined and an email have been sent to the user', 'Success');
        return back();
    }
}
