<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->intended('home')->with('success', 'you are in');
        }
        return back()->with('error' , 'Invalid credintial');
    }

}
