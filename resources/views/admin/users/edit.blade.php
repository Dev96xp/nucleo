{{-- Se estiende l aplantilla LTEAdmin para administrador --}}
@extends('adminlte::page')

@section('codersfree', 'Dashboard')

@section('content_header')
    <h1>Roles por usuario</h1>
@stop

@section('content')
    <div class="card">
       <div class="card-body">
            <h1 class="h5">Nombre:</h1>
            {{-- form-control - Hace que paresca un input --}}
            <p class="form-control">{{$user->name}}</p>

            <h1 class="h5">Lista de roles</h1>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                {{-- Despliega todos los roles existentes, en la base datos --}}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
                {{-- Una vez desplegados los roles y selecionados por el usuario, se le reasignan para el usuario selecionado --}}
                {!! Form::submit('Asignar rol', ['class' =>'btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
       </div>


    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>console.log('Hi!'); </script>
@stop
