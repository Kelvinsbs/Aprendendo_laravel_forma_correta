<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {

        // FUNCOES PRINCIPAIS DO ELOQUENT ORM
        // $businesses = Business::all();
        // // dd($businesses);

        // $business = Business::find(6);

        // $businessWhere = Business::where('name', 'Langworth, Feil and Purdy')->get();
        // $businessWhereFirst = Business::where('name', 'Langworth, Feil and Purdy')->first();

        // dd($business, $businesses, $businessWhere, $businessWhereFirst);

        // COMO SALVAR DADOS NO BANCO DE DADOS
        // $business = Business::create([
        //     'name' => 'Jon Snow',
        //     'email' => 'jon@snow.com',
        //     'address' => 'Rua a quadra b'
        // ]);

        // dd($business);

        // COMO FAZER UM UPDATE NO BANCO DE DADOS
        // $business = Business::find(10);
        // $business->name = 'Kelvin';
        // $business->email = 'Kelvin@laravel9.com';
        // $business->address = 'quadra c rua D';

        // $business->save();

        // $business = Business::find(12)->update([
        //     'name' => 'Jeniffer',
        //     'email' => 'jeniffer@hinckel.com',
        //     'address' => 'rua E quadra F'
        // ]);

        $input = [
            'name' => 'Fuilanel',
            'email' => 'fuilanel@meeeeeeu.com',
            'address' => 'rua G quadra H'
        ];

        $business = Business::find(11);
        $business->fill($input);
        $business->save();

        dd($business);
    }
}
