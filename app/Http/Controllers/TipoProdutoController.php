<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\TipoProduto;

class TipoProdutoController extends Controller
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
            $tipoProdutos = DB::select('SELECT * FROM Tipo_Produtos');
            return view("TipoProduto/index")->with("tipoProdutos", $tipoProdutos)->with("message", $message);
        } catch (\Throwable $th) {
            return view("TipoProduto/index")->with("tipoProdutos", [])->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("TipoProduto/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $tipoProduto = new TipoProduto();
            $tipoProduto->descricao = $request->descricao;
            $tipoProduto->save();
            return redirect()->route("tipoproduto.index")->with("message", ["TipoProduto salvo com sucesso.", "success"]);
        } catch (\Throwable $th) {
            return redirect()->route("tipoproduto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $tipoProdutos = DB::select('SELECT * from Tipo_Produtos WHERE id = ?', [$id]);
            if (count($tipoProdutos) == 1) {
                return view("TipoProduto/show")->with("tipoProduto", $tipoProdutos[0]);
            }
            return redirect()->route("tipoproduto.index")->with("message", ["TipoProduto $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("tipoproduto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $tipoProduto = TipoProduto::find($id);
            if (isset($tipoProduto)) {
                return view("TipoProduto/edit")->with("tipoProduto", $tipoProduto);
            }
            return redirect()->route("tipoproduto.index")->with("message", ["TipoProduto $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("tipoproduto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $tipoProduto = TipoProduto::find($id);
            if (isset($tipoProduto)) {
                $tipoProduto->descricao = $request->descricao;
                $tipoProduto->update();
                return redirect()->route("tipoproduto.index")->with("message", ["TipoProduto atualizado com sucesso.", "success"]);
            }
            return redirect()->route("tipoproduto.index")->with("message", ["TipoProduto $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("tipoproduto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $tipoProduto = TipoProduto::find($id);
            if (isset($tipoProduto)) {
                $tipoProduto->delete();
                return redirect()->route("tipoproduto.index")->with("message", ["TipoProduto $id removido com sucesso.", "success"]);
            }
            return redirect()->route("tipoproduto.index")->with("message", ["TipoProduto $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("tipoproduto.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }
}
