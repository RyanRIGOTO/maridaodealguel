<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Prestador;
use Illuminate\Database\Eloquent\Model;
class ControllerMaster extends Model
{
    protected $table = 'clientes_prestadores';   // nome da tabela no banco

    protected $fillable = [
        'name', 'email', 'password', // adicione outros campos que você tem
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function prestador()
    {
        return $this->belongsTo(Prestador::class, 'prestador_id');
    }
}