<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Resources\PostsResource;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getAllPosts($limit=null){
        return PostsResource::collection(Post::take($limit)->get());
    }   
    
    public function getPostById($id){
        return new PostsResource(Post::find($id));
    }
}
