
<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('id'))
    <x-livewire-tables::table.cell>
        {{ $row->id }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('nombreSuscriptor'))
    <x-livewire-tables::table.cell>
        {{ $row->nombreSuscriptor }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('nombreRifa'))
    <x-livewire-tables::table.cell>
        {{ $row->nombreRifa }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('fechaSuscripcion'))
    <x-livewire-tables::table.cell>
        {{ $row->fechaSuscripcion }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('tipoSuscripcion'))
    <x-livewire-tables::table.cell>
        {{ $row->tipoSuscripcion }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('precioDev'))
    <x-livewire-tables::table.cell>
        {{ $row->precioDev }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('costoServidor'))
    <x-livewire-tables::table.cell>
        {{ $row->costoServidor }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('Saldo'))
    <x-livewire-tables::table.cell>
        {{ $row->Saldo }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('Observaciones'))
    <x-livewire-tables::table.cell>
        {{ $row->Observaciones }}
    </x-livewire-tables::table.cell>
@endif


<!-- Este campo llama al archivo table-tareas.blade.php para dibujar los botones-->
@if ($columnSelect && $this->isColumnSelectEnabled('tareas'))
    <x-livewire-tables::table.cell>
        @include("livewire.suscripciones.table-tareas", ["suscripciones" => $row])
    </x-livewire-tables::table.cell>
@endif



