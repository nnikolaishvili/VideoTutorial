<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    use ResponseTrait;

    public function loginView()
    {
        return view('admin.login-view');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            return redirect(route('admin.articles'));
        }

        $errorMessage = 'Your credentials is not correct, Try again.';
        return view('admin.login-view')->withErrors(['errorMessage' => $errorMessage]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function index()
    {
        return view('articles.index')->with([
            'articles' => Auth::user()->articles()->latest()->get()
        ]);
    }
}
