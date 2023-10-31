<?php
session_start();
if(empty($_SESSION["id"])){
    header("Location: ../vista/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hola <?php echo $_SESSION["nombre"] ."". $_SESSION["apellido"]; ?>
    <span><a href="../controlador/LogoutController.php">Cerrar Sesion</a></span>
</body>
</html>