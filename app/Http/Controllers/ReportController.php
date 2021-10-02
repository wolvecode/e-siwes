<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Student;
use App\Models\User;
use Faker\Core\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.global');
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $reports = Report::all();
        return view('students.report', ['reports', $reports]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //display form report and list all reports
        $user = auth('student')->user()->id;

        $reports = Student::find($user)->reports;

        return view('students.report', [ 'reports' => $reports ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function studentsReports()
    {
        //display report form and list all reports
        $user = auth('user')->user()->id;

        $students = User::find($user)->students;

        return view('supervisors.students-reports', [ 'students' => $students ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'content' => 'required',
            'attachment' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        if($request->hasFile('attachment')) {

            $request->file('attachment')->storePublicly('public/report');

            $fileName = $request->file('attachment')->hashName('storage/report');

            $student_id = auth('student')->user()->id;

            Report::create([
                'student_id' => $student_id,
                'content' => $request->input('content'),
                'attachment' => $fileName
            ]);

            flashStatus('Report successfully Submitted', 'Success');
        }

        return back();
    }

    public function displayImage($filename)
    {
        $path = storage_path($filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }


    /**
     * Display the specified resource.
     *
     */
    public function show(Student $student)
    {
        //display form report and list all reports
        $user = auth('user')->user()->id;

        $students = User::find($user)->students;
        $reports = Student::find($student->id)->reports;
        return view('Reports.reports-list', ['reports' => $reports, 'students' => $students ]);
    }


    /**
     * @param Report $report
     * @return RedirectResponse
     */
    public function view(Report $report)
    {
        Report::where('id', $report->id)->update(['view' => true]);
        flashStatus('Report viewed', 'Success');
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Report $report)
    {
        $data = $request->validate([
            'content' => 'required',
        ]);

        Report::where('id', $report->id)->update($data);

        flashStatus('Report edited was successfully updated', 'Success');
        return redirect(route('report'));
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Report $report)
    {
        //
    }
}
