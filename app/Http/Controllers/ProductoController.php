<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo"aqui va a ir el catalogo de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccion de todas las marcas
        $marcas = Marca::All();
        //Seleccion de todas las categorias
        $categorias = Categoria::all();
        //Mostrar la vista con los datos de marcas y categorias
      return view('productos.new')
      ->with('marcas', $marcas)
      ->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

            //analaiar la input data "imagen"
            //echo "<pre>";
            //var_dump($r->imagen);
            //1. Estableces Reghlas de Validacion para cada dato
            $reglas = [
                "nombre" => 'required|alpha',
                "precio"=> 'required|numeric',
                "descripcion" => 'required|min:15|max:30',
                "marca" => 'required',
                "categoria" => 'required',
                "imagen" => 'required|image'
            ];
            //mensajes:
            $mensajes = [
                "required" => "Campo Obligatorio",
                "alpha" => "Solo letras",
                "numeric" => "Solo numeros",
                "min" => "minimo 15 caracteres",
                "max" => "maximo 30 caracteres",
                "image" => "El archivo debe ser una imagen"
            ];
            //2. Crear el objeto validador
            $v =  Validator::make($r->all(), $reglas, $mensajes);
            //3. Validar la inpt data
            if($v->fails()){
                //validacion fallida
                //Redireccionar a Formulario
                return redirect('Productos/create')
                ->withErrors($v)
                ->withInput()
                ->withInput();
            }else{
             //acceder a propiedades del obejeto cargado
            $archivo = $r->imagen;
            $nombre_archivo = $archivo ->getClientOriginalName();
            //establecer la ubicacion donde se almacena el archivo
            $ruta= public_path()."/img/";
            //mover el archivo
            $archivo->move($ruta, $nombre_archivo);
            
                //validacion correcta
                //crear nuevo producto <<entity>>
            $p = new Producto;
            //asiganar valores a los atributos del objeto
            $p ->nombre = $r->nombre;
            $p ->precio = $r->precio;
            $p ->descripcion = $r->descripcion;
            $p ->marca_id = $r->marca;
            $p ->categoria_id = $r->categoria;
            $p ->imagen = $nombre_archivo;
            //guardar en BD 
            $p->save();
            //Redireccionar a Formulario
            return redirect('Productos/create')->with('mensajito',"Producto Registrado");
            }

            //verificar datos recibidos desde form
            /*echo"<pre>";
            var_dump($r->all());
            echo"</pre>";*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo"Aqui van los detalles de producto con ID: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo"Aqui va a ir el formulario para actualizar el producto: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
