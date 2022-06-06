<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars-offcanvas/">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-dark " style="background-color:#A9A9A9;" aria-label="Dark offcanvas navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="offcanvasNavbarDark">
                <i class="bi bi-list"></i>
            </button>
            <a style="font-size:1.4rem;" class="navbar-brand" href="/">GERENCIADOR DE EQUIPAMENTOS</a>
            <a class="navbar-toggler" type="button" href="/login" type="a">
            <i class="bi bi-person-circle"></i>
            </a>
            <div class="offcanvas offcanvas-start text-white" style="background-color: 	#636257;" tabindex="-1" id="menu" aria-labelledby="offcanvasNavbarDarkLabel">
                <div class="offcanvas-header">
                    <i class="bi bi-list"></i>
                    <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">MENU</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('equipamentos.index') }}" >EQUIPAMENTOS</a>
                    <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('manutencoes.index') }}">MANUTENÇÕES</a>
                    <!-- <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('equipamentos.edit', 1) }}" >edit EQUIPAMENTOS</a>
                    <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('manutencoes.edit', 1) }}">edit MANUTENÇÕES</a> -->
                    <a type="button" class="btn text-white btn-lg btn-block w-100" >USUÁRIOS</a>
                </div>
            </div>

        </div>
    </nav>


    <!-- CONTEUDO A SER MODIFICADO -->
    <div id='content '>
        @yield('content')
    </div>


    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <footer class="container">
    <hr class="my-2">
        <div class="py-4">
            <a class="btn text-white btn-lg btn-block w-70 float-end" href="#" style="background-color: #63625F ; border-color:#63625F">Back to top</a>
        </div>
    </footer>

</body>

</html>
