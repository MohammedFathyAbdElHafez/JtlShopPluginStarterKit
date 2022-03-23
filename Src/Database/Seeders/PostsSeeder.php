<?php

namespace Plugin\JtlShopPluginStarterKit\Src\Database\Seeders;

use Plugin\JtlShopPluginStarterKit\Src\Support\Facades\Faker\Faker;
use Plugin\JtlShopPluginStarterKit\Src\Models\Post;

class PostsSeeder
{
    public function create()
    {
        $faker = new Faker();
        for ($i = 1; $i <= 7; $i++) {
            $post     = new Post();
            //$faker->fakerImage('posts', "picture$i.jpg");
            $post->create([
                'title' => 'title' . $i,
                'body' => 'body' . $i,
                'tec_see_category_id' => $i
                //'image_path' => "picture$i.jpg"
            ]);
        }
    }
}
