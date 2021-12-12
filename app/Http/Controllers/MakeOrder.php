<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeOrder extends Controller
{
    public function newOrder(){
        return view('layout.makeorder');
    }
}
