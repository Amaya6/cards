@extends('plantilla')
@section('contenido')
<form class="jumbotron bg-info" method="POST" action="/marcas">
    @csrf
    <div class="form-group text-white">
        <label for="nombre">Marca a registra:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
    </div>

    

    <button type="submit" class="btn btn-warning">Crear</button>
</form>
@endsection