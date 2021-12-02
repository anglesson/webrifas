@extends('layouts.template')

@section('content')    
        <!-- Section - Dashboard -->
        <section>
            <h5>Criar Rifa</h5>

            <form action="{{route('rifa.store')}}" method="POST">
                @csrf
                @method('post')
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="input-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" required>
                </div>
                <div class="input-group">
                    <label for="preco">Preço do Bilhete</label>
                    <input type="text" class="moneyUS" name="preco" id="preco" required>
                </div>
                <div class="input-group">
                    <label for="dataDoSorteio">Data do Sorteio</label>
                    <input type="date" name="dataDoSorteio" id="dataDoSorteio" required>
                </div>
                <div class="input-group">
                    <label for="tipoDaRifa">Tipo da Rifa</label>
                    <select name="tipoDaRifa" id="tipoDaRifa" required>
                        <option value="" disabled selected>-- Selecione --</option>
                        <option value="DEZENA">Dezena</option>
                        <option value="CENTENA">Centena</option>
                        <option value="MILHAR">Milhar</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" required>
                        <option value="1">Ativa</option>
                        <option value="0">Inativa</option>
                        <option value="2">Sorteada</option>
                    </select>
                </div>
                <div class="input-group">
                    <button type="submit">Salvar</button>
                </div>
            </form>
        </section>
        <!-- End Section - Dashboard -->
@endsection
