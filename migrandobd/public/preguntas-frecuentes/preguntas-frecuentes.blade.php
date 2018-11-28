


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">


    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>

    <header>

    <a href="/libreria"><img class="isologotipo" src=../imagenes/logo-01.png alt="logo IDEON"></a>

    <nav class="secciones">

    <ul>

      <li><a href="../productos/productos.php"><strong>PRODUCTOS</strong></a></li>
      <li><a href="../preguntas-frecuentes/preguntas-frecuentes.blade.php"><strong>PREGUNTAS FRECUENTES</strong></a></li>
      <li><a href="#"><strong>CARRITOS</strong></a></li>
      <li id="registro"><a href="../registro/register.php"><strong>CREAR CUENTA</strong></a></li>
      <li id="registro_2"><a href="../registro/register.php"><strong>ACCEDER</strong></a></li>
      <li id="registro_2"><a href="../perfil/perfil.php"><strong>PERFIL</strong></a></li>
    </ul>

    </nav>

    </header>

<article class="white_section">

  <h2 class="mPreguntas">Preguntas frecuentes</h2>
  <article class="linea">

  </article>

  <div class="flip1"><p class="ask1">Puedo realizar pagos en cuotas sin interes?</p></div>
  <div class="panel1"><p class="respuesta1">Si, podes realizar compras con 12 cuotas sin interes, si la compra supera los 500 pesos.</p></div>

  <div class="flip2"><p class="ask2">Aceptan dolares?</p></div>
  <div class="panel2"><p class="respuesta2">Si, siempre a cotizacion del dia.</p></div>

  <div class="flip3"><p class="ask3">En caso de que el producto tenga fallas, lo puedo cambiar?</p></div>
  <div class="panel3"><p class="respuesta3">Si, podes cambiar tu producto mostrando tu factura</p></div>


  <div class="flip4"><p class="ask4">En que casos hacen descuentos?</p></div>
  <div class="panel4"><p class="respuesta4">Tendras descuento si realizas una compra mayor a 5 unidades.</p></div>


  <div class="flip5"><p class="ask5">Puedo solicitar que busquen un producto especifico que no se encuentre en su catalogo?</p></div>
  <div class="panel5"><p class="respuesta5">Si, nosotros buscaremos el producto deseado y te informaremos lo antes posible sobre el precio</p></div>



  <div class="flip6"><p class="ask6">Por que tendria que elegirlos?</p></div>
  <div class="panel6"><p class="respuesta6">Porque tenemos un sistema de puntos con los cuales podras tener importantes descuentso en futuras compras</p></div>






</article>


@include ('preguntas_footer')

<script src="../js/jquery.js"></script>
  <script src="../js/preguntas.js"></script>

  </body>
</html>
