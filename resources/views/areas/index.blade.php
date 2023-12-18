@extends('adminlte::page')

@section('title', 'Zonas')

@section('content_header')
<x-app-layout>
    <h1>{{ __("Registro de zonas") }}</h1>
@stop

@section('content')
@section('plugins.Datatables', true)

    <form method="POST" action=" {{ route('areas.store') }} ">
        @csrf
        {{-- With label, invalid feedback disabled and form group class --}}
        <div class="row">

            <x-adminlte-input name="lugar" placeholder="Nombre de la zona"
                fgroup-class="col-md-3" disable-feedback/>

            {{-- Themes + icons --}}
            <x-primary-button class="" icon="fas fa-plus">Agregar</x-primary-button>
        </div>
    </form> <br>

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table1" :heads="$heads" beautify hoverable>
        @foreach($areas as $area)
            <tr>
                <td>{{ $area ->id }}</td>
                <td>{{ $area ->lugar }}</td>
            </tr>

        @endforeach
    </x-adminlte-datatable>
</x-app-layout>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop