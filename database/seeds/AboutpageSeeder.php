<?php

use Illuminate\Database\Seeder;

class AboutpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\App\Aboutpage::create([
			'title' => 'About me',
			'text' => 'Born and raised in Slovakia, I am currently developing good accent and manners in UK. After studying data journalism, I have been working for market research company as an analyst. Working on large projects on the Slovak market helped me to train strategic thinking. On the way, my soul has also been dragged to several personal activities where I could improve my digital skills.

Few years ago, I’ve accepted a call of my heart and made a move to UK. Here I restarted my career as a front-end developer.

Today, I work as freelancer and participate on various digital projects. I’ve never forgotten to ask why things are the way they are, and how they can be improved. I have a simple goal: make things better for the user.

If you think I am the right person for your project, don’t hesitate to drop me a line or two. I don’t bite…',
			'image' => 'img/rado.jpg',
		]);
    }
}
