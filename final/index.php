<?php
session_start();
?>

<?php
include './includes/header.php'
?>
<body>

   <div class="container">
      <div class="login-content">
         <form method="post" action="validar.php?serie=animes">
            <img src="img/flor.png" width="150px">
            <h2 class="title">BIENVENIDO A MI SITIO</h2>
           
            <?php 
               if(isset($_SESSION['mensaje'])){
               echo $_SESSION["mensaje"];
               }
            ?>
            <div class="my-4">
                  <h5>Email</h5>
                  <input id="email" type="text" class="input" name="email">
               
            </div>
            <div class="">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
            </div>
            

            <div class="my-4">
               <a class="font-italic isai5" href="olvido.php">Olvidé mi contraseña</a>
               <a class="font-italic isai5 mx-2" href="registro.php">Registrarse</a>
            </div> 
            <input class=" btn btn-dark" type="submit" value="INICIAR SESION">
         </form>
      </div>
   </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>