<?php

session_start();

if (isset($_SESSION)) {
  session_destroy();
}
$entrar = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //variables del formulario
  $us = $_POST['nombre'];
  $ps = $_POST['password'];

  include_once('conexion.php');

  //$consulta="select usuario,password,privilegio from usuarios where usuario='$us' and password='$ps'";

  $consulta = "select nombre,password,privilegio from usuarios where nombre='$us' and password='$ps'";
  $resultado = $con->query($consulta);

  if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
      $priv = $fila['privilegio'];


      session_start();
      $_SESSION['nombre'] = $us;
      $_SESSION['password'] = $ps;
      $_SESSION['privilegio'] = $priv;

      //Entre al menu de opciones 

      if ($priv == "admin") {
        $entrar = "admin";

      }
    }
    if ($priv == "estandar") {
      $entrar = "estandar";
    }
  } else {
    $entrar = "error1";
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="assets/css/styles1.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,700,800,900"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1" />
</head>

<body class="login">
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

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="input-wrapper">
        <input type="email" class="input" id="email" placeholder="Correo electrónico" name="nombre" required />
        <i class="fa-solid fa-user fa-sm icon-usr" style="color: #fd5100;"></i>
        <input type="password" class="input" id="password" placeholder="Contraseña" name="password" required />
        <i class="fa-solid fa-key fa-sm icon-pw" style="color: #fd5100;"></i>
      </div>
      <button type="submit" class="login-btn" value="iniciar sesion" name="btningresar">Iniciar sesión</button>
    <div class="forgot-password">
      <a href="#">Olvidé mi contraseña</a>
    </div>
    </form>
  
    <br>
    <hr>
    <br>
    <div class="social-login">
      <button class="icono-boton"><i class="fa-brands fa-facebook fa-2xl"></i></button>
      <button class="icono-boton"><i class="fa-brands fa-google fa-2xl"></i></button>
    </div>

    <div class="register">
      <p>¿Aún no tienes cuenta? <a href=" registrar.php">Regístrate</a></p>
    </div>
  </div>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-3.7.0.min.js"></script>
</body>

</html>
<?php
include_once("sweetalert.php");
?>