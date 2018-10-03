<?php

include 'registro_configuracion.php';
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
      <li id="registro"><a href="registro.php"><strong>CREAR CUENTA</strong></a></li>
      <li id="registro_2"><a href="../acceso/acesso.php"><strong>ACCEDER</strong></a></li>
      <li id="registro_2"><a href="../perfil/perfil.php"><strong>PERFIL</strong></a></li>

    </nav>

    </nav>

    </ul>

    </nav>

    </nav>

    </header>



  <h1 class="centrar">Registrate en Ideon</h1>

<br><br>
<label class="etiqueta" for="nombreDelUsuario">Nombre:</label>

<input type="text" id="nombreDelUsuario" placeholder="Ingrese su nombre" required name="userName"><span> *</span>

<br><br>

<label class="contraseña2" for="nombreDelUsuario">Nombre de usuario:</label>
<input  id="nombreDelUsuario" type="number" name="userAge" min="18">

<br><br>





<label class="contraseña3">Email:</label>

<input type="email" required name="userMail"><span> *</span>

<br><br>





<label class="contraseña4" for="">Contraseña</label>

<input type="password" name="userPass" maxlength="8"><span> *</span>

<br><br>

<label class="contraseña5" for="">Repetir Contraseña</label>

<input type="password" name="userPass" maxlength="8"><span> *</span>

<label class="etiqueta" for="avatar">Subi tu Avatar:</label>
<input type="file" id="avatar" name="userPhoto">

<br><br>




<br><br>

<label class="etiqueta">Pais de Origen</label>
<select name="userCountry">
<option>Seleccione un Pais</option>
<option>Argentina</option>
<option>Brasil</option>
<option>Bolivia</option>
<option>Colombia</option>
<option>Chile</option>
<option>Peru</option>
</select>

<br><br>
<div class="centrar">
<button type="reset">Borrar</button>
<button type="submit">Registrate</button>
</div>





<?php include 'registro_footer.php' ?>

  </body>
</html>
