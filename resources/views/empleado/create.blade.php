@extends('adminlte::page')

@section('title', 'Empleado')

@section('content_header')
    <h1 class=" text-md-center">Nuevo Empleado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
           <h3 class="card-tittle">  Creacion de empleado </h3>     
        <div>
        
        <div class="card-body">
            <form action=" {{url ('/empleado')}}" method="post" enctype="multipart/form-data" >
                @csrf
                
                @include('empleado.form');

            </form>
        <div>

    </div>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop