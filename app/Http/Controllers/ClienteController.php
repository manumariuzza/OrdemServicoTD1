<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'endereco' => $request->input('endereco')
        ]);
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
       $cliente = Cliente::findOrFail($id);
       // Retorna a view 'autores.show' e passa o autor como parâmetro
       return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $cliente = Cliente::findOrFail($id);
         // Retorna a view 'autores.edit' e passa o autor como parâmetro
         return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $cliente = Cliente::findOrFail($id);
         
         $cliente->nome = $request->input('nome');
         $cliente->email = $request->input('email');
         $cliente->tel = $request->input('tel');
         $cliente->endereco = $request->input('endereco');

         $cliente->save();
         return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $cliente = Cliente::findOrFail($id);
        // Exclui o autor do banco de dados
        $cliente->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('clientes.index');
    }
}
