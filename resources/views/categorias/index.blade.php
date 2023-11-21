<x-app-layout>
        <link rel="stylesheet" href="{{ asset('css/categoria/index.css') }}">
        <script src="{{ asset('js/categorias.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container">
        {{-- <h1>Lista de Categorias</h1> --}}
        <form action="{{ route('categorias.index') }}" method="GET" class="search-form">
            <div style="text-align: right;">
                <div class="search-container">
                    <input type="text" name="search" placeholder="Pesquisar categorias..."
                        value="{{ request()->query('search') }}" class="search-input">
                    <button type="submit" class="search-button">Pesquisar</button>
                </div>
            </div>
        </form>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary">Incluir</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td class="colunas">{{ $categoria->id }}</td>
                    <td id="nome">{{ $categoria->nomeCategoria }}</td>
                    <td>
                        <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('categorias.destroy', $categoria->id) }}" id="deletarForm_{{ $categoria->id }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger"onclick="deletarCategoria({{ $categoria->id }}, '{{ $categoria->nomeCategoria }}')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $categorias->links() !!}
    </div>
</x-app-layout>