<div>
<x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Datos de Nueva Operadora') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-jet-form-section submit="guardar">
            <x-slot name="title">
                Registro de Operadoras
            </x-slot>

            <x-slot name="description">
                Completar los campos solicitados
            </x-slot>

            <x-slot name="form">
                <!-- Solicitar nombre de la operadora -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="text" value="Nombre de Operadora" />
                    <x-jet-input id="operadora" type="text" class="mt-1 block w-full" wire:model.defer="operadora.nombreOperadora" />
                    <x-jet-input-error for="operadora.nombreOperadora" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="actions">
                <!-- Si en el requerimiento la ruta es "telefonos-eliminar" -->
                @if(request()->routeIs('operadoras-eliminar'))
                <x-jet-danger-button wire:click="eliminar" class="mr-4" wire:loading.attr="disabled">
                    Eliminar
                </x-jet-danger-button>
                @endif
                <x-jet-danger-button wire:click="cancelar" class="mr-4" wire:loading.attr="disabled">
                    Cancelar
                </x-jet-danger-button>
                @if(!request()->routeIs('operadoras-eliminar'))
                <x-jet-button wire:loading.attr="disabled">
                    Guardar
                </x-jet-button>
                @endif
            </x-slot>
        </x-jet-form-section>
    </div></div>
