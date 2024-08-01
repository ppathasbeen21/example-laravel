<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
               'email' => __('auth.failed')
            ]);
        }

        request()->session()->regenerate();
        /* gera o token novamente */

        return redirect('/');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
