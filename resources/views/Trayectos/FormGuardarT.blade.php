<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Trayecto</title>
    <link rel="stylesheet" href="{{asset('styles/formulario.css')}}">
</head>
<style>
.imagen1{
    width: 25%;
    margin-left: 35%;
    padding: 2%;
    border-radius: 10%;
}
.imagen1{ animation: pulse 3s infinite;}
@keyframes pulse {
    0%,100% { transform: scale(1.2); }
    50% { transform: scale(0.5); }
}
</style>
<body>
        <!-- Página Principal creada por Elias / Marvin-->
    <!-- Encabezado de la página-->
    <header class="base">
        <h1>RECICLAJE WEB2024 </h1>
        <a href="{{ url('/') }}">
            <img src="/styles/imgs/recicl.jpeg">
        </a>
    </header>
    <nav>
        <ul class="horizontal">
            <li><a href="{{ url('/welcome') }}" target="_blank"> Pagina Base </a></li>
            <li>
                <a href="#">Usuarios</a>
                <ul class="menu">
                    <li><a href="{{ url('/usuarios/indexUs') }}">Listas De usuarios</a></li>
                    <li><a href="{{ url('/usuarios/guardar1') }}">Agregar Usuario</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Roles</a>
                <ul class="menu">
                    <li><a href="{{ url('/roles/indexR') }}">Listas De Roles</a></li>
                    <li><a href="{{ url('/roles/guardar2') }}">Agregar Rol</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Trayectos</a>
                <ul class="menu">
                    <li><a href="{{ url('/trayectos/IndexT') }}">Listas De Trayectos</a></li>
                    <li><a href="{{ url('/trayectos/guardarT') }}">Agregar Trayecto</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Objetos</a>
                <ul class="menu">
                    <li><a href="{{ url('/objetos/IndexO') }}">Listas De Objetos</a></li>
                    <li><a href="{{ url('/objetos/guardarR') }}">Agregar Objetos</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Contenedores</a>
                <ul class="menu">
                    <li><a href="{{ url('/contents/IndexC') }}">Listas De Contenedores</a></li>
                    <li><a href="{{ url('/contents/guardarC') }}">Agregar Contenedores</a></li>
                </ul>
            </li>
            <li><a href="/about" target="_blank"> About </a></li>
        </ul>
    </nav>
    <div class="container">
        <form action="" method="post">
            <h3>Registro De Trayecto</h3>
            <img class="imagen1" src="https://st2.depositphotos.com/1005979/7457/i/450/depositphotos_74579135-stock-photo-roles-word-pulled-by-a.jpg">
            @csrf
            <input type="text" name="id_trayecto" id="id_trayecto" placeholder="Id_Trayecto">
            <input type="date" name="plazo" id="plazo" placeholder="Plazo">
            <input type="text" name="personal" id="personal" placeholder="Personal">
            <input type="submit" value="Guardar">
        </form>
    </div>
    <footer>
        <span>
            Universidad Gerardo Barrios ☻ 2024
        </span>
    </footer>
</body>
</html>