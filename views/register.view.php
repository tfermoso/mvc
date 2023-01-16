<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_PATH ?>/Assets/css/register.css">
    <title>Document</title>
</head>

<body>
    <form action="action_page.php">
        <div class="container">
            <h1>Registro</h1>
            <p>Por favor rellena el formulario con tus datos.</p>
            <hr>

            <label for="email"><b>Correo</b></label>
            <input type="text" placeholder="Escribe tu correo" name="email" id="email" required>

            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Escribir contraseña" name="psw" id="psw" required>

            <label for="psw-repeat"><b>Repetir contraseña</b></label>
            <input type="password" placeholder="Repetir contraseña" name="psw-repeat" id="psw-repeat" required>
            <hr>


            <button type="submit" class="registerbtn">Registro</button>
        </div>

        <div class="container signin">
            <p>Tienes una cuenta? <a href="#">Entrar</a>.</p>
        </div>
    </form>
</body>

</html>