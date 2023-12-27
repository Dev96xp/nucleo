{{-- Se estiende l aplantilla LTEAdmin para administrador --}}
@extends('adminlte::page')

@section('codersfree', 'Dashboard')

@section('content_header')
    <h1>Crear nuevo role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Para abrir un formulario con LaravelCollective --}}
                {{-- esto incluye metodo por defult POST y @csrf --}}
            {!! Form::open(['route' => 'admin.roles.store']) !!}

            {{-- La parte aqui incluida se comparte, se reutiliza     --}}
            @include('admin.roles.partials.form')


                {!! Form::submit('Crear Role', ['class' =>'btn btn-primary mt-2']) !!}

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