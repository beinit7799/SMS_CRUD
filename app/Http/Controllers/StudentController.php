<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class StudentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function getStudentList()
    {
        $students = Student::all();
        return view('students.studentView', compact('students'));
    }
    
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:students,email',
                'phone' => 'nullable|string|max:20',
                'dob' => 'nullable|date',
                'address' => 'nullable|string|max:255',
                'course' => 'nullable|string|max:255',
            ]);

            Student::create($request->all());

            return redirect()->route('student.list')->with('success', 'Student added successfully!');
        }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'nullable|string|max:20',
            'dob' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'course' => 'nullable|string|max:255',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('student.list')->with('success', 'Student updated successfully!');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student.list')->with('success', 'Student deleted successfully!');
    }

        
}
