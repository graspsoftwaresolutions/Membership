<?php

use Illuminate\Database\Seeder;
use App\Users;

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
            'name' => 'Bizsoft',
            'email' => 'bizsoft@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
