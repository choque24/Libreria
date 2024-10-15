<?php
$servername = "localhost";
$username = "root";
$userpassword = "";
$dbname = "registro_usuarios";

// Crear conexión
try {
    $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $userpassword);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexion realizada con exito";
} catch (PDOException $e) {
    echo "La conexion ha fallado: " . $e->getMessage();
}

if ($_POST["registro"]) {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insertar datos en la tabla
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

if ($_POST["login"]) {
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE Nombre = :nombre";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->execute();

    $user = $stmt->fetch();

    // Verificar si el usuario existe y si la contraseña coincide
    if ($user && password_verify($password, $user['Password'])) {
        // Iniciar sesión (crear una sesión)
        session_start();
        $_SESSION['user_id'] = $user['id']; // O cualquier otro identificador único del usuario
        $_SESSION['username'] = $user['nombre']; // O cualquier otro dato que quieras almacenar en la sesión

        // Redireccionar a la página de inicio o a otra página protegida
        header('Location: main.php');
    } else {
        // Mostrar un mensaje de error
        echo "Usuario o contraseña incorrecta ";
        echo $nombre . " " . $password;
    }
}

$conexion = null;
