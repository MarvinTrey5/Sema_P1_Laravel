<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado De Usuarios</title>
</head>
<body>
    <h1>Registro De Usuarios.</h1>
    <form action="{{url('/guardar')}}" method="get">
        <input type="submit" value="Añadir Usuarios">
    </form>
    <table>
        <thead>
            <tr>IdUsuarios</tr>
            <tr>Nombre</tr>
            <tr>IdRol</tr>
            <tr>Opciones</tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id_usuario}}</td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->id_rol}}</td>
                <td>
                    <form action="{{route('formeditar',$usuario->id)}}" method="get">
                        <input type="submit" value="Editar">
                    </form>
                    <form action="{{route('delete',$usuario->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimnar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>