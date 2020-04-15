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
                    <label for="exampleFormControlInput1">valor unitario</label>
                    <input type="text" class="form-control" id="valor" name="valor">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput1">cantidad</label>
                    <input type="text" class="form-control" id="cantidad" placeholder="Ingrese la cantidad"
                        name="cantidad">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">valor total</label>
                    <input readonly="" type="text" class="form-control" id="valor_total" name="valor_total">
                </div>

                <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
            </form>
        </div>
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
    </div>
</div>

<script>
    $(function () {

        $("#producto_id").change(function(){
            var valors = document.getElementById('producto_id').value;
            $.ajax ({
                type:post;
                data:"id_producto" = valors;
                URL:{{ url('pedidos.show') }};
            });
        });

        $("#cantidad").change(function(){
            var valor = document.getElementById('valor').value;
            var cantidad = document.getElementById('cantidad').value;
            var valor_total = valor * cantidad;
            document.getElementById('valor_total').value=valor_total;
        });
    });
    
</script>

@endsection