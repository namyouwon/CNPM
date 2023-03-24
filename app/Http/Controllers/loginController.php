<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function register(){
        return view('register');
    }
    public function index(Request $request)
    {
        return view('login', [
            'title' => 'Đăng nhập hệ thống',
            'thisName' => $request->q,
            'error'=>Session::get('error'),
        ]);
    }
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Session::put('error', '');
            return redirect()->route('index');
        } else {
            Session::put('error', 'Email hoặc password không chính xác');
            return redirect()->back();
        }
    }

}
