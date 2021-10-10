<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use App\Models\Operadora;

class TablaOperadora extends DataTableComponent
{
    // Activando propiedad para validar el campo "Column" de la vista Operadora
    public bool $columnSelect = true;

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
            ->searchable()
            ->sortable(),

            Column::make('Operadora', 'nombreOperadora')
            ->sortable()
            ->searchable(),
            Column::make("Tareas","tareas")
        ];
    }

    public function query()
    {
                // MEtodos para mostrar datos de las relaciones
        // Metodo 1
        //return Telefono::where('user_id', auth()->user()->id);

        // Metodo 2
        //return Telefono::whereRelation('user', 'user_id',auth()->user()->id);

        // Metopdo 3
        /*
         return Telefono::query()->whereHas('user', function (Builder $builder){
            return $builder->where('user_id',auth()->id());
         });
        */

        // Metodo 4

         //return User::findOrFail(auth()->user()->id)->telefono();

        // Metodo 5
        /*
        return Telefono::query()
            ->whereHas('user', fn(Builder $builder) => $builder->where('user_id', auth()->id()));
        */
        return Operadora::query();
    }

    public function rowView(): string
    {
        return 'livewire.operadoras.table-operadora-row';
    }

    public function editar($id){
        redirect(route("operadoras-editar",['id' => $id]));
    }

    public function eliminar($id){
        redirect(route("operadoras-eliminar",['id' => $id]));
    }
}

