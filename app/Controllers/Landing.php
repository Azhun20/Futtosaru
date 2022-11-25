<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index()
    {
        return view('landingpage');
    }
    public function login()
    {
        return view('login');
    }
    public function regis()
    {
        return view('register');
    }
}
