<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    protected $table = 'categorias';


    protected $fillable =
    [
        'nome',
        'user_id'
    ];

    protected $rules =
    [

        'nome' => 'required|min:4'

    ];



    public function user() {
        return $this->belongsTo(User::class);
    }

    public function produto() {
        return $this->hasMany(Produto::class);
    }
}
