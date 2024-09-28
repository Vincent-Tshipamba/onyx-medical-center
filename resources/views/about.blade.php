<x-app-layout>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">A propos de nous</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Accueil</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">A propos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->


    <!-- Feature Start -->
    @include('partials.features')
    <!-- Feature End -->


    <!-- Team Start -->
    @include('partials.team')
    <!-- Team End -->

</x-app-layout>
