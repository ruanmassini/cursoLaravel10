@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Produto</h1>
    </div>
    <form class="row g-3" method="POST" action="{{ route('productPost') }}">
        @csrf
        <div class="col-md-6">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control @error('valor') is-invalid @enderror" name="nome" id="nome" >
        @if ($errors->has('nome'))
                <div class="invalid-feedback"> {{ $errors->first('nome') }}</div>
            @endif
        </div>

        <div class="col-md-2">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control @error('valor') is-invalid @enderror" id="valor" name="valor"
                placeholder="00.00" step="0.010">
            @if ($errors->has('valor'))
                <div class="invalid-feedback"> {{ $errors->first('valor') }}</div>
            @endif

        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Aperta aqui antes de cadastrar
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
@endsection
