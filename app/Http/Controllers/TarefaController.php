<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Cliente;
use App\Models\Categoria;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $clientes = Cliente::all();
        return view('tarefas.create', compact('categorias', 'clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $request->validate([
            'categorias_id' => 'required|exists:categoria_id,id',
            'clientes_id' => 'required|exists:cliente_id,id',
            'dataFim' => 'date',
            'dataInicio' => 'date',
            'nomeTarefa' => 'required|string|max:100',
            'observacao' => 'required|string|max:255',
        ]);

        Tarefa::create($request->all());

        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
       $tarefa = Tarefa::findOrFail($id);
       // Retorna a view 'autores.show' e passa o autor como parâmetro
       return view('tarefas.show', compact('tarefa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $tarefa = Tarefa::findOrFail($id);
         // Retorna a view 'autores.edit' e passa o autor como parâmetro
         return view('tarefas.edit', compact('tarefa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $tarefa = Tarefa::findOrFail($id);

         $tarefa->update($request->all());
         // Redireciona para a rota 'autores.index' após salvar
         return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $tarefa = Tarefa::findOrFail($id);
        // Exclui o autor do banco de dados
        $tarefa->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('tarefas.index')->with('success', 'Tarefa excluída com sucesso!');
    }
}
