<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Http\Request;

class oneToManyController extends Controller
{
    // function index()
    // {
    //     $data = null;
    //     return  $data = User::with('posts', 'profile')->get();
    //     return view('relationship.one-to-many', compact('data'));
    // }
    #golbally eger load
    // function index()
    // {
    //     $data = null;
    //     return  $data = User::get();
    //     return view('relationship.one-to-many', compact('data'));
    // }

    #WithOnly
    // function index()
    // {
    //     $data = null;
    //     return  $data = User::withOnly('profile')->get();
    //     return view('relationship.one-to-many', compact('data'));
    // }
    #post gulo peich
    function index()
    {
        $posts = null;
        $posts = post::get();
        return view('relationship.one-to-many', compact('posts'));
    }
}
