<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('posts')->withSuccess('You have Successfully logged in');
        }
        return redirect('login')->withSuccess('Oops! You have entered invalid credentials');
    }

    public function postRegistration(RegistrationRequest $request)
    {
        $data = $request->all();
        $check = $this->create($data);

        return redirect('posts')->withSuccess('Great! You have Successfully loggedin');
    }

    public function create(array $data): User
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
