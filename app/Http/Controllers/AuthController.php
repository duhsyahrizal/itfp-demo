<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Validator;

class AuthController extends Controller
{
    public function showLogin()
    {
        if(Auth::user()) return redirect('/admin');
        
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $auth = array();
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];
 
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];
 
        $validator = Validator::make($request->all(), $rules, $messages);
 
        if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
 
        \Auth::guard('web')->attempt($data);
 
        if (Auth::check()) { 
            $user = \Auth::user()->toArray();

            Session::put('user', $user);
            return redirect()->route('home');
 
        } else {
            
            Session::flash('error', "Email or password doesnt match in our records");
            return redirect()->route('login');
        }
 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
