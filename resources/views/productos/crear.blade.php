@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-xd-4 col-md-4 col-lg-4">
		</div>
		<div class="col-12 col-xd-4 col-md-4 col-lg-4">
			{!! Form::open(['route'=> 'productos.store', 'method'=> 'POST', 'files'=>true ]) !!}
			@include('productos.formulario')
			<div class="form-group">
				{!! Form::submit('agregar', ['class'=>'btn btn-success btn-lg btn-block']) !!}
			</div>
			{!! Form::close() !!}

		</div>
		<div class="col-12 col-xd-4 col-md-4 col-lg-4">
		</div>
	</div>
</div>

@endsection