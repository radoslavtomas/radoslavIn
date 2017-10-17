<?php

namespace App\Http\Controllers;

use App\Aboutpage;
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
        return view('admin.dashboard');
    }

	public function getHome()
	{
		$data = Homepage::all()->first();
		return view('admin.home')
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
		$data = Aboutpage::all()->first();
		return view('admin.about')
			->with('data', $data);
	}

	public function postAbout(Request $request)
	{
		$request->validate([
			'title' => 'required|max:200',
			'text' => 'required'
		]);

		$data = Aboutpage::all()->first();

		if($request->hasFile('image'))
		{
			$request->validate([
				'image' => 'image'
			]);
			$image = $request->image;
			$image_new_name = time().$image->getClientOriginalName();
			$image->move('uploads/img/profiles/', $image_new_name);
			$data->image = '/uploads/img/profiles/'.$image_new_name;
		}

		$data->title = $request->title;
		$data->text = $request->text;

		$data->save();

		Session::flash('success', 'About page was successfully updated.');

		return redirect()->route('getAbout');
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
