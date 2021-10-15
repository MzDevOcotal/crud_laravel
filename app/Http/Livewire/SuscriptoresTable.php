<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\SuscripModel;

class SuscriptoresTable extends DataTableComponent
{

       // Activando propiedad para validar el campo "Column" de la vista Operadora
       public bool $columnSelect = true;

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
            ->searchable()
            ->sortable(),

            Column::make('Suscriptor', 'nombreSuscriptor')
            ->searchable()
            ->sortable(),

            Column::make('Rifa', 'nombreRifa')
            ->searchable()
            ->sortable(),

            Column::make('Fecha Suscripción', 'fechaSuscripcion')
            ->searchable()
            ->sortable(),

            Column::make('Tipo Suscripcion', 'tipoSuscripcion')
            ->searchable()
            ->sortable(),

            Column::make('Precio Aplicación', 'precioDev')
            ->searchable()
            ->sortable(),

            Column::make('Costo Servidor', 'costoServidor')
            ->searchable()
            ->sortable(),

            Column::make('Saldo', 'Saldo')
            ->searchable()
            ->sortable(),

            Column::make('Observaciones', 'Observaciones')
            ->searchable()
            ->sortable(),
            Column::make("Tareas","tareas")

        ];
    }

    public function query(): Builder
    {
        return SuscripModel::query();
    }

    public function rowView(): string
    {
        return 'livewire.suscripciones.table-suscripciones-row';
    }

    public function editar($id){
        redirect(route("suscriptores-editar",['id' => $id]));
    }

    public function eliminar($id){
        redirect(route("suscriptores-eliminar",['id' => $id]));
    }
}
