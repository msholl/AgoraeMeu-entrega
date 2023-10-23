<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class ClientesTable extends Component
{
    public $search = '';

    public function render()
    {
        $result = [];
        if (strlen($this->search) > 0) {
            $result = Cliente::where('nome', 'like', '%' . $this->search . '%')->get();
        }
//        dd($result);
        return view('livewire.clientes-table')->with([
//            'clientes' => Cliente::all(),
            'search' => $this->search,
            'clientes' => ($result != []) ? $result : Cliente::all(),
        ]);
    }

    public function refresh()
    {

    }


}
