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
      <li><strong><a href="productos_de_libreria.php" style="color: red">PRODUCTOS DE LIBRERIA</a></strong></li>
      <li><strong><a href="productos_de_diseño.php">PRODUCTOS DE DISEÑO</a></strong></li>
      <li><strong><a href="productos_de_pintura.php">PRODUCTOS DE PINTURA</a></strong></li>
      <li><strong><a href="productos_de_madera.php">PRODUCTOS DE MADERA</a></strong></li>
      <li><strong><a href="impresiones.php">IMPRESIONES</a></strong></li>
    </ul>

  </aside>

<aside>

<section class="productos_disponibles">

<div class="producto_contenedor">

<img src="productos_de_libreria_imagenes/boligoma.jpg" class="imagenes_productos" alt="boligoma">

<div class="productos_descripcion">

  <h4>Boligoma</h4>
  <h6>Descripción:</h6><p>Pegamento fabricado a partir de una masa informe de polímeros de silicona tratado con ácido bórico</p>
<br>
  <h6>Valor: 18$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_libreria_imagenes/tijeras.jpg" class="imagenes_productos" alt="tijeras">

<div class="productos_descripcion">

  <h4>Tijeras</h4>
  <h6>Descripción:</h6><p>Tijeras pequeñas de distintos colores con decoraciones de dentaduras para niños.</p>
<br>
  <h6>Valor: 50$</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_libreria_imagenes/lapiceras.jpg" class="imagenes_productos" alt="lapiceras">

<div class="productos_descripcion">

  <h4>Lapiceras</h4>
  <h6>Descripción:</h6><p>Lapiceras de distinta tintas de colores hechas en china, perfectas para dibujos y escritura</p>
<br>
  <h6>Valor: 21$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_libreria_imagenes/liquid.jpg" class="imagenes_productos" alt="Liquidpaper">

<div class="productos_descripcion">

  <h4>Liquid paper</h4>
  <h6>Descripción:</h6><p>Rotulador de punta fina con el cual se pueden efectuar correcciones en textos escritos con tinta</p>
<br>
  <h6>Valor: 68$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_libreria_imagenes/clips.jpg" class="imagenes_productos" alt="Clips">

<div class="productos_descripcion">

  <h4>Clips - Apli</h4>
  <h6>Descripción:</h6><p>Paquete que incluye cincuenta clips metálicos marca Apli para adjuntar y agrupar papeles</p>
<br>
  <h6>Valor: 15$</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_libreria_imagenes/notas.jpg" class="imagenes_productos" alt="Notas Autoadhesivas">

<div class="productos_descripcion">

  <h4 style="font-size: 14px">Notas Autoadhesivas</h4>
  <h6>Descripción:</h6><p>Blocks de notas de distintos colores autoadhesivas</p>
<br>
  <h6>Valor: 12$</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_libreria_imagenes/lapices.jpg" class="imagenes_productos" alt="Lapices">

<div class="productos_descripcion">

  <h5>Lapices - Stabilo</h5>
  <h6>Descripción:</h6><p>Paquete de diez y ocho lápices artisticos de distintos colores marca Stabilo</p>
<br>
  <h6>Valor: 53.50$</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_libreria_imagenes/hojas.jpg" class="imagenes_productos" alt="Hojas Exito">

<div class="productos_descripcion">

  <h4>Hojas - Éxito</h4>
  <h6>Descripción:</h6><p>Block de tres paquetes ciento cincuenta hojas (29,7cm x 21cm) cada uno marca Éxito </p>
<br>
  <h6>Valor: 150$ </h6>

</div>

</div>

<!-- Separador -->

</section>

</aside>

</article>

<?php include 'productos_footer.php' ?>

  </body>
</html>
