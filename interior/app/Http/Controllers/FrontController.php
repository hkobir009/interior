<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.home.index');
    }

    public function contact(){
        return view('frontend.contact.index');
    }

    public function service(){
        return view('frontend.frontpages.service');
    }

    public function details(){
        return view('frontend.frontpages.project_details');
    }

    public function about(){
        return view('frontend.frontpages.about');
    }
}
