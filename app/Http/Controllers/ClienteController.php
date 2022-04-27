<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Cliente::all();
        return view('cliente', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $dados = $request->all();
        $request->validate([]);
        $registro = new Cliente();
        $registro->nomeCliente = $dados['nomeCliente'];
        $registro->codigoCliente = $dados['codigoCliente'];
        $registro->telefoneCliente = $dados['telefoneCliente'];
        $registro->idadeCliente = $dados['idadeCliente'];

        $registro->save();

        return \redirect()->route('cliente.home');
    }

    public function edit($id)
    {
        $registro = Cliente::find($id);
        return view('cliente-update', \compact('registro'));
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
       $registro = Cliente::find($id);
       $dados = $request->all();
       $rules = ([
        'nomeCliente'=>'required|min:5|max:50',
        'codigoCliente'=>'required|min:8|max:8',
        'telefoneCliente'=>'required|min:14|max:15',
        'idadeCliente'=>'required|min:2|max:2',
       ]);
       $registro->nomeCliente = $dados['nomeCliente'];
       $registro->codigoCliente = $dados['codigoCliente'];
       $registro->telefoneCliente = $dados['telefoneCliente'];
       $registro->idadeCliente = $dados['idadeCliente'];
       
       $request->validate($rules);
       $registro->update();

       return \redirect()->route('cliente.home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Cliente::find($id);
        $registro->delete();

        return \redirect()->route('cliente.home');
    }
}
