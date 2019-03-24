@extends('layout.base', ["current"=>"produtos"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Categoria</th>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $prod)
        <tr>       
            <td>{{$prod->id}}</td>
            <td>{{$prod->nome}}</td>
            <td>{{$prod->descricao}}</td>
            <td>{{$prod->preco}}</td>
            <td>{{$prod->categoria_id}}</td>
            <td>{{$prod->foto}}</td>
            <td>
              <form action = "{{ route('produtos.destroy', $prod->id) }}" method = "POST">
                @csrf
                <a class="btn btn-success" href="{{ route('produtos.edit', $prod->id) }}">Editar</a>
                @method('DELETE')
                <button type = "submit" class="btn btn-danger">Excluir</button>
              </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection