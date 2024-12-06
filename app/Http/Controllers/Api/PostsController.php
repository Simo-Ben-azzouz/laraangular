<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Resources\PostsResource;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getAllPosts($limit=null){
        if ($limit != null && $limit > 0) {
            return PostsResource::collection(Post::take($limit)->get());
        }
        return PostsResource::collection(Post::all());

    }   
    
    public function getPostById($slug){
        return new PostsResource(Post::whereSlug($slug)->first());
    }
}
