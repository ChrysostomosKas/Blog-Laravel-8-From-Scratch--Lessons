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

        $user = User::factory()->create([
            'name' => 'John Dee'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

    }

}
