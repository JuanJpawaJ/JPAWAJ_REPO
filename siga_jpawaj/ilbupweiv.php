<?php

include("connec_sql_new.php");
mysqli_set_charset($connec, 'utf8');
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$id = $_GET['idx'];
$result = mysqli_query($connec, "select * from a_items where id=$id");
$tabla = mysqli_fetch_array($result);

$idmodi = $tabla["id"];
$codigo_it = $tabla["codigo_it"];
$codfabrica_it = $tabla["codfabrica_it"];
$producto_it = $tabla["producto_it"];


$id = $tabla["id"];
$codigo_it = $tabla["codigo_it"];
$codfabrica_it = $tabla["codfabrica_it"];
$img_it = $tabla["img_it"];
$grupolista_it = $tabla["grupolista_it"];
$producto_it = $tabla["producto_it"];
$marka_it = $tabla["marka_it"];
$fabricante_it = $tabla["fabricante_it"];
$precom_it = $tabla["precom_it"];
$pv01_it = $tabla["pv01_it"];
$pv02_it = $tabla["pv02_it"];
$pv03_it = $tabla["pv03_it"];
$view01_it = $tabla["view01_it"];

$msjpublico_it = $tabla["msjpublico_it"];
$simbolo_mone = "S/  ";


if (strlen($img_it) == 0) {
  $img_it = "no_disponible.jpg";
}

?>


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
  <title>
    <?php echo ($producto_it); ?>
  </title>
  <link rel="icon" href="../assets/img/imagenes_index/icono_pestana/icono_jpawaj.png" type="image/png">
</head>

<body>
  <?php
  $agregado_en_cab = "../";
  include '../widgets/navegador.php';
  ?>


  <div class="container_t">
    <div class="contenedor_imagen_m">
      <div class="img">
        <img src="<? echo "img_items/" . $img_it ?>" alt="">
      </div>
      <p>La imagen es referencial*</p>
    </div>
    <div class="separador"></div>
    <p class="marca">
      <?php echo ($marka_it); ?>
    </p>
    <h1>
      <?php echo ($producto_it); ?>
    </h1>
    <p class="descripcion">
      <?php echo ($msjpublico_it); ?>
    </p>

    <?php if (strlen($codigo_it) <> 0) { ?>
      <p class="codigo">CODIGO:
        <?php echo ($codigo_it); ?>
      </p>
    <?php } ?>

    <?php if ($pv03_it > 0) { ?>

      <div class="cont_precio">
        <div class="oferta">
          <p class="texto_oferta">OFERTA</p>
          <p class="precio_actual">
            <?php echo ($simbolo_mone . money_format('%n', ($pv03_it))) ?>
          </p>
        </div>
        <p class="antes">Antes <span><?php echo ($simbolo_mone . money_format('%n', ($pv01_it))) ?></span></p>
      </div>
      
      <?php } else { ?>

      <div class="cont_precio">
        <div class="oferta">
          <p class="precio_actual">
            <?php echo ($simbolo_mone . money_format('%n', ($pv01_it))) ?>
          </p>
        </div>
      </div>

      <?php }?>

      <?php $precio = ($pv03_it > 0) ? $pv03_it : $pv01_it;?>

      <a href="https://wa.me/51959956000?text=Hola%20deseo%20comprar%20el%20producto%20<?php echo ($producto_it); ?>" target="_blank" class="boton_comprar">
        <p>Comprar por Whatsapp</p>
        <img src="../assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
      </a>

  </div>

  <?php
  $agregado_en = "../";
  include '../widgets/footer.php';
  ?>


  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "<?php echo  $producto_it; ?>",
      "image": "https://www.jpawaj.com/siga_jpawaj/<?php echo 'img_items/' . $img_it ?>",
      "description": "<?php echo  $msjpublico_it; ?>",
      "brand": {
        "@type": "Brand",
        "name": "<?php echo  $marka_it; ?>"
      },
      "offers": {
        "@type": "Offer",
        "url": "https://www.jpawaj.com/siga_jpawaj/ilbupweiv.php?idx=<?php echo $id ?>", 
        "priceCurrency": "PEN",
        "price": <?php echo $precio ?>,
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock",
        "availableAtOrFrom": {
          "@type": "Place",
          "name": "Perú",
          "address": {
            "@type": "PostalAddress",
            "addressCountry": "PE"
          }
        }
      }
    }
  </script>
</body>

</html>