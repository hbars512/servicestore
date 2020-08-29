<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user();

        return view('profiles.create', [
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::user();
        $profile = Profile::create([
            'user_id' => \Auth::user()->id,
            'firstname' => $request->input('firstname', ''),
            'lastname' => $request->input('lastname', ''),
            'address' => $request->input('address', ''),
            'phone_number' => $request->input('phone_number', '')
        ]);

        $profile->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = \Auth::user();
        $profile = Profile::where('user_id', '=', \Auth::user()->id)->first();

        if ($profile == null) {
            return view('profiles.create', [
                'user' => $user
            ]);
        }

        return view('profiles.edit', [
            'user' => $user,
            'profile' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = \Auth::user();
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->password = $request->input('password');
        // $user->save();

        $profile = Profile::where('user_id', '=', \Auth::user()->id)->first();
        $profile->firstname = $request->input('firstname', '');
        $profile->lastname = $request->input('lastname', '');
        $profile->address = $request->input('address', '');
        $profile->phone_number = $request->input('phone_number', '');
        $profile->save();

        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $profile = Profile::where('user_id', '=', \Auth::user()->id)->first();
        $profile->delete();

        $user = \Auth::user();
        $user->delete();

        return back();
    }
}
