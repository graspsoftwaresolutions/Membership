<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Users;
=======
>>>>>>> 5bb8821c49885cb957f81d378956004314e763b2

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
<<<<<<< HEAD
            'name' => 'Bizsoft',
            'email' => 'bizsoft@gmail.com',
=======
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
>>>>>>> 5bb8821c49885cb957f81d378956004314e763b2
            'password' => bcrypt('secret'),
        ]);
    }
}
