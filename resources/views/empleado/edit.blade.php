@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Empleado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
           <h1 class="card-tittle"> Actualizacion de Empleado </h1>     
        <div>
        
        <div class="card-body">
            <form action=" {{url ('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                {{method_field('PATCH')}}
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