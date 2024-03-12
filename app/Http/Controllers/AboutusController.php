<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $pageTitle = "This is about us page";
        return view('about-us', ['pageTitle' => $pageTitle]);
    }
}
