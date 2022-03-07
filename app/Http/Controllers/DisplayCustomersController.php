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
    public function index()
    {

        return view('layouts.displaycustomer');
    }
    public function search(Request $request)
    {
        // $text = $request->q;
        // $meal = $request->meal;
        $data = array($request->q, $request->meal);

        $customers = DB::table('customers')->where('name', 'LIKE', '%' . $data[0] . '%')->paginate(5);

        return view('layouts.displaycustomer')->with(['customers' => $customers, 'data' => $data]);
    }
}
