@extends ('Layout.menu')

@section('contenido')
@if(!session('cart'))
<p>Variable no Existe</p>
@else
<div class="row">

    {{ session('cart')[0]["nombre"] }}
    {{ session('cart')[0]["cantidad"] }}

</div>
<form action="{{ route('carrito.destroy', 1) }}" method="POST">
    @csrf
    @method('DELETE')
<button class="btn waves-effect waves-light" type="submit">Eliminar Carrito</button>
</form>
@endif

@endsection