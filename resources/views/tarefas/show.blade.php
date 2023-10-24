<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/tarefa.css') }}">
        <h1>Detalhes da Tarefa </h1>
        <ul>
            <li><strong>ID:</strong> {{ $tarefa->id }}</li>
            <li><strong>Nome Tarefa:</strong> {{ $tarefa->nomeTarefa }}</li>
            <li><strong>Cliente:</strong> {{  $tarefa->cliente_id }}</li>
            <li><strong>Categoria:</strong> {{  $tarefa->categoria_id }}</li>
            <li><strong>Observação:</strong> {{ $tarefa->observacao }}</li>
            <li><strong>Data Início:</strong> {{ $tarefa->dataInicio }}</li>
            <li><strong>Data Fim:</strong> {{ $tarefa->dataFim }}</li>
        </ul>
        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>
