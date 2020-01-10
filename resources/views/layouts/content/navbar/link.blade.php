<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
@if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Registrar</a>
    </li>
@endif