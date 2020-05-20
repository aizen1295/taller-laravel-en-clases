@extends('layouts.app')

@section('content')
<div class="container">

    <a class="btn btn-success" href="{{route('pedidos.create')}}" role="button">agregar</a>

    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>id</th>
                <th>producto</th>
                <th>valor</th>
                <th>usuario</th>
                <th>cantidad</th>
                <th>imagen</th>
                <th>valor total</th>
                <th class="text-center">acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $pedidos as $pedido )
            <tr>
                <td scope="row">{{$pedido->id}}</td>
                <td>{{$pedido->productos->nombre}}</td>
                <td>{{$pedido->productos->valor}}</td>
                <td>{{$pedido->usuarios->nombre}}</td>
                <td>{{$pedido->cantidad}}</td>
                <td><img src=" img/{{ $pedido->productos->imagen }}" alt="" width="100"></td>
                <td>{{$pedido->valor_total}}</td>
                <td class="text-center">
                    {!! Form::open(['route'=>['pedidos.destroy',$pedido->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('eliminar', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    <a href="{{route('pedidos.edit',$pedido->id)}}" class="btn btn-info">editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection