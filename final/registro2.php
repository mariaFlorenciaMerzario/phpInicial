<?php

    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
  

    if($password == $password2){
        include "conexion.php";
        $sql= $conexion->query("INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$password')");
       
        session_start(); 
        $_SESSION["mensaje"] = "Los datos fueron registrados correctamente, solo debes loguearte para continuar"; 
        header("Location: index.php");         
    }else{
        echo "Las contraseñas no coinciden, por favor vuelva a ingresarlas para continuar con el registro de usuario";
        echo '<a href="registro.php">Volver</a>';
    }
           
?>