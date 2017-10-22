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
		$user = \App\User::create([
			'name' => 'Radoslav Tomas',
			'email' => 'radoslav.tomas@gmail.com',
			'password' => bcrypt('password123')
		]);

		\App\Profile::create([
			'user_id' => $user->id,
			'avatar' => '/img/rado.jpg',
			'about' => 'Full stack developer',
			'city' => 'Liverpool',
			'facebook' => 'facebook.com',
			'linkedin' => 'linkedin.com'
		]);
    }
}
