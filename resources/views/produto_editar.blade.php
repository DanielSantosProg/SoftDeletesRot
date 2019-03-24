@extends('layout.base', ["current"=>"produtos"])

@section('body')
    <form action = "{{ route('produtos.update', $produto) }}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição de Produto</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" value="{{ $produto->nome }}">            
            <label for="descricao">Descrição: </label>
            <input type = "text" class = "form-control" id="descricao" name="descricao" value="{{ $produto->descricao }}">
            <label for="preco">Preço: </label>
            <input type = "number" class = "form-control" id="preco" name="preco" value="{{ $produto->preco }}">
            <label for="foto">Foto: </label>
            <input type = "text" class = "form-control" id="foto" name="foto" value="{{ $produto->foto }}">
            <label for="categoria">Categoria: </label>
            <select class = "form-control" name = "categoria_id" id="categoria_id" value="{{ $produto->categoria_id }}">
            @foreach($categorias as $cat)
                <option value="{{ $cat->id }}">{{$cat->nome}}</option>
            @endforeach
            </select>
            <button class = "btn btn-primary" type = "submit">Salvar</button>
        </div>
    </form>
@endsection