<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 
        	$user = User::create(array(
        		'email' => $faker->email,
        		'name' => $faker->unique->username,
        		'password' => $faker->word,
        		'remember_token' => str_random(50)
        		));
        }
    }
}
