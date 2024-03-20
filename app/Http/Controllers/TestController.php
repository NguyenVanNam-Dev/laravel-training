<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class TestController extends Controller
{
    public function index()
    {
        /**
         * @var $customer Customer
         */
        $customer = Customer::find(1);
        $identityNumber = $customer->customerIdentityNumber;
        dd($identityNumber);
        return 123;
    }
}
