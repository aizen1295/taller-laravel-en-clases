@extends('layouts.app')

@section('content')

<body>
    <div class="login-uno">
        <img class="avatar" src="{{ asset('img/logo.jpeg') }}" alt="logo de la fet">
        <h1>inicio sección</h1>
        <form action="">
            <!-- USUARIO -->
            <div class="form-group">
                <label for=username>usuario</label>
                <input id=username class="form-control" type="text" name="" placeholder="ingresar usuario">
            </div>
            <!-- CONTRASEÑA -->
            <div class="form-group">
                <label for=password>constraseña</label>
                <input id=password class="form-control" type="password" name="" placeholder="ingrasar contraseña">
            </div>
            <!-- BOTONES Y ENLACES -->
            <button class="btn btn-success btn-lg btn-block" type="submit">inicio</button>

            <p></p>
            <a href="#">
                <h6>Olvido su contraseña ?</h6>
            </a>

        </form>
    </div>

</body>
@endsection