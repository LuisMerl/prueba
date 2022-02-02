@extends('adminlte::page')

@section('title', 'Empleado')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
           <h1 class="card-tittle text-md-center"> Empleados </h1> 

        <div>

        @can('empleado.home.create')
        <a href="{{ url('empleado/create')}}" class="btn btn-danger"> Registrar nuevo Empleado</a>
        @endcan

        <div class="card-body">
            <table class="table table-light">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach( $empleados as $empleado)
                    <tr>
                        <td> {{ $empleado -> id}}</td>
                        <td> {{ $empleado -> Nombre}}</td>
                        <td> {{ $empleado -> Apellidos}}</td>
                        <td> {{ $empleado -> Correo}}</td>
                        <td>
                            <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-dark">
                                Editar
                            </a> | 
                            
                        @can('empleado.home.destroy')
                        <form  class="d-inline "  action="{{url('/empleado/'.$empleado->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')"
                             value="Borrar">
                        @endcan
                        
                        
                        </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <div>

    </div>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop