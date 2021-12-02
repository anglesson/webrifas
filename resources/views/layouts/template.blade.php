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
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    
    <link rel="stylesheet" href="https://use.typekit.net/gke0utr.css">
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome-all.css') }}">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('admin/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav id="navbar">
        <h3 id="logo"><span>WEB</span>RIFAS</h3>
    </nav>
    <!-- End Navbar -->

    <main class="container">
        @yield('content')
    </main>

    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script defer src="{{ asset('/js/jquery.mask.min.js') }}"></script>
    <script defer src="{{ asset('/js/script.js') }}"></script>

    <!-- Notyf -->
    <script src="{{ asset('admin/vendor/notyf/notyf.min.js') }}"></script>
    <script>
        const notyf = new Notyf({
            duration: 10000,
            position: {
                x: 'right',
                y: 'top',
            },
            types: [{
                    type: 'info',
                    background: 'blue',
                    icon: {
                        className: 'fas fa-info-circle',
                        tagName: 'i',
                        color: '#fff',
                    },
                    dismissible: false
                },
                {
                    type: 'success',
                    background: 'green',
                    icon: {
                        className: 'fas fa-check',
                        tagName: 'i',
                        color: '#fff',
                    },
                    dismissible: false
                },
                {
                    type: 'warning',
                    background: 'orange',
                    icon: {
                        className: 'fas fa-exclamation-triangle',
                        tagName: 'i',
                        color: '#fff',
                    },
                    dismissible: false
                },
                {
                    type: 'danger',
                    background: '#c42525',
                    icon: {
                        className: 'fas fa-times',
                        tagName: 'i',
                        color: '#fff',
                    },
                    dismissible: false
                },
            ]
        });


        function notify(type, message) {
            notyf.open({
                type: type,
                message: message
            });
        }
    </script>

    @if (session('alert'))
        <script>
            notify("{{ session('alert')['type'] }}",  "{{ session('alert')['msg'] }}")
        </script>
    @endif
</body>

</html>
