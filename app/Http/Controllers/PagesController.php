<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index')->withTitle('Laravel Home');
    }
    public function about()
    {
        return view('about')->withTitle('About US');
    }
    public function contact()
    {
        return view('contact')->withTitle('Contact US');
    }
}
