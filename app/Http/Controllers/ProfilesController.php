<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {

//        dd("The \$user is: ".$user);
        $theUser = User::find($user);
        dd($theUser);
        return view('home');
    }
}
