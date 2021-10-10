
<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('id'))
    <x-livewire-tables::table.cell>
        {{ $row->id }}
    </x-livewire-tables::table.cell>
@endif

<!-- Si propiedad es verdadeta y el check está activo, que mande pintar los datos de la tabla -->
@if ($columnSelect && $this->isColumnSelectEnabled('nombreOperadora'))
    <x-livewire-tables::table.cell>
        {{ $row->nombreOperadora }}
    </x-livewire-tables::table.cell>
@endif


<!-- Este campo llama al archivo table-tareas.blade.php para dibujar los botones-->
@if ($columnSelect && $this->isColumnSelectEnabled('tareas'))
    <x-livewire-tables::table.cell>
        @include("livewire.operadoras.table-tareas", ["operadora" => $row])
    </x-livewire-tables::table.cell>
@endif



