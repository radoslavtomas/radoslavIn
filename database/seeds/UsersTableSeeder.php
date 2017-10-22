<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\App\User::create([
			'name' => 'Radoslav Tomas',
			'email' => 'radoslav.tomas@gmail.com',
			'password' => bcrypt('password123')
		]);
    }
}
