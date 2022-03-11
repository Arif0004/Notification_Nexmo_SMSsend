<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class oneToOneController extends Controller
{
    function index()
    {
        # i) egger load
        //$users = User::with('profile')->get();

        # ii) lazy load
        //$users = User::get();
        //$users->load('profile');

        // $users = User::whereHas('profile')->get();
        // return view('relationship.one-to-one', compact('users'));

        // $users = User::whereHas('profile', function ($q) {
        //     return $q->where('zip_code', '>', 400);
        // })->get();
        // return view('relationship.one-to-one', compact('users'));

        // $users = User::whereHas('profile', function ($q) {
        //     return $q->whereNull('zip_code');
        // })->get();
        // return view('relationship.one-to-one', compact('users'));

        // $users = User::doesntHave('profile')->get();
        // return view('relationship.one-to-one', compact('users'));

        // $users = User::whereDoesntHave('profile', function ($query) {
        //     $query->where('name', 'like', '%r%');
        // })->get();
        // $profile = profile::get();
        // return view('relationship.one-to-one', compact('users'));

        #User show under profile
        // return User::find(8)->profile()->create([
        //     'address' => 'pabna',
        //     'zip_code' => 963,
        //     'phone' => 15465
        // ]);
        return view('relationship.one-to-one', compact('profiles'));
    }
}
