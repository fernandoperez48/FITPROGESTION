<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">  
<link rel="stylesheet" type="text/css" href="../css/css/all.min.css">   
</head>
<body>
    
    <div class="contenedor">
        <div class="img">
            <img src="../img/PortadaLogin.jpg
            " alt="">
        </div>
        <div class="contenido-login">
            <form action="" method="post">
                <img src="../img/iconoLogin.png" alt="">
                <h2>FITPROGESTION</h2>
                <?php 
                include_once '../modelo/Conexion.php';
                include_once '../controlador/LoginController.php';
                


                ?>

                <div class="input-div dni">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>USUARIO</h5>
                        <input type="text" name="username"  class="input" id="usuario">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="password"  class="input" id="input">
                    </div>
                </div>
                   
                <input type="submit" class="btn" value="Iniciar Sesion" name="btnEnviar">
            </form>
        </div>
    </div>
</body>
<script src="../js/login.js"></script>
</html>