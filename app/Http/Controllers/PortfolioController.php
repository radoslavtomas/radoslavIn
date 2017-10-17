<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index')
			->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'name' => 'string|required',
			'image' => 'image|required',
			'description' => 'required',
			'link' => 'url|required'
		]);

		$image = $request->image;
		$image_new_name = time().$image->getClientOriginalName();
		$image->move('uploads/img/portfolios/', $image_new_name);

		Portfolio::create([
			'name' => $request->name,
			'image' => '/uploads/img/portfolios/'.$image_new_name,
			'description' => $request->description,
			'link' => $request->link,
		]);

		Session::flash('success', 'New portfolio was successfully added.');

		return redirect()->route('portfolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.edit')
			->with('portfolio', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$request->validate([
			'name' => 'string|required',
			'description' => 'required',
			'link' => 'url|required'
		]);

		$portfolio = Portfolio::findOrFail($id);

		if($request->hasFile('image'))
		{
			$request->validate([
				'image' => 'image',
			]);
			$image = $request->image;
			$image_new_name = time().$image->getClientOriginalName();
			$image->move('uploads/img/portfolios/', $image_new_name);
			$portfolio->image = '/uploads/img/profiles/'.$image_new_name;
		}

		$portfolio->name = $request->name;
		$portfolio->description = $request->description;
		$portfolio->link = $request->link;

		$portfolio->save();

		Session::flash('success', 'Portfolio has been successfully updated.');

		return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::destroy($id);

		Session::flash('success', 'Portfolio has been successfully deleted.');

		return redirect()->route('portfolio.index');

    }
}
