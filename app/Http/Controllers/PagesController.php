<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getIndex()
	{
		return view('index');
    }

	public function getAbout()
	{
		return view('about');
    }

	public function getPortfolio()
	{
		return view('portfolio');
    }

	public function getContact()
	{
		return view('contact');
    }
}
