<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';   // nome da tabela no banco

    protected $fillable = [
        'name', 'email', 'password', // adicione outros campos que você tem
    ];
}