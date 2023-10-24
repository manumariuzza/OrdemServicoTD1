<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/categoria/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Categorias</h1> --}}
        <br>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary">Novo Autor</a>
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
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

