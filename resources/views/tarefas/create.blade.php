<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
            body {
                background-color: #fff; /* Fundo branco */
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            label {
                display: block;
                font-weight: bold;
            }
            input[type="text"],
            input[type="date"] {
                width: 100%;
                padding: 8px;
                border: 1px solid #3a0d0d;
                border-radius: 4px;
            }
            .btn {
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                color: #fff;
            }
            .btn-success {
                background-color: #7FFFD4;
            }
            .btn-secondary {
                background-color: #6c757d;
            }
        </style>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastro de Tarefa') }}
        </h2>
    </x-slot>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('tarefas.store') }}" method="POST">
                    <!-- Token CSRF para proteção contra ataques CSRF -->
                    @csrf
                    <div class="form-group">
                        <label for="nomeTarefa">Nome da Tarefa:</label>
                        <input type="text" name="nomeTarefa" required>
                    </div>
                    <div class="form-group">
                        <label for="observacao">Observação:</label>
                        <input type="text" name="observacao" required >
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
                            <option value="">Selecione uma categorias</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nomeCategoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="dataFim">Data Fim:</label>
                        <input type="date" name="dataFim" required >
                    </div>
                    <div class="form-group">
                        <label for="dataInicio">Data Início:</label>
                        <input type="date" name="dataInicio" required>
                    </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
</x-app-layout>

