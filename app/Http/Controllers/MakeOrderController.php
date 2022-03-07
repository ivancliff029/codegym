<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Layouts;
use App\Models\Customer as ModelsCustomer;
use App\Models\Order as ModelsOrder;
use Illuminate\Support\Facades\DB;


class MakeOrderController extends Controller
{
    public function index()
    {
        // $results = DB::select('SELECT * FROM orders');
        // $customer_id = $results['customer_id'];
        // $customer_name = DB::table('customers')->where('id', $customer_id)->value('name');

        return view('layouts.order');
    }
}
