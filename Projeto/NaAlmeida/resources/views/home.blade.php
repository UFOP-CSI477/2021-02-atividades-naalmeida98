@extends('app')

@section('content')

<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
                <div class="carousel-item active" >
                    <img src="{{ asset('images/home/home_6.jpeg') }}" alt="image01" class="containerImage">
                    <div class="container">
                        <div class="carousel-caption " >
                            <h1 style="background-color:#D16D6F; padding:4px">COMPRE & GANHE</h1>
                            <p style="color: white; background-color:#D16D6F;">UMA MALETA EXCLUSIVA DA ROMMANEL</p>
                            <!-- <p><a class="btn btn-lg btn-primary" style="background-color: #FA6699; border-color:#FA6699" href="#">Sign up today</a></p> -->
                        </div>
                    </div>
                </div>

            <div class="carousel-item">
                <img src="{{ asset('images/home/home_4.jpeg') }}" alt="image02" class="containerImage">
                <div class="container">
                    <div class="carousel-caption">
                        <p></p>
                        <h1 style="background-color: #D16D6F; padding:4px">JOIAS A PARTIR DE R$ 49,00</h1>
                        <!-- <p><a class="btn btn-lg btn-primary" style="background-color: #FA6699; border-color:#FA6699" href="#">Learn more</a></p> -->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/home/home_1.jpeg') }}" alt="image03" class="containerImage">
                <div class="container">
                    <div class="carousel-caption ">
                        <h1 style="background-color: #D16D6F; padding:4px">QUALIDADE & CONFORTO</h1>
                        <p></p>
                        <!-- <p><a class="btn btn-lg btn-primary" style="background-color: #FA6699; border-color:#FA6699" href="#">Browse gallery</a></p> -->
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- END CARROSEL -->

    <div class="container px-4 " id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-2 ">
                <i style="color: #FA6699;" class="bi bi-star-fill text-shadow-1 "> Favoritos</i>
        </div>



        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg"
                    style="background-color: #D16D6F">
                    <a href="{{ route('categories.show', 1) }}" class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Aneis</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <!-- <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg> -->
                                <small></small>
                            </li>
                            <li class="d-flex align-items-center">
                                <!-- <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg> -->
                                <small>A partir de R$ 113,00</small>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg"
                    style="background-color: #F06E7F;">
                    <a  href="{{ route('categories.show', 2) }}" class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Brincos</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <!-- <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg> -->
                                <small></small>
                            </li>
                            <li class="d-flex align-items-center">
                                <!-- <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg> -->
                                <small>A partir de R$ 43,00</small>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white rounded-4 shadow-lg"
                style="background-color: #FF829F; ">
                    <a  href="{{ route('categories.show', 3) }}" class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Cordões</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <!-- <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg> -->
                                <small></small>
                            </li>
                            <li class="d-flex align-items-center">
                                <!-- <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg> -->
                                <small>A partir de R$ 131,00</small>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- END CARDS -->

    <!-- <div id="myCarousel2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->

</main>


@endsection
