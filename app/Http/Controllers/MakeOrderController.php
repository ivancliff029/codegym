<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Layouts;

class MakeOrderController extends Controller
{
    public function index()
    {
        return view('layouts.order');
    }
    public function search(Request $request)
    {
        $q = $request->q;
        $customers = DB::select('select * from customers where name = ?', [1]);
        return view('layouts.order', ['customers' => $customers]);
    }
}
