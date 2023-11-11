<!-- As a link -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
    <div class="ms-auto">
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout_form').submit();">{{ __('Salir') }}</a>
        <form method="POST" action="{{ route('logout') }}" id="logout_form">
            @csrf
        </form>
    </div>
  </div>
</nav>