<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Tarea N° 8 - Backend</title>
  </head>
  <body>
<h1>Tienda de ropa</h1>
<button type="submit"> <a href="index.html">Inicio</a></button>
<button type="submit"> <a href="listar.php">Volver</a></button>
<br>
<p>Las siguientes prendas se encuentran disponibles en stock</p>
<br>

<div class="container">
  <div class="row">
    <?php
$buscar = $_POST ["buscar"];

$conexion = mysqli_connect ("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda");

$consulta = "SELECT * FROM `ropa` WHERE `marca` = '$buscar'";

$datos = mysqli_query ($conexion, $consulta);

while ($reg = mysqli_fetch_array($datos)) { ?>

    <div class="card col-sm-12 col-md-6 col-lg-3">
      <img class="card-img-top" src="data:image/jpg; base64, <?php echo base64_encode ($reg['imagen']) ?>"  alt="..." width="" height="70%">
        <h3 class="card-title"> <?php echo ucwords($reg['marca']) ?></h3>
        <span>$ <?php echo $reg['precio']; ?></span>
      </div>
    <?php } ?>
    </div>
  </body>
</html>
