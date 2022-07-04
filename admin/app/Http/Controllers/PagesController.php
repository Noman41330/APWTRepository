<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('home');
    }

    function registration()
    {
        return view('registration');
    }

    function login()
    {
        return view('login');
    }

    function addDoctor()
    {
        return view('admin.addDoctor');
    }

    function addSeller()
    {
        return view('admin.addSeller');
    }

   

    
    



}
