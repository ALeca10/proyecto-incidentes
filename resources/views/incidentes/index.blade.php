<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registro de Incidentes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action=" {{ route('incidentes.store') }} ">

                        @csrf

                        <label for="title" class="mb-3 block text-base font-medium text-[#07074D]">
                            Título
                        </label>
                        <textarea name="titulo" class="block w-full rounded-md border-gray-300">
                            {{-- {{ old('titulo') }} --}}
                        </textarea>
                        <x-input-error :messages="$errors->get('titulo')"/> <br>


                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="date"class="mb-3 block text-base font-medium text-[#07074D]">
                                Fecha del incidente
                                </label>
                                <input type="date" name="fecha_incidente" id="date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                />
                            </div>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('fecha_incidente')"/>

                        <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                            Descripción
                        </label>
                        <textarea name="descripcion" class="block w-full rounded-md border-gray-300">
                        </textarea>
                        <x-input-error :messages="$errors->get('descripcion')"/><br>

                        <x-primary-button class="">Enviar</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>