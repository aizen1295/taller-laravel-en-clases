@extends('layouts.app')

@section('content')

<div class="container">

    <a class="btn btn-success" href="{{route('usuarios.create')}}" role="button">agregar</a>

    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>usuario</th>
                <th>contraseña</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $usuarios as $usuario )
            <tr>
                <td scope="row">{{$usuario->id}}</td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->usuario}}</td>
                <td>{{$usuario->contra}}</td>

                <td>
                    {!! Form::open(['route'=>['usuarios.destroy',$usuario->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('eliminar', ['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-info">editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection