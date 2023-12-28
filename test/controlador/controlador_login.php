<?php
session_start();
if(!empty($_POST["btningresar"])){
   if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $sql= $conexion->query("select * from user where username= '$usuario' and password= '$password'");
    # si el usuario existe
    if ($datos=$sql->fetch_object()) {

   
     /* $sql= $conexion->query("SELECT rol.description FROM `user`  
        INNER JOIN rolxuser ON user.id = rolxuser.id_user 
        INNER JOIN rol ON rol.id = rolxuser.id_rol
        WHERE user.username='$usuario'");
      
        $dir = array();
        if ($resultado = $sql->fetch_assoc()) {
            foreach ($resultado as $data){
                $dir-> $data->description;
            }
            $_SESSION["roles"] = $dir;
            print_r($_SESSION["roles"]);
            header("location: inicio.php");
           
        }
     */
    
     $result= $conexion->query("SELECT rol.description FROM `user`  
     INNER JOIN rolxuser ON user.id = rolxuser.id_user 
     INNER JOIN rol ON rol.id = rolxuser.id_rol
     WHERE user.username='$usuario'");
    //$dir = $result->fetch_array(MYSQLI_NUM);    
    #$response = $result->fetch_array();
    
    $cont = 0;
   
    $response = $result->fetch_all();
    #var_dump($response);
   
        $_SESSION["roles"] = $response;

   //var_dump($response);
   header("location: inicio.php");      

    $_SESSION["id"]=$datos->id;
    $_SESSION["nombre"]=$datos->name;
    $_SESSION["apellido"]=$datos->last;
    $_SESSION["usuario"]=$datos->username;

    } else {
        echo "<div class='alert alert-danger'>Acceso denegado></div>";
    }
    
   } else {
    echo "Campos vacíos";
   }
   
}
?>