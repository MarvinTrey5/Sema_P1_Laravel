<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="{{asset('styles/estilosh.css')}}">
</head>
<body>
        <!-- Página Principal creada por Elias / Marvin-->
    <!-- Encabezado de la página-->
    <header>
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
                    <li><a href="{{ url('/objetos/guardarR') }}">Agregar Trayecto</a></li>
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
        <table>
            <caption>Lista De Objetos</caption>
            <thead>
                <th>IdObjeto</th>
                <th>Nombre Objeto</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($objs as $obj)
                <tr>
                    <td>{{$obj->id_objeto}}</td>
                    <td>{{$obj->nombre_objeto}}</td>
                    <td>
                        <form action="{{route('formeditarO',$obj->id)}}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                        <form action="{{route('deleteO',$obj->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Elimnar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <footer>
        <span>
            Universidad Gerardo Barrios ☻ 2024
        </span>
    </footer>
</body>
</html>