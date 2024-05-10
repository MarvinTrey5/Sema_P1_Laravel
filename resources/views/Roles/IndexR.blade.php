<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Principal</title>
    <link rel="stylesheet" href="{{asset('styles/estilosh.css')}}">
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
            <li>
                <a href="#">Roles</a>
                <ul class="menu">
                    <li><a href="{{ url('/indexR') }}">Listas De Roles</a></li>
                    <li><a href="{{ url('/guardar') }}">Agregar Rol</a></li>
                </ul>
            </li>
            <li><a href="/about" target="_blank"> About </a></li>

        </ul>
    </nav>
    <div class="container">
        <table>
            <caption>Lista De Roles</caption>
            <thead>
                <th>Nombre Rol</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->nombre_rol}}</td>
                    <td>{{$role->descripcion}}</td>
                    <td>
                        <form action="{{route('formeditar',$role->id)}}" method="get">
                            <input type="submit" value="Editar">
                        </form>
                        <form action="{{route('delete',$role->id)}}" method="post">
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