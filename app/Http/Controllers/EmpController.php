<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function showForm()
    {
        return view('register'); // Blade view name
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'contact' => 'required',
            'branch' => 'required',
            'position' => 'required'
        ]);

        Emp::create($request->all());

        return redirect()->route('empLogin')->with('success', 'Registered successfully! Please login.');
    }
}
