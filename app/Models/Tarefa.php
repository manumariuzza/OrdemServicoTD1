<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $table = 'tarefas';
    protected $fillable = [ 'categorias_id', 'clientes_id', 'dataFim','dataInicio', 'nomeTarefa', 'observacao'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
