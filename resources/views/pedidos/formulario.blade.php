<div class="form-group">
    <label for="exampleFormControlInput1">productos</label>
    <div class="form-group">
        <select class="form-control " name="producto_id" id="producto_id">
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
    {!! Form::label('valor unitario', 'valor unitario') !!}
    {!! Form::text('valor', NULL , ['class'=>'form-control', 'id'=>'valor', 'readonly'=>'' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('cantidad', 'cantidad') !!}
    {!! Form::text('cantidad', NULL , ['class'=>'form-control', 'id'=>'cantidad' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('valor_total', 'valor total') !!}
    {!! Form::text('valor_total', NULL , ['class'=>'form-control', 'id'=>'valor_total']) !!}
</div>

<div class="form-group">
    <a href="{{route('pedidos.index')}}" class="btn btn-danger btn-lg btn-block">cancelar</a>
</div>