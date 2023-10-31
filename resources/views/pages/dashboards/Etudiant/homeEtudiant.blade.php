@extends('pages.dashboards.dashboard')



@section('content')
    <header class="pb-3 md-m-3 mb-4 border-bottom">
        <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 dropdown">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('images/picture (65).jpg') }}" alt="mdo" width="50" height="50"
                            class="rounded-circle mx-3">
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#">Nous contacter</a></li>
                        <li><a class="dropdown-item" href="#">Mon Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('deconnexionEtudiant') }}">Se déconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

@endsection
