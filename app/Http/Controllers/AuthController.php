<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function postSignin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'), $request->has('remember')))
        {
            return redirect()
            ->route('homepage')
            ->with('success', 'Вы успешно авторизованы');
        } else {
            var_dump($request);
            echo 'Неправильный логин или пароль';
        }
    }

    public function postRegistration(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        Auth::loginUsingId($user -> id);    
        
        return redirect()
                ->route('homepage')
                ->with('success', 'Вы успешно зарегистрировались');
    }
}