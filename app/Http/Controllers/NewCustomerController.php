<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Layouts;

class NewCustomerController extends Controller
{
    public function index()
    {
        return view('layouts.customer');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $r_num = $request->r_num;
        $number = $request->number;

        DB::insert('insert into customers(name, email, room_number, number) values(?,?,?,?)', [$name, $email, $r_num, $number]);
        return view('layouts.order');
    }
}
