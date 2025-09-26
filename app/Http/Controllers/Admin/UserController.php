<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('User.Login');
    }
    public function register()
    {
        return view('User.register');

    }

    public function postRegister(RegisterRequest $request){
        $member=new Users();
        $member->name=$request->input('name');
        $member->email=$request->input('email');
        $member->password=$request->input('password');
        
         
          $member->level = 0;
         
         if ($member['password']) {
            $member['password'] = bcrypt($member['password']);
        }else{
            $member['password'] = $member->password;
        }
        $member->save();
        return redirect()->route('login')->with('success', 'Đăng ký tài khoản thành công! Vui lòng đăng nhập.');   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function postLogin(LoginRequest $request)
{
    $login=[
            'email'=> $request->email,
            'password'=> $request->password,
            'level'=>0
        ];
        $remember=false;
        if($request->remember_me){
            $remember=true;
        }
        if(Auth::attempt($login, $remember)){
            return redirect('/admin/dashboard');
        }else{
            return redirect()->back()->withErrors('Email hoặc mật khẩu sai');
        }
}
 public function logout(Request $request){
        Auth::logout();

        return redirect()->route('login');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
