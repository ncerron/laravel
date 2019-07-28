@extends('layouts.plantilla', [
      'titulo' => 'Inversiones',
       'descripcion' => 'Duplica tus ahorros en el mercado financiero.',
        'mostrar'=> 'si'
   ])
  
@section('contenedor')   
  <div class="row align-items-center">
          <div class="col-md-8 offset-md-2 text-center">
              <form method="POST" action="{{url('/inversiones', [$id])}}">
                  @method('put')
                  @csrf
                  <div>
                      <h3 class="mb-4" style="color:#6c757d">Solicitud de orden de {{$operacion}}</h3>
                      <div class="form-group mb-3" style="text-align:left">
                          <label class="label_inversion" >Empresa</label>
                          <p class="p_inversion">{{$empresa}}</p>
                      </div>
                      <div class="w-75" style="text-align:left">
                          <table class="table table-borderless mb-4 text-center">
                              <thead>
                                  <tr style=" border-bottom: 4px solid rgb(253, 220, 129)">
                                      <th scope="col" style="font-weight: normal;">Valor de la acción</th>
                                      <th scope="col" style="font-weight: normal;">Cantidad de acciones</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr style="font-size: 20px; ">
                                      <td >{{$valor}}</td><input type="hidden" id="valor" value="{{$valor}}">
                                      <td style="width:200px;" ><input type="text" id="cantidad"  style="width:200px;" class="form-control text-center" placeholder="Ingrese acciones" name="cantidad" ></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>

                      <div class="row justify-content-center mb-3">
                          <div class="card" id="card_inversion">
                              <div class="card-header text-center">
                                  <h4 class="mb-2" style="color:#6c757d">Resumen de la operación</h4>
                              </div>
                              <div class="card-body ">
                                  <table class="table w-75 table-borderless mb-2" style="margin: 0 auto; ">
                                      <tbody>
                                          <tr><td>Subtotal:</td><td>
                                            <input type="text" id="subtotal" name="subtotal" class="form-control text-center" disabled> </td>
                                          </td></tr>
                                          <tr><td>Comisión 1,2%:</td><td><input type="text" id="comision" name="comision" class="form-control text-center" disabled> </td></tr>
                                          <tr><td>Impuestos:</td><td><input type="text" id="impuestos" name="impuestos" class="form-control text-center" disabled> </td></tr>
                                          <tr><td>Total:</td><td><input type="text" id="total" name="total" class="form-control text-center mb-2" disabled> </td></tr>
                                      </tbody>
                                  </table>

                                  <div class="text-center">
                                        @if ($operacion == "compra")
                                            <p class="mensaje">Se le debitará de su cta. cte. <span class="mensaje" id="submensaje"></span></p>
                                        @else
                                            <p class="mensaje">Se le acreditará a su cta. cte. <span class="mensaje" id="submensaje"></span></p>
                                        @endif
                                  </div>

                                  <div class="text-right"> <button type="submit" name="action" value="{{$operacion}}" class="btn login_btn">Confirmar</button></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
         </div>
  </div>

@endsection  