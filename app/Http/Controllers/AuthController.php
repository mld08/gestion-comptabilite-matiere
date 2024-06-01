<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        /*User::create([
            'name' => "bcm",
            'email'=>"bcm@gmail.com",
            'password'=>bcrypt('bcm2024'),
        ], [
            'name' => "user",
            'email'=>"user@gmail.com",
            'password'=>bcrypt('dir2024'),
        ], [
            'name' => "operateur1",
            'email'=>"operateur1@gmail.com",
            'password'=>bcrypt('op12024'),
        ], [
            'name' => "operateur2",
            'email'=>"operateur2@gmail.com",
            'password'=>bcrypt('op22024'),
        ]);*/
        return view('auth.login');
    }

    public function doLogin(LoginFormRequest $request) {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.home'));
        }
        return back()->withErrors([
            'email' => 'Identifiant incorrect',
        ])->onlyInput('email');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success','Vous êtes maintenant déconnectés');
    }
}
