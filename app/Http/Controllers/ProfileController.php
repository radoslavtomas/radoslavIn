<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile');
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
			'email' => 'required|string|email|max:255',
			'about' => 'string|required',
			'city' => 'string|required',
			'facebook' => 'required|string|url',
			'linkedin' => 'required|string|url'
		]);

		$user = User::all()->first();

		if($request->password !== null)
		{
			$request->validate([
				'password' => 'string|min:6'
			]);
			$user->password = bcrypt($request->password);
		}

		$profile = Profile::findOrFail($id);

		if($request->hasFile('avatar'))
		{
			$request->validate([
				'avatar' => 'image',
			]);
			$avatar = $request->avatar;
			$avatar_new_name = time().$avatar->getClientOriginalName();
			$avatar->move('uploads/img/avatars/', $avatar_new_name);
			$profile->avatar = '/uploads/img/avatars/'.$avatar_new_name;
		}

		$user->name = $request->name;
		$user->email = $request->email;

		$profile->about = $request->about;
		$profile->city = $request->city;
		$profile->facebook = $request->facebook;
		$profile->linkedin = $request->linkedin;

		$user->save();
		$profile->save();

		Session::flash('success', 'Your profile has been successfully updated.');

		return redirect()->route('profile.index');
    }
}
