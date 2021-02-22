@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dar de Alta Nuevo Libro</h1>
@stop

@section('content')

<form action="/Libros" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Autor</label>
        <input id="autor" name="autor" type="text" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">status</label>&nbsp;&nbsp;&nbsp;
        <select name="status" id="status">
           <option value="0">Disponible</option>
           <option value="1">No Disponible</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <select name="categories_id" id="categories_id">
            @foreach ($categorias as $item)
             <option value="{{$item->id}}">{{$item->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Fecha de Publicación</label>
        <input id="fecha_publicacion" name="fecha_publicacion" type="date" class="form-control" tabindex="2" required>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Foto</label>
        <input id="foto" name="foto" type="file" class="form-control" tabindex="2" required>
    </div>
    <a href="/Category" class="btn btn-secondary" tabindex="3">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
