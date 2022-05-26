@extends ('Layout.menu')

@section('contenido')
@if(session ('mensajito'))
<div class="row">
<span>{{ session('mensajito') }}</span>
</div>
@endif
<div class="row">
    <h1 class="teal-text"><center> Nuevo Producto </center></h1>
</div>
<div class="row">
    <form method="POST" action="{{ route('Productos.store') }}" class="col s12">
      @csrf
      <div class="row">
        <div class="input-field col s6">
        <input name="nombre" value="{{ old('nombre') }}" id="last_name" type="text" class="validate">
          <label for="last_name">Nombre de Producto</label>
          <span> {{ $errors->first('nombre') }}</span>
        </div>
        <div class="input-field col s6">
        <input name="precio" value="{{ old('precio') }}" id="name" type="number" class="validate">
          <label for="name">Precio</label>
          <span> {{ $errors->first('precio') }}</span>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <textarea name="descripcion" id="textarea1" class="materialize-textarea">{{ old('descripcion') }}</textarea>
          <label for="textarea1">Descripcion</label>
          <span> {{ $errors->first('descripcion') }}</span>
        </div>
      <div class="row">
        <div class="input-field col s6">
    <select name="marca" id="marca">
      <option value="">Elija Marca</option>
      @foreach ($marcas as $marca)
      <option value="{{ $marca->id }}">
        {{ $marca->nombre}}
      @endforeach
    </select>
    <label for="marca">Elija Marca</label>
    <span> {{ $errors->first('marca') }}</span>
  </div>
  <div class="input-field col s6">
    <select name="categoria" id="categoria">
    <option value="">Elija Categoria</option>
      @foreach ($categorias as $categoria)
      <option value="{{ $categoria->id }}">
        {{ $categoria->nombre}}
      @endforeach
    </select>
    <label for="marca">Elija su Categoria</label>
    <span> {{ $errors->first('categoria') }}</span>
  </div>
        <div class="btn">
        <span>Imagen del Producto</span>
        <input name="imagen" type="file">
      </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit">Añadir</button>
    </form>
  </div>

@endsection