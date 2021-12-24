<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function create ()
    {
        return view('sessions.create');
    }

    public function store ()
    {
        request()->validate([
            'email' => 'required|exists:users,email'
        ]);

        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
