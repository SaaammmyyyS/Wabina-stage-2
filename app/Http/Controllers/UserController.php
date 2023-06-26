<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return view("main");
    }

    public function Favorite(){
        return view("welcome");
    }
}
