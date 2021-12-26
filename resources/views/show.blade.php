@extends('layouts.template')

@section('content')
  <br>
    <h1>{{ $rifa->nome }}</h1>
    <p id="descricao-tag">{{ $rifa->descricao }}</p><br><br>
    <p id="label-preco">Preço de cada bilhete
    <span id="preco-tag">R$ {{ formatToReal($rifa->preco) }}</span>
    </p>
    <h2>Bilhetes da rifa</h2>

    @if ($rifa->bilhetes->count() > 0)
    <div class="bilhete-group">
      @foreach ($rifa->bilhetes as $bilhete)
          <div class="bilhete">
              {{ $bilhete->numero }}
          </div>
      @endforeach
    </div>
    @else
        <h6>Não há bilhetes gerado para esta rifa.</h6>
    @endif
    <br><br>
    <div class="input-group">
      <a style="color: var(--secondary)" href="{{route('rifa.index')}}">Voltar</a>
      <a style="color: var(--secondary)" href="{{route('rifa.edit', $rifa->id)}}">Editar</a>
  </div>
@endsection
