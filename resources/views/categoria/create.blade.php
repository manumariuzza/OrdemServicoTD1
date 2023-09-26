<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="categoria_create.css" media="screen" />
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nova categoria') }}
        </h2>
    </x-slot>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="{{ route('categoria.store') }}" method="POST">
      <!-- Token CSRF para proteção contra ataques CSRF -->
       @csrf
       <div class="form-group">
           <label for="nome">Nome da categoria:</label>
           <input type="text" name="nomeCategoria">
       </div>
       <button type="submit" name="salvarCategoria" class="btn btn-success">Salvar</button>
       <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>

