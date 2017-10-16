<?php

namespace App\Http\Controllers;

use App\Homepage;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
		$data = Homepage::all();

        return view('admin.home')
			->with('data', $data);
    }

	public function getHomepage()
	{
		$data = Homepage::all();
		return view('admin.homePage')
			->with('data', $data);
	}
}
