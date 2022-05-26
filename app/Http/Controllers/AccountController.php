<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\RegiterRequest;
use App\Http\Requests\LoginRequest;
// use Auth;

class AccountController extends Controller
{
    public function login()
    {
        return view('site.login');
    }

    public function post_login(LoginRequest $req)
    {
    //     $data = $req->only('email');
    //     $data['password'] = bcrypt($req->get('password')); 

    //    if(auth::guard('accounts')->attempt($data)){
    //        return redirect()->route('index')->with('yes','Đăng nhập thành công');
    //    }else{
    //     return redirect()->route('account.login')->with('no','Mời bạn đăng nhập lại');
    //    };

    $credentials = $req->only('email', 'password');

    // if (Auth::attempt($credentials)) {
    //     // Authentication passed...
    //     // return redirect()->intended('index');
    //     return redirect()->route('index')->with('yes','Đăng nhập thành công');
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

    public function changer_password()
    {
        return view('site.changer_pw');
    }
    // public function post_changer_password(ChangerPasswordRequest $req){
    //     $user = Auth::guard('account')->user();
    //     $old_password = $req->get('old_password');
    //     if (Hash::check($old_password, $user->password)) {            
    //         $user->password = bcrypt($req->get('new_password'));
    //         $user->save();
    //         Auth::guard('account')->logout();
    //         return redirect()->route('home.login')->with('ok','Thay đổi mật khẩu thành công, Mời bạn đăng nhập lại');
    //     }else{
    //          return redirect()->back()->with('no','Mời bạn nhập lại mật khẩu');
    //     }
       
    // }
}
