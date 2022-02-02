@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alet alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <p class="form-control">{{$user->name}}</p>
              <h2> Listado de Roles</h2>
            {!! Form::model($user, ['route' => ['admin.users.update', $user],'method' => 'put']) !!}    
                @foreach ($roles as $role)
                    <div>
                        <label>
                            
                            {!! Form::checkbox('roles[]', $role->id, null, ['class'=> 'mr-1']) !!}
                            {{$role ->name}}
                        
                        </label>
                    </div>
                @endforeach

                <div class="d-inline">
                {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
                
                {!! Form::close() !!}
                <a class=" btn btn-danger mt-2 " href="{{ url('users') }}"> Regresar</a>
                </dv>
        </div>

    </div>
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop