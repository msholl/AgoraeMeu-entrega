<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'pagamento',
        'envio',
        'vendedor',
        'descricao',
        'valor',
        'status',
        'data',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function getStatusColorAttribute(){

        return [
            'aguardando' => 'amber',
            'enviado' => 'green',
            'cancelado' => 'red',
        ][$this->status] ?? 'gray';

    }
}
