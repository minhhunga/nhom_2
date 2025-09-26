<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('User.register');

    }

    /**
     * Show the form for creating a new resource.
     */
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
