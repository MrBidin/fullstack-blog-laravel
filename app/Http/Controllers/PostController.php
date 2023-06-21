<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postController extends Controller
{
    public function index(){
        // $posts = Post::with(["category", "user"])->latest();
        // if(request("search")){
        //     $posts->where("title", "like", "%" . request("search") . "%")
        //     ->orWhere("body", "like" , "%" . request("search") . "%");
        // };

        return view("posts", [
            "title" => "blog",
            "pageName" => "All Post",
            "posts" => Post::latest()->filter(request(["search", "category"]))->paginate(2)->withQueryString(),
        ]);
    }

    public function show(Post $post){
        return view("post", [
            "title" => "Post Details",
            "post" => $post,
        ]);
    }
}
