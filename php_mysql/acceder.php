<?php
include("conexion.php");

session_start();

if (isset($_POST["to_login"])) {
    header("location: Login.php");
}

if (isset($_POST["to_register"])) {
    header("location: registro.php");
}

if (isset($_POST["register"])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $direction = trim($_POST['direction']);
        $phone = trim($_POST['phone']);
        $password = trim($_POST['password']);
        $fecha = date('Y-m-d');

        $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, contraseña, fecha) 
                        VALUES ('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
?>
            <h3 class="success">Tu registro se ha completado</h3>
            <?php
            $sql = $conex->query(" select * from datos where nombre ='$name' and contraseña='$password'");
            if ($datos = $sql->fetch_object()) {
                $_SESSION["nombre"] = $datos->nombre;
            }
            header("location: main.php");
        } else {
            ?>
            <h3 class="error">Ocurrió un error</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos compa</h3>
<?php
    }
}

if (isset($_POST["login"])) {
    if (!empty($_POST["name"]) and !empty($_POST["password"])) {
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        $sql = $conex->query(" select * from datos where nombre ='$name' and contraseña='$password'");
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["nombre"] = $datos->nombre;
            $_SESSION["contraseña"] = $datos->contraseña;
            header("location: main.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
    } else {
        echo "Ponele ganas hermano seguro ni contra pusiste";
    }
}

?>