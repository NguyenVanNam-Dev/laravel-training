<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $pageTitle = "This is home page";
        return view('home', ['pageTitle' => $pageTitle]);
    }
}
