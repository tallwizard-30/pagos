<?php

namespace App\Http\Controllers;
use App\currency;
use App\plataformasPago;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

  
     
    public function index()
    {
        $currencies = currency::all();
        $plataformasPagos = plataformasPago::all();
        return view('home')->with([
            'currencies'=>$currencies,
            'plataformasPagos'=>$plataformasPagos,
        ]);
        
       
    }
}
