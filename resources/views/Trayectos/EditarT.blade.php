<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Trayecto</title>
    <link rel="stylesheet" href="{{asset('styles/formularioEditar.css')}}">
</head>
<body>
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
    <section>
        <article>
            <p class="base1">
                Bienvenido a la página de edición de trayecto. Aquí puedes actualizar los detalles de tus trayectos 
                para asegurarte de que la información esté siempre al día y precisa. Puedes modificar el punto de 
                inicio, el destino, las paradas intermedias, y otros detalles importantes de tu trayecto. Además, 
                puedes ajustar la hora de salida y llegada para reflejar cualquier cambio en tu horario. Una vez que 
                hayas realizado los cambios necesarios, haz clic en el botón 'Guardar' para aplicar las actualizaciones. 
                Si necesitas ayuda o tienes alguna pregunta, no dudes en contactar con nuestro equipo de soporte. Gracias 
                por mantener la información de tus trayectos actualizada.         
            </p>
        </article>
    </section>
    <div class="container">
        <form action="{{route('updateT',$registro->id)}}" method="post">
            <h3>Editar Trayecto</h3>
            @csrf
            @method('PUT')
            <input type="number" name="id_trayecto" id="id_trayecto" value="{{$registro->id_trayecto}}">
            <input type="date" name="plazo" id="plazo" value="{{$registro->plazo}}">
            <input type="number" name="personal" id="personal" value="{{$registro->personal}}">
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