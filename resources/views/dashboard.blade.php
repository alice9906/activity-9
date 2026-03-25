<h1>Dashboard</h1>
<p>Bienvenido usuario registrado</p>

<!-- Botón de logout -->
<a href="{{ route('logout') }}"
   onclick="event.preventDefault();
   document.getElementById('logout-form').submit();">
    Cerrar sesión
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>