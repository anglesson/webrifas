<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{env('APP_NAME')}}</title>
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
    </main>
</body>

</html>
