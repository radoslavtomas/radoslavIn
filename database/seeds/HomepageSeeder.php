<?php

use Illuminate\Database\Seeder;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Homepage::create([
			'main_title' => 'Hi, I am Rado',
			'main_text' => 'A keen front-end developer currently living in Liverpool. I believe in beautiful web applications that serve users in everyday life. I am always looking for new challenges and collaborations.',
			'sub_title' => 'Not just development, it\'s also story',
			'sub_text' => 'Developing is building a story. I always explore different options and try to go at least one step further. I use honest approach, humour and creativity never managed to intimidate me. Let’s write a story together…'
		]);
    }
}
