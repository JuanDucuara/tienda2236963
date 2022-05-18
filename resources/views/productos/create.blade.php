@extends('layouts.principal')

@section ('contenido')
<div class="row">
  <h1 class=" grey-text text-darken-1">Nuevo Producto</h1>
</div>
<div class="row">
    <form method="POST"
       action="{{route('productos.store') }}"
       class="col s12">
    @csrf  
    @if(session('mensaje'))
    <div class="row">
      <div class="col s8">
        <span class="orange-text text-darken-2">
          {{session ('mensaje')}}
</span>
      </div>
    </div>



    @endif
    
      <div class="row">
        <div class="input-field col s8">
          <input placeholder="Nombre de Producto" 
          id="nombre" 
          type="text" 
          class="validate"
          name="nombre">
          <label for="Nombre">Nombre de Producto</label>

          <span>{{ $errors->first('nombre') }}</span>

        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <textarea class="materialize-textarea"
             id="descripcion"
             name="descripcion">
              
          </textarea>
          <label for="descripcion">Descripcion</label>
          <span>{{ $errors->first('descripcion') }}</span>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input 
          id="precio"
          name="precio" 
          type="text"  
          class="validate">
          <label for="Precio">Precio</label>

          <span>{{ $errors->first('precio') }}</span>

        </div>
        <div class="file-field input-field col s8">
      <div class="btn">
        <span>Imagen de Producto</span>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      </div>
      <div class="row">
      <div class="input-field col s8">
      <select name="categoria">
      <option value="" disabled selected>Elija categoria</option>
      @foreach($categorias as $categoria)
      <option value="{{ $categoria->id}}">
        {{ $categoria->nombre}}
      </option>
      @endforeach
    </select>
    <label>Categorias Disponibles</label>
    <span>{{ $errors->first('categoria') }}</span>

      </div>
      </div>
      <div class="row">
      <div class="input-field col s8">
      <select name="Marca">
      <option value="" disabled selected>Elija Marca</option>
      @foreach($marcas as $marca)
      <option value="{{ $marca->id}}">
        {{ $marca->nombre}}
      </option>
      @endforeach
    </select>
    <label>Marcas Disponibles</label>
    <span>{{ $errors->first('Marca') }}</span>
      </div>
      </div>
      <div class="row">
      <button class="btn waves-effect waves-light"
       type="submit" 
       >Guardar
      </button>
      </div>
    </form>
  </div>
  @endsection