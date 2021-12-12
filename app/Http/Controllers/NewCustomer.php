<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCustomer extends Controller
{
    public function createCustomer(){
        return view('layout.newcustomer');
    }
}
