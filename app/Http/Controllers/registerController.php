<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class registerController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // dd(request()->all());
        
        request()->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required',
            'password' => ['required', 'confirmed'],   
        ]);

        $user = User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'password' =>  request('password'),

        ]);

        Auth::login($user);

        return redirect('/job');



    }
}
