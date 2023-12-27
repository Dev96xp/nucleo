{{-- Se estiende l aplantilla LTEAdmin para administrador --}}
@extends('adminlte::page')

@section('codersfree', 'Dashboard')

@section('content_header')
    <h1>Editar Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Para abrir un formulario con LaravelCollective --}}
                {{-- esto incluye metodo por defult POST y @csrf --}}
            {{-- ANTES - {!! Form::open(['route' => 'admin.roles.store']) !!} --}}

            {{-- AHORA - AUTOMATICAMENTE RELLENA LOS CAMPOS CON LA INFORMQCION ADECUADA
                DEPENDEIENDO DEL ROLE SELECCIONADO--}}



            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

                {{-- ESTA PARTE SE COMBIRTIO EN UN COMPONENTE/ SE COMPARTE     --}}
                {{-- Despliega todo los permisos existentes PARA ESTE ROLL --}}
                @include('admin.roles.partials.form')

                {{-- Boton de Actualizar los permisos selecionados --}}
                {!! Form::submit('Actualizar Role', ['class' =>'btn btn-primary mt-2']) !!}

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