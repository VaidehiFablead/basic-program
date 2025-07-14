<?php

namespace App\Http\Controllers;

use App\Models\MultiStepFrom;
use Illuminate\Http\Request;

class MultiStepFormController extends Controller
{
    public function step1()
    {
        return view('step1');
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        session(['form_data.name' => $request->name]);
        session(['form_data.email' => $request->email]);

        return redirect()->route('form.step2');
    }

    public function step2()
    {
        return view('step2');
    }

    public function postStep2(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'address' => 'required'
        ]);

        session(['form_data.phone' => $request->phone]);
        session(['form_data.address' => $request->address]);

        return redirect()->route('form.step3');
    }

    public function step3()
    {
        return view('step3', ['data' => session('form_data')]);
    }

    public function submit(Request $request)
    {
        $data = session('form_data');

        MultiStepFrom::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'city' => $request->city,
            'state' => $request->state,
        ]);

        session()->forget('form_data');

        return redirect('/')->with('success', 'Student Registered!');
    }
}
