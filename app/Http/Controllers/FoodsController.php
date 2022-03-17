<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layouts;
use App\Model\Foods as Foods;

class FoodsController extends Controller
{
    public function index()
    {
        return view('layouts.foods');
    }
    public function store()
    {
    }
}
