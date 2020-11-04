@extends('plantilla')
@section('contenido')



<form class="jumbotron bg-info " method="POST" action="/vehiculos">
    @csrf


    <div class=" form-group text-white ">
        <div class="form-group">
            <label for="propietario">Propietario</label>
            <input type="text" class="form-control" name="propietario" id="propietario" aria-describedby="emailHelp">
            <label for="chasis">Chasis</label>
            <input type="text" class="form-control" name="chasis" id="chasis" aria-describedby="emailHelp">
            <label for="placa">Placa</label>
            <input type="text" class="form-control" name="placa" id="placa" aria-describedby="emailHelp">
        </div>
        <div class="form-group row">
            <label for="colores" class="col-sm-2 col-form-label">Color</label>
            <div class="col-sm-10">
                      <select class="custom-select"name="color" id="color">
                          <option selected>Open this select menu</option>
                          <option value="Plateado">Plateado</option>
                          <option value="Blanco">Blanco</option>
                          <option value="Negro">Negro</option>
                          <option value="Azul">Azul</option>
                        </select>
                  </div>
                </div>
                <div class="form-group row">
                  
                  <label for="marcas" class="col-sm-2 col-form-label">Marca</label>
                  <div class="col-sm-10">
                      <select class="custom-select"name="marca"  id="marca">
                          <option selected>Open this select menu</option>
                          <option value="Toyota">Toyota</option>
                          <option value="Nissan">Nissan</option>
                          <option value="Ford">Ford</option>
                          <option value="Porsche">Porsche</option>
                        </select>
                  </div> 
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-warning">GUARDAR</button>   
                </div> 
                    
  </div>

  
</form>


@endsection