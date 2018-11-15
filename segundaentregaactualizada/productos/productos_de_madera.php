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
      <li><strong><a href="productos_de_pintura.php">PRODUCTOS DE PINTURA</a></strong></li>
      <li><strong><a href="productos_de_madera.php" style="color: red">PRODUCTOS DE MADERA</a></strong></li>
      <li><strong><a href="impresiones.php">IMPRESIONES</a></strong></li>
    </ul>

  </aside>

<aside>

<section class="productos_disponibles">

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_madera_imagenes/varilla_madera_balsa.jpg" class="imagenes_productos" alt="varilla de madera balsa">

<div class="productos_descripcion">

  <h4>Varillas (5mm)</h4>
  <h6>Descripción:</h6><p>Varillas de madera solida en forma cuadrada de 100cm de alto y 5 mm de espezor</p>
<br>
  <h6>Valor: 20$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_madera_imagenes/madera_balsa_tabla.jpg" class="imagenes_productos" alt="tabla de madera balsa">

<div class="productos_descripcion">

  <h4>Tablas - Balsa</h4>
  <h6>Descripción:</h6><p>Tablas de madera balsa de 1 metro de largo y 10cm de ancho con grosores desde 1mm hasta 20mm </p>
<br>
  <h6>Valor: 20$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_madera_imagenes/bloque_madera.jpg" class="imagenes_productos" alt="bloque de madera">

<div class="productos_descripcion">

  <h4>Boque</h4>
  <h6>Descripción:</h6><p>Bloque/Cubo de madera solida con un tamaño de 10cm x 10cm de alto y ancho</p>
<br>
  <h6>Valor: 35$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="productos_de_madera_imagenes/cepillado_de_madera.jpg" class="imagenes_productos" alt="cepillado de madera">

<div class="productos_descripcion">

  <h4>Cepillados</h4>
  <h6>Descripción:</h6><p>Tablas de madera balsa de 1 metro de largo y 10cm de ancho con grosores desde 1mm hasta 20mm </p>
<br>
  <h6>Valor: 70$ c/u</h6>

</div>

</div>

<!-- Separador -->


<div class="producto_contenedor">

<img src="productos_de_madera_imagenes/plancha_balsa.jpg" class="imagenes_productos" alt="plancha de madera balsa">

<div class="productos_descripcion">

  <h4>Plancha</h4>
  <h6>Descripción:</h6><p>Plancha de madera brillosa de 1 cm de grosor y con un tamaño de 50 cm de ancho y 70 cm de alto</p>
<br>
  <h6>Valor: 88$ c/u</h6>

</div>

</div>

<!-- Separador -->




</section>

</aside>

</article>

<?php include 'productos_footer.php' ?>

  </body>
</html>
