<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm(){
        return view('admin/auth/login-form');
    }

    public function login(Request $request){
       // Validate the form Data

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password], $request->remember )){
                // If successful, then redirect to dashboard
                return redirect()->intended('admin/dashboard');

        }

        //if failed, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
         return redirect('admin/login');
    }
}
