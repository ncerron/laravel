<!-- respuesta formulario de la pagina pagos -->
@extends('layouts.plantilla', [
        'mostrar'=> 'no'
   ])
 
@section('contenedor')   
      <div class="row align-items-center" style="height:300px;">
          <div class="col-12 text-center">
              <div class="mt-5">
                  @if (session('resultado')  === 'error') 
                      <img class="mt-5" src='img/checked1.png' height='150' width='150'>
                      <h3 class="mt-4">¡¡Error en la transacción!!</h3>
                      <h5>{{session('mensaje')}}</h5>
                    @else
                       <img class="mt-5" src='img/checked2.png' height='150' width='150'>
                       <h3 class="mt-4">¡¡Transacción realizada con éxito!!</h3>
                       <h5>{{session('mensaje')}}</h5>
                    @endif 
                <div>
            </div>
        <div>
@endsection  