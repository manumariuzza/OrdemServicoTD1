<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/cliente/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cliente</title>
    </head>
    <body>
        <div class="container">
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $cliente->nome }}">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" value="{{ $cliente->email }}">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" value="{{ $cliente->endereco }}">
                </div>
                <div class="form-group">
                    <label for="tel">Telefone:</label>
                    <input type="text" name="tel" value="{{ $cliente->tel }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>