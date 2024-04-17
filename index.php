<html lang="es">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RMB75PC13F"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-RMB75PC13F');
</script>

<body>
    <?php
    include ("connec_sql_new.php");
    mysqli_set_charset($connec, 'utf8');
    date_default_timezone_set("America/Lima");
    setlocale(LC_ALL, "sp");

    echo LC_ALL;
    $bxproducto = $_GET['bxproducto'];
    // ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
    $viewmodi = $_GET['viewmodi'];
    $xgl = $_GET['xgl'];
    ?>
    <!-- <div class="imagen_prod_nuevo">  -->
    <? $result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%S%' order by producto_it");
    $total = mysqli_num_rows($result);
    //echo "Registro con : ".$total. " ITEMS ";
    $simbolo_mone = "S/ "; ?>

    <span class="PRODUCTOTXT">
        <? $tabla = mysqli_fetch_array($result);
        $producto_it = $tabla["producto_it"];
        echo $producto_it; ?>
    </span>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <span class="tachado">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    </span>
    <span class="PRECIOFERTA">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    </span>
    <span class="PRODUCTOTXT">
        <? $tabla = mysqli_fetch_array($result);
        $producto_it = $tabla["producto_it"];
        echo $producto_it; ?>
    </span>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <span class="tachado">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    </span>
    <span class="PRECIOFERTA">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    </span>
    <span class="PRODUCTOTXT">
        <? $tabla = mysqli_fetch_array($result);
        $producto_it = $tabla["producto_it"];
        echo $producto_it; ?>
    </span>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <span class="tachado">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    </span>
    <span class="PRECIOFERTA">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    </span>
    <span class="PRODUCTOTXT">
        <? $tabla = mysqli_fetch_array($result);
        $producto_it = $tabla["producto_it"];
        echo $producto_it; ?>
    </span>
    <td width="155" align="center" valign="middle">
        <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    </td>
    <span class="tachado">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    </span>
    <span class="PRECIOFERTA">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    </span>

    <!--  SYSCOMPUTER AREA 02 "COMUNICATE CON NOSOTROS  -->

    <a href="siga_jpawaj/a_lisgeneral.php?xgl=S"><img src="imagenes/bsys_lista.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>
    <a href="siga_jpawaj/a_lisimagenes.php?xgl=S">
        <img src="imagenes/bsys_oferta.jpg" width="180" height="160" style="border:0;"onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0">
    </a>
   <img src="imagenes/bsys_masv.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';"
        onmouseout="this.style.border=0;" border="0"></a>

    <? $result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%M%' order by producto_it");
    $total = mysqli_num_rows($result);
    //echo "Registro con : ".$total. " ITEMS ";
    $simbolo_mone = "S/ "; ?>

    <span class="PRODUCTOTXT">
        <? $tabla = mysqli_fetch_array($result);
        $producto_it = $tabla["producto_it"];
        echo $producto_it; ?>
    </span>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <span class="tachado">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    </span>
    <span class="PRECIOFERTA">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    </span>
    <span class="PRODUCTOTXT">
        <? $tabla = mysqli_fetch_array($result);
        $producto_it = $tabla["producto_it"];
        echo $producto_it; ?>
    </span>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <span class="tachado">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    </span>
    <span class="PRECIOFERTA">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    </span>
    <span class="PRODUCTOTXT">
        <? $tabla = mysqli_fetch_array($result);
        $producto_it = $tabla["producto_it"];
        echo $producto_it; ?>
    </span>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <span class="tachado">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    </span>
    <span class="PRECIOFERTA">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    </span>

    <span class="PRODUCTOTXT">
        <? $tabla = mysqli_fetch_array($result);
        $producto_it = $tabla["producto_it"];
        echo $producto_it; ?>
    </span>
    <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
    <span class="tachado">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
    </span>
    <span class="PRECIOFERTA">
        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
    </span>

    <!--  SYSCOMPUTER AREA 02 "COMUNICATE CON NOSOTROS  -->
    <form class="formulario_oficial" method="post" action="insert_mail.php">
        <label class="label_form"> Que producto? - Mensaje:</label>
        <input type="text" id="xmensaje" name="xmensaje" placeholder="ej. Impresora epson">

        <label class="label_form">Dirección de correo:</label>
        <input type="text" id="correo" name="correo" placeholder="ej. arturomanrique@hotmail.com">

        <label class="label_form">Número telefónico:</label>
        <input type="text" id="telefono" name="telefono" placeholder="ej. 987458647">
        <input type="hidden" name="xarea" value="PRODUCTOS">
        <input type="submit" value="Enviar">
    </form>

    <form class="formulario_oficial" method="post" action="siga_jpawaj/insert_bono.php">
        <input type="text" id="xproducto" name="xproducto" placeholder="ej. Corel Draw">

        <input type="text" id="xnombre" name="xnombre" placeholder="ej. Jose Ruiz..">

        <input type="text" id="xcelular" name="xcelular" placeholder="ej. 987458647">
        <input type="hidden" name="xgrupobo" value="CURSOS">
        <input type="hidden" name="xqdescuento" value="25%">
        <input type="hidden" name="xgenbono" value="SI">

        <input type="submit" value="Enviar">
    </form>

</body>

</html>