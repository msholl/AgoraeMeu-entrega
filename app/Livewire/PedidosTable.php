<?php

namespace App\Livewire;

use App\Models\Pedido;
use Livewire\Component;

class PedidosTable extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.pedidos-table')->with([
            'pedidos' => \DB::table('pedidos')
                ->join('clientes', 'pedidos.cliente_id', '=', 'clientes.id')
                ->select('pedidos.*', 'clientes.nome as cliente_nome')
                ->where('pedidos.descricao', 'like', '%' . $this->search . '%')
                ->orWhere('clientes.nome', 'like', '%' . $this->search . '%')
                ->get(),
//            'pedidos' => Pedido::all(), // 'pedidos' => Pedido::where('nome', 'like', '%' . $this->search . '%')->get(),
            'search' => $this->search,
        ]);
    }
}
