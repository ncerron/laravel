@extends('layouts.plantilla', [
      'titulo' => 'Inversiones',
       'descripcion' => 'Duplica tus ahorros en el mercado financiero.',
        'mostrar'=> 'si'
   ])
  
@section('contenedor')   
        <div class="row align-items-center" style="height:300px;">
            <div class="col-md-8 offset-md-2 text-center">
                <table class="table">
                    <thead>
                        <tr class="bg-warning">
                            <th>Empresa</th>
                            <th>Acciones</th>
                            <th>Valor de Acción</th>
                            <th colspan="2">Compraventa de Acción</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inversion as $value)
                        <tr>
                            <td>{{$value['empresa']}}</td>
                            <td>{{$value['acciones']}}</td>
                            <td>{{$value['valor']}}</td>
                                <td colspan="2">
                                <form action="" method="POST">
                                    @csrf
                                        <div class="btn-group">
                                            <input type="hidden" name="id" value="{{$value['id']}}">
                                            <button type="submit" name="action" value="compra" class="btn btn-primary mr-1">Comprar</button>
                                            <button type="submit" name="action" value="venta" class="btn btn-success">Vender</button>
                                        </div>                                     
                                    </form>
                                </td>  
                            </tr>
                          @endforeach
                    </tbody>                   
                </table>
            </div>
        </div>
@endsection  