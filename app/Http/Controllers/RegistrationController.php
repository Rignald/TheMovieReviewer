<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [

            'name'=>'required|alpha|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|between:6,12|confirmed|regex:/^[A-Za-z0-9@!#\$%\^&\*]+$/'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        return redirect()->home();
    }
}
