{{-- extend da index --}}
@extends('index')

{{-- referenciamento ao yield content, declarado na index --}}
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    <div>
        <form action="{{ route('productIndex') }}" method="get">

            <input type="text" name="search" placeholder="Digite sua pesquisa">
            <button>Pesquisar</button>
            <a type="button" href="{{ route('productCreate') }}" class="btn btn-success float-end">Adicionar Produto</a>

        </form>

        <div class="table-responsive mt-4">
            @if ($findProduct->isEmpty())
                <p>Não existe dados</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findProduct as $product)
                            <tr>
                                <td>{{ $product->nome }}</td>
                                <td>{{ 'R$' . ' ' . number_format($product->valor, 2, ',', '.') }}</td>
                                <td>
                                    <a class="btn btn-light btn-sm">Editar</a>

                                    <meta name="csrf-token" content="{{ csrf_token() }}" />

                                    <a onclick="deleteProductPg('{{ route('productDelete') }}' , {{ $product->id }})"
                                        class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
