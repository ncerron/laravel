<?php

namespace App\Http\Controllers;

use App\Balance; //agregado para conectar a modelo y de ahi a bd

class BalanceController extends Controller
{
   public function show(){
        $balance = Balance::all();
           return view('movimientos',['balance' => $balance]);
        }

}//fin Class
