

@include ('header')
@include ('vendor')

<!-- <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/fotografia.css">

</head> -->
<body>
<article class="white_section">
<h1>Image Zoom</h1>

<p>Mouse over the image:</p>

<div class="img-zoom-container">
  <img id="myimage" src="img-products/boligoma.jpg" width="300" height="300">
  <div id="myresult" class="img-zoom-result"></div>
</div>



<script src="js/fotografia.js" type="text/javascript "></script>
<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>



</article>

@include ('footer')
</body>
</html>
