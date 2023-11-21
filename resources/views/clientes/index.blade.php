<x-app-layout>
        <link rel="stylesheet" href="{{ asset('css/cliente/index.css') }}">
        <script src="{{ asset('js/clientes.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container">
        {{-- <h1>Lista de Clientes</h1> --}}
        <form action="{{ route('clientes.index') }}" method="GET" class="search-form">
            <div style="text-align: right;">
                <div class="search-container">
                    <input type="text" name="search" placeholder="Pesquisar clientes..."
                        value="{{ request()->query('search') }}" class="search-input">
                    <button type="submit" class="search-button">Pesquisar</button>
                </div>
            </div>
        </form>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Incluir</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td class="colunas">{{ $cliente->id }}</td>
                    <td id="nome">{{ $cliente->nome }}</td>
                    <td id="email"> {{ $cliente->email}}</td>
                    <td id="tel"> {{ $cliente->tel}}</td>
                    <td id="endereco"> {{ $cliente->endereco}}</td>
                    <td>
                        <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" id="deletarForm_{{ $cliente->id }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger"onclick="deletarCliente({{ $cliente->id }}, '{{ $cliente->nome }}')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $clientes->links() !!}
    </div>
</x-app-layout>