<?php

namespace App\Http\Controllers;
use App\Models\Post;
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
         $posts = Post::paginate(4);
       return view('Site.blog' ,['posts' => $posts]);        
    }

    public function about(){
       return view('Site.about');        
    }

    public function contact(){
       return view('Site.contact');        
    }

    public function show($id){
        $post = Post::find($id);
      return view('Site.show',['post' => $post]);        
   }
}
