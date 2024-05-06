<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
<form action="{{route('update',$registro->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="id_usuario" id="id_usuario" placeholder="Id_Usuario" value="{{$registro->id_usuario}}">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="{{$registro->nombre}}">
        <input type="text" name="id_rol" id="id_rol" placeholder="Id_rol" value="{{$registro->id_rol}}">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>