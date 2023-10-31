<?php
session_start();
if(!empty($_POST["btnEnviar"])){
   if(!empty($_POST["username"]) and !empty($_POST["password"])){
         $usuario=$_POST["username"];
         $password=$_POST["password"];

         $sql=$conexion->query("SELECT * FROM usuario WHERE username='$usuario' AND password='$password'");
         if($datos=$sql->fetch_object()){
          $_SESSION["id"]=$datos->id;
          $_SESSION["nombre"]=$datos->nombre;
          $_SESSION["apellido"]=$datos->apellido;
          header("Location: ../vista/inicio.php");
         }else{
               echo "Usuario o contraseña incorrectos";
         }
   }else{
     echo "Los campos estan vacios";
   }

}
?>