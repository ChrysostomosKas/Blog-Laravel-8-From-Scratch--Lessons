<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        /**
         *
         *
         * Deletes the data inside a table,
         * but not the table itself.
         * Then run the rest code
         */
        User::truncate();
        Post::truncate();
        Category::truncate();


       $user =  User::factory()->create();

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' =>$family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque orci id placerat rutrum. Quisque ut magna aliquet, molestie ipsum dignissim, interdum purus. Nulla malesuada dui a condimentum facilisis. Ut bibendum magna vitae elementum efficitur. Pellentesque eu varius erat, sed commodo risus. Donec efficitur ornare convallis. Pellentesque hendrerit risus vitae suscipit malesuada. Sed fringilla id enim at euismod. Ut accumsan egestas diam, a aliquam ligula maximus a. Donec non rutrum neque. Duis cursus non tortor id aliquam. Nulla a orci erat. Cras id tristique neque. Etiam volutpat ipsum sit amet nulla pulvinar, ac sagittis felis iaculis. Quisque sagittis, turpis ut consequat gravida, dui purus porttitor dolor, at efficitur velit velit vel ipsum. Vivamus congue felis ultrices mattis cursus</p>'
            ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' =>$personal->id,
            'title' => 'My Family Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque orci id placerat rutrum. Quisque ut magna aliquet, molestie ipsum dignissim, interdum purus. Nulla malesuada dui a condimentum facilisis. Ut bibendum magna vitae elementum efficitur. Pellentesque eu varius erat, sed commodo risus. Donec efficitur ornare convallis. Pellentesque hendrerit risus vitae suscipit malesuada. Sed fringilla id enim at euismod. Ut accumsan egestas diam, a aliquam ligula maximus a. Donec non rutrum neque. Duis cursus non tortor id aliquam. Nulla a orci erat. Cras id tristique neque. Etiam volutpat ipsum sit amet nulla pulvinar, ac sagittis felis iaculis. Quisque sagittis, turpis ut consequat gravida, dui purus porttitor dolor, at efficitur velit velit vel ipsum. Vivamus congue felis ultrices mattis cursus</p>'
            ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' =>$work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pellentesque orci id placerat rutrum. Quisque ut magna aliquet, molestie ipsum dignissim, interdum purus. Nulla malesuada dui a condimentum facilisis. Ut bibendum magna vitae elementum efficitur. Pellentesque eu varius erat, sed commodo risus. Donec efficitur ornare convallis. Pellentesque hendrerit risus vitae suscipit malesuada. Sed fringilla id enim at euismod. Ut accumsan egestas diam, a aliquam ligula maximus a. Donec non rutrum neque. Duis cursus non tortor id aliquam. Nulla a orci erat. Cras id tristique neque. Etiam volutpat ipsum sit amet nulla pulvinar, ac sagittis felis iaculis. Quisque sagittis, turpis ut consequat gravida, dui purus porttitor dolor, at efficitur velit velit vel ipsum. Vivamus congue felis ultrices mattis cursus</p>'
            ]);

    }

}
