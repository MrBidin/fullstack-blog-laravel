<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('home', ["title" => "home"]);
});

Route::get("/about", function () {
    return view("about", [
        "title" => "about",
        "name" => "Ahmat Firdaus",
        "email" => "ahmatfirdaus.works@gmail.com",
        "image" => "/elon.jpg"
    ]);
});

Route::get("/blog", [PostController::class, "index"]);

Route::get("/posts/{post:slug}", [PostController::class, "show"]);

Route::get("/categories", function(){
    return view("categories", [
        "title" => "categories",
        "categories" => Category::all(),
    ]);
});

// Route::get("/categories/{category:slug}", function(Category $category) {
//     return view("posts", [
//         "title" => $category->name,
//         "pageName" => "Posts in " . $category->name,
//         "posts" => $category->posts->load(["category", "user"]),
//     ]);
// });

Route::get("/authors/{user:nameid}", function(User $user) {
    return view("posts", [
        "title" => "by user",
        "pageName" => "Author: " . $user->name,
        "posts" => $user->posts->load(["category", "user"]),
    ]);
});

Route::get("/login", [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);
Route::get("/register", [RegisterController::class, "index"])->middleware("guest");
Route::post("/register", [RegisterController::class, "store"]);
Route::get("/dashboard", function() {
    return view("dashboard.index", [
        "title" => "dashboard"
    ]);
})->middleware("auth");
Route::get("/dashboard/posts/checkSlug", [DashboardPostController::class, "checkSlug"])->middleware("auth");
Route::resource("/dashboard/posts", DashboardPostController::class)->middleware("auth");
Route::resource("/dashboard/categories", AdminCategoryController::class)->except("show")->middleware("admin");

Route::fallback(function () {
    return "404";
});

