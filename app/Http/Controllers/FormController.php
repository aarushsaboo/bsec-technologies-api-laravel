<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'age' => 'required|numeric|min:1|max:150',
        ], [
            'name.required' => 'Please enter your name',
            'name.min' => 'Name must be at least 3 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email',
            'age.required' => 'Age is required',
            'age.numeric' => 'Age must be a number',
        ]);

        // If validation passes, you'll reach here
        return redirect('/form')->with('success', 'Form submitted successfully!');
    }
}