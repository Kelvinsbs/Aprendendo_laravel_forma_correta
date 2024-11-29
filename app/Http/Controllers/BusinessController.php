<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    public function index() {
        $businesses = Business::paginate(); // se passar um numero dentro do paranteses, é o numero que vai ser paginado, se nao passar nada o defaut é 15
        // dd($businesses->toArray());
        // $businesses = Business::all();
        return view('businesses', compact('businesses'));
    }

    public function store(Request $request) {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            // 'address' => 'string',
            'logo' => 'file'
        ]);

        $file = $input['logo'];

        $path = $input['logo']->store('logos', 'public');
        $input['logo'] = $path;

        $business = Business::Create($input);

        return Redirect::route('businesses.index');

    }

    public function index2() {

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

        // $input = [
        //     'name' => 'Fuilanel',
        //     'email' => 'fuilanel@meeeeeeu.com',
        //     'address' => 'rua G quadra H'
        // ];

        // $business = Business::find(11);
        // $business->fill($input);
        // $business->save();

        // dd($business);
        // COMO FAZER UM DELETE NO BANCO DE DADOS
        DB::connection()->enableQueryLog(); //debugar as querys da vida
        $business = Business::where('name', 'LIKE', '%Jenif%')->get();
        $query = DB::getQueryLog();
        // $business = Business::find(12);
        // $business->delete();
        dd($query);
        // dd($business->toArray());
        // $business->toSqll();
    }
}
