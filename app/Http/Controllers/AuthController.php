<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        $view_model = [
            'title' => 'Введіть'
        ];
        return view('login.index', $view_model);
    }

    public function login(AuthLoginRequest $request)
    {
        if (!Auth::attempt($request->only(['name', 'password']))) {
            return redirect()->back()->with('info', '  Имя или пароль неверны');
        }
        return redirect()->route('notifications')->with('info', 'Вы успешно вошли в систему ');
    }
}
