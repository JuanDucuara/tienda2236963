<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Requests\StoreProductoRequest;
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
        //Seleccionar los productos en el arreglo
        $productos = Producto::all();
        //mostrar la vista del catalogo
        return view('productos.index')->with('productos',$productos);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar marcas en bd: Model Marca
        $marcas = Marca::all();
        //Seleccionar marcas en bd: Model Marca
        $categorias = Categoria::all();
        //Mostrar el formulario, enciado de datos
        return view('productos.create')
             ->with("marcas" , $marcas)
             ->with("categorias" , $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
            //Validacion exitosa
         $p = new Producto();
         $p->nombre = $request->nombre;
         $p->descripcion = $request->descripcion;
         $p->precio = $request->precio;
         $p->marca_id = $request->Marca;
         $p->categoria_id = $request->categoria;
         
         //objeto file
         $archivo = $request->imagen;
         $p->imagen=$archivo->getClientOriginalName();
         //ruta donde se almacena el archivo
         $ruta = public_path()."/img";
         //movemos archivo a la ruta
         $archivo->move( $ruta, $archivo->getClientOriginalName());     
         $p->save();
         //redireccionar: a una ruta disponible

         return redirect('productos/create')->with('mensaje',"Producto se ha registrado exitosamente");
        
        //crear un entidad <<producto>>
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "aqui se va a mostrar el detalle de producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "aqui se muestra el form de editar producto";
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
    echo "guarda el producto editado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        echo "para eliminar el producto";
    }
}
