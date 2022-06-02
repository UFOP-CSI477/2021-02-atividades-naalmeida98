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


    <nav class="navbar navbar-dark " style="background-color:#FA6699;" aria-label="Dark offcanvas navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="offcanvasNavbarDark">
                <i class="bi bi-list"></i>
            </button>
            <a style="font-size:1.4rem;" class="navbar-brand" href="/">NA ALMEIDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#bag" aria-controls="offcanvasNavbarDark">
                <i class="bi bi-bag-heart-fill"></i>
            </button>
            <div class="offcanvas offcanvas-start text-white" style="background-color: #FA6699;" tabindex="-1" id="menu" aria-labelledby="offcanvasNavbarDarkLabel">
                <div class="offcanvas-header">
                    <i class="bi bi-list"></i>
                    <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">MENU</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <hr>
                <div class="offcanvas-body">
                    <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('categories.show', 1) }}">ANÉIS</a>
                    <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('categories.show', 3) }}">BRINCOS</a>
                    <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('categories.show', 2) }}">CORDÕES</a>
                    <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('categories.show', 5) }}">PINGENTES</a>
                    <a type="button" class="btn text-white btn-lg btn-block w-100" href="{{ route('categories.show', 4) }}">PULSEIRAS</a>
                </div>
            </div>
            <div class="offcanvas offcanvas-end text-white" style="background-color: #FA6699;" tabindex="-1" id="bag" aria-labelledby="offcanvasNavbarDarkLabel">
                <div class="offcanvas-header">
                    <i class="bi bi-bag-heart-fill"></i>
                    <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">MINHAS JOIAS</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    @if(session('shoppings_list'))
                    @foreach(session('shoppings_list') as $product)
                    <div class="col py-3">
                        <div class="card ">
                            <div class="card-body">
                                <div class="offcanvas-header p-0">
                                    <p class="card-text justify-content-center">{{data_get($product,'name')}}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <img src="{{ asset('images/image04.jpg') }}" alt="product" width="80" height="80">
                                    </div>
                                    <div class="px-4">
                                        <a class="btn text-white p-1 d-flex flex-wrap justify-content-center" type="button" onclick="minusQtdBag()">
                                            <div class="">
                                                <i class="bi bi-dash-circle-fill" style="color: #FA6699;"></i>
                                            </div>
                                        </a>
                                        <input type="text" name="qtd" id="qtdBag" value="1" class="inputQTD">
                                        <a class="btn text-white p-1 d-flex flex-wrap justify-content-center" type="button" onclick="plusQtdBag()">
                                            <div class="">
                                                <i class="bi bi-plus-circle-fill" style="color: #FA6699;"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <p class="text-muted">
                                            {{data_get($product,'value_av')}}<br>
                                            à vista
                                        </p>
                                        <p class="text-muted" style="font-size: 0.7rem;">
                                            {{data_get($product,'value_ap')}}<br> à prazo
                                        </p>
                                    </div>
                                </div>
                                <a class="bi bi-trash-fill" style="color: #FA6699;"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <!-- Valor total -->
                    <div class="col">
                        <div class="card ">
                            <div class="card-body">
                                <p class="card-text">Total</p>
                                <div>
                                    <p class="text-muted">R$ 128,00 à vista</p>
                                    <p class="text-muted" style="font-size: 0.7rem;">
                                        R$ 148,00 à prazo
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-3">
                        <a class="btn text-white btn-lg btn-block w-100" type="button" style="background-color: white; color:#FA6699; font-weight:bold;">
                            <div class="d-flex flex-wrap justify-content-center">
                                <i class="bi bi-bag-check-fill" style="color: #FA6699; font-size:1rem;"> FINALIZAR COMPRA</i>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </nav>


    <!-- CONTEUDO A SER MODIFICADO -->
    <div id='content'>
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
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</body>

</html>
