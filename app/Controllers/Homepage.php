<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function booking()
    {
        return view('booking');
    }
}
