<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * @return string
     */
    public function index() {
        $pageTitle = "Quan Ly Khach Hang";
        $customers = DB::table('customers')->get();
        return view('customer', ['pageTitle' => $pageTitle, 'customers' => $customers]);
    }
}
