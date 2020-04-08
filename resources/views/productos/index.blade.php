@extends('layouts.app')

@section('content')

<div class="container">

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
                    <a href="" class="btn btn-danger">eliminar</a>
                    <a href="" class="btn btn-info">modificar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection