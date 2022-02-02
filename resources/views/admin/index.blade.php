@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
<h1 class="text-md-center">Hola</h1>
@stop

@section('content')
<h2>aaa</h2>

<div class="card">
    <div class="card-body">
            Bienvenidos
    </div>
</div>        


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
