<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    //Show Register/Create Form

    public function register()
    {
        return view('users.register');
    }

    //Create new user

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')], //users table
            'password' => ['required','confirmed','min:6'] //confirmed je povezan sa konvencijom o imenovanju password_confirmation //min je minimum 6 karaktera
        ]);


    //Hash Password //bCrypt

    $formFields['password'] = bcrypt($formFields['password']);

    //Create User
    $user = User::create($formFields);

    //Login
    auth()->login($user);

    return redirect('/')->with('message', 'Korisnik je registrovan i prijavljen');
    }

    //Logout user

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Uspešno ste se odjavili!');

    }

    //Show login form
    public function login()
    {
        return view('users.login');
    }

    //Authenticate user
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'], //users table
            'password' => ['required'] //confirmed je povezan sa konvencijom o imenovanju password_confirmation //min je minimum 6 karaktera
        ]);

        if(auth()->attempt($formFields))  //metoda attempt nam omogucava da se prijavimo na sistem
        {
            $request->session()->regenerate(); //poziv nestatičkih funckija

            return redirect('/')->with('message','Uspešno ste se prijavili');
        }

        return back()->withErrors(['email'=>'Neispravni podaci'])->onlyInput('email');
    }
}
