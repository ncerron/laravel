<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        public function guardar_balance($newBalance, $busqueda, $total,$operacion, $descripcion){
            if ($operacion == "compra") {
                $newBalance -> importe = -($total);
            }else{
                $newBalance -> importe = $total;
            }
            $newBalance -> fecha = date("Y-m-d");  
            $newBalance -> descripcion = $descripcion. $busqueda-> empresa;
            $newBalance -> save(); 
           
        }
 
}
