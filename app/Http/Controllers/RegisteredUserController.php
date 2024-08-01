<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }
    public function store() {
//        dd(request()->all());
        // validation
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8), 'confirmed'], /* o Confirmed automaticamente confirma com o outro campo de senha*/
        ]);

        $login = User::create($attributes);

        Auth::login($login);
        return redirect('/jobs');
    }
}
