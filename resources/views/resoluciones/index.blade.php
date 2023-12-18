@extends('adminlte::page')

@section('title', 'Resoluciones')

@section('content_header')
    <h1>{{ __("Administrar incidentes") }}</h1>
@stop

@section('content')
@section('plugins.Datatables', true)

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads" beautify hoverable>
    @foreach($incidentes as $incidente)
        <tr>
            <td>{{ $incidente ->id }}</td>
            <td>{{ $incidente ->user->name }}</td>
            <td>{{ $incidente ->titulo }}</td>
            <td>{{ $incidente ->fecha_incidente }}</td>
            <td>{{ $incidente ->estado }}</td>
        </tr>

    @endforeach
</x-adminlte-datatable>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
