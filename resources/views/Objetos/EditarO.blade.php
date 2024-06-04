<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Objeto</title>
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
                Bienvenido a la página de edición de objetos. Aquí puedes actualizar la información y detalles 
                de los objetos listados en nuestra plataforma. Puedes modificar el nombre, la descripción, la 
                categoría, el estado y otros atributos importantes del objeto para mantener la información precisa 
                y relevante. Asegúrate de que todos los campos estén completos y actualizados para facilitar la 
                búsqueda y gestión de estos objetos. Una vez que hayas realizado los cambios necesarios, haz clic 
                en el botón 'Guardar' para aplicar las actualizaciones. Si tienes alguna duda o necesitas asistencia, 
                no dudes en contactar con nuestro equipo de soporte. Gracias por contribuir a mantener nuestra base de 
                datos organizada y útil.         
            </p>
        </article>
    </section>
    <div class="container">
        <form action="{{route('updateO',$registro->id)}}" method="post">
            <h3>Editar Objetos</h3>
            @csrf
            @method('PUT')
            <input type="number" name="id_objeto" id="id_objeto" value="{{$registro->id_objeto}}">
            <input type="text" name="nombre_objeto" id="nombre_objeto" value="{{$registro->nombre_objeto}}">
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