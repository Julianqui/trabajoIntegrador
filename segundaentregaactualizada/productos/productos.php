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
      <li id="registro"><a href="../registro/register.php"><strong>CREAR CUENTA</strong></a></li>
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
      <li><strong><a href="productos_de_madera.php">PRODUCTOS DE MADERA</a></strong></li>
      <li><strong><a href="impresiones.php">IMPRESIONES</a></strong></li>
    </ul>

  </aside>

<aside>

<section class="productos_disponibles">

<div class="producto_contenedor">

<img src="products/boligoma.jpg" class="imagenes_productos" alt="boligoma">

<div class="productos_descripcion">

  <h4>Boligoma</h4>
  <h6>Descripción:</h6><p>Pegamento fabricado a partir de una masa informe de polímeros de silicona tratado con ácido bórico</p>
<br>
  <h6>Valor: 18$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="products/reglas_set.jpg" class="imagenes_productos" alt="set de reglas">

<div class="productos_descripcion">

  <h4>Set de reglas</h4>
  <h6>Descripción:</h6><p>Set de reglas, transportadores, cartabón, escuadras para trazar planos y dibujos.</p>
<br>
  <h6>Valor: 20$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="products/lapiceras.jpg" class="imagenes_productos" alt="lapiceras">

<div class="productos_descripcion">

  <h4>Lapiceras</h4>
  <h6>Descripción:</h6><p>Lapiceras de distinta tintas de colores hechas en china, perfectas para dibujos y escritura</p>
<br>
  <h6>Valor: 21$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="products/uhu_pegamento.jpg" class="imagenes_productos" alt="pegamento UHU">

<div class="productos_descripcion">

  <h4>Pegotina UHU</h4>
  <h6>Descripción:</h6><p>Pegamento líquido de resina sintética para pegados rápidos y transparentes</p>
<br>
  <h6>Valor: 68 c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="products/acrilicos.jpg" class="imagenes_productos" alt="acrilicos">

<div class="productos_descripcion">

  <h4>Acrílicos</h4>
  <h6>Descripción:</h6><p>Potes de Pintura de secado rápido de diversos colores para distintas superficies, como hoja, cartón, etc</p>
<br>
  <h6>Valor: 15$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="products/carton_paspartu.jpg" class="imagenes_productos" alt="carton paspartu">

<div class="productos_descripcion">

  <h4>Carton Paspartu</h4>
  <h6>Descripción:</h6><p>Cartón de 5cm de espezor y de un tamaño de 50cm de ancho y 70cm de alto de color gris</p>
<br>
  <h6>Valor: 70$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="products/varilla_madera_balsa.jpg" class="imagenes_productos">

<div class="productos_descripcion">

  <h4>Varillas (5mm)</h4>
  <h6>Descripción:</h6><p>Varillas de madera solida en forma cuadrada de 100cm de alto y 5 mm de espezor</p>
<br>
  <h6>Valor: 20$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="products/lupa.png" class="imagenes_productos">

<div class="productos_descripcion">

  <h4>Lupa Balloon</h4>
  <h6>Descripción:</h6><p>Lupa de escritorio desplegable, ideal para observar planos y diseños en papel</p>
<br>
  <h6>Valor: 105$ c/u</h6>

</div>

</div>

<!-- Separador -->

</section>

</aside>

</article>

<?php include 'productos_footer.php' ?>

  </body>
</html>
