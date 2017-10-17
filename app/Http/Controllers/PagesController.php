<?php

namespace App\Http\Controllers;

use App\Aboutpage;
use App\Homepage;
use App\Portfolio;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getIndex()
	{
		$data = Homepage::all()->first();
		return view('pages.index')
			->with('data', $data);
    }

	public function getAbout()
	{
		$data = Aboutpage::all()->first();
		return view('pages.about')
			->with('data', $data);
    }

	public function getPortfolio()
	{
		$portfolios = Portfolio::all();
		return view('pages.portfolio')
			->with('portfolios', $portfolios);
    }

	public function getContact()
	{
		return view('pages.contact');
    }

	public function getPortfolioById($id)
	{
		return Portfolio::findOrFail($id);
    }
}
