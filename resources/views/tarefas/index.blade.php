<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/tarefas/tarefas.css') }}">
    <div class="container">
        {{-- <h1>Lista de Tarefas</h1> --}}
        <br>
        <a href="{{ route('tarefas.create') }}" class="btn btn-primary">Nova Tarefa</a>
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
                        <td> {{ $tarefa->categorias->nomeCategoria ?? ''}}</td>
                        <td> {{ $tarefa->clientes->nome ?? ''}}</td>
                        <td> {{ $tarefa->observacao}}</td>
                        <td> {{ $tarefa->dataInicio}}</td>
                        <td> {{ $tarefa->dataFim}}</td>
                        <td>
                            <a href="{{ route('tarefas.show', $tarefa->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

