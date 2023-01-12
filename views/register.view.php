<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_PATH ?>/assets/css/login.css">
    <script src="<?= URL_PATH ?>/assets/js/jquery.min.js"></script>
    <script src="<?= URL_PATH ?>/assets/js/register.js"></script>
    <title>Register</title>
</head>

<body>
    <h1 class="form-title">Register new user</h1>
    <form action="./register/form" method="post" class="login-form" id="registerForm">
        <label for="user" class="form-label">Username</label>
        <input type="text" name="user" class="form-input" required placeholder="Username" autofocus>
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-input" required placeholder="Email">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-input" required placeholder="Password">
        <label for="c_password" class="form-label">Repeat password</label>
        <input type="password" name="c_password" id="c-password" class="form-input" required placeholder="Repeat password">
        <p class="error-text" id="error"></p>
        <input type="submit" value="Register" class="form-submit">
        <span class="form-text">Already registered? </span><a href="<?= URL_PATH ?>/login" class="form-link">Login here</a>
    </form>
</body>

</html>