<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/categoria/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Categoria</title>
    </head>
    <body>
        <div class="container">
            <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome da categoria:</label>
                    <input type="text" name="nomeCategoria" value="{{ $categoria->nomeCategoria }}">
                </div>
                <button type="submit" name="salvarCategoria" class="btn btn-success">Salvar</button>
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>    
            </div>
            </form>
        </div>
    </body>
</x-app-layout>

