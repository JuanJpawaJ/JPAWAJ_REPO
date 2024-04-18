<?php
include ("connec_sql_new.php");
mysqli_set_charset($connec, 'utf8');
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$bxproducto = $_GET['bxproducto'];
// ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
$viewmodi = $_GET['viewmodi'];
$xgl = $_GET['xgl'];

$result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%S%' order by producto_it");
$simbolo_mone = "S/ ";

while ($tabla = mysqli_fetch_array($result)) {
    $producto_it = $tabla["producto_it"];
    echo $producto_it;
    ?>
    <img src="<?php echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <?php echo ($simbolo_mone . ($tabla["pv01_it"])) ?>
    <?php echo ($simbolo_mone . ($tabla["pv03_it"])) ?>
    <br>
    <?php
}
?>