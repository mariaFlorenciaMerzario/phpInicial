

<?php
 
 if(isset($_POST["email"]) and isset($_POST["password"])) {
      // session_start();
       
        $_SESSION['mensaje'] = '';
        $email = $_POST["email"];
        $password = $_POST["password"];

        include "conexion.php";

        $sql= $conexion->query("SELECT * FROM `users` WHERE email= '$email' and password = '$password'");
        
        if($datos=$sql->fetch_object()){

            echo saludar($email);          
        }else{
            echo "Usuario o contraseña incorrecta<br>";
            echo '<a href="index.php">Volver</a>';

        }
    }
       
    $nombre= '';
    $rubro= '';
    $duracion='';
    $img='';

    if(isset($_GET['serie'])){
        switch($_GET['serie']){
            case 'naruto':
                $nombre= 'Naruto';
                $rubro= 'Anime';
                $duracion='20 minutos cada capitulo';
                $img='./img/naruto.jpg';
                break;

            case 'goku':
                $nombre= 'Goku';
                $rubro= 'Anime';
                $duracion='30 minutos cada capitulo';
                $img='./img/goku.jpeg';
                break;

            case 'hunter':
                $nombre= 'Hunter';
                $rubro= 'Anime';
                $duracion='23 minutos cada capitulo';
                $img='./img/hunter.jpg';
                break;
            case 'animes':
                $nombre='Una infinidad de series para que disfrutes';
                $rubro='Anime';
                $duracion=' Segun la serie seleccionada';
                $img='./img/animes.jpeg';
        }

    }
    function saludar($email){
        echo "Bienvenido al sitio $email";
    }
    ?> 
    <?php
   include './includes/header.php';
   include './includes/nav.php';
   ?>

    <body>
    
    <section>
    <h2>Listado de series</h2>
        <ul>
            <li><a href='validar.php?serie=naruto'>Naruto</a></li>
            <li><a href='validar.php?serie=goku'>Goku</a></li>
            <li><a href='validar.php?serie=hunter'>Hunter x Hunter</a></li>
        </ul>

        <div>
            <h4><strong><?php echo $nombre ?></strong></h4>
            <p>Rubro:<?php echo $rubro ?></p>
            <p>Duración:<?php echo $duracion ?></p>
            <div><img src=<?php echo $img ?> alt='<? echo $nombre?>'></div>
        </div>
    </section>
    <?php
    include './includes/footer.php'
    ?>
    </body>
    </html>

