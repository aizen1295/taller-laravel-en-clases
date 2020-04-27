@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{route('productos.create')}}" role="button">agregar</a>

    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>valor</th>
                <th>codigo</th>
                <th>imagen</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $productos as $producto )
            <tr>
                <td scope="row">{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->valor}}</td>
                <td>{{$producto->codigo}}</td>
                <td><img src=" img/{{ $producto->imagen }}" alt="" width="100"></td>
                <td>
                    <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-info">editar</a>
                    {!! Form::open(['route'=>['productos.destroy',$producto->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('eliminar', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection