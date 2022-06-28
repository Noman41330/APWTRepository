<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home()
    {
        return view('home');
    }

    function service()
    {
        return view('service');
    }

    function OurTeams()
    {
        return view('OurTeams');
    }

    function AboutUs()
    {
        return view('AboutUs');
    }

    function ContactUs()
    {
        return view('ContactUs');
    }

    function registration()
    {
        return view('registration');
    }

    function login()
    {
        return view('login');
    }
    function admin()
    {
        return view('admin');
    }


    
}

