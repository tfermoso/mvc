<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= URL_PATH ?>/Assets/css/register.css">
   
</head>

<body>
    <div class="contenedor">
        <h1>Login</h1>
        <p><?php echo isset($error)?$error:""; ?></p>
        <form class="formulario_registro" action="" method="post">
            <label for="">Usuario</label>
            <input type="text" name="nombre" id="">
            <label for="">Password</label>
            <input type="password" name="password" id="">
            <input type="submit" value="Login">
        </form>
        <a href="./login/register">Si no tienes cuenta, registrate aquí</a>
    </div>
</body>

</html>