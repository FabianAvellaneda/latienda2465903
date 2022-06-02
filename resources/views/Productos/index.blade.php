@extends ('Layout.menu')

@section('contenido')
<div class="row">
    <h1  class="teal-text"><center>Catalogo de productos </center></h1>
</div>
@foreach($Productos as $producto)

<div class="card" width="20%" height="50%">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator"  width="100" height="400" 
      @if (is_null ($producto->imagen)) src="{{ asset('img/imagen no disponible.png') }}"
      @else  src="{{ asset('img/'.$producto->imagen) }}"
      @endif 
      >
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{ $producto->nombre }}<i class="material-icons right">Ver Mas</i></span>
      <p><a href="#">Detalles aqui</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Ver Mas<i class="material-icons right">close</i></span>
      <ul> 
      <li> Descripcion: {{ $producto->descripcion }}</li>
      <li> Categoria: {{ $producto->categoria()->get()->nombre}}</li>
      <li> Marca: {{ $producto->marca_id }}</li>
      <li> Precio: {{ $producto->precio }}</li>
      </ul>
    </div>
  </div>

@endforeach

@endsection