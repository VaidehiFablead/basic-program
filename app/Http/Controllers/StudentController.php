<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // student marks
    public function studentMarks()
    {
        $students = [
            'Hemant' => [
                'math' => 90,
                'science' => 80,
                'english' => 50
            ],
            'Jayesh' => [
                'math' => 90,
                'science' => 80,
                'english' => 50
            ]
        ];

        $hemantScience = $students['Hemant']['science'];

        return view('student', compact('students', 'hemantScience'));
    }
}
