<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            {{ config('app.name') }}
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ active_link('home') }}" aria-current="page">
                        {{ __('Главная') }}
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="{{ route('blog') }}" class="nav-link {{ active_link('blog*') }}" aria-current="page">
                        {{ __('Блог') }}
                    </a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class=" nav-item">
                    <a href="{{ route('registration') }}" class="nav-link {{ active_link('registration') }} "
                        aria-current="page">
                        {{ __('Регистрация') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ active_link('login') }}" aria-current="page">
                        {{ __('Вход') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
