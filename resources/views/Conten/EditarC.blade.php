<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar contenedor</title>
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
                Bienvenido a la página de edición de contenedores. Aquí puedes actualizar la información y los detalles 
                de los contenedores en nuestra plataforma. Puedes modificar la ubicación, el tipo de residuos aceptados, 
                la capacidad y otros detalles importantes para asegurar que la información esté siempre precisa y actualizada. 
                Asegúrate de que todos los campos estén completos y correctos para facilitar el uso eficiente y la gestión de 
                los contenedores. Una vez que hayas realizado los cambios necesarios, haz clic en el botón 'Guardar' para aplicar 
                las actualizaciones. Si tienes alguna duda o necesitas asistencia, no dudes en contactar con nuestro equipo de 
                soporte. Gracias por tu colaboración en mantener nuestra red de reciclaje organizada y efectiva        
            </p>
        </article>
    </section>
    <div class="container">
        <form action="{{route('updateC',$registro->id)}}" method="post">
            <h3>Editar Contenedores</h3>
            @csrf
            @method('PUT')
            <input type="text" name="lugar" id="lugar" value="{{$registro->lugar}}">
            <input type="text" name="tipo_conten" id="tipo_conten" value="{{$registro->tipo_conten}}">
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