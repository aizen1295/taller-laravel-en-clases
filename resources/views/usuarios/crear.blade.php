@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
            <form method="post" action="{{route('usuarios.store')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">nombre </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese nombre "
                        name="nombre">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">usuario</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Ingrese el usuario" name="usuario">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">contraseña</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Ingrese la contraseña" name="contra">
                </div>

                <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
            </form>
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
    </div>
</div>

@endsection