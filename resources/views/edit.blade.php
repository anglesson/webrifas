<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEBRIFAS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('style.css')}}" />
</head>

<body>
    <!-- Navbar -->
    <nav id="navbar">
        <a href="/" style="text-decoration: none">
            <h3 id="logo"><span>WEB</span>RIFAS</h3>
        </a>
    </nav>
    <!-- End Navbar -->

    <main class="container">
        <!-- Section - Dashboard -->
        <section>
            <h5>Editar Rifa</h5>

            <form action="{{route('rifa.update', $rifa->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{$rifa->nome}}">
                </div>
                <div class="input-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" value="{{$rifa->descricao}}">
                </div>
                <div class="input-group">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco" value="{{$rifa->preco}}">
                </div>
                <div class="input-group">
                    <label for="dataDoSorteio">Data do Sorteio</label>
                    <input type="date" name="dataDoSorteio" id="dataDoSorteio" value="{{$rifa->dataDoSorteio->format('Y-m-d')}}">
                </div>
                <div class="input-group">
                    <label for="tipoDaRifa">Tipo da Rifa</label>
                    <select name="tipoDaRifa" id="tipoDaRifa">
                        <option value="" disabled selected>-- Selecione --</option>
                        <option value="DEZENA" @if($rifa->tipoDaRifa === 'DEZENA') {{'selected'}} @endif >Dezena</option>
                        <option value="CENTENA" @if($rifa->tipoDaRifa === 'CENTENA') {{'selected'}} @endif >Centena</option>
                        <option value="MILHAR" @if($rifa->tipoDaRifa === 'MILHAR') {{'selected'}} @endif >Milhar</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="1" @if($rifa->status === '1') {{'selected'}} @endif >Ativa</option>
                        <option value="0" @if($rifa->status === '0') {{'selected'}} @endif >Inativa</option>
                        <option value="2" @if($rifa->status === '2') {{'selected'}} @endif >Sorteada</option>
                    </select>
                </div>
                <div class="input-group">
                    <button type="submit">Salvar</button>
                </div>
            </form>
        </section>
        <!-- End Section - Dashboard -->
    </main>
</body>

</html>
