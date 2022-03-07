<?php

namespace App\Http\Controllers;

use App\Layouts;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('layouts.menu');
    }
}
