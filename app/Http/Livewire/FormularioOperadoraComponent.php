<?php

namespace App\Http\Livewire;

use App\Models\Operadora;
use Illuminate\Routing\Route;
use Livewire\Component;

class FormularioOperadoraComponent extends Component
{

    public Operadora $operadora;

    protected array $rules = [ //pipes
        'operadora.nombreOperadora' => 'required',
    ];

    public function mount(){
        $operadora_id = \Route::current()->parameter('id') ?? null;

        if($operadora_id){
            $this->operadora = Operadora::findOrFail($operadora_id);
        }else{
            $this->operadora = new Operadora();
        }


    }

    public function render()
    {
        return view('livewire.formulario-operadora-component');
    }

    public function guardar(){
        // Validar las reglas necesarias
        $this->validate();
        //Guardar en la base de datos
        $operadora_id = $this->operadora->id ?? null;
        //Validar la operacion de actualizar o crear
        if($operadora_id){
            $this->operadora->update();
        }else{
            $this->operadora->save();
        }
        //Limpiar los datos del formulario
        //SI es necesario
        //$this->telefono = new Telefono();
        //Redireccionamos a la tabla de numeros
        redirect(route("operadoras"));
    }

    public function cancelar(){
        redirect(route("operadoras"));
    }

    // Método para Eliminar Teléfono
    public function eliminar(){
        $this->operadora->delete();
        $this->cancelar();
    }
}
