<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function showForm()
    {
        return view('salary'); // Blade view name
    }


    // for display empid in <form action=""></form>

    public function createSalaryForm()
    {
        $employees = Emp::all(); 
        return view('salary', compact('employees')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'emp_id' => 'required|exists:emp,id',
            'salary' => 'required|numeric',
            'attendance' => 'required|integer',
        ]);

        Salary::create($request->all());

        return redirect()->back()->with('success', 'Salary added successfully');
    }
}
