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
      <li><strong><a href="productos_de_libreria.php">PRODUCTOS DE LIBRERIA</a></strong></li>
      <li><strong><a href="productos_de_diseño.php">PRODUCTOS DE DISEÑO</a></strong></li>
      <li><strong><a href="productos_de_pintura.php"  style="color: red">PRODUCTOS DE PINTURA</a></strong></li>
      <li><strong><a href="productos_de_madera.php">PRODUCTOS DE MADERA</a></strong></li>
      <li><strong><a href="impresiones.php">IMPRESIONES</a></strong></li>
    </ul>

  </aside>

<aside>

<section class="productos_disponibles">

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_pintura_imagenes/acrilicos.jpg" class="imagenes_productos" alt="acrilicos">

<div class="productos_descripcion">

  <h4>Acrílicos</h4>
  <h6>Descripción:</h6><p>Potes de Pintura de secado rápido de diversos colores para distintas superficies, como hoja, cartón, etc</p>
<br>
  <h6>Valor: 15$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_pintura_imagenes/aquarelas.jpg" class="imagenes_productos" alt="lapiceras">

<div class="productos_descripcion">

  <h4>Aquarelas</h4>
  <h6>Descripción:</h6><p>Set de veinticuatro tipos de colores en moldes, con pincel incluido como obsequio.</p>
<br>
  <h6>Valor: 105$</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_pintura_imagenes/temperas.jpg" class="imagenes_productos" alt="Liquidpaper">

<div class="productos_descripcion">

  <h4>Témperas</h4>
  <h6>Descripción:</h6><p>Set de seis potes de temperas (5 Litros) con molde para vertir su contenido</p>
<br>
  <h6>Valor: 135$ </h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_pintura_imagenes/oleos.jpg" class="imagenes_productos" alt="Clips">

<div class="productos_descripcion">

  <h4>Oleos</h4>
  <h6>Descripción:</h6><p>Set de treinta y cuatro potes de Oleo Pastel de todos los colores y un pincel incluido</p>
<br>
  <h6>Valor: 500$</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_pintura_imagenes/tinta_china.jpg" class="imagenes_productos" alt="Notas Autoadhesivas">

<div class="productos_descripcion">

  <h4>Tinta chinas - Laquilex</h4>
  <h6>Descripción:</h6><p>Potes de tinta china (75L) marca Laquilex de diversos colores</p>
<br>
  <h6>Valor: 185$</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_pintura_imagenes/aerosol.jpg" class="imagenes_productos" alt="Lapices">

<div class="productos_descripcion">

  <h5>Pintura en Aerosol</h5>
  <h6>Descripción:</h6><p>Latas de pintura en aerosol de 100L y todo tipo de colores</p>
<br>
  <h6>Valor: 50$ c/u</h6>

</div>

</div>

<!-- Separador -->

</section>

</aside>

</article>

<?php include 'productos_footer.php' ?>

  </body>
</html>
