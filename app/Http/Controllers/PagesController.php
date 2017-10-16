<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getIndex()
	{
		return view('pages.index');
    }

	public function getAbout()
	{
		return view('pages.about');
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
