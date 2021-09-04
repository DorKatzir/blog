<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Presonal',
            'slug' => 'personal'  
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family' 
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'  
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet purus id nunc accumsan, eleifend dictum metus imperdiet. ',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet purus id nunc accumsan, eleifend dictum metus imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut sit amet dui et lacus elementum scelerisque non eu dui. Sed vehicula vehicula elit nec convallis. Mauris imperdiet sem vel dolor eleifend, et ornare dolor maximus. Etiam ligula urna, ullamcorper sed accumsan sit amet, venenatis vitae ipsum.'
        ]);
        
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet purus id nunc accumsan, eleifend dictum metus imperdiet. ',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet purus id nunc accumsan, eleifend dictum metus imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut sit amet dui et lacus elementum scelerisque non eu dui. Sed vehicula vehicula elit nec convallis. Mauris imperdiet sem vel dolor eleifend, et ornare dolor maximus. Etiam ligula urna, ullamcorper sed accumsan sit amet, venenatis vitae ipsum.'
        ]);

    }

}
