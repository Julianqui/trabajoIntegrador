

@include ('configuracion')
@include ('vendor')



<header>

  <a href="#"><img class="isologotipo" src=@yield('imgurl') alt="logo IDEON"></a>

  <nav class="secciones">


    <ul>

      <li><a href="productos/productos.php"><strong>PRODUCTOS</strong></a></li>
      <li><a href="preguntas-frecuentes/preguntas-frecuentes.blade.php"><strong>PREGUNTAS FRECUENTES</strong></a></li>
      <li><a href="#"><strong>CARRITOS</strong></a></li>
      <li id="registro"><a href="registro/register.php"><strong>CREAR CUENTA</strong></a></li>
      <li id="registro_2"><a href="registro/login.php"><strong>ACCEDER</strong></a></li>
      <li id="registro_2"><a href="perfil/perfil.php"><strong>PERFIL</strong></a></li>
    </ul>
  </nav>





<!-- </nav>

</nav> -->

</header>



@include('slider')





<section class="quienes_somos">



<h1>¿Quiénes Somos?</h1>
<br>
<p>Somos una empresa joven pero entusiasta y deseosa de ser un punto y aparte en lo que el rubro de las librerias/imprentas respecta.</p>

</section>

<section class="que_buscamos">

<h1><strong>¿Qué buscamos?</strong></h1>
<br>
<p>Ser la primera opción de toda las personas que desen comprar artículos de libreria
   y diseño, sino además obtener impresiones de alta calidad con la posibilidad de
   tenerlas solo con la ayuda de tu computadora y sin moverte de tu casa.</p>

<br><br>
<h3></h3>



</section>

</article>






@include ('footer')



<!-- <script src="js/fecha.js"></script> -->
  </body>
</html>
