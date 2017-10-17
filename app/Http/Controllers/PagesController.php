<?php

namespace App\Http\Controllers;

use App\Aboutpage;
use App\Homepage;
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
		return view('pages.portfolio');
    }

	public function getContact()
	{
		return view('pages.contact');
    }
}
