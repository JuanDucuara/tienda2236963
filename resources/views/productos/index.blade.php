@extends('layouts.principal')

@section('contenido')

<h2  class ="blue-text"style="text-align:center">Catalogo de Productos</h2>
<br>
<br>

  <div class="row">
  @foreach($productos as $producto)
    <div class="col s8 m6">
      <div class="card">
        <div class="card-image">
        <img src="{{asset('img/'.$producto->imagen)}}"width="500"height="400">
         
        </div>
        <div align="center" class="card-content">
        <span class="card-title"><b>Nombre: {{$producto->nombre }}</b></span>
        <ul>
               <li>Descripcion: {{$producto->descripcion }}</li>
               <li>Precio: {{$producto->precio}}</li>
               

            </ul>
        </div>
        <div class="card-action">
          <a href="#">Ver mas detalles</a>
        </div>
      </div>
    </div>
     @endforeach
  </div>
  
@endsection
