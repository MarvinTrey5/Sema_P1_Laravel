<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Rol</title>
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
                Bienvenido a la página de edición de roles. Aquí puedes gestionar y actualizar los roles de los usuarios 
                dentro de la plataforma para asegurarte de que cada miembro tenga los permisos adecuados según sus 
                responsabilidades. Puedes asignar nuevos roles, modificar permisos existentes, y revocar roles que ya no 
                sean necesarios. Asegúrate de revisar cuidadosamente los permisos asociados a cada rol para mantener la 
                seguridad y eficiencia del sistema. Una vez que hayas realizado los cambios necesarios, haz clic en el 
                botón 'Guardar' para aplicar las actualizaciones. Si tienes alguna pregunta o necesitas asistencia, 
                no dudes en contactar con nuestro equipo de soporte. Gracias por tu ayuda en mantener nuestra comunidad 
                organizada y segura.        
            </p>
        </article>
    </section>
    <div class="container">
        <form action="{{route('updateR',$registro->id)}}" method="post">
            <h3>Editar Rol</h3>
            @csrf
            @method('PUT')
            <input type="text" name="nombre_rol" id="nombre_rol" value="{{$registro->nombre_rol}}">
            <input type="text" name="descripcion" id="descripcion" value="{{$registro->descripcion}}">
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