<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {
        // $businesses = Business::all();
        // // dd($businesses);

        // $business = Business::find(6);

        // $businessWhere = Business::where('name', 'Langworth, Feil and Purdy')->get();
        // $businessWhereFirst = Business::where('name', 'Langworth, Feil and Purdy')->first();

        $business = Business::create([
            'name' => 'Jon Snow',
            'email' => 'jon@snow.com',
            'address' => 'Rua a quadra b'
        ]);

        dd($business);
        // dd($business, $businesses, $businessWhere, $businessWhereFirst);
    }
}
