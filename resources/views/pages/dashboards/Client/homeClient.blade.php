@extends('pages.dashboards.dashboard')


@section('content')

    <header class="pb-3 md-m-3 mb-4 border-bottom">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/picture (65).jpg') }}" alt="Logo" width="50" height="50" class="rounded-circle mx-3">
                <div class="dropdown">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Votre Nom d'Utilisateur
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#">Nous contacter</a></li>
                        <li><a class="dropdown-item" href="#">Mon Profil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('deconnexionClient') }}">Se déconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>



    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Une premiere formation</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Le prix<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Acceder au cours</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Une deuximee formation</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Le prix<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Acceder au cours</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Le prix<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Acceder au cours</button>
          </div>
        </div>
      </div>
    </div>



    
@endsection
