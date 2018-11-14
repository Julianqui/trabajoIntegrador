<?php

include 'preguntas_configuracion.php';
include '../vendor.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $mainTitle; ?></title>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">


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
      <li id="registro"><a href="../registro/register.php"><strong>CREAR CUENTA</strong></a></li>
      <li id="registro_2"><a href="../acceso/acesso.php"><strong>ACCEDER</strong></a></li>
      <li id="registro_2"><a href="../perfil/perfil.php"><strong>PERFIL</strong></a></li>
    </ul>

    </nav>

    </header>

<article class="white_section">

  <h2 class="mPreguntas">Preguntas frecuentes</h2>
  <article class="linea">

  </article>

  <p class="ask">Puedo realizar pagos en cuotas sin interes?</p>
  <p class="respuesta">Si, podes realizar compras con 12 cuotas sin interes, si la compra supera los 500 pesos.</p>
  <br>
  <p class="ask">Aceptan dolares?</p>
  <p class="respuesta">Si, siempre a cotizacion del dia.</p>
  <br>
  <p class="ask">En caso de que el producto tenga fallas, lo puedo cambiar?</p>
  <p class="respuesta">Si, podes cambiar tu producto mostrando tu factura</p>
  <br>

  <p class="ask">En que casos hacen descuentos?</p>
  <p class="respuesta">Tendras descuento si realizas una compra mayor a 5 unidades.</p>
  <br>

  <p class="ask">Puedo solicitar que busquen un producto especifico que no se encuentre en su catalogo?</p>
  <p class="respuesta">Si, nosotros buscaremos el producto deseado y te informaremos lo antes posible sobre el precio</p>
  <br>


  <p class="ask">Por que tendria que elegirlos?</p>
  <p class="respuesta">Porque tenemos un sistema de puntos con los cuales podras tener importantes descuentso en futuras compras</p>


  <br><br>



</article>

<?php include 'preguntas_footer.php' ?>

  </body>
</html>
