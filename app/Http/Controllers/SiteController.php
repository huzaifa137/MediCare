<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        return view('Site.index');
    }

    public function about()
    {
        return view('Site.about');
    }

    public function pricing()
    {
        return view('Site.pricing');
    }

    public function contact()
    {
        return view('Site.contact');
    }

    public function services()
    {
        return view('Site.services');
    }

    public function doctors()
    {
        return view('Site.doctor');
    }

    public function doctorDetails()
    {
        return view('Site.doctor-details');
    }

    public function blog()
    {
        return view('Site.blog');
    }


    public function doctorDetails1()
    {
        return view('Site.doctor-details-1');
    }

    public function doctorDetails2()
    {
        return view('Site.doctor-details-2');
    }

    public function doctorDetails3()
    {
        return view('Site.doctor-details-3');
    }
}
