<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Investment;
use App\Balance;
use Illuminate\Support\Facades\DB;

class InvestmentController extends Controller
{

public function show(){
        $inversion = Investment::all();
        return view('inversiones',['inversion' => $inversion]);
        }

public function post(Request $request){
   $id= $request->input("id");
   //se busca a la empresa seleccionada, para obter datos de nombre de la empresa y valor de la accion
   $seleccion = Investment::findOrFail($id);
   $empresa = $seleccion ->empresa;
   $valor = $seleccion -> valor;
  
    //nombre empresa y valor de accion
    $operacion= $request->input("action");
    return view('inversiones_compra_venta',["empresa"=>$empresa, "operacion" => $operacion, "valor" => $valor, "id"=>$id]); 
}

public function post_acciones(Request $request, $id){
    $mensaje  = "";
    $resultado = "error";
    $cantidad = $request->input('cantidad');
   
//valido campo cantidad, que sea mayor a 0 e integer
    if (!empty($cantidad)) {
            if ($cantidad> 0 && is_numeric($cantidad)) {
                $resultado = "ok";
            }else{
                   $mensaje="Verifique el importe ingresado";
            }        
    } else{
          $mensaje  ="Debe completar el campo";
    }

  //busqueda de la empresa seleccionada
   $operacion =  $request-> action;  
   $bd_inversiones = Investment::findOrFail($id);

   //calculo del total 
   $valor_accion=  $bd_inversiones -> valor;
   $subtotal = (floatval($valor_accion) * floatval($cantidad));
   $total= $subtotal + 200  + ($subtotal*0.012);
   $total= round($total, 3);

    if ($resultado == "ok") {
    $newBalance = new Balance;
        if ($operacion == "compra") {//compra de accciones
                //vemos que existan los fondos para realizar la compra
                $bd_total = DB::table('balances')->sum("importe");
                if ($total <= $bd_total) {
                    $descripcion = "compra de acciones ";
                    //actualizo la base de datos Balance
                    parent::guardar_balance( $newBalance, $bd_inversiones, $total, $operacion, $descripcion);
                    $mensaje  = "Se compraron " .$cantidad. " acciones por $".$total. ", de la empresa ".$bd_inversiones -> empresa;
                    $resultado = "ok";
                    //actualizo la base de datos investment
                    $bd_inversiones -> acciones += $cantidad ;
                    $bd_inversiones -> save();

                } else{
                    $mensaje="fondos insuficientes";
                    $resultado = "error";
                }                  
        }else{//venta de accciones
                    $bd_total_acciones = $bd_inversiones -> acciones;
                    //chequeamos que tenemos la cantidad de acciones 
                     if ($cantidad > $bd_total_acciones) {
                            $mensaje="cantidad de acciones insuficientes";
                            $resultado = "error";
                     }else{
                             //actualizo la base de datos Balance
                            $descripcion = "venta de acciones ";
                            parent::guardar_balance( $newBalance, $bd_inversiones, $total, $operacion, $descripcion);
                            $mensaje  = "Se vendieron " .$cantidad. " acciones por $".$total. ", de la empresa ".$bd_inversiones -> empresa;
                            //actualizo la base de datos investment
                            $bd_inversiones -> acciones -= $cantidad ;
                            $bd_inversiones -> save();
                     }   
        }
    }//fin if
  return redirect()->route('datos_recibidos')->with('resultado', $resultado)->with('mensaje', $mensaje); 
}
}//fin class

