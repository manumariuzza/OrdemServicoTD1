<body>
• <div class="container">
• <h1>Novo Autor</h1>
• <form action="{{ route('cliente.store') }}" method="POST">
• <!-- Token CSRF para proteção contra ataques CSRF -->
• @csrf
• <div class="form-group">
• <label for="nome">Nome:</label>
• <input type="text" name="nome">
• </div>
• <div class="form-group">
• <label for="email">E-mail:</label>
• <input type="text" name="email">
• </div>
• <div class="form-group">
• <label for="endereco">Endereço:</label>
• <input type="text" name="endereco">
• </div>
<div class="form-group">
• <label for="tel">Telefone:</label>
• <input type="text" name="tel">
• </div>
• <button type="submit" class="btn btn-success">Salvar</button>
• <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
• </form>
• </div>
• </body>