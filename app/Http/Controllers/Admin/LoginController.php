<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('User.Login');
    }
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
