<?php

namespace App\Http\Controllers;
use App\Models\Post,App\Models\Service,App\Models\Slide;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
         $slides = Slide::orderBy('created_at','desc')->take(3)->get();  
         $services = Service::take(3)->get();
         $posts = Post::take(4)->get();

       return view('Site.accueil',['slides'=>$slides,'services'=> $services,'posts'=> $posts]);    
    }

    public function services(){
         $services = Service::all();
       return view('Site.services',['services'=> $services]);        
    }

    public function service($id){
      $service = Service::find($id);
    return view('Site.service',['service'=> $service]);        
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
