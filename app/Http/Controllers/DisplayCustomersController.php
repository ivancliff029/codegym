<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Customer;
use App\Models\Customer as ModelsCustomer;

use App\Layouts;

class DisplayCustomersController extends Controller
{

    public function getOrderItem(Request $request)
    {
        if ($request->chicken) {
            $food = $request->chicken;

            $customers = new ModelsCustomer();
            $customers = ModelsCustomer::all();

            return view('layouts.displaycustomer')->with(['customers' => $customers, 'food' => $food]);
        } elseif ($request->beef) {
            $food = $request->beef;

            $customers = new ModelsCustomer();
            $customers = ModelsCustomer::all();

            return view('layouts.displaycustomer')->with(['customers' => $customers, 'food' => $food]);
        } else {
            $food = $request->beans;

            $customers = new ModelsCustomer();
            $customers = ModelsCustomer::all();

            return view('layouts.displaycustomer')->with(['customers' => $customers, 'food' => $food]);
        }
    }
}
