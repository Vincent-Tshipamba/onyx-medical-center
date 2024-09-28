<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary">Onyx Medical Center</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link active">Accueil</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">À Propos</a>
            <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="feature.html" class="dropdown-item">Caractéristiques</a>
                    <a href="{{ route('team') }}" class="dropdown-item">Notre Équipe</a>
                    <a href="{{ route('appointment') }}" class="dropdown-item">Rendez-vous</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item">Témoignages</a>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        <a href="{{ route('appointment') }}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Prendre Rendez-vous<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
