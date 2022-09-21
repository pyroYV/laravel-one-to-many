<?php

use App\Model\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $newPost = new Post();
            $newPost->post_title = $faker->realText(20);
            $newPost->post_author = $faker->userName();
            $newPost->post_content = $faker->paragraph(4);
            $newPost->post_creation_date = $faker->dateTimeThisYear();
            $newPost->post_image = $faker->imageUrl();
            $newPost->save();
        }
    }
}
