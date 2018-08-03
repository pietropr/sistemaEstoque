<?php

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'Produto 1',
            'preco' => 50,
            'descricao' => 'Descricao teste Produto 1',
            'informacoes' => 'Informação completa do produto 1',
            'categoria_id' => 1
        ]);
    }
}
