<?php

namespace App\Http\Controllers;

use App\Models\Student;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){
        //$students = Student::all();
        $students = Student::paginate(3);

        //return view('allstudents', ['students' => $students]);
        return view('allstudents', compact('students') );

    }

    public function show( Student $student ){   //route model binding
        //-$student = Student::findOrFail($id);

        return $student;

    }

    public function create()
    {
        return view('create');
    }

    private function studentVaildate($request, $student)
    {
        $emailRule = $request ? Rule::unique('students', 'email')->ignore($student->id) : 'unique:students,email';
        //dd( $emailRule );

        $validated = $request->validate([
            'name'  => 'required|string',
            'email' => 'required|email|' . $emailRule,
            'age'   => 'required|integer|min:19'
        ]);
        return $validated;
    }

    public function store(Request $request)
    {
        $validated = $this->studentVaildate($request, null);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student has been added successfully.');
    }

    public function edit(Student $student)
    {
        return view('create', [
            'student' => $student,
            'oldValues' => $student->getAttributes(),
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validated = $this->studentVaildate($request, $student);

        $student->update( $validated );

        return redirect()->route('students.index')->with('Success', 'Student has been updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('Success', 'Student has been deleted successfully.');
    }
}
