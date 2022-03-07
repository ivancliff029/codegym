<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layouts;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $text = $request->q;

        $castomers = DB::table('customers')->where('name', 'LIKE', '%' . $text . '%')->paginate(5);
        return view('layouts.displaycustomer')->with('customers', $castomers);
    }
}
