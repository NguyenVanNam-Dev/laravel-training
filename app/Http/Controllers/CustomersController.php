<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class CustomersController extends Controller
{
    /**
     * @return string
     */
    public function index(): string
    {
        $pageTitle = "Customer List Page";
        $customers = Customer::all();
        return view('customers.index', ['pageTitle' => $pageTitle, 'customers' => $customers]);
    }

    /**
     * @return Factory|Application|View|\Illuminate\Contracts\Foundation\Application
     */
    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $pageTitle = "Add new customer";
        return view('customers.create', ['pageTitle' => $pageTitle]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        Customer::create($request->all());
        Session::flash('success', 'Customer information save successfully.');

        return redirect()->route('customers.index');
    }

    /**
     * @param Customer $customer
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function edit(Customer $customer)
    {
        $pageTitle = "Edit Customer Info: " . $customer->name;
        return view('customers.edit', ['customer' => $customer, 'pageTitle' => $pageTitle]);
    }

    /**
     * @param Request $request
     * @param Customer $customer
     * @return RedirectResponse
     */
    public function update(Request $request, Customer $customer): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $customer->update($request->all());
        Session::flash('success', 'Customer information updated successfully.');

        return redirect()->route('customers.index');
    }

    /**
     * @param Customer $customer
     * @return RedirectResponse
     */
    public function destroy(Customer $customer): RedirectResponse
    {
        $customer->delete();

        return redirect()->route('customers.index');
    }
}
