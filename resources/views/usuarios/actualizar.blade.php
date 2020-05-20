@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
            {!! Form::model($usuario,['route'=> ['usuarios.update',$usuario], 'method'=> 'PUT' ]) !!}
            @include('usuarios.formulario')
            <div class="form-group">
                {!! Form::submit('actualizar', ['class'=>'btn btn-info btn-lg btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
    </div>
</div>

@endsection