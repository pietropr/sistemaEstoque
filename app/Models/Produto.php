<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';


    protected $fillable =
    [
        'nome',
        'preco',
        'descricao',
        'informacoes',
        'categoria_id',
        'foto'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function fotosProdutos()
    {
        return $this->hasMany(FotoProduto::class);
    }
}
