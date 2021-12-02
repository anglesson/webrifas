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
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Navbar -->
    <nav id="navbar">
        <h3 id="logo"><span>WEB</span>RIFAS</h3>
    </nav>
    <!-- End Navbar -->

    <main class="container">
        <!-- Section - Dashboard -->
        <section>
            <h5>Criar Rifa</h5>

            <form action="{{route('rifa.store')}}" method="POST">
                @csrf
                @method('post')
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div class="input-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao">
                </div>
                <div class="input-group">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco">
                </div>
                <div class="input-group">
                    <label for="dataDoSorteio">Data do Sorteio</label>
                    <input type="date" name="dataDoSorteio" id="dataDoSorteio">
                </div>
                <div class="input-group">
                    <label for="tipoDaRifa">Tipo da Rifa</label>
                    <select name="tipoDaRifa" id="tipoDaRifa">
                        <option value="" disabled selected>-- Selecione --</option>
                        <option value="DEZENA">Dezena</option>
                        <option value="CENTENA">Centena</option>
                        <option value="MILHAR">Milhar</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="status">Status</label>
                    <select name="status" id="status">
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
    </main>
</body>

</html>
