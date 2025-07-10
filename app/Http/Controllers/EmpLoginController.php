<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;

class EmpLoginController extends Controller
{
    // public function showLogin(){
    //     return view ('empLogin');
    // }


    // public function login(Request $request)
    // {
    //     $user =Emp::where('email', $request->email)->first();

    //     if ($user) {
    //         // Auth::login($user); // ✅ Laravel's auth system
    //         // return redirect()->route('displayEmp')->with('success', 'Registered successfully! Please login.');
    //     }
    //      else {
    //         //  return redirect()->route('empLogin')->with('failed', 'try again.');
    //     }
    // }



    public function showLogin()
    {
        return view('empLogin');
    }

    public function login(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email',
        ]);

        // Find employee
        $user = Emp::where('email', $request->email)->first();

        if ($user) {
            // Redirect to displayEmp if email found
            return redirect()->route('displayEmp')->with('success', 'Welcome!');
        } else {
            // Redirect back with error
            return redirect()->route('empLogin')->with('failed', 'Email not found. Try again.');
        }
    }
}
