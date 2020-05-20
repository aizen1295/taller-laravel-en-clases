<div class="form-group">
    {!! Form::label('nombre', 'nombre') !!}
    {!! Form::text('nombre', NULL, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('usuario', 'usuario') !!}
    {!! Form::text('usuario', NULL, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('contra', 'contra') !!}
    {!! Form::text('contra', NULL, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    <a href="{{route('usuarios.index')}}" class="btn btn-danger btn-lg btn-block">cancelar</a>
</div>