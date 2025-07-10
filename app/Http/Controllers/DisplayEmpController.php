<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use App\Models\Salary;
use Illuminate\Http\Request;

class DisplayEmpController extends Controller
{
    public function display()
    {
        return view('displayEmp');
    }

    public function showSalaryTable()
    {
        $salaries = Salary::with('employee')->get(); // eager load employee data
        return view('displayEmp', compact('salaries'));
    }


    public function edit($id)
    {
        $employee = Emp::findOrFail($id);
        return view('empEdit', compact('employee'));        
    }


    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'contact' => 'required',
            'branch' => 'required',
        ]);

        $employee = Emp::findOrFail($id);
        $employee->update($request->all());
        // dd($employee);
        return redirect('/displayEmp')->with('success', 'Employee updated successfully.');
    }
}
