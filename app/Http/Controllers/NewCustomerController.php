<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Layouts;
use App\Customer;
use App\Models\Customer as ModelsCustomer;

class NewCustomerController extends Controller
{
    public function index()
    {
        return view('layouts.customer');
    }
    public function store(Request $request)
    {
        $customer = new ModelsCustomer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->room_number = $request->r_num;
        $customer->number = $request->number;

        if ($customer->save()) {
            return redirect('layouts.order')->with('success', 'Customer added Successful');
        } else {
            return redirect('layouts.order')->with('error', 'Error adding customer');
        }
    }
}
