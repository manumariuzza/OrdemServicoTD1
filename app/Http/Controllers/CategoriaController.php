<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $search = $request->input('search');
       $categorias = Categoria::where('nomeCategoria', 'like', '%'.$search.'%')
                        ->paginate(10);
                        
       return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
       return view ('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomeCategoria'=>'required|max:100',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // Encontra um autor no banco de dados com o ID fornecido
       $categoria = Categoria::findOrFail($id);
       // Retorna a view 'autores.show' e passa o autor como parâmetro
       return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $categoria = Categoria::findOrFail($id);
         // Retorna a view 'autores.edit' e passa o autor como parâmetro
         return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->nomeCategoria = $request->input('nomeCategoria');
        
        $categoria->save();
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $categoria = Categoria::findOrFail($id);
        // Exclui o autor do banco de dados
        $categoria->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('categorias.index');
    }
}
