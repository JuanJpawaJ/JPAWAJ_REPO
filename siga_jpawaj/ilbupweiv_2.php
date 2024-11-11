<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../assets/css/estilos_generales.css">
  <link rel="stylesheet" href="../assets/css/estilos_productos.css">
  <title>JPAWAJ</title>
  <link rel="icon" href="assets/img/imagenes_index/icono_pestana/icono_jpawaj.png" type="image/png">
</head>

<body>
  <?php
    $agregado_en_cab = "../";
    include '../widgets/navegador.php';
  ?>


  <div class="container">
    <div class="contenedor_imagen">
      <div class="img"></div>
      <p>La imagen es referencial*</p>
    </div>
    <div class="separador"></div>
    <p class="marca">Marca</p>
    <h1>BLUSON CAMISERO JENY Color Gris Detalle de Bolsillos con boton</h1>
    <p class="descripcion">2 Velocidades + Pulso, Vaso resistente a choques térmicos, Cuchilla trituradora de hielo.</p>
    <p class="codigo">CODIGO: 123456</p>

    <div class="cont_precio">
      <div class="oferta">
        <p class="texto_oferta">OFERTA</p>
        <p class="precio_actual">S/ 190.00</p>
      </div>

      <p class="antes">Antes <span>S/ 200.00</span></p>
    </div>
  </div>

  <?php
    $agregado_en = "../";
    include '../widgets/footer.php';
  ?>
</body>

</html>