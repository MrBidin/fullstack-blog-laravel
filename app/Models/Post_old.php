<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    private static $blogPost = [
        [
            "postTitle" => "Post 1",
            "slug" => "post-1",
            "author" => "Admin 1",
            "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio architecto pariatur quaerat aut expedita doloremque tenetur ipsam rerum laborum non assumenda distinctio numquam iste nostrum ducimus cumque est, consequuntur fugit debitis? Ullam nostrum explicabo deserunt exercitationem labore vitae quis nemo animi delectus, quibusdam soluta, obcaecati, voluptatibus sequi! Accusantium, itaque amet voluptas rem ipsa cupiditate magni, tenetur quisquam aliquid nesciunt unde deserunt modi necessitatibus ratione praesentium maxime quod omnis eaque optio voluptatum voluptates molestiae! Voluptates, perspiciatis eum reiciendis ipsa error cumque quae, voluptatem expedita id culpa earum molestias aut, illum eligendi necessitatibus quasi. Assumenda mollitia atque reprehenderit beatae nisi veniam eligendi doloremque et eos ratione molestias commodi voluptatum, voluptatem repellendus veritatis quod, quidem accusamus iusto? Totam aliquam maiores sit mollitia! Magnam obcaecati placeat sint rerum aut sapiente cumque odio, quo corrupti debitis, recusandae eaque porro ipsam voluptatibus officia eos velit totam! Commodi mollitia eius, distinctio labore perferendis numquam id. Excepturi a dolorem vel obcaecati animi amet et temporibus error, placeat consequatur, harum itaque debitis nulla? Maiores quibusdam odit dignissimos magnam fugiat inventore adipisci, minus quos soluta earum accusamus delectus explicabo voluptatum eius illo officiis corporis error temporibus eos corrupti repellendus dolor esse? Voluptate optio corrupti maiores at totam repellat voluptas repudiandae?"
        ], 
        [
            "postTitle" => "Post 2",
            "slug" => "post-2",
            "author" => "Admin 2",
            "content" => "Excepturi a dolorem vel obcaecati animi amet et temporibus error, placeat consequatur, harum itaque debitis nulla? Maiores quibusdam odit dignissimos magnam fugiat inventore adipisci, minus quos soluta earum accusamus delectus explicabo voluptatum eius illo officiis corporis error temporibus eos corrupti repellendus dolor esse? Voluptate optio corrupti maiores at totam repellat voluptas repudiandae?"
        ],
        [
            "postTitle" => "Post 3",
            "slug" => "post-3",
            "author" => "Admin 1",
            "content" => " Assumenda mollitia atque reprehenderit beatae nisi veniam eligendi doloremque et eos ratione molestias commodi voluptatum, voluptatem repellendus veritatis quod, quidem accusamus iusto? Totam aliquam maiores sit mollitia! Magnam obcaecati placeat sint rerum aut sapiente cumque odio, quo corrupti debitis, recusandae eaque porro ipsam voluptatibus officia eos velit totam! Commodi mollitia eius, distinctio labore perferendis numquam id. Excepturi a dolorem vel obcaecati animi amet et temporibus error, placeat consequatur, harum itaque debitis nulla? Maiores quibusdam odit dignissimos magnam fugiat inventore adipisci, minus quos soluta earum accusamus delectus explicabo voluptatum eius illo officiis corporis error temporibus eos corrupti repellendus dolor esse? Voluptate optio corrupti maiores at totam repellat voluptas repudiandae?"
        ]
    ];

    public static function allPost(){
        return collect(self::$blogPost);
    }

    public static function find($slug){
        $posts = static::allPost();
        return $posts->firstWhere("slug", $slug);
    }
}
