<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\RegiterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Auth;

class AccountController extends Controller
{
    public function login()
    {
        return view('site.login');
    }

    public function post_login(LoginRequest $req)
    {
        $data = $req->only('name', 'password');
        // if(Auth::guard('account')->attempt($data)){
        //     return redirect()->route('');
        // }
    }

    public function register()
    {
        return view('site.register');
    }
    public function post_register(RegiterRequest $req)
    {
        //dd($req->all());
        $data = $req->all('name', 'email', 'phone', 'address');
        // mã hóa password khách hàng khi luu vao CSDl
        $data['password'] = bcrypt($req->get('password')); 
        Account::create($data);
        return redirect()->route('account.login')->with('ok','them moi thanh cong');
    }

    public function logout()
    {
        return view('site.checkout');
    }
    public function profile()
    {
        return view('site.account');
    }
}
