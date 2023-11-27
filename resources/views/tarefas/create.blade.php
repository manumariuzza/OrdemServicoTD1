<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/tarefas/create.css') }}">
    </head>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Cadastro de Tarefa') }}
            </h2>
        </x-slot>
        <body>
            <div class="container">
                <form action="{{ route('tarefas.store') }}" method="POST">
                    <!-- Token CSRF para proteção contra ataques CSRF -->
                    @csrf
                    <div class="form-group">
                        <label for="nomeTarefa">Nome da Tarefa:</label>
                        <input type="text" name="nomeTarefa" required>
                    </div>
                    <div class="form-group">
                        <label for="observacao">Observação:</label>
                        <input type="text" name="observacao" required>
                    </div>
                    <div class="form-group">
                        <label for="cliente_id">Cliente</label>
                        <select class="form-control" name="cliente_id" required>
                            <option value="">Selecione um cliente</option>
                            @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="categoria_id">Categoria</label>
                        <select class="form-control" name="categoria_id" required>
                            <option value="">Selecione uma categoria</option>
                            @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nomeCategoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="dataInicio">Data Início:</label>
                        <input type="date" name="dataInicio" required>
                    </div>
                    <div class="form-group">
                        <label for="dataFim">Data Fim:</label>
                        <input type="date" name="dataFim" required>
                    </div>
                    <button type="submit"class="btn btn-success">Salvar</button>
                    <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
            </div>
        </body>
</x-app-layout>