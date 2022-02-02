@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1 class=" text-md-center">Inicio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
           <h2 class="card-tittle"> Bienvenido compañero</h2>     
        <div>
        
        <div class="card-body">
            <p>Vamos a empezar a trabajar</p>
        <div>

    </div>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop