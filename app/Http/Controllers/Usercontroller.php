<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function index()
    {
        $students = [
            ['id' => 1, 'name' => 'John Doe'],
            ['id' => 2, 'name' => 'Jane'],
            ['id' => 3, 'name' => 'Alica'],
            ['id' => 4, 'name' => 'Bob'],
            ['id' => 5, 'name' => 'David']
        ];

        return view('student.index', compact('students'));
    }

    // Individual student details page
    public function show($id)
    {
        $studentDetails = [
            1 => ['name' => 'John Doe', 'age' => 22, 'course_code' => 'CS101'],
            2 => ['name' => 'Jane', 'age' => 21, 'course_code' => 'CS102'],
            3 => ['name' => 'Alica', 'age' => 23, 'course_code' => 'CS103'],
            4 => ['name' => 'Bob', 'age' => 24, 'course_code' => 'CS104'],
            5 => ['name' => 'David', 'age' => 22, 'course_code' => 'CS105']
        ];

        if (!isset($studentDetails[$id])) {
            abort(404);
        }

        return view('student.detail', ['student' => $studentDetails[$id]]);
    }
}
