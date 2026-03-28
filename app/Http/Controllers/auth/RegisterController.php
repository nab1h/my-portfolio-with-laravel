<?php

namespace App\Http\Controllers\auth;
use App\Http\Requests\auth\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->name),
        ]);

        Auth::login($user);
        return redirect()->to('/profile')->with('sucsses', 'you have create your acount successfully');
    }
}
