<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/tarefas/index.css') }}">
    <script src="{{ asset('js/tarefas.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container">
        {{-- <h1>Lista de Tarefas</h1> --}}
        <form action="{{ route('tarefas.index') }}" method="GET" class="search-form">
            <div style="text-align: right;">
                <div class="search-container">
                    <input type="text" name="search" placeholder="Pesquisar tarefas..."
                        value="{{ request()->query('search') }}" class="search-input">
                    <button type="submit" class="search-button" 
                    style="color:#fff; 
                    border:1px solid transparent;
                    border-radius: 4px;  
                    background-color: #8456ce;
                    border-color: #000000; padding: 6px 12px;
                    margin-bottom: 0;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.42857143;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: middle;
                    cursor: pointer;">Pesquisar</button>
                </div>
            </div>
        </form>
        <a href="{{ route('tarefas.create') }}" class="btn btn-primary">Incluir</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Tarefa</th>
                    <th>Categoria</th>
                    <th>Cliente</th>
                    <th>Observação</th>
                    <th>Data Inicio</th>
                    <th>Data Fim</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarefas as $tarefa)
                <tr>
                    <td> {{ $tarefa->id }}</td>
                    <td> {{ $tarefa->nomeTarefa}}</td>
                    <td> {{ $tarefa->categoria->nomeCategoria ?? ''}}</td>
                    <td> {{ $tarefa->cliente->nome ?? ''}}</td>
                    <td> {{ $tarefa->observacao}}</td>
                    <td> {{ $tarefa->dataInicio}}</td>
                    <td> {{ $tarefa->dataFim}}</td>
                    <td>
                        <a href="{{ route('tarefas.show', $tarefa->id) }}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST"
                            id="deletarForm_{{ $tarefa->id }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger"
                                onclick="deletarTarefa({{ $tarefa->id }}, '{{ $tarefa->nomeCategoria }}')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $tarefas->links() !!}
    </div>
</x-app-layout>