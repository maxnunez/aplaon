<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function index()
    {
            return view('front.index');
    }

    public function browseJobs(){
        return view('front.browse_jobs');
    }

    public function candidates(){
        return view('front.candidates');
    }

     public function blogs(){
        return view('front.blogs');
    }

     public function contacts(){
        return view('front.contacts');
    }
}
