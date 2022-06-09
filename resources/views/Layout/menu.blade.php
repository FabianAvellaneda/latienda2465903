<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}" />
    <title>TiendaPHP</title>
</head>
<body class="grey lighten-3">
<nav class="teal" >
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo" style="margin-left:2%;" >LaTiendaPHP</a>
      <ul class="right hide-on-med-and-down"  style="margin-right:2%;">
      <li><a href="{{ route('Productos.create') }}" >Agregar Producto</a></li>
        <li><a href="{{ route('Productos.index') }}">Productos</a></li>
        <li><a href="{{ route('carrito.index') }}">Carrito</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
        @yield('contenido')
  </div>
  <script src="{{ asset('materialize/js/materialize.js') }}"></script>
  <script> document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
  }); </script>
</body>
</html>