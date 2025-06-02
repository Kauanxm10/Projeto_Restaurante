<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Produto;
use App\Models\TipoProduto;

class ProdutoController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth:web");
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $message = Session::get("message"); // Essa variável existirá quando o método for chamado por redirect com with
            $produtos = DB::select("SELECT  Produtos.id, 
                                            Produtos.nome,
                                            Produtos.preco,
                                            Tipo_Produtos.descricao
                                    FROM Produtos
                                    JOIN Tipo_Produtos ON Tipo_Produtos_id = Tipo_Produtos.id
                                    ORDER BY Tipo_Produtos.id");
            return view("Produto/index")->with("produtos", $produtos)->with("message", $message);
        } catch (\Throwable $th) {
            return view("Produto/index")->with("produtos", [])->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $tipoProdutos = DB::select("SELECT * FROM Tipo_Produtos");
            return view("Produto/create")->with("tipoProdutos", $tipoProdutos);
        } catch (\Throwable $th) {
            return redirect()->route("produto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $produto = new Produto();
            $produto->nome = $request->nome;
            $produto->preco = $request->preco;
            $produto->Tipo_Produtos_id = $request->Tipo_Produtos_id;
            $produto->ingredientes = $request->ingredientes;

            // Verifica se uma imagem foi enviada e a armazena
            if ($request->hasFile('imagem')) {
                $imagem = $request->file('imagem');
                // use App\Models\TipoProduto;
                $descricao = TipoProduto::find($produto->Tipo_Produtos_id)->descricao;
                $nomeImagem = $descricao . '-' . $produto->nome . '-' . date("Y-m-d-") . microtime() . '.' . $imagem->getClientOriginalExtension();
                $caminhoImagem = public_path("img\\$descricao"); // Pasta onde as imagens serão armazenadas
                $imagem->move($caminhoImagem, $nomeImagem);
                // Salva o caminho da imagem no banco de dados
                $produto->urlImage = "/img/$descricao/$nomeImagem";
            } else {
                $produto->urlImage = "/img/default.png"; // url de imagem padrão
            }

            $produto->save();
            return redirect()->route("produto.index")->with("message", ["O produto foi cadastrado com sucesso", "success"]);
        } catch (\Throwable $th) {
            return redirect()->route("produto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $produtos = DB::select("SELECT Produtos.*,
                                           Tipo_Produtos.descricao
                                    FROM Produtos
                                    JOIN Tipo_Produtos ON Produtos.Tipo_Produtos_id = Tipo_Produtos.id
                                    WHERE Produtos.id =  ?", [$id]);
            if (count($produtos) == 1) {
                return view("Produto/show")->with("produto", $produtos[0]);
            }
            return redirect()->route("produto.index")->with("message", ["Produto $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("produto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $produto = Produto::find($id);
            $tipoProdutos = TipoProduto::all();
            if (isset($produto)) {
                return view("Produto/edit")->with("produto", $produto)->with("tipoProdutos", $tipoProdutos);
            }
            return redirect()->route("produto.index")->with("message", ["Produto $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("produto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $produto = Produto::find($id); // retorna o obj do tipo Model ou null
            if (isset($produto)) {
                $produto->nome = $request->nome;
                $produto->preco = $request->preco;
                $produto->Tipo_Produtos_id = $request->Tipo_Produtos_id;
                $produto->ingredientes = $request->ingredientes;

                // Se a imagem foi enviada
                if ($request->hasFile('imagem')) {
                    $imagem = $request->file("imagem"); // Pegando um dado do request e colocando dentro de uma variável
                    $descricao = TipoProduto::find($produto->Tipo_Produtos_id)->descricao; // pega a descricao do tipo e salvo em uma variável
                    $nomeImagem = $descricao . '-' . $produto->nome . '-' . date("Y-m-d-") . microtime() . '.' . $imagem->getClientOriginalExtension(); // variavel que controla o nome do arquivo que será salvo
                    $caminhoImagem = public_path("img\\$descricao");
                    $imagem->move($caminhoImagem, $nomeImagem);
                    if (file_exists(public_path($produto->urlImage)) && $produto->urlImage != "/img/default.png") {
                        unlink(public_path($produto->urlImage));
                    }
                    $produto->urlImage = "/img/$descricao/$nomeImagem";
                }

                $produto->update();
                return redirect()->route("produto.index")->with("message", ["Produto $id atualizado com sucesso", "success"]);
            }
            return redirect()->route("produto.index")->with("message", ["Produto $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("produto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $produto = Produto::find($id);
            if (isset($produto)) {
                $produto->delete();
                if (file_exists(public_path($produto->urlImage)) && $produto->urlImage != "/img/default.png") {
                    unlink(public_path($produto->urlImage));
                }
                return redirect()->route("produto.index")->with("message", ["Produto $id removido com sucesso.", "success"]);
            }
            return redirect()->route("produto.index")->with("message", ["Produto $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("produto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }
}
