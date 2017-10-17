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
			'password' => bcrypt('ftacik108')
		]);

//		App\Profile::create([
//			'user_id' => $user->id,
//			'avatar' => 'uploads/avatars/admin.jpg',
//			'about' => 'Pudding cake sugar plum dragée tart bear claw powder. Tart topping sugar plum carrot cake. Topping pie chupa chups candy.',
//			'facebook' => 'facebook.com',
//			'linkedin' => 'linkedin.com'
//		]);
    }
}
