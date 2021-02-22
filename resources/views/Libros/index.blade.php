@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado Categorias</h1>
@stop

@section('content')

<a href="Libros/create" class="btn btn-success" style="float: right">Nueva Categoría</a>
<br>
<table class="table table-success table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Autor</th>
            <th scope="col">Prestamista</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($libros as $row)
        <tr>
            <td width="5%">{{$row->id}} </td>
            <td width="20%">{{ $row->nombre}} </td>
            <td width="20%">{{ $row->autor}} </td>
            <td width="20%">{{ $row->user->name}} </td>
           @if($row->status == 0)
            <td width="20%"><p class="btn btn-info">Disponible</p></td>
            @else
            <td width="20%"><p class="btn btn-danger">No Disponible</p></td>
            @endif
            <td width="20%">
                <form action="{{route('Libros.destroy',$row->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/Libros/{{$row->id}}/edit" class="btn btn-info">Editar</a>
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
