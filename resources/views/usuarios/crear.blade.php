@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
            {!! Form::open(['route'=> 'usuarios.store', 'method'=> 'POST' ]) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'nombre') !!}
                {!! Form::text('nombre', 'nombre', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('usuario', 'usuario') !!}
                {!! Form::text('usuario', 'usuario', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('contra', 'contra') !!}
                {!! Form::text('contra', 'contra', ['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::submit('Enviar', ['class'=>'btn btn-success btn-lg btn-block']) !!}
            </div>

            {!! Form::close() !!}
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
    </div>
</div>

@endsection