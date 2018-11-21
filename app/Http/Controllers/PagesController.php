<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    
    public function kleuren()
    {
        return view('kleurplaat');
    }

    public function about()
    {
        return view('over-sint');
    }

    public function contact()
    {
        return view('contact-sint');
    }


}
