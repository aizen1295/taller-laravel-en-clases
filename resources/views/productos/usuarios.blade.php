<div class="row">
    @foreach ($productos as $producto)
    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
        <div class="card">
            <img title="{{$producto->nombre}}" alt="Título" class="card-img-top" src="/img/{{$producto->imagen}}"
                alt="Sin foto" width="200" height="300">
            <div class="card-body mx-auto">
                <span>{{$producto->nombre}}</span>
                <h5 class="card-title">{{$producto->valor}}</h5>
                <p class="card-text">Descripción</p>
                <a href="" class="btn btn-success">Agregar</a>

            </div>
        </div>
    </div>
    @endforeach
</div>