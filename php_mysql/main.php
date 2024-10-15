<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calisto</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>Calisto - Estacion de Soldado</h1>
    </header>
    <main>
        <section id="regulation">
            <h2>Regulación de temperatura</h2>
            <div class="temperature-controls">
                <button class="temp-button" data-temp="150">150°C</button>
                <button class="temp-button" data-temp="200">200°C</button>
                <button class="temp-button" data-temp="250">250°C</button>
                <button id="save-temp">Guardar temperatura</button>
                <button id="reset-temp">Resetear temperatura</button>
            </div>
        </section>
        <section id="data-visualization">
            <h2>Datos de temperatura</h2>
            <div class="data-container">
                <p>Temperatura actual: <span id="current-temp">--</span>°C</p>
                <p>Temperatura objetivo: <span id="target-temp">--</span>°C</p>
                <p id="status-indicator">Estado: --</p>
                <div id="user-info">
                    <p>Usuario: </p>
                    <?php
                    echo $_SESSION["nombre"];
                    ?>
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>