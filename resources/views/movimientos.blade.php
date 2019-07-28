@extends('layouts.plantilla', [
      'titulo' => 'Balance',
       'descripcion' => 'Aca podes controlar los movimientos de tu cuenta.',
        'mostrar'=> 'si'
   ])
     
@section('contenedor')   
        <div class="row align-items-center" style="height:300px;">
            <div class="col-md-8 offset-md-2 text-center">
                <table class="table fondo">
                    <thead>
                        <tr class="bg-warning">
                            <th>Fecha</th>
                            <th>Descripcion</th>
                            <th>Importe</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $saldo = 0; @endphp
                         @foreach ($balance as $value)
                         <tr>
                            <td>@php echo date('d-m-Y', strtotime($value['fecha'])); @endphp</td>
                            <td>{{$value['descripcion']}}</td>
                            <td>@php echo number_format($value['importe'], 2, ',', '.') @endphp</td>
                            @php 
                            $saldo +=$value['importe'];
                            @endphp
                            <td>@php echo number_format($saldo, 2, ',', '.') @endphp</td>
                         </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection  
