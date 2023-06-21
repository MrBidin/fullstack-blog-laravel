<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request; 
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.posts.index", [
            "posts" => Post::where("user_id", auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.posts.create", [
            "categories" => Category::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $data = $request->validate([
            "title" => ["required", "max:100"],
            "slug" => ["required", "unique:posts"],
            "image" => ["image", "file", "max:1024"],
            "body" => ["required"]
        ]);

        if($request->file("image")){
            $data["image"] = $request->file("image")->store("post-images");
        }
        
        $data["user_id"] = auth()->user()->id;
        $data["excerpt"] = Str::limit(strip_tags($request->body), 100);
        $data["category_id"] = $request->category_id;
        
        Post::create($data);
        return redirect("/dashboard/posts")->with("success", "Post succesfully created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("dashboard.posts.post", [
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("dashboard.posts.edit", [
            "categories" => Category::all(),
            "post" => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $rules = [
            "title" => ["required", "max:100"],
            "image" => ["image", "file", "max:1024"],
            "body" => ["required"]
        ];

        if($request->slug !== $post->slug ){
            $rules["slug"] = ["required", "unique:posts"];
        }

        $data = $request->validate($rules);

        if($request->file("image")){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data["image"] = $request->file("image")->store("post-images");
        }
        $data["user_id"] = auth()->user()->id;
        $data["excerpt"] = Str::limit(strip_tags($request->body), 100);
        $data["category_id"] = $request->category_id;
        Post::where("id", $post->id)->update($data);
        return redirect("/dashboard/posts")->with("success", "data succesfully updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {   
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect("/dashboard/posts")->with("success", "Post succesfully deleted!");
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(["slug" => $slug]);
    }
}
