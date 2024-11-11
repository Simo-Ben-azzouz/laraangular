<?php

namespace App\Http\Controllers;
use App\Models\Post,App\Models\Service,App\Models\Slide,App\Models\Page,App\Models\Message,App\Models\Category;
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
         $categories = category::all();
         $posts = Post::paginate(4);
       return view('Site.blog' ,['posts' => $posts],['categories'=>$categories]);        
    }

    public function about(){
      $page =Page::where('slug','about1')->first();
       return view('Site.about',['page'=>$page]);        
    }

    public function contact(){
       return view('Site.contact');        
    }

    public function storeContact(Request $request){

         // Validate the request data
         $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:5|max:300'
      ]);

      // Create a new message instance and assign the validated data
      $message = new Message();
      $message->name = $data['name'];
      $message->email = $data['email'];
      $message->message = $data['message'];

      // Save the message to the database
      $message->save();

      // Redirect back to the contact page with a success message
      return redirect('/contact')->with('success', "Thank you, {$message->name}! Your message has been sent successfully.");
   }

    public function show($id){
        $post = Post::find($id);
      return view('Site.show',['post' => $post]);        
   }
}
