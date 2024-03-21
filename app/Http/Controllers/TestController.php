<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\CustomerIdentityNumber;

class TestController extends Controller
{
    public function index()
    {

        // retrieve "Identity Number" of customer using Eloquent's dynamic properties.
//        /**
//         * @var $customer Customer
//         */
//        $customer = Customer::find(1);
//        $identityNumber = $customer->customerIdentityNumber;
        // end

        // Get the customer that owns the Identity Number.
        $identityNumberObj = CustomerIdentityNumber::find(1);
        dd($identityNumberObj->customer);


    }
}
