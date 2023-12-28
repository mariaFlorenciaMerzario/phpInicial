<?php
include './includes/header.php'
?>
<body>
 
   <div class="container">
     
      <div class="login-content">
         <form method="post" action="registro2.php">
            <img src="img/flor.png" width="150px">
            <h2 class="title">Complete los campos</h2>
           
            <div class="my-4">
                  <h5>Nombre</h5>
                  <input id="name" type="text" class="input" name="name">
            </div>

            <div class="my-4">
                  <h5>Email</h5>
                  <input id="email" type="email" class="input" name="email">
            </div>
          
            <div class="">
                  <h5>Contraseña</h5>
                  <input type="password" id="input" class="input" name="password">
            </div>
            <div class="">
                  <h5>Confirme la Contraseña</h5>
                  <input type="password" id="input" class="input" name="password2">
            </div>
         
            <input class=" btn btn-dark" type="submit" value="Confirmar">
         </form>
      </div>
   </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>