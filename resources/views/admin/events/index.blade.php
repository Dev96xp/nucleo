{{-- Se estiende l aplantilla LTEAdmin para administrador --}}
@extends('adminlte::page')

@section('codersfree', 'Dashboard')

@section('content_header')
    <h1>Agenda XP 2024</h1>
@stop

@section('content')


    <x-admin-layout>
        <div>
            @livewire('schedule')
        </div>
    </x-admin-layout>


@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script>
        // console.log('Hi!');
    </script>

@stop
