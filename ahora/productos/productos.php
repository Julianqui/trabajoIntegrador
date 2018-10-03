<?php

include 'productos_configuracion.php';
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

<article class="white_section">
  <aside class="product_list">
    <ul>
      <li><strong><a href="#">PRODUCTOS DE LIBRERIA</a></strong></li>
      <li><strong><a href="#">PRODUCTOS DE DISEÑO</a></strong></li>
      <li><strong><a href="#">PRODUCTOS DE PINTURA</a></strong></li>
      <li><strong><a href="#">PRODUCTOS DE MADERA</a></strong></li>
      <li><strong><a href="#">IMPRESIONES</a></strong></li>
      <li><ul>

<li><a href="#">MATE</a></li>
<li><a href="#">ILUSTRACIÓN</a></li>
<li><a href="#">AUTOADHESIVO</a></li>
<li><a href="#">FOTOGRÁFICO</a></li>
<li><a href="#">SATINADO</a></li>
<li><a href="#">RECICLADO</a></li>

      </ul></li>
    </ul>

  </aside>

<aside>

<section class="productos_disponibles">

<div class="producto_contenedor">

<img src="products/boligoma.jpg" class="imagenes_productos">

<div class="productos_descripcion">

  <h4 class="producto">Boligoma</h4>
  <p class="descripcion">Para adherir papel o cartulina</p>

  <p class="precio">$20</p>

</div>

</div>

<div class="producto_contenedor">

<img src="../imagenes/lapicera.jpg" class="imagenes_productos">

<div class="productos_descripcion">

  <h4 class="producto">Lapicera</h4>
  <p class="descripcion">Lapicera de maxima caldiad para escribir en cualquier tipo de hoja</p>
  <p class="precio">$15</p>

</div>

</div>

<div class="producto_contenedor">

<img src="../imagenes/goma.jpg" class="imagenes_productos">

<div class="productos_descripcion">

  <h4 class="producto">Goma de borrar</h4>
  <p class="descripcion">Goma de borrar Maped, para borrar lapiz</p>
  <p class="precio">$12</p>
</div>

</div>

<div class="producto_contenedor">

  <img src="../imagenes/sacapuntas.jpg" class="imagenes_productos">

  <div class="productos_descripcion">

    <h4 class="producto">Sacapuntas</h4>
    <p class="descripcion">Para tener siempre el lapiz con punta</p>
    <p class="precio">$8</p>

    </div>

  </div>

<div class="producto_contenedor">

<img src="../imagenes/liquid.jpg" class="imagenes_productos">

<div class="productos_descripcion">

  <h4 class="producto">Liquid Paper</h4>
  <p class="descripcion">Para borrar todo aquello escrito con Birome</p>
  <p class="precio">$25</p>


</div>

</div>

<div class="producto_contenedor">

<img src="../imagenes/borratinta.jpg" class="imagenes_productos">

<div class="productos_descripcion">

  <h4 class="producto">Borrantinta</h4>
  <p class="descripcion">Para borrar todo aquello escrito con Roligrafo</p>
  <p class="precio">$20</p>


</div>

</div>


</section>


</aside>

</article>



<?php include 'productos_footer.php' ?>

  </body>
</html>
