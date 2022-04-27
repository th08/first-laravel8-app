@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                  <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Código</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                @forelse ($registros as $r)
                    <tr class="text-center">
                    <th scope="row">{{$r->id}}<br/></th>
                    <td>{{$r->nomeCliente}}<br/></td>
                    <td>{{$r->codigoCliente}}<br/></td>
                    <td>{{$r->telefoneCliente}}<br/></td>
                    <td>{{$r->idadeCliente}}</td>

                    <td class="d-flex justify-content-center">
                        <a href="{{route('cliente.edit', $r->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="javascript: if(confirm('Deseja deletar o usuário {{$r->nomeCliente}}?')){
                            window.location.href = '{{route('cliente.delete', $r->id)}}'}"
                            class="btn btn-danger btn-sm">Apagar</a>
                    </td>
                  </tr>
                  @empty
                      <div class="alert alert-danger">Não foram encontrados registros</div>
                  @endforelse     
                </tbody>
              </table>
              <div class="d-flex justify-content-end">
                  <a class="btn btn-success btn-lg" href='{{route('cliente.create')}}'>Adicionar</a>
              </div>
        </div>
    </div>
</div>
@endsection
