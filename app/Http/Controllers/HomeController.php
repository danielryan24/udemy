<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index() {

    //     DB::table('users')->insert(
    //     [
    //         [
    //             'name' => 'Artik',
    //             'email' => 'artik@gmail.com',
    //             'password' => '1234'
    //         ],
    //         [
    //             'name' => 'Jhohan',
    //             'email' => 'jhohan@gmail.com',
    //             'password' => '1234'
    //         ]
    //     ]
    // );
$products = DB::table('products')->get()->dd();

    $users = DB::table('users')->where('id', 2)->first();
    return $users;

        return view('welcome');
    }

    function showAboutPage() {
        return view('about');
    }
}
