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
                    <a href="" class="btn btn-danger">eliminar</a>
                    <a href="" class="btn btn-info">modificar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection