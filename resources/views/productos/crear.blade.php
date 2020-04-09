@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-xd-4 col-md-4 col-lg-4">
		</div>
		<div class="col-12 col-xd-4 col-md-4 col-lg-4">
			<form method="post" action="{{route('productos.store')}}">
				@csrf
				<div class="form-group">
					<label for="exampleFormControlInput1">nombre producto</label>
					<input type="text" class="form-control" id="exampleFormControlInput1"
						placeholder="Ingrese nombre producto" name="nombre">
				</div>

				<div class="form-group">
					<label for="exampleFormControlInput1">valor del producto</label>
					<input type="text" class="form-control" id="exampleFormControlInput1"
						placeholder="Ingrese valor del producto" name="valor">
				</div>

				<div class="form-group">
					<label for="exampleFormControlInput1">codigo</label>
					<input type="text" class="form-control" id="exampleFormControlInput1"
						placeholder="Ingrese codigo del producto" name="codigo">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">imagen</label>
					<input type="file" class="form-control" placeholder="Ingrese codigo del producto" name="imagen">
				</div>

				<button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
			</form>
		</div>
		<div class="col-12 col-xd-4 col-md-4 col-lg-4">
		</div>
	</div>
</div>

@endsection