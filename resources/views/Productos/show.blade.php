@extends ('Layout.menu')

@section('contenido')
<div class="row">
    <div class="col s8">
        <div class="row">
        <ul class="collection with-header">
        <li class="collection-header"><h4>{{ $producto->nombre }}</h4><img class="activator"  width="300" height="200" 
      @if (is_null ($producto->imagen)) src="{{ asset('img/imagen no disponible.png') }}"
      @else  src="{{ asset('img/'.$producto->imagen) }}"
      @endif 
      /></li>
        <li class="collection-item"><div>Descripcion: {{ $producto->descripcion }}<a href="#!" class="secondary-content"></a></div></li>
        <li class="collection-item"><div>Categoria: {{ $producto->categoria->nombre}}<a href="#!" class="secondary-content"></a></div></li>
        <li class="collection-item"><div>Marca: {{ $producto->marca->nombre}}<a href="#!" class="secondary-content"></a></div></li>
        <li class="collection-item"><div>Precio: {{ $producto->precio }}<a href="#!" class="secondary-content"></a></div></li>
        </ul>
        </div>
    </div>
    <div class="col s4">
        <form method="POST" action="{{ route('carrito.store') }}" class="card-panel">
        @csrf
        <div class="row" >
            <h3><center>Añadir al Carrito </center></h3>
        </div>
        <div class="row">
            <div class="col s4 input-field">
                <select name="cantidad" id="cantidad">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <label for="cantidad">Cantidad</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit">Añadir</button>
        <input type="hidden" name="prod_id" value="{{ $producto->id }}">
        <input type="hidden" name="prod_name" value="{{ $producto->nombre }}">
        </form>
    </div>
</div>
@endsection
