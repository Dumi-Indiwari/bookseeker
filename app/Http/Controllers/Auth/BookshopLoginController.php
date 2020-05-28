<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class BookshopLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLoginForm()
    {
        return view('auth.bookshop-login');
    }

    public function login(Request $request)
    {
        //validate data
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);

        //login
        if (Auth::guard('bookshops')->attempt(['email'=> $request->email, 'password'=>$request->password], [$request->remember])){
            //if successful return to where the user was
            //default bookshop dashboard
            return redirect()->intended(route('bookshop.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
