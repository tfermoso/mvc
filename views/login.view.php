<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_PATH ?>/assets/css/login.css">
    <script src="<?= URL_PATH ?>/assets/js/login.js"></script>
    <title>Login</title>
</head>

<body>
    <h1 class="form-title">Log into your account</h1>
    <form action="./login/form" method="post" class="login-form">
        <label for="user" class="form-label">Username</label>
        <input type="text" name="user" id="" class="form-input" required placeholder="Username" autofocus>
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="" class="form-input" required placeholder="Password">
        <input type="submit" value="Login" class="form-submit">
        <span class="form-text">Don't you have an account? </span><a href="<?= URL_PATH ?>/login/register" class="form-link">Register here</a>
    </form>
</body>

</html>