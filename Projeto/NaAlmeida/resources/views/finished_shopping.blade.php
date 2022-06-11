@extends('app')

@section('content')
<main>
<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Sua compra</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <!-- <div class="feature-icon d-inline-flex align-items-center justify-content-center text-dark fs-2 mb-3">
            <i class="bi bi-currency-dollar"></i>
        </div> -->
        <h2>Pagamento</h2>
        <p>O seu pagamento foi aprovado!</p>
        <!-- <a href="#" class="icon-link d-inline-flex align-items-center">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a> -->
      </div>
      <div class="feature col">
        <!-- <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
        </div> -->
        <h2>Entrega</h2>
        <p>O seu pedido está sendo embalado. Em breve você receberá notificação!</p>
        <!-- <a href="#" class="icon-link d-inline-flex align-items-center">
          Call to action
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a> -->
      </div>
      <div class="feature col">
        <!-- <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div> -->
        <h2>Feedback</h2>
        <p>Avalie a sua compra. Conte para a gente como foi a sua experiência!</p>
        <a href="#" class="icon-link d-inline-flex align-items-center">
          Clique aqui
          <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection
