<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jpawaj SAC</title>
</head>


<body>
    <?php
    include ("connec_sql_new.php");
    mysqli_set_charset($connec, 'utf8');
    date_default_timezone_set("America/Lima");
    setlocale(LC_ALL, "sp");

    $bxproducto = $_GET['bxproducto'];
    // ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
    $viewmodi = $_GET['viewmodi'];
    $xgl = $_GET['xgl'];
    ?>


    <? $result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%S%' order by producto_it");
    $total = mysqli_num_rows($result);
    $simbolo_mone = "S/ "; ?>

    <? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"];
    echo $producto_it; ?>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    <br>
    <? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"];
    echo $producto_it; ?>
    >
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    <br>

    <? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"];
    echo $producto_it; ?>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    <br>

    <? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"];
    echo $producto_it; ?>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    <br>
    <br>
    <!-- hola -->


    <? $result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%M%' order by producto_it");
    $total = mysqli_num_rows($result);
    //echo "Registro con : ".$total. " ITEMS ";
    $simbolo_mone = "S/ "; ?>

    <? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"];
    echo $producto_it; ?>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    <br>
    
    <? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"];
    echo $producto_it; ?>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    <br>

    <? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"];
    echo $producto_it; ?>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    <br>

    <? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"];
    echo $producto_it; ?>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>


</body>

</html>