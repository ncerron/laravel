@extends('layouts.plantilla', [
      'titulo' => 'Pago de Servicios',
       'descripcion' => 'Paga todo lo que necesites desde la comodidad de tu casa.',
        'mostrar'=> 'si'
   ])
          
@section('contenedor')   
        <div class="row align-items-center " style="height:300px;">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group ">
                        <label for="">Nombre del Servicio</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Número de Referencia</label>
                        <input type="text" class="form-control" name="numero">
                    </div>
                    <div class="form-group">
                        <label for="">Importe</label>
                        <input type="text" class="form-control" name="importe">
                    </div>
                    <div class="text-right">
                        <button type="submit" name="pago_servicios" class="btn login_btn pull-right">Pagar
                            Servicio</button>
                    </div>
                </form>
            </div>
        </div>
@endsection 