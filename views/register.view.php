<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= URL_PATH ?>/Assets/css/register.css">
    <script src="<?= URL_PATH ?>/Assets/js/jquery-3.6.3.min.js"></script>
    <script src="<?= URL_PATH ?>/Assets/js/register.js"></script>


</head>

<body>
    <div class="contenedor">
        <h1>Registro</h1>
        <form id="registerForm" class="formulario_registro" action="" method="post">

            <label for="name">Nombre:</label>
            <input type="text" id="name" name="nombre">

            <label for="mail">Correo electrónico:</label>
            <input type="email" id="mail" name="email">

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password">
            <label for="password">Repite la Contraseña</label>
            <input type="password" id="repassword">

            <input type="submit" value="Register">
    </form>
    <a href="../login">Si ya tienes cuenta, incia sesión</a>
    </div>
</body>

</html>