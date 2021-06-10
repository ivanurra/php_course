<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación formularios PHP</title>
</head>
<body>
    <h1>Validación formularios PHP</h1>

    <form action="procesar_formulario.php" method="POST">
        <label-for="nombre">Nombre</label-for=><br/>
        <input type="text" name="nombre"><br/>

        <label-for="apellidos">Apellidos</label-for=><br/>
        <input type="text" name="apellidos"><br/>

        <label-for="edad">Edad</label-for=><br/>
        <input type="number" name="edad"><br/>

        <label-for="email">Email</label-for=><br/>
        <input type="email" name="email"><br/>

        <label-for="pass">Contraseña</label-for=><br/>
        <input type="password" name="pass"><br/>

        <input type="submit" value="Enviar" />
    </form>
</body>
</html>