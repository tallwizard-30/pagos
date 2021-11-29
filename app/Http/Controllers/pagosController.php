<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagosController extends Controller
{
    public function pay(Request $request){

        $rules = [

            'value'=> ['required', 'numeric','min:5'],
            'currency'=> ['required', 'exists:currencies,iso'],
            'payment_platform'=> ['required', 'exists:plataformas_pagos,id'],

        ];
        $request->validate($rules);

        return $request->all();


    }
    public function approval(){
//
        
    }
    public function cancelled(){

        //
    }
}
