<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }
    
    public function books(){
        $title='Books';
        return view('pages.books')->with('title',$title);
    }
    
    public function bookshops(){
        $title='Bookshops';
        return view('pages.bookshops')->with('title',$title);
    }

    public function libraries(){
        $title='Libraries';
        return view('pages.libraries')->with('title',$title);
    }
}
