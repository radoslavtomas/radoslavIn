<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\App\Portfolio::create([
			'name' => 'kota.sk',
			'image' => '/img/portfolios/kota.png',
			'description' => 'Jelly-o sugar plum carrot cake donut. Brownie sweet chupa chups gummi bears oat cake toffee pastry. Tiramisu dragée powder chupa chups macaroon. Jelly-o brownie toffee ice cream bonbon lollipop icing cotton candy.
			
Icing bonbon carrot cake. Sweet liquorice caramels lemon drops candy toffee. Powder oat cake macaroon.

Donut candy canes tart apple pie lemon drops sweet roll carrot cake cake dessert. Icing dragée donut soufflé fruitcake halvah. Dessert fruitcake donut liquorice halvah chocolate cake sweet pudding.',
			'link' => 'http://kota.sk',
		]);

		\App\Portfolio::create([
			'name' => 'radoslavtomas.com',
			'image' => '/img/portfolios/radoslavtomas.png',
			'description' => 'Jelly-o sugar plum carrot cake donut. Brownie sweet chupa chups gummi bears oat cake toffee pastry. Tiramisu dragée powder chupa chups macaroon. Jelly-o brownie toffee ice cream bonbon lollipop icing cotton candy.
			
Icing bonbon carrot cake. Sweet liquorice caramels lemon drops candy toffee. Powder oat cake macaroon.

Donut candy canes tart apple pie lemon drops sweet roll carrot cake cake dessert. Icing dragée donut soufflé fruitcake halvah. Dessert fruitcake donut liquorice halvah chocolate cake sweet pudding.',
			'link' => 'http://radoslavtomas.com',
		]);

		\App\Portfolio::create([
			'name' => 'medan.sk',
			'image' => '/img/portfolios/medan.png',
			'description' => 'Jelly-o sugar plum carrot cake donut. Brownie sweet chupa chups gummi bears oat cake toffee pastry. Tiramisu dragée powder chupa chups macaroon. Jelly-o brownie toffee ice cream bonbon lollipop icing cotton candy.
			
Icing bonbon carrot cake. Sweet liquorice caramels lemon drops candy toffee. Powder oat cake macaroon.

Donut candy canes tart apple pie lemon drops sweet roll carrot cake cake dessert. Icing dragée donut soufflé fruitcake halvah. Dessert fruitcake donut liquorice halvah chocolate cake sweet pudding.',
			'link' => 'http://medan.sk',
		]);
    }
}
