<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/categoria/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categoria') }}
        </h2>
    </x-slot>
    <section class="author-details">
        <div class="author-content">
            <div class="author-meta">
                <span class="author-label">ID:</span>
                <span class="author-info">{{ $categoria->id }}</span>
            </div>
            <div class="author-meta">
                <span class="author-label">Nome:</span>
                <span class="author-info">{{ $categoria->nomeCategoria }}</span>
            </div>
        </div>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
    </section>
</x-app-layout>