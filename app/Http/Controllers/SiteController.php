<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
       return view('Site.accueil');    
    }

    public function services(){
       return view('Site.services');        
    }

    public function blog(){
       return view('Site.blog');        
    }

    public function about(){
       return view('Site.about');        
    }

    public function contact(){
       return view('Site.contact');        
    }
}
