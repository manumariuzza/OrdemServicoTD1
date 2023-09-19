<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova categoria</title>
</head>
<body>
•    <div class="container">
•       <h1>Nova categoria</h1>
•       <form action="{{ route('categoria.store') }}" method="POST">
•       <!-- Token CSRF para proteção contra ataques CSRF -->
•       @csrf
•       <div class="form-group">
•           <label for="nome">Nome:</label>
•           <input type="text" name="nome">
•       </div>
•       <button type="submit" class="btn btn-success">Salvar</button>
•       <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
•   </form>
• </div>
• </body>
</html>
