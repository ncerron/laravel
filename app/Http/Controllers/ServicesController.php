<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Balance;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
      
public function get(){
    return view('pago');
}

public function post(Request $request){
    $mensaje  = "";
    $resultado = "error";
    $nombre = $request->input("nombre");
    $numero= $request->input("numero");
    $importe= $request->input("importe");

    //validacion valores de los input
    if (!empty($nombre) && !empty($importe) && !empty($numero)) {
        if ($numero > 0 && is_numeric($numero) ) {
            if ($importe> 0 && is_numeric($importe)) {
                $mensaje  = "Pagaste " .$nombre. " por $".$importe. ", nro ref. ".$numero;
                $resultado = "ok";
            }else{
                   $mensaje="Verificque el importe ingresado";
            }
        }else{
            $mensaje="Verificque nro de referencia ingresado";
        }
    } else{
    $mensaje  ="Debe completar todos los campos";
    }

    //actualizacion de las bases de datos
    if ($resultado == "ok") {
         $bd_total = DB::table('balances')->sum("importe");
          if ($importe <= $bd_total) {
                //ingresa a la tabla Bbalance el pago del servicio
                $newBalance = new Balance;
                $operacion="compra";
                 parent::guardar_balance( $newBalance, $request, $importe, $operacion, $nombre);
           
                //ingresa a la tabla Servicio el pago del servicio
                $newService= new Service;
                $newService -> nombre = $request->input('nombre');
                $newService -> save();
          }else{
               $mensaje="fondos insuficientes";
               $resultado = "error";
          } 
    }
    return redirect()->route('datos_recibidos')->with('resultado' , $resultado)->with('mensaje', $mensaje); 
}
}





