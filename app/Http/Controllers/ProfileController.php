<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   
    public function profile()
    {
        $profile = Profile::get();
        return view('profile.profile', compact('profile'));
    }

    public function index()
    {
        $profiles = Profile::orderBy('id', 'asc')->paginate(10);
        return view('backend.profile.index', compact('profiles'));
    }

    public function store(Request $request){

//        $profile = new Profile();
//        $profile->name = $request->name;
//        $profile->phone = $request->phone;
//        $profile->email = $request->email;
//        $profile->details = $request->details;
//        $profile->status = $request->status;
//        $profile->save();

        Profile::create($request->all());

    }
}
