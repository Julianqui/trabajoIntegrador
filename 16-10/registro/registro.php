<?php

include 'registro_configuracion.php';
include '../vendor.php';

 ?>

 <html lang="es">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bicis Locas</title>
     <link rel="icon"
       type="image/ico"
       href="img/favicon.ico">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Prompt:200,300,400,500" rel="stylesheet">
     <!-- Optional theme -->
     <link rel="stylesheet" href="../css/registro2.css">
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





  </ul>



  </nav>

  </header>


     <section class="form-container">
       <div class="container-fluid">
         <form class="form-signup" id="dataSheet">
           <h2 class="form-signup-heading .text-danger">
             Registrate en Ideon
           </h2>
           <div class="name-container input-box">
             <label for="name" class="sr-only">Nombre</label>
             <input type="text" id="name" class="form-control"
             placeholder="Nombre" required>
           </div>
           <div class="lastname-container input-box">
             <label for="lastname" class="sr-only">Nombre de Usuario</label>
             <input type="text" id="lastname" class="form-control"
             placeholder="Nombre de usuario" required>
           </div>
           <div class="email-container input-box">
             <label for="inputEmail" class="sr-only">
               Correo Electrónico
             </label>
             <input type="email" id="input-email" class="form-control" placeholder="Ingrese su correo electrónico" autofocus="" required>
           </div>
           <div class="form-group">
             <label for="inputPassword" class="sr-only">
               Contraseña
             </label>
             <input type="password" id="input-password" class="form-control" placeholder="Ingrese su contraseña">
           </div>
           <div class="form-group">
             <label for="inputPassword" class="sr-only">
               Contraseña
             </label>
             <input type="password" id="input-password" class="form-control" placeholder="Repetir contraseña">
           </div>

           <div class="form-group">
             <select class="form-control" id="bikes">
               <option value="0">Seleccione su nacionalidad</option>
               <option value="urbana">Argentina</option>
               <option value="treking">Uruguay</option>
               <option value="electrica">Brasil</option>
               <option value="estatica">Mexico</option>
             </select>
           </div>
           <div class="input-group">
             <div class="input-group-addon">@</div>
             <input type="text" class="form-control" id="input-social" placeholder="Twitter">
           </div>
           <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me">
               <span>Deseo recibir información vía email</span>
             </label>
           </div>
           <button class="btn btn-lg btn-primary btn-block submit-btn" type="submit">Registrar</button>
         </form>
       </div>


       <?php include 'registro_footer.php' ?>
     </section>
     <!-- /container -->
     <script type='text/javascript' src='js/main.js'></script>
     <script type='text/javascript' src='js/donottouchthisfile.js'></script>


   </body>
 </html>
