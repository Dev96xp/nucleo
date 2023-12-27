{{-- Se estiende l aplantilla LTEAdmin para administrador --}}
@extends('adminlte::page')

@section('codersfree', 'Dashboard')

@section('content_header')
    <h1>Projectos</h1>
@stop

@section('content')
    <x-admin-layout>
        <div class="grid grid-cols-10 gap-2">
            <div class="col-span-3">
                @livewire('admin.projects.projects-index')
            </div>
            <div class="col-span-6">
                @livewire('admin.projects.sections-index')
            </div>
            {{-- <div class="col-span-3">
                @livewire('admin.projects.items-index')
            </div> --}}
            <div class="col-span-1">
            </div>
        </div>
    </x-admin-layout>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
