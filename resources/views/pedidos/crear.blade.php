@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
            <form method="post" action="{{route('pedidos.store')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">productos</label>
                    <div class="form-group">
                        <select class="form-control select2" name="producto_id">
                            @foreach ($productos as $producto)
                            <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">usuarios</label>
                    <div class="form-group">
                        <select class="form-control select2" name="usuario_id">
                            @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>




                <div class="form-group">
                    <label for="exampleFormControlInput1">cantidad</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Ingrese la cantidad" name="cantidad">
                </div>

                <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
            </form>
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
    </div>
</div>

@endsection