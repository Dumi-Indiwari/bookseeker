<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LibraryLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLoginForm()
    {
        return view('auth.library-login');
    }

    public function login(Request $request)
    {
        //validate data
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        //login
        if (Auth::guard('libraries')->attempt(['email'=> $request->email, 'password'=>$request->password], [$request->remember])){
            //if successful return to where the user was
            //default library dashboard
            return redirect()->intended(route('library.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
