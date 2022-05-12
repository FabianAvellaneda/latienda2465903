@extends ('Layout.menu')

@section('contenido')

<div class="row">
    <h1 class="cyan-text"> Nuevo Producto </h1>
</div>
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
        <input id="last_name" type="text" class="validate">
          <label for="last_name">Nombre de Producto</label>
        </div>
        <div class="input-field col s6">
        <input id="name" type="text" class="validate">
          <label for="name">Precio</label>
        </div>
        <div class="input-field col s6">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Descripcion</label>
        </div>
        <div class="btn">
        <span>Imagen del Producto</span>
        <input type="file">
      </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Añadir</button>
    </form>
  </div>

@endsection