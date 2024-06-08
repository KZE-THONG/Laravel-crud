<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class sessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        $user = request()->validate([
            'email' =>'required',
            'password' => 'required',
        ]);


        if( ! Auth::attempt($user))
        {
            throw ValidationException::withMessages([
                'email' => 'incorrect email',
                'password' => 'incorrect  password',
            ]);
        }

        request()->session()->regenerate();


        return redirect('/job');

    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
