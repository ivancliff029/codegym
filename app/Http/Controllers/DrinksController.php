<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Layouts;
use App\Models\Drinks;

class DrinksController extends Controller
{
    public function store(Request $request)
    {
        $drink = new Drinks();
        $drink->product = $request->product;
        $drink->quantity = $request->quantity;
        $drink->cost = $request->cost;

        if ($drink->save()) {
            return view('layouts.confirm', ['message' => 'Action successfull']);
        }
    }
    public function index()
    {
        return view('layouts.drinks');
    }
}
