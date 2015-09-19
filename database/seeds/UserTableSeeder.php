<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Fidel',
            'email' => 'in3pi287@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        //factory(\Cinema\User::class, 10)->create();
    }
}
