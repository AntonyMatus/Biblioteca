@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>PANEL ADMINISTRATIVO</h1>
@stop

@section('content')
<div class="row">
    <div class="col m-b-30">
    <div class="card ">
    <div class="text-center card-body">
    <div class="text-success">
    <div class="avatar avatar-sm ">
    <span class="avatar-title rounded-circle badge-soft-success"><i class="mdi mdi-home mdi-18px"></i> </span>

    </div>
    <h6 class="m-t-5 m-b-0">&nbsp;</h6>
    </div>


    <div class=" text-center">
        <h1 style="text-align: center">{{$libros}}</h1>
    <h3 style="font-size: 19px">LIBROS</h3>
    </div>
    <div class="text-overline ">

    </div>
    </div>
    </div>
    </div>
    <div class="col m-b-30">
    <div class="card ">
    <div class="   text-center card-body">
    <div class="text-danger   ">
    <div class="avatar avatar-sm ">
    <span class="avatar-title rounded-circle badge-soft-danger"><i class="mdi mdi-cart mdi-18px"></i> </span>

    </div>
    <h6 class="m-t-5 m-b-0">&nbsp;</h6>
    </div>


    <div class=" text-center">
        <h1 style="text-align: center">{{$categorias}}</h1>
    <h3 style="font-size: 19px">CATEGORÍAS</h3>
    </div>
    <div class="text-overline "></div>
    </div>
    </div>
    </div>

    <div class="col d-lg-block d-none m-b-30">
    <div class="card ">
    <div class="   text-center card-body">
    <div class="text-danger   ">
    <div class="avatar avatar-sm ">
    <span class="avatar-title rounded-circle badge-soft-danger"><i class="mdi mdi-account mdi-18px"></i> </span>

    </div>
    <h6 class="m-t-5 m-b-0">&nbsp;</h6>
    </div>


    <div class=" text-center">
        <h1 style="text-align: center">{{$user }}</h1>

    <h3 style="font-size: 17px">Usuarios Registrados</h3>
    </div>
    <div class="text-overline "></div>
    </div>
    </div>
    </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
