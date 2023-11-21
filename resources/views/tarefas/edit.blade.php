<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/tarefas/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Tarefa</title>
    </head>
    <body>
        <div class="container">
            <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nomeTarefa">Nome da Tarefa:</label>
                    <input type="text" name="nomeTarefa" value="{{ $tarefa->nomeTarefa }}">
                </div>
                <div class="form-group">
                    <label for="observacao">Observação:</label>
                    <input type="text" name="observacao" value="{{ $tarefa->observacao }}">
                </div>
                <div class="form-group">
                    <label for="cliente_id">Cliente:</label>
                    <input type="text" name="cliente_id" value="{{ $tarefa->cliente_id }}">
                </div>
                <div class="form-group">
                    <label for="categoria_id">Categoria:</label>
                    <input type="text" name="categoria_id" value="{{ $tarefa->categoria_id }}">
                </div>
                <div class="form-group">
                    <label for="dataFim">Data Fim:</label>
                    <input type="date" name="dataFim" value="{{ $tarefa->dataFim }}">
                </div>
                <div class="form-group">
                    <label for="dataInicio">Data Início:</label>
                    <input type="date" name="dataInicio" value="{{ $tarefa->dataInicio }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>