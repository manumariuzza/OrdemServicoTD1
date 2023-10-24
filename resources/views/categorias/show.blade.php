<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/categoria.css') }}">
        <h1>Detalhes da Categoria</h1>
        <ul>
            <li><strong>ID:</strong> {{ $categoria->id }}</li>
            <li><strong>Nome:</strong> {{ $categoria->nomeCategoria }}</li>
        </ul>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>
