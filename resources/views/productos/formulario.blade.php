<div class="form-group">
    {!! Form::label('nombre producto', 'nombre producto') !!}
    {!! Form::text('nombre', NULL, ['class'=>'form-control','placeholder'=>'Ingrese nombre']) !!}
</div>
<div class="form-group">
    {!! Form::label('valor del producto', 'valor del producto') !!}
    {!! Form::text('valor', NULL , ['class'=>'form-control', 'placeholder'=>'Ingrese valor
    del producto', 'id'=>'valor']) !!}
</div>
<div class="form-group">
    {!! Form::label('codigo', 'codigo') !!}
    {!! Form::text('codigo', NULL, ['class'=>'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('imagen', 'imagen') !!}
    {!! Form::file('imagen',null)!!}
</div>

<div class="form-group">
    <a href="{{route('productos.index')}}" class="btn btn-danger btn-lg btn-block">cancelar</a>
</div>