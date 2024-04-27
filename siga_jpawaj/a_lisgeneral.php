<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="../assets/css/estilos_generales.css">
  <link rel="stylesheet"
    href="../assets/css/estilos_index/estilos_bloques_marcas/estilos_contenedor_ofertas_semana.css">
  <link rel="stylesheet" href="../assets/css/estilos_carta_producto.css">
  <link rel="stylesheet" href="../assets/css/estilos_buscador_productos.css">

</head>


<body>
  <?php
  include ("connec_sql_new.php");
  mysqli_set_charset($connec, 'utf8');
  date_default_timezone_set("America/Lima");
  setlocale(LC_ALL, "sp");

  $bxproducto = $_GET['bxproducto'];
  $xgl = $_GET['xgl'];
  ?>


  <a href="a_lisgeneral.php?xgl=S">tec</a>
  <a href="a_lisgeneral.php?xgl=M">bou</a>
  <a href="a_lisgeneral.php?xgl=R">rega</a>
  <a href="a_lisgeneral.php?xgl=P">perf</a>

  <form id="form0" name="form0" method="get" action="a_lisgeneral.php">
    <div class="buscador">
      <img src="../assets/img/imagenes_index/logo_syscomputer.png" alt="">
      <div class="contenedor_buscador">
        <input type="text" placeholder="¿Qué producto deseas buscar?" name="bxproducto" id="bxproducto">
        <button type="submit" name="Submit3">
          <span class="material-symbols-outlined">
            search
          </span>
        </button>
      </div>
    </div>
  </form>


  <!-- INICIO DE MUESTRA ITEMS -->
  <?php
  //$result=mysql_query("select * from items order by codfabrica_it",$connec);
  
  // Número máximo de registros por página
  $max_registros = 40;

  // Página actual (inicialmente 1 si no se especifica)
  $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

  // Calcular el índice de inicio para la consulta LIMIT
  $indice_inicio = ($pagina_actual - 1) * $max_registros;

  if (strlen($bxproducto) == 0) {
    $query = "SELECT * FROM a_items WHERE view01_it='S' AND grupolista_it LIKE '%$xgl%' ORDER BY producto_it LIMIT $indice_inicio, $max_registros";
  } else {
    $bxproducto1 = trim($bxproducto);
    $query = "SELECT * FROM a_items WHERE producto_it LIKE '%$bxproducto1%' ORDER BY producto_it LIMIT $indice_inicio, $max_registros";
  }



  //$result=mysql_query("select * from a_items",$connec);
  $result = mysqli_query($connec, $query);
  $total = mysqli_num_rows($result);


  $query_total = "SELECT COUNT(*) AS total_registros FROM a_items WHERE view01_it='S' AND grupolista_it LIKE '%$xgl%'";
  $result_total = mysqli_query($connec, $query_total);
  $row_total = mysqli_fetch_assoc($result_total);
  $total_registros_t = $row_total['total_registros'];

  ?>
  <div class="grid_lista_productos">
    <?php
    while ($tabla = mysqli_fetch_array($result)) {

      $id = $tabla["id"];
      // $codigo_it = $tabla["codigo_it"];
      // $codfabrica_it = $tabla["codfabrica_it"];
      $img_it = $tabla["img_it"];
      // $grupolista_it = $tabla["grupolista_it"];
      $producto_it = $tabla["producto_it"];
      // $marka_it = $tabla["marka_it"];
      // $fabricante_it = $tabla["fabricante_it"];
      // $precom_it = $tabla["precom_it"];
      $pv01_it = $tabla["pv01_it"];
      // $util01 = $pv01_it - $precom_it;
      // $pv02_it = $tabla["pv02_it"];
      // $pv03_it = $tabla["pv03_it"];
      // $view01_it = $tabla["view01_it"];
      $simbolo_mone = "S/  ";

      $imagen = "img_items/" . $img_it;
      $nombre_producto = $producto_it;
      $precio = $simbolo_mone . money_format('%n', ($pv01_it));

      include '../widgets/carta_producto.php';
    }
    ?>
  </div>

  <?php
  $total_paginas = ceil($total_registros_t / $max_registros);
  ?>

  <?php echo "Total de páginas: " . $total_paginas;
  echo "Total de registros: " . $total;
  ?>

  <div class="paginacion">
    <?php
    // Calcular el número total de páginas
    
    // Mostrar enlaces de página previa si no estamos en la primera página
    if ($pagina_actual > 1) {
      echo '<a href="a_lisgeneral.php?xgl=' . $xgl . '&bxproducto=' . $bxproducto . '&pagina=' . ($pagina_actual - 1) . '">Anterior</a>';
    }

    // Mostrar números de página
    for ($i = 1; $i <= $total_paginas; $i++) {
      echo '<a href="a_lisgeneral.php?xgl=' . $xgl . '&bxproducto=' . $bxproducto . '&pagina=' . $i . '">' . $i . '</a>';
    }

    // Mostrar enlaces de página siguiente si no estamos en la última página
    if ($pagina_actual < $total_paginas) {
      echo '<a href="a_lisgeneral.php?xgl=' . $xgl . '&bxproducto=' . $bxproducto . '&pagina=' . ($pagina_actual + 1) . '">Siguiente</a>';
    }
    ?>
  </div>

</body>

</html>