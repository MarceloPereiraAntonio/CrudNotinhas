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
    <h1>Cadastrar novo produto</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('produtos.store') }}" method='post'>
        @csrf
        <input type="text" name="name" placeholder="Novo Produto" value="{{ old('name') }}">
        <input type="text" name="descricao" placeholder="Detalhes" value="{{ old('descricao') }}">
        <input type="text" name="valor" placeholder="Valor" value="{{ old('valor') }}">
        <button type="submit">cadastrar</button>
    </form>
    
</body>
</html>