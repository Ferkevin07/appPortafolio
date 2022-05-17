@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-body">
                        GESTION DE PORTAFOLIOS
                        <a class="btn btn-primary btn-sm" href="">Crear</a>
                    </div>            
                </div>
            </div>
        </div>
    </div>
    <br>
    @forelse ($portafolios as $portafolio)
        <h5 class="card-title">Nombre:{{$portafolio->nombre}}</h5>
        <h5 class="card-title">Descripcion:{{$portafolio->descripcion}}</h5>
        <h5 class="card-title">Categoria:{{$portafolio->categoria}}</h5>
        <h5 class="card-title">Imagen:{{$portafolio->imagen}}</h5>
        <h5 class="card-title">Video:{{$portafolio->url}}</h5>
        <hr>
    @empty
        <p>No existen proyectos</p>
    @endforelse
@endsection