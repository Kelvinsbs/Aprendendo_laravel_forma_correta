<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {
        $businesses = Business::all();
        // dd($businesses);

        $business = Business::find(6);

        $businessWhere = Business::where('name', 'Langworth, Feil and Purdy')->get();
        $businessWhereFirst = Business::where('name', 'Langworth, Feil and Purdy')->first();

        dd($business, $businesses, $businessWhere, $businessWhereFirst);
    }
}
