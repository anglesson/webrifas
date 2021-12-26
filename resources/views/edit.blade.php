@extends('layouts.template')

@section('content') 
        <!-- Section - Dashboard -->
        <section>
            <h5>Editar Rifa</h5>

            <form action="{{route('rifa.update', $rifa->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{$rifa->nome}}" required>
                </div>
                <div class="input-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" value="{{$rifa->descricao}}" required>
                </div>
                <div class="input-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="moneyUS" name="preco" id="preco" value="{{$rifa->preco}}" required>
                </div>
                <div class="input-group">
                    <label for="dataDoSorteio">Data do Sorteio</label>
                    <input type="date" name="dataDoSorteio" id="dataDoSorteio" value="{{$rifa->dataDoSorteio->format('Y-m-d')}}" required>
                </div>
                <div class="input-group">
                    <label for="tipoDaRifa">Tipo da Rifa</label>
                    <select disabled name="tipoDaRifa" id="tipoDaRifa" required>
                        <option value="" disabled selected>-- Selecione --</option>
                        <option value="DEZENA" @if($rifa->tipoDaRifa === 'DEZENA') {{'selected'}} @endif >Dezena</option>
                        <option value="CENTENA" @if($rifa->tipoDaRifa === 'CENTENA') {{'selected'}} @endif >Centena</option>
                        <option value="MILHAR" @if($rifa->tipoDaRifa === 'MILHAR') {{'selected'}} @endif >Milhar</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" required>
                        <option value="1" @if($rifa->status === '1') {{'selected'}} @endif >Ativa</option>
                        <option value="0" @if($rifa->status === '0') {{'selected'}} @endif >Inativa</option>
                        <option value="2" @if($rifa->status === '2') {{'selected'}} @endif >Sorteada</option>
                    </select>
                </div>
                <div class="input-group">
                    <button type="submit">Salvar</button>
                </div>
            </form>
            <form id="form-delete-rifa" action="{{route('rifa.delete', $rifa->id)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn-danger" form="form-delete-rifa" type="submit">Excluir</button>
            </form>
        </section>
        <!-- End Section - Dashboard -->
@endsection
