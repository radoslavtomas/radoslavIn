<?php

namespace App\Http\Controllers;

use App\Aboutpage;
use App\Homepage;
use App\Mail\ContactForm;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

	public function postContact(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'email|required',
			'message' => 'required'
		]);

		$data = array(
			'email' => $request->email,
			'name' => $request->name,
			'body_message' => $request->message
		);

		Mail::to('radoslav.tomas@gmail.com')
			->send(new ContactForm($data));

		Session::flash('success', 'Your message has been successfully sent.');

		return redirect()->route('contact');

    }

	public function getPortfolioById($id)
	{
		return Portfolio::findOrFail($id);
    }
}
