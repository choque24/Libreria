<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/Login.css">
</head>

<body>
    <form method="post">
        <h2>Hola</h2>
        <p>Inicia tu Sesion</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" required>
            <img class="input-icon" src="images/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="images/password.svg" alt="">
        </div>

        <input class="btn_login" type="submit" name="login" value="Iniciar Sesion">
    </form>
    <?php
    include("acceder.php");
    ?>

</body>

</html>