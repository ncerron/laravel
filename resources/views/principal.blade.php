
@extends('layouts.plantilla', [
       'titulo' => 'Bievenido a MBanking, que querés hacer hoy?',
       'descripcion' => 'En este sitio podes operar con tu cuenta mirando el balance, haciendo
                    transferencias, pagando servicios y armando inversiones!',
        'mostrar'=> 'si'
   ])
   
@section('contenedor')   
       <div class="row d-flex justify-content-center" style="overflow: hidden; ">
                   <div class="col-lg-3 col-md-4 home"><img src="img/balance.png" height="200" width="200" class="mb-3">
                       <h5><strong>Balance</strong></h5>
                       <p class="font_home">Mira como vienen sus cuentas: Ingresos y Egresos.</p>
                       <a role="button" class="btn login_btn btn-sm mb-3" href="{{ url('movimientos') }}">Ver
                           Situación Ecoonómica</a>
                   </div>
                   <div class="col-lg-3 col-md-4 home"><img src="img/pago2.png" height="200" width="200" class="mb-3">
                       <h5><strong>Pago de Servicios</strong></h5>
                       <p class="font_home">Paga todo lo que necesites desde la commodidad de tu casa</p>
                       <a role="button" class="btn login_btn btn-sm" href="{{ url('pago') }}">Pagar Servicios</a>
                   </div>

                   <div class="col-lg-3 col-md-4 home"> <img src="img/inversion.png" height="200" width="200" class="mb-3">
                       <h5><strong>Inversiones</strong></h5>
                       <p class="font_home">Duplica tus ahorros en el mercado financiero.</p>
                       <a role="button" class="btn login_btn btn-sm" href="{{ url('inversiones') }}">Invertir en cosas</a>
                   </div>
       </div>
@endsection  