@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado Categorias</h1>
@stop

@section('content')

<a href="Category/create" class="btn btn-success" style="float: right">Nueva Categoría</a>
<br>
<table class="table table-success table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $row)
        <tr>
            <td width="5%">{{ $row->id}}</td>
            <td width="20%">{{ $row->nombre}} </td>
            <td width="20%">{{ $row->descripcion}} </td>
            <td width="20%">
                <form action="{{route('Category.destroy',$row->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/Category/{{$row->id}}/edit" class="btn btn-info">Editar</a>
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
