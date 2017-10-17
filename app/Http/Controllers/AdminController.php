<?php

namespace App\Http\Controllers;

use App\Homepage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDashboard()
    {
        return view('admin.home');
    }

	public function getHome()
	{
		$data = Homepage::all()->first();
		return view('admin.homePage')
			->with('data', $data);
	}

	public function postHome(Request $request)
	{
		$request->validate([
			'main_title' => 'required|string|max:200',
			'main_text' => 'required',
			'sub_title' => 'required|string|max:200',
			'sub_text' => 'required'
		]);

		$data = Homepage::all()->first();
		$data->main_title = $request->main_title;
		$data->main_text = $request->main_text;
		$data->sub_title = $request->sub_title;
		$data->sub_text = $request->sub_text;

		$data->save();

		Session::flash('success', 'Home page was successfully updated.');

		return redirect()->route('getHome');
	}

	public function getAbout()
	{
		//
	}

	public function getPortfolio()
	{
		//
	}

	public function getContact()
	{
		//
	}
}
