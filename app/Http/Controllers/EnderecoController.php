<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Endereco;

class EnderecoController extends Controller
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
            $enderecos = DB::select('SELECT * FROM Enderecos');
            return view("Endereco/index")->with("enderecos", $enderecos)->with("message", $message);
        } catch (\Throwable $th) {
            return view("Endereco/index")->with("enderecos", [])->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Endereco/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $endereco = new Endereco();
            $endereco->Users_id = 1;
            $endereco->bairro = $request->bairro;
            $endereco->logradouro = $request->logradouro;
            $endereco->numero = $request->numero;
            $endereco->complemento = $request->complemento;
            $endereco->save();
            return redirect()->route("endereco.index")->with("message", ["Endereço salvo com sucesso.", "success"]);
        } catch (\Throwable $th) {
            return redirect()->route("endereco.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $enderecos = DB::select('SELECT * from Enderecos WHERE id = ?', [$id]);
            if (count($enderecos) == 1) {
                return view("Endereco/show")->with("endereco", $enderecos[0]);
            }
            return redirect()->route("endereco.index")->with("message", ["Endereço $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("endereco.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $endereco = Endereco::find($id);
            if (isset($endereco)) {
                return view("Endereco/edit")->with("endereco", $endereco);
            }
            return redirect()->route("endereco.index")->with("message", ["Endereço $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("endereco.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $endereco = Endereco::find($id);
            if (isset($endereco)) {
                $endereco->bairro = $request->bairro;
                $endereco->logradouro = $request->logradouro;
                $endereco->numero = $request->numero;
                $endereco->complemento = $request->complemento;
                $endereco->update();
                return redirect()->route("endereco.index")->with("message", ["Endereço atualizado com sucesso.", "success"]);
            }
            return redirect()->route("endereco.index")->with("message", ["Endereço $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("endereco.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $endereco = Endereco::find($id);
            if (isset($endereco)) {
                $endereco->delete();
                return redirect()->route("endereco.index")->with("message", ["Endereço $id removido com sucesso.", "success"]);
            }
            return redirect()->route("endereco.index")->with("message", ["Endereço $id não encontrado.", "warning"]);
        } catch (\Throwable $th) {
            return redirect()->route("endereco.index")->with("message", [$th->getMessage(), "danger"]);
        }
    }
}
