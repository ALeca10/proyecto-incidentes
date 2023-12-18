@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ __("Bienvenido,") }} {{ auth()->user()->name }}!</h1>
    <p>{{ __("Para publicar un incidente, por favor diríjase a  la pestaña incidentes") }}</p>
@stop

@section('content')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




{{-- antiguo Dashboard --}}

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido,") }} {{ auth()->user()->name }}! <br>
                    {{ __("Para publicar un incidente, por favor diríjase a  la pestaña incidentes") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
