<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $count = 10;

      User::factory()->count($count)->create();
      Post::factory()->count($count)->create();
      Comment::factory()->count($count)->create();

      // insert faker no have user
      $faker = Faker::create('id_ID');
    	for($i = 1; $i <= $count; $i++){
    		Comment::create([
          'name' => $faker->name,
          'email' => $faker->email,
          'website' => $faker->url,
          'comment' => $faker->sentence,
          'post_id' => \App\Models\Post::all()->random()->id,
    		]);
    	}
    }
}
