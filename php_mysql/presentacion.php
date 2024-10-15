<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentacion</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
        <h1>Calisto - Estación de Soldado</h1>
    </header>
    <main>
        <section id="presentation">
            <p>Descubre el control preciso en cada soldadura. Nuestra estación de soldadura te permite ajustar la temperatura con exactitud, protegiendo tus componentes y garantizando uniones perfectas. Monitorea en tiempo real la temperatura actual y accede a gráficos detallados. Ideal para aficionados, estudiantes y profesionales de la electrónica. ¡Optimiza tus proyectos y lleva tus habilidades al siguiente nivel!</p>
            <img src="images/image-_1_.png" alt="Imagen de la estación de soldado">
        </section>
        <form method="post"><input class="botones" type="submit" name="to_register" value="Registrarse">
            <input class="botones" type="submit" name="to_login" value="Iniciar Sesion">
        </form>
    </main>
    <?php
    include("acceder.php");
    ?>

</body>

</html>