<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Guardar</title>
    <link rel="stylesheet" href="{{asset('styles/formulario.css')}}">
</head>
<body>
<header>
    <h1>RECICLAJE WEB2024 </h1>
    <img src="styles/imgs/recicl.jpeg">
    </header>
    <!-- Navegación-->
    <nav>
        <ul class="horizontal">
            <li><a href="{{ url('/welcome') }}" target="_blank"> Pagina Base </a></li>
            <li>
                <a href="#">Usuarios</a>
                <ul class="menu">
                    <li><a href="{{ url('/indexUs') }}">Listas De usuarios</a></li>
                    <li><a href="{{ url('/guardar') }}">Agregar Usuario</a></li>
                </ul>
            </li>
            <li><a href="/about" target="_blank"> About </a></li>

        </ul>
    </nav>
    <div class="container">
        <form action="" method="post">
            <h3>Registro De Usuario</h3>
            <img class="imagen" src="https://www.clipartmax.com/png/middle/240-2405333_icono-usuario-grupo-de-personas-clientes-grupo-de-personas-icons.png">
            @csrf
            <input type="text" name="id_usuario" id="id_usuario" placeholder="Id_Usuario">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <input type="text" name="id_rol" id="id_rol" placeholder="Id_Rol">
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