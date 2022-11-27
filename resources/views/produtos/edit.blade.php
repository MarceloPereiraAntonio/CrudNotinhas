<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Cadastrando novo produto</title>
</head>
<body>
    <h1>Editando produto {{ $id }}</h1>
    <form action="{{ route('produtos.update', $id) }}" method='post'>
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Novo Produto">
        <input type="text" name="descricao" placeholder="Detalhes">
        <input type="text" name="valor" placeholder="Valor">
        <button type="submit">cadastrar</button>
    </form>
    
</body>
</html>