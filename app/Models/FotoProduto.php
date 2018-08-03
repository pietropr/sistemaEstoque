<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotoProduto extends Model
{
    protected $table = 'produtos_fotos';



    protected $fillable =
    [

        'caminho',
        'produto_id'

    ];





    public function produto() {
        return $this->belongsTo(Produto::class);
    }
}
