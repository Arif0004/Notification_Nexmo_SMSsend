<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {

        return DB::select('SELECT * FROM users');
        DB::table('users')->insertOrIgnore([
            [
                'name' => 'Oddmddi',
                'vote' => 1,
                'address' => 'Dhaka',
                'is_admin' => true,
                'role' => 'admin',
                'price' => 1.5
            ],
            [
                'name' => 'Odmi',
                'vote' => 1,
                'address' => 'Dhaka',
                'is_admin' => true,
                'role' => 'admin',
                'price' => 1.5
            ],

        ]);
        return 1;
    }

    #for globalScope
    // function scope()
    // {
    //     $data = null;
    //     $data = User::get();
    //     return $data;
    // }
    #another way
    //
    #Local scope
    // function scope()
    // {
    //     $data = null;
    //     $data = User::IsPopular()->get();
    //     return $data->count();
    // }
    #event
    // function scope()
    // {
    //     return User::create([
    //         'name' => 'MyToni',
    //         'vote' => 11123,
    //         'is_admin' => false,
    //         'price' => 300,
    //         'address' => 'Cumilla'
    //     ]);
    // }
    #observer
    #create byo bserver
    // function scope()
    // {
    //     return User::create([
    //         'name' => 'MyToni',
    //         'vote' => 11123,
    //         'is_admin' => false,
    //         'price' => 300,
    //         'address' => 'Cumilla'
    //     ]);
    // }
    #delete byo bserver
    function scope()
    {
        User::find(2)->delete();
    }
}
