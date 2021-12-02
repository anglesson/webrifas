<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>7RIFAS</title>
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
            <h5>Dashboard</h5>
            <div class="card">
                <h2>{{ $totalDeRifas }}</h2>
                <p>Rifas cadastradas</p>
            </div>
        </section>
        <!-- End Section - Dashboard -->
    </main>

    <footer>
        <a href="{{ route('rifa.create') }}" class="button-link"> Criar Rifa </a>
    </footer>
</body>

</html>
