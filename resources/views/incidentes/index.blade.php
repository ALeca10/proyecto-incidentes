@extends('adminlte::page')
@section('title', 'Registro de Incidente')

@section('content_header')
<x-app-layout>
        <h1>
            {{ __('Registro de Incidentes') }}
        </h1>

@stop

@section('content')

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action=" {{ route('incidentes.store') }} ">

                        @csrf

                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/3 mb-3">
                                <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                                Título
                                </label>
                                <textarea name="titulo" class="block w-full rounded-md border-gray-300"></textarea>
                                <x-input-error :messages="$errors->get('titulo')"/>
                            </div>
                            
                            <div class="w-full sm:w-1/4 mb-3 ml-20">
                                <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Fecha del incidente
                                </label>
                                <input type="date" name="fecha_incidente" id="date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                <x-input-error :messages="$errors->get('fecha_incidente')"/>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            
                                {{-- With prepend slot, label and data-placeholder config --}}
                                <div class="w-full sm:w-1/3 mb-3">
                                    <x-adminlte-select2 name="categoria_id" label="Categoría" igroup-size="lg">
                                        <x-slot name="prependSlot"></x-slot>
                                
                                        @foreach($categorias as $categoria)
                                            <option>{{ $categoria->nombre }}</option>
                                        @endforeach
                                    </x-adminlte-select2>
                                </div>
                                
                                <div class="w-full sm:w-1/3 mb-3 ml-20" >
                                    <x-adminlte-select2 name="area_id" label="Zona" igroup-size="lg">
                                        <x-slot name="prependSlot"></x-slot>

                                        @foreach($areas as $area)
                                            <option>{{ $area->lugar }}</option>
                                        @endforeach
                                    </x-adminlte-select2>
                                </div>
                        </div>

                        <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                        Descripción
                        </label>
                        <textarea name="descripcion" class="block w-full rounded-md border-gray-300"></textarea>
                        <x-input-error :messages="$errors->get('descripcion')"/><br>

                        <x-primary-button class="">Enviar</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@stop