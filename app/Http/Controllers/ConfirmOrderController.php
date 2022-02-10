<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layouts;
use Illuminate\Support\Facades\DB;
use App\Models\Order as ModelsOrder;


class ConfirmOrderController extends Controller
{
    public function index(Request $request)
    {
        $meal = $request->meal;
        $customer = $request->customer;
        $status = $request->status;
        $amount = '';

        if ($meal == "chicken") {
            $amount = '7000';
        } elseif ($meal == "beef") {
            $amount = '6000';
        } else {
            $amount = '5000';
        }

        $customer_id = DB::table('customers')->where('name', $customer)->value('id');
        // DB::insert('INSERT INTO orders(meal,status,customer_id,amount) VALUES(?,?,?,?)', [$meal, $status, $customer_id, $amount]);

        $order = new ModelsOrder();
        $order->meal = $meal;
        $order->status = $status;
        $order->customer_id = $customer_id;
        $order->amount = $amount;

        $order->save();
        return view('layouts.confirmorder')->with([
            'meal' => $meal, 'customer' => $customer, 'status' => $status, 'amount' => $amount
        ]);
    }
}
