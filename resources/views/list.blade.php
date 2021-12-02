@extends('layouts.template')

@section('content')    
        <!-- Section - Dashboard -->
        <section>
            <h5>Selecione para ver os detalhes</h5>
            @foreach ($rifas as $rifa)    
            <a href="{{ route('rifa.edit', $rifa->id) }}" class="button-link-list">
              <div>
                <p class="title-card">{{$rifa->nome}}</p>
                <p class="description-card">{{$rifa->descricao}}</p>
              </div>
              <p class="preco-card">R$ {{ number_format($rifa->preco, 2, ',', '.') }}</p>
            </a>
            @endforeach
        </section>
        <!-- End Section - Dashboard -->
@endsection
