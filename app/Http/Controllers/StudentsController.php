<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    public function showForm()
    {
        return view('students');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $student = Student::where('email', $request->email)->first();

        if (!$student || !Hash::check($request->password, $student->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $student->createToken('StudentToken')->accessToken;

        return response()->json([
            'token' => $token,
            'student' => $student
        ]);
    }



    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     // Attempt login using session
    //     if (Auth::guard('student')->attempt([
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ])) {
    //         return response()->json(['success' => true]);
    //     } else {
    //         return response()->json(['message' => 'Invalid credentials'], 401);
    //     }
    // }

}
