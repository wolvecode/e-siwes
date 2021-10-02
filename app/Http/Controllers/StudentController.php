<?php

namespace App\Http\Controllers;

use App\Mail\DeclineAcceptance;
use App\Mail\VerifyAcceptance;
use App\Mail\VerifyOrganization;
use App\Models\Organization;
use Database\Seeders\AcceptanceSeeder;
use Str;
use App\Models\Session;
use App\Models\Student;
use App\Models\Acceptance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.global');
    }

    public function index()
    {
        $users = Student::all();

        $lecturers = User::where('role', 3)->paginate(5);
        return view('admin.list-student', ['users' => $users, 'lecturers' => $lecturers]);
    }

    public function unassigned()
    {
        $users = Student::all()->where('assign', false);

        $lecturers = User::where('role', 3)->paginate(5);
        return view('students.unassigned', ['users' => $users, 'lecturers' => $lecturers]);
    }

    public function create()
    {
        $sessions = Session::all();
        return view('addStudent', [ 'sessions' => $sessions ]);
    }

    public function assignAll(Request $request)
    {
        $lecturer = $request->lecturer;

        if (!$request->input('students_id'))
            return abort(400);

        $assignable_students_ids = json_decode($request->input('students_id'));

        DB::table("students")->whereIn('id', $assignable_students_ids)->update(['assign' => true, 'user_id' =>  $lecturer]);

        flashStatus('Students Assigned', 'Success');
        return back();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
            'email' => 'required|unique:students|max:255',
            'matric_no' => 'required|unique:students|max:255',
            'session_id' => 'required',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);

        Student::create($data);

        flashStatus('User successfully created', 'Success');

        return back();
    }

    public function storeMultiple(Request $request)
    {
        $request->validate([
            'attachment' => 'file|required|max:2048',
        ]);

        if($request->hasFile('attachment')) {
            $request->file('attachment')->storePublicly('public');

            $fileName = $request->file('attachment')->hashName('storage');

            $reader = ReaderEntityFactory::createReaderFromFile($fileName);

            $reader->open($fileName);

            $recent_session_id = Session::latest()->first()->id;

            foreach ($reader->getSheetIterator() as $sheet) {
                foreach ($sheet->getRowIterator() as $row) {
                    $cells = $row->getCells();

                    if (count($cells) > 4 || count($cells) < 3) {
                        continue;
                    }
                    if (Student::where('matric_no', strtoupper($cells[2]))->count()) {
                        continue;
                    }
                    // First cell is student's name. And we make the initial of their name their password.
                    $student_password = Hash::make(strtoupper(explode(' ', $cells[0])[0]));
                    Student::create([
                        'name' => Str::title($cells[0]),
                        'email' => strtolower($cells[1]),
                        'matric_no' => strtoupper($cells[2]),
                        'password' => $student_password,
                        'session_id' => isset($cells[3])
                            ? Session::where('year', $cells[3]->getvalue())->first()->id
                            : $recent_session_id,
                    ]);
                }
            }

            $reader->close();
            flashStatus('Students successfully uploaded', 'Success');
        }

        return back();
    }

    public function showAcceptance()
    {
        $organizations = Organization::where('verified', true)->get();
        return view('students.upload-acceptance', ['organizations' => $organizations]);
    }

    public function newAcceptance()
    {
        $acceptances = Acceptance::where('verified', false)->get();
        return view('new-acceptance',  ['acceptances' => $acceptances]);
    }

    public function verifyAcceptance(Acceptance $acceptance)
    {
        $data =  Acceptance::find($acceptance->id)->student;

        Acceptance::where('id', $acceptance->id)->update(['verified' => true]);

        Mail::to('wolvecode@gmail.com')->send(new VerifyAcceptance($data));

        flashStatus('Acceptance is successfully verified, An email have been sent to the user', 'Success');
        return back();
    }

    public function declineAcceptance(Acceptance $acceptance)
    {
        $data =  Acceptance::find($acceptance->id)->student;

        Acceptance::where('id', $acceptance->id)->delete();

        Mail::to('wolvecode@gmail.com')->send(new DeclineAcceptance($data));

        flashStatus('Acceptance decline, An email have been sent to the user,', 'Success');
        return back();
    }

    public function uploadAcceptance(Request $request)
    {
        $new = $request->validate([
            'attachment' => 'file|required|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
            'organization_id' => 'required'
        ]);

        if($request->hasFile('attachment')) {

            $request->file('attachment')->storePublicly('public/acceptance');

            $fileName = $request->file('attachment')->hashName('storage/acceptance');

            $student_id = auth('student')->user()->id;

            Acceptance::create(
                [
                'student_id' => $student_id, 'organization_id' => $new['organization_id'],
                'description' => $new['description'],'attachment' => $fileName,
                ]
            );

            flashStatus('Acceptance submitted, you will get an email for approval', 'Success');
        }
        return back();
    }

    public function show(Student $student)
    {
        //Password::
    }


    public function edit(Student $student)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
            'matric_no' => 'required|unique:students|max:255',
            'session_id' => 'required',
            'password' => 'required|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);

        Student::where($student->id)->update($data);

        flashStatus('User successfully updated', 'Success');

        return back();
    }


    public function update(Request $request, Student $student)
    {
        //
    }


    public function destroy(Student $student, Request $request)
    {
        $assignable_students_ids = json_decode($request->input('students_id'));

        DB::table("students")->whereIn('id', $assignable_students_ids)->delete();

        flashStatus('Student deleted', 'Success');
        return back();
        //return response()->json(['success' => "Students Added Successfully."]);
    }
}
