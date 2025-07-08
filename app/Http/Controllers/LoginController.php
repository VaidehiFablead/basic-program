<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Login as MiddlewareLogin;
use App\Models\Login;
use Illuminate\Auth\Events\Login as EventsLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $user = Login::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

        if ($user) {
            Auth::login($user); // ✅ Laravel's auth system
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }
}
