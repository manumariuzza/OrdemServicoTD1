<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ asset('css/tarefas/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tarefa') }}
        </h2>
    </x-slot>
    <section class="author-details">
        <div class="author-content">
            <div class="author-meta">
                <span class="author-label">ID:</span>
                <span class="author-info">{{ $tarefa->id }}</span>
            </div>
            <div class="author-meta">
                <span class="author-label">Tarefa:</span>
                <span class="author-info">{{ $tarefa->nomeTarefa }}</span>
            </div>
            <div class="author-meta">
                <span class="author-label">Cliente:</span>
                <span class="author-info">{{ $tarefa->cliente->nome }}</span>
            </div>
            <div class="author-meta">
                <span class="author-label">Categoria:</span>
                <span class="author-info">{{ $tarefa->categoria->nomeCategoria }}</span>
            </div>
            <div class="author-meta">
                <span class="author-label">Observação:</span>
                <span class="author-info">{{ $tarefa->observacao }}</span>
            </div>
            <div class="author-meta">
                <span class="author-label">Data Início:</span>
                <span class="author-info">{{ $tarefa->dataInicio }}</span>
            </div>
            <div class="author-meta">
                <span class="author-label">Data Fim:</span>
                <span class="author-info">{{ $tarefa->dataFim }}</span>
            </div>
        </div>
        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>
    </section>
</x-app-layout>