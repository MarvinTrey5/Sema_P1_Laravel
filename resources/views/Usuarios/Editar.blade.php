<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
                Bienvenido a la página de edición de usuario. Aquí puedes actualizar tu información personal y las 
                preferencias de tu cuenta para mantener tu perfil actualizado. Por favor, asegúrate de que todos los 
                campos obligatorios estén completos y correctos. Puedes modificar tu nombre, dirección de correo 
                electrónico, contraseña, y otros detalles relevantes. Una vez que hayas realizado los cambios deseados, 
                haz clic en el botón 'Guardar' para aplicar las actualizaciones. Si tienes alguna duda o necesitas 
                asistencia, no dudes en contactar con nuestro soporte técnico. Gracias por mantener tu información 
                actualizada.          
            </p>
        </article>
    </section>
    <div class="container">
        <form action="{{route('update',$registro->id)}}" method="post">
            <h3>Editar Usuario</h3>
            @csrf
            @method('PUT')
            <input type="text" name="id_usuario" id="id_usuario" placeholder="Id_Usuario" value="{{$registro->id_usuario}}">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{$registro->nombre}}">
            <input type="text" name="id_rol" id="id_rol" placeholder="Id_rol" value="{{$registro->id_rol}}">
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