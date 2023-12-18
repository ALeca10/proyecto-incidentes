@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

    <div class="row justify-content-between">
        <h1>
            {{ __('Nuevos Incidentes') }}
        </h1>
    
        <a href="/incidentes" class="btn btn-warning">
            <i class="fas fa-plus"></i> Nuevo ticket
        </a>
        
    </div>

@stop

@section('content')
<x-app-layout>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mt-6 bg-black dark:bg-gray-800 shadow-sm rounded-lg divide-y dark:divide-gray-900">

                        @foreach ($incidentes as $incidente)

                            <div class="p-6 flex space-x-2">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="white" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>

                                <div class="flex-1">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span class="text-gray-800 dark:text-gray-200">
                                                {{ $incidente->user->name }}
                                            </span>
                                            <small class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                                {{ $incidente->created_at->format('j M Y, g:i a') }}
                                            </small>

                                            @if ($incidente->created_at != $incidente->updated_at)
                                                <small class="text-sm text-gray-600 dark:text-gray-400">
                                                    &middot; {{'editado'}}
                                                </small>
                                            @endif
                                        </div>
                                    </div>
                                    <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">{{$incidente->descripcion}}</p>
                                </div>

                                @if (auth()->user()->is($incidente->user))

                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('incidentes.edit', $incidente)"> {{('Editar')}}</x-dropdown-link>
                                    </x-slot>
                                </x-dropdown>

                                @endif

                            </div>

                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

