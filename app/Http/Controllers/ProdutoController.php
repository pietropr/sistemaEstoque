<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\FotoProduto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{

    protected $produto;

    public function __construct(Produto $produto) {



        $this->produto = $produto;
        $this->middleware('restrito');


    }

    public function index()
    {

        $produtos = $this->produto->all();

        return view('painel.produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.produtos.novo')->with('categorias', Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $dados = $request->except('_token', 'foto');


        $insert = $this->produto->create($dados);

        if($insert) {

            foreach($foto as $f) {
                $nameFile = null;

                if($f && $f->isValid()) {
                    $name = uniqid(date('HisYmd'));

                    $extensao = $f->extension();

                    $nameFile = "{$name}.{$extensao}";

                    $upload = $f->storeAs('produtos' . '/produto-' . $insert->id, $nameFile);

                    if($upload) {
                        $fotoProduto = new FotoProduto();

                        $fotoProduto->insert([
                            'caminho' => $nameFile,
                            'produto_id' => $insert->id,
                        ]);
                    }
                }
            }

            return Redirect::to('/painel/produtos/')->with('success', 'Produto cadastrado com sucesso!');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fotos = DB::table('produtos_fotos')
                   ->where('produto_id','=', $id)->get();
        $produto = $this->produto->find($id);
        return view('painel.produtos.ver', compact('produto', 'fotos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
