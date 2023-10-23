<?php

namespace App\Livewire;

use Livewire\Component;

class ClienteDropDown extends Component
{
    public function render()
    {
        return view('livewire.cliente-drop-down')->with([
            'clientes' => \App\Models\Cliente::all(),
        ]);
    }
}
