<?php

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
<<<<<<< HEAD
         $this->call(UsersTableSeeder::class);
=======
        factory(App\User::class, 10)->create()->each(function ($user) {
			
		});
>>>>>>> 5bb8821c49885cb957f81d378956004314e763b2
    }
}
