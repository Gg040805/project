<?php

namespace App\Http\Controllers;

use App\Models\tests;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function create() {
        return view("test");
    }

    public function store(Request $request) {
        $formFields = $request->validate([ 
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('user', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // hash password
        $formFields['password'] = Hash::make($formFields['password']);

        $user = tests::create($formFields); // Ensure you are using the correct model name
        auth()->login($user);

        // Conditional redirection
        if ($user->role === 'admin') { // Replace $someCondition with your actual condition
            return redirect()->route('test')->with('message', 'User created and Logged in');
        } else {
            return redirect()->route('test2login')->with('message', 'User created and Logged in');
        }
    }
}
