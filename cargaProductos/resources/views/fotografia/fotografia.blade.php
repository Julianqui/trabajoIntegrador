@include ('header')
@include ('vendor')


<body>
<article class="white_section">
<h1>Image Zoom</h1>

<p>Mouse over the image:</p>

<section class="foto">
<div class="img-zoom-container">
  <img id="myimage" src="img-products/boligoma.jpg" width="10%" height="10%">
  <div id="myresult" class="img-zoom-result"></div>
</div>
<div class="img-zoom-container">
  <img id="myimage" src="img-products/boligoma.jpg" width="300" height="300">
  <div id="myresult" class="img-zoom-result"></div>
</div>
<div class="img-zoom-container">
  <img id="myimage" src="img-products/boligoma.jpg" width="300" height="300">
  <div id="myresult" class="img-zoom-result"></div>
</div>
</section>



<aside>

  <section class="productos_disponibles">

    <div class="producto_contenedor">
      <div class="img-zoom-container">
        <img src="img-products/boligoma.jpg" class="imagenes_productos" alt="boligoma">
      <div id="myresult" class="img-zoom-result"></div>
    </div>

    <div class="productos_descripcion">

      <h4>Boligoma</h4>
      <h6>Descripción:</h6><p>Pegamento fabricado a partir de una masa informe de polímeros de silicona tratado con ácido bórico</p>
    <br>
      <h6>Valor: 18$ c/u</h6>

    </div>

    </div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="img-products/reglas_set.jpg" class="imagenes_productos" alt="set de reglas">

<div class="productos_descripcion">

  <h4>Set de reglas</h4>
  <h6>Descripción:</h6><p>Set de reglas, transportadores, cartabón, escuadras para trazar planos y dibujos.</p>
<br>
  <h6>Valor: 20$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="img-products/lapiceras.jpg" class="imagenes_productos" alt="lapiceras">

<div class="productos_descripcion">

  <h4>Lapiceras</h4>
  <h6>Descripción:</h6><p>Lapiceras de distinta tintas de colores hechas en china, perfectas para dibujos y escritura</p>
<br>
  <h6>Valor: 21$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="img-products/uhu_pegamento.jpg" class="imagenes_productos" alt="pegamento UHU">

<div class="productos_descripcion">

  <h4>Pegotina UHU</h4>
  <h6>Descripción:</h6><p>Pegamento líquido de resina sintética para pegados rápidos y transparentes</p>
<br>
  <h6>Valor: 68 c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="img-products/acrilicos.jpg" class="imagenes_productos" alt="acrilicos">

<div class="productos_descripcion">

  <h4>Acrílicos</h4>
  <h6>Descripción:</h6><p>Potes de Pintura de secado rápido de diversos colores para distintas superficies, como hoja, cartón, etc</p>
<br>
  <h6>Valor: 15$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="img-products/carton_paspartu.jpg" class="imagenes_productos" alt="carton paspartu">

<div class="productos_descripcion">

  <h4>Carton Paspartu</h4>
  <h6>Descripción:</h6><p>Cartón de 5cm de espezor y de un tamaño de 50cm de ancho y 70cm de alto de color gris</p>
<br>
  <h6>Valor: 70$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="img-products/varilla_madera_balsa.jpg" class="imagenes_productos">

<div class="productos_descripcion">

  <h4>Varillas (5mm)</h4>
  <h6>Descripción:</h6><p>Varillas de madera solida en forma cuadrada de 100cm de alto y 5 mm de espezor</p>
<br>
  <h6>Valor: 20$ c/u</h6>

</div>

</div>

<!-- Separador -->

<div class="producto_contenedor">

<img src="img-products/lupa.png" class="imagenes_productos">

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


<script src="js/fotografia.js" type="text/javascript "></script>
<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>



</article>

@include ('footer')
</body>
</html>
