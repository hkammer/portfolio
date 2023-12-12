<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function handleLogin(LoginRequest $request) {
        // $request->validate([
        //     'name.required' => "Fix your name!"
        // ]);

        return $request;
    }
}
