<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Guardar</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="id_usuario" id="id_usuario" placeholder="Id_Usuario">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="id_rol" id="id_rol" placeholder="Id_Rol">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>