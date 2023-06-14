<?php

session_start();

if (isset($_SESSION))
{
    session_destroy();
}
$entrar="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{

  //variables del formulario
   $us=$_POST['nombre'];
   $ps=$_POST['password'];

   include_once('conexion.php');

   //$consulta="select usuario,password,privilegio from usuarios where usuario='$us' and password='$ps'";

   $consulta="select nombre,password,privilegio from usuarios where nombre='$us' and password='$ps'";
   $resultado=$con->query($consulta);

   if ($resultado->num_rows > 0)
   {
       while ($fila=$resultado->fetch_assoc())
       {
           $priv=$fila['privilegio'];
           

           session_start();
           $_SESSION['nombre']=$us;
           $_SESSION['password']=$ps;
           $_SESSION['privilegio']=$priv;

           //Entre al menu de opciones 
         
           if($priv=="admin"){
               $entrar="admin";

         }
        }
         if($priv=="estandar"){
               $entrar="estandar";
         }
        }
else{
  $entrar="error1";
}
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles1.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,700,800" rel="stylesheet"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1"/>
  </head>

  <body>
    <!-- <div class="carousel">
      <img
        src="assets/img/EXTFACHADA.png"
        class="carousel-image"
        alt="Image 1"
      />
      <img
        src="assets/img/CachitodeCielo.png"
        class="carousel-image"
        alt="Image 2"
      />
      <img src="assets/img/Fachada1.jpg" 
      class="carousel-image" 
      alt="Image 3" />
    </div> -->

    <div class="login-container-up">
      <h2>¡BIENVENIDO!</h2>
      <h4>Ingresa a tu cuenta de RENOVA DEPOT</h4>
    </div>

    <div class="login-container">
      <div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="input-wrapper">
            <input type="text" class="input" id="email" placeholder="Correo electrónico" name="nombre" required/>
            <input type="password" class="input" id="password" placeholder="Contraseña" name="pqassword" required/>
            <input type="submit" class="btn" value="iniciar sesion" name="btningresar" >
          </div>
          <div class="forgot-password">
            <a href="#">Olvidé mi contraseña</a>
          </div>
          <button type="submit" class="btn" value="iniciar sesion" name="btningresar">Iniciar sesión</button>
          
        </form>
        <div class="social-login">
          <button class="facebook-button">Iniciar sesión con Facebook</button>
          <button class="gmail-button">Iniciar sesión con Gmail</button>
        </div>
      </div>
    </div>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>
  </body>
</html>
<?php
include_once("sweetalert.php");
?>