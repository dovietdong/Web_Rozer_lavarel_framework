<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(){
        //tạo một tài khoản mới
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt(123456)
        // ]);
        return view('layout.admin');
    }

    public function login(){
        return view('admin.login');
    }

    public function auth_login(Request $req){
        $data = $req->only('email','password');
        $check_login = auth::attempt($data);
        if($check_login){
            return view('admin.dashboard')->with('yes','dang nhap thanh cong');
        }else{
            return redirect()->route('admin.login')->with('yes','dang nhap khong thanh cong');
        }
    }
}
