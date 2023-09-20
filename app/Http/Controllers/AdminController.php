<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function adminPanel()
    {
        return view('backend.Admin-Panel');
    }



    // Home Section edit 

    public function homeSection()
    {
        return view('backend.home.home');
    }

    // About Section edit

    public function aboutSection()
    {
        return view('backend.about.about');
    }



    // Contact Section 
    public function contactSection()
    {
        return view('backend.contact.contact');
    }





}
