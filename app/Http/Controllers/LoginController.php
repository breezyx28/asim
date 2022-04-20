<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\Users\StoreRequest;
use App\Http\Services\StoreService;
use App\Http\Traits\ResourcesTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ResourcesTrait;

    public function login()
    {
        return view('pages.auth.login');
    }

    public function store(LoginRequest $request)
    {
        if (!Auth::attempt($request->only(['username', 'password']), false)) {
            return back()->with('error', 'البيانات خطأ');
        }

        return view('layouts.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function storeUser(StoreRequest $request)
    {
        return $this->StoreAction($request, new User());
    }
}
