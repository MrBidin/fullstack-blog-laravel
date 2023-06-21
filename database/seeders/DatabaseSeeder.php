<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            "name" => "Utari Selvina",
            "password" => bcrypt("utari10"),
            "nameid" => "self.utari",
            "email" => "utari_smile@gmail.com",
            "is_admin" => true,
        ]);

        User::create([
            "name" => "Kiara D Berly",
            "password" => bcrypt("kiara"),
            "nameid" => "kiara.db",
            "email" => "kiara_kia@gmail.com",
        ]);

        Category::create([
         "name" => "Programming",
         "slug" => "programming"
        ]);
     
        Category::create([
         "name" => "Web Design",
         "slug" => "web-design"
        ]);
     
        Category::create([
         "name" => "Personal",
         "slug" => "personal"
        ]);

        Post::create([
            "title" => "Post 1",
            "slug" => 'post-1',
            "category_id" => "1",
            "user_id" => "2",
            "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio architecto pariatur quaerat aut expedita doloremque",
            "body" => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio architecto pariatur quaerat aut expedita doloremque tenetur ipsam rerum laborum non assumenda distinctio numquam iste nostrum ducimus cumque est, consequuntur fugit debitis? Ullam nostrum explicabo deserunt exercitationem labore vitae quis nemo animi delectus, quibusdam soluta, obcaecati, voluptatibus sequi! Accusantium, itaque amet voluptas rem ipsa cupiditate magni, tenetur quisquam aliquid nesciunt unde deserunt modi necessitatibus ratione praesentium maxime quod omnis eaque </p> <p>optio voluptatum voluptates molestiae! Voluptates, perspiciatis eum reiciendis ipsa error cumque quae, voluptatem expedita id culpa earum molestias aut, illum eligendi necessitatibus quasi. Assumenda mollitia atque reprehenderit beatae nisi veniam eligendi doloremque et eos ratione molestias commodi voluptatum, voluptatem repellendus veritatis quod, quidem accusamus iusto? Totam aliquam maiores sit mollitia! Magnam obcaecati placeat sint rerum aut sapiente cumque odio, quo corrupti debitis, recusandae eaque porro ipsam voluptatibus officia eos velit totam! Commodi mollitia eius, distinctio labore perferendis numquam id. Excepturi a dolorem vel obcaecati animi amet et temporibus error, placeat consequatur, harum itaque debitis nulla? Maiores quibusdam odit dignissimos magnam fugiat inventore adipisci, minus quos soluta earum accusamus delectus explicabo voluptatum eius illo officiis corporis error temporibus eos corrupti repellendus dolor esse? Voluptate optio corrupti maiores at totam repellat voluptas repudiandae?</p>"]);
     
        Post::create([
         "title" => "Post 2",
         "slug" => "post-2",
         "category_id" => "2",
         "user_id" => "1",
         "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia fugiat, inventore deserunt modi nam obcaecati",
         "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia fugiat, inventore deserunt modi nam obcaecati distinctio omnis adipisci incidunt maxime minus sit dolorem possimus perferendis expedita quod voluptates illo et rem, esse aspernatur praesentium cupiditate quos? Quis tempore necessitatibus veritatis enim. Nemo, explicabo. Mollitia recusandae ipsam distinctio beatae temporibus id corporis quia totam placeat earum rem excepturi quae qui nobis, ipsum autem nulla fuga magnam at. Quo, explicabo facilis quia mollitia perspiciatis consequuntur, eligendi adipisci ut aspernatur repellat id nam!</p>"]);

        Post::create([
        "title" => "Post 3",
        "slug" => "post-3",
        "category_id" => "1",
        "user_id" => "2",
        "excerpt" => "sit amet consectetur adipisicing elit. Odio architecto pariatur quaerat aut expedita doloremque tenetur",
        "body" => "<p> consequuntur fugit debitis? Ullam nostrum explicabo deserunt exercitationem labore vitae quis nemo animi delectus, quibusdam soluta, obcaecati, voluptatibus sequi! Accusantium, itaque amet voluptas rem ipsa cupiditate magni, tenetur quisquam aliquid nesciunt unde deserunt modi necessitatibus ratione praesentium maxime quod omnis eaque </p> <p>optio voluptatum voluptates molestiae! Voluptates, perspiciatis eum reiciendis ipsa error cumque quae, voluptatem expedita id culpa earum molestias aut, illum eligendi necessitatibus quasi. Assumenda mollitia atque reprehenderit beatae nisi veniam eligendi doloremque et eos ratione molestias commodi voluptatum, voluptatem repellendus veritatis quod, quidem accusamus iusto? Totam aliquam maiores sit mollitia! Magnam obcaecati placeat sint rerum aut sapiente cumque odio, quo corrupti debitis, recusandae eaque porro ipsam voluptatibus officia eos velit totam! Commodi mollitia eius, distinctio labore perferendis numquam id. Excepturi a dolorem vel obcaecati animi amet et temporibus error, placeat consequatur, harum itaque debitis nulla? Maiores quibusdam odit dignissimos magnam fugiat inventore adipisci, minus quos soluta earum accusamus delectus explicabo voluptatum eius illo officiis corporis error temporibus eos corrupti repellendus dolor esse? Voluptate optio corrupti maiores at totam repellat voluptas repudiandae?</p>"]);

        Post::create([
            "title" => "Post 4",
            "slug" => "post-4",
            "category_id" => "3",
            "user_id" => "1",
            "excerpt" => "sit amet consectetur adipisicing elit. Odio architecto pariatur quaerat aut expedita doloremque tenetur",
            "body" => "<p> consequuntur fugit debitis? Ullam nostrum explicabo deserunt exercitationem labore vitae quis nemo animi delectus, quibusdam soluta, obcaecati, voluptatibus sequi! Accusantium, itaque amet voluptas rem ipsa cupiditate magni, tenetur quisquam aliquid nesciunt unde deserunt modi necessitatibus ratione praesentium maxime quod omnis eaque </p> <p>optio voluptatum voluptates molestiae! Voluptates, perspiciatis eum reiciendis ipsa error cumque quae, voluptatem expedita id culpa earum molestias aut, illum eligendi necessitatibus quasi. Assumenda mollitia atque reprehenderit beatae nisi veniam eligendi doloremque et eos ratione molestias commodi voluptatum, voluptatem repellendus veritatis quod, quidem accusamus iusto? Totam aliquam maiores sit mollitia! Magnam obcaecati placeat sint rerum aut sapiente cumque odio, quo corrupti debitis, recusandae eaque porro ipsam voluptatibus officia eos velit totam! Commodi mollitia eius, distinctio labore perferendis numquam id. Excepturi a dolorem vel obcaecati animi amet et temporibus error, placeat consequatur, harum itaque debitis nulla? Maiores quibusdam odit dignissimos magnam fugiat inventore adipisci, minus quos soluta earum accusamus delectus explicabo voluptatum eius illo officiis corporis error temporibus eos corrupti repellendus dolor esse? Voluptate optio corrupti maiores at totam repellat voluptas repudiandae?</p>"]);
        Post::create([
            "title" => "Post 5",
            "slug" => "post-5",
            "category_id" => "2",
            "user_id" => "2",
            "excerpt" => "sit amet consectetur adipisicing elit. Odio architecto pariatur quaerat aut expedita doloremque tenetur",
            "body" => "<p> consequuntur fugit debitis? Ullam nostrum explicabo deserunt exercitationem labore vitae quis nemo animi delectus, quibusdam soluta, obcaecati, voluptatibus sequi! Accusantium, itaque amet voluptas rem ipsa cupiditate magni, tenetur quisquam aliquid nesciunt unde deserunt modi necessitatibus ratione praesentium maxime quod omnis eaque </p> <p>optio voluptatum voluptates molestiae! Voluptates, perspiciatis eum reiciendis ipsa error cumque quae, voluptatem expedita id culpa earum molestias aut, illum eligendi necessitatibus quasi. Assumenda mollitia atque reprehenderit beatae nisi veniam eligendi doloremque et eos ratione molestias commodi voluptatum, voluptatem repellendus veritatis quod, quidem accusamus iusto? Totam aliquam maiores sit mollitia! Magnam obcaecati placeat sint rerum aut sapiente cumque odio, quo corrupti debitis, recusandae eaque porro ipsam voluptatibus officia eos velit totam! Commodi mollitia eius, distinctio labore perferendis numquam id. Excepturi a dolorem vel obcaecati animi amet et temporibus error, placeat consequatur, harum itaque debitis nulla? Maiores quibusdam odit dignissimos magnam fugiat inventore adipisci, minus quos soluta earum accusamus delectus explicabo voluptatum eius illo officiis corporis error temporibus eos corrupti repellendus dolor esse? Voluptate optio corrupti maiores at totam repellat voluptas repudiandae?</p>"]);

        Post::create([
            "title" => "Post 6",
            "slug" => "post-6",
            "category_id" => "1",
            "user_id" => "1",
            "excerpt" => "sit amet consectetur adipisicing elit. Odio architecto pariatur quaerat aut expedita doloremque tenetur",
            "body" => "<p> consequuntur fugit debitis? Ullam nostrum explicabo deserunt exercitationem labore vitae quis nemo animi delectus, quibusdam soluta, obcaecati, voluptatibus sequi! Accusantium, itaque amet voluptas rem ipsa cupiditate magni, tenetur quisquam aliquid nesciunt unde deserunt modi necessitatibus ratione praesentium maxime quod omnis eaque </p> <p>optio voluptatum voluptates molestiae! Voluptates, perspiciatis eum reiciendis ipsa error cumque quae, voluptatem expedita id culpa earum molestias aut, illum eligendi necessitatibus quasi. Assumenda mollitia atque reprehenderit beatae nisi veniam eligendi doloremque et eos ratione molestias commodi voluptatum, voluptatem repellendus veritatis quod, quidem accusamus iusto? Totam aliquam maiores sit mollitia! Magnam obcaecati placeat sint rerum aut sapiente cumque odio, quo corrupti debitis, recusandae eaque porro ipsam voluptatibus officia eos velit totam! Commodi mollitia eius, distinctio labore perferendis numquam id. Excepturi a dolorem vel obcaecati animi amet et temporibus error, placeat consequatur, harum itaque debitis nulla? Maiores quibusdam odit dignissimos magnam fugiat inventore adipisci, minus quos soluta earum accusamus delectus explicabo voluptatum eius illo officiis corporis error temporibus eos corrupti repellendus dolor esse? Voluptate optio corrupti maiores at totam repellat voluptas repudiandae?</p>"]);
    }
}
