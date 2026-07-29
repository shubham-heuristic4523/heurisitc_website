<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    

    public function index()
    {
        return view('index');
    }

     public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function career()
    {
        return view('career');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogdetails()
    {
        return view('blogdetails');
    }

    public function products()
    {
        return view('products');
    }
    
    public function services()
    {
        return view('services');
    }

    public function webdevelopment()
    {
        return view('webdevelopment');
    }

    public function erp()
    {
        return view('erp');
    }

    public function mobileappdevelopment()
    {
        return view('mobileappdevelopment');
    }

    public function desktopappdevelopment()
    {
        return view('desktopappdevelopment');
    }

    public function aiml()
    {
        return view('aiml');
    }

    public function cybersecurity()
    {
        return view('cybersecurity');
    }

    public function clinicerp()
    {
        return view('clinicerp');
    }

    public function hospitalerp()
    {
        return view('hospitalerp');
    }

    public function hungreetable()
    {
        return view('hungreetable');
    }

    public function scanprescription()
    {
        return view('scanprescription');
    }

    public function agriculturalerp()
    {
        return view('agriculturalerp');
    }

    public function manufacturingerp()
    {
        return view('manufacturingerp');
    }

}
