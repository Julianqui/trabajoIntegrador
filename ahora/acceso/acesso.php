<?php

include 'acceso_configuracion.php';
include '../vendor.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $mainTitle; ?></title>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/products.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>

    <header>

    <a href="../index.php"><img class="isologotipo" src=<?php echo $imgUrl; ?> alt="logo IDEON"></a>

    <nav class="secciones">

    <ul>

      <li><a href="../productos/productos.php"><strong>PRODUCTOS</strong></a></li>
      <li><a href="../preguntas-frecuentes/preguntas-frecuentes.php"><strong>PREGUNTAS FRECUENTES</strong></a></li>
      <li><a href="#"><strong>CARRITOS</strong></a></li>
      <li id="registro"><a href="../registro/registro.php"><strong>CREAR CUENTA</strong></a></li>
      <li id="registro_2"><a href="../acceso/acesso.php"><strong>ACCEDER</strong></a></li>
      <li id="registro_2"><a href="../perfil/perfil.php"><strong>PERFIL</strong></a></li>

    </nav>

    </nav>

    </ul>

    </nav>

    </nav>

    </header>

<section class="white_section">




        <br><br><br><br><br>
        <label class="etiqueta">Email:</label>
        <input type="email" required name="userMail"><span> *</span>
        <br><br>
        <label class="contraseña" for="nombreDelUsuario">Contraseña:</label>
        <input type="password" id="nombreDelUsuario" placeholder="Ingrese su nombre" required name="userName"><span> *</span>
        <br><br>
        <div class="centrar">

          <button type="submit">Acceder</button>
        
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'acceso_footer.php' ?>

  </body>
</html>
