<div>
<x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de Suscriptores') }}
        </h2>
    </x-slot>

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <a href="{{route('operadoras-tareas')}}"
           class="p-3 bg-blue-500 text-white rounded-2xl">
            Agregar Suscriptors
        </a>
    </div>

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        @livewire('suscriptores-table')
    </div>
</div>
