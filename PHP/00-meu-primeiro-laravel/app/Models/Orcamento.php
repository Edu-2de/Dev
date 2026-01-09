<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = ['cliente', 'valor_hora', 'total_horas', 'valor_final'];
}
