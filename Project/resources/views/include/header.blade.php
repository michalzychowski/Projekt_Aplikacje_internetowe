<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Przychodnia dentystyczna</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cennik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/make-appointment">Umów wizytę</a>
                </li>
                @if (auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wyloguj się</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Zaloguj się</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
