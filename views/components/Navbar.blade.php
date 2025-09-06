<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <img src="/img/halcon.png" alt="Logo" class="img-fluid mr-2" style="width: 50px;" />
        <a class="navbar-brand fw-bold" href="/">Prepa Morfín</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto gap-2">
                @php $uri = strtok($_SERVER['REQUEST_URI'], '?'); @endphp
                <li class="nav-item"><a class="nav-link {{ $uri === '/' ? 'active' : '' }}" href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link {{ $uri === '/about' ? 'active' : '' }}" href="/about">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link {{ $uri === '/offer' ? 'active' : '' }}" href="/offer">Oferta Educativa</a></li>
                <li class="nav-item"><a class="nav-link {{ $uri === '/contact' ? 'active' : '' }}" href="/contact">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
