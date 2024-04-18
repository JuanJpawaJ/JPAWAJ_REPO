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


    <div class="div_productos">

        <div class="prod_contenedor">


            <? $result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%S%' order by producto_it");
            $total = mysqli_num_rows($result);
            $simbolo_mone = "S/ "; ?>

            <? $tabla = mysqli_fetch_array($result);
            $producto_it = $tabla["producto_it"];
            echo $producto_it; ?>

            <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />


            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
            <span class="PRECIOFERTA">
                <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>


                <? $tabla = mysqli_fetch_array($result);
                $producto_it = $tabla["producto_it"];
                echo $producto_it; ?>
                >
                <img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
                <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>


                <tr>
                    <td height="214" align="center">
                        <table width="186" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="31" height="43"> <span class="PRODUCTOTXT">
                                        <? $tabla = mysqli_fetch_array($result);
                                        $producto_it = $tabla["producto_it"];
                                        echo $producto_it; ?>
                                    </span></td>
                                <td width="155" align="center" valign="middle"><img
                                        src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130"
                                        height="%" /> </td>
                            </tr>
                            <tr>
                                <td height="41" colspan="2" align="center" valign="middle">
                                    <span class="tachado">
                                        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                                    </span>
                                    <span class="PRECIOFERTA">
                                        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                                    </span>
                                </td>
                            </tr>
                        </table>

                    </td>
                    <td align="center">
                        <table width="186" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="31" height="43"> <span class="PRODUCTOTXT">
                                        <? $tabla = mysqli_fetch_array($result);
                                        $producto_it = $tabla["producto_it"];
                                        echo $producto_it; ?>
                                    </span></td>
                                <td width="155" align="center" valign="middle"><img
                                        src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130"
                                        height="%" /></td>
                            </tr>
                            <tr>
                                <td height="41" colspan="2" align="center" valign="middle">
                                    <span class="tachado">
                                        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                                    </span>
                                    <span class="PRECIOFERTA">
                                        <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                                    </span>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                </table>
        </div>

        <!--  SYSCOMPUTER AREA 02 "COMUNICATE CON NOSOTROS  -->


        <!--  <div class="campo_formulario_prod_nuevo"> -->
        <div class="div_productos">

            <!-- <div class="imagen_prod_nuevo">  -->
            <div class="prod_contenedor">


                <? $result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%M%' order by producto_it");
                $total = mysqli_num_rows($result);
                //echo "Registro con : ".$total. " ITEMS ";
                $simbolo_mone = "S/ "; ?>

                <table width="398" height="504" border="1" cellpadding="3" cellspacing="1">
                    <tr>
                        <td width="195" height="230" align="center">
                            <table width="186" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="31" height="43"> <span class="PRODUCTOTXT">
                                            <? $tabla = mysqli_fetch_array($result);
                                            $producto_it = $tabla["producto_it"];
                                            echo $producto_it; ?>
                                        </span></td>
                                    <td width="155" align="center" valign="middle"><img
                                            src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130"
                                            height="%" /></td>
                                </tr>
                                <tr>
                                    <td height="41" colspan="2" align="center" valign="middle">
                                        <span class="tachado">
                                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                                        </span>
                                        <span class="PRECIOFERTA">
                                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="194" align="center">
                            <table width="186" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="31" height="43"> <span class="PRODUCTOTXT">
                                            <? $tabla = mysqli_fetch_array($result);
                                            $producto_it = $tabla["producto_it"];
                                            echo $producto_it; ?>
                                        </span></td>
                                    <td width="155" align="center" valign="middle"><img
                                            src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130"
                                            height="%" /></td>
                                </tr>
                                <tr>
                                    <td height="41" colspan="2" align="center" valign="middle">
                                        <span class="tachado">
                                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                                        </span>
                                        <span class="PRECIOFERTA">
                                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                                        </span>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td height="214" align="center">
                            <table width="186" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="31" height="43"> <span class="PRODUCTOTXT">
                                            <? $tabla = mysqli_fetch_array($result);
                                            $producto_it = $tabla["producto_it"];
                                            echo $producto_it; ?>
                                        </span></td>
                                    <td width="155" align="center" valign="middle"><img
                                            src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130"
                                            height="%" />
                                    </td>
                                </tr>
                                <tr>
                                    <td height="41" colspan="2" align="center" valign="middle">
                                        <span class="tachado">
                                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                                        </span>
                                        <span class="PRECIOFERTA">
                                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                                        </span>
                                    </td>
                                </tr>
                            </table>

                        </td>
                        <td align="center">
                            <table width="186" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="31" height="43"> <span class="PRODUCTOTXT">
                                            <? $tabla = mysqli_fetch_array($result);
                                            $producto_it = $tabla["producto_it"];
                                            echo $producto_it; ?>
                                        </span></td>
                                    <td width="155" align="center" valign="middle"><img
                                            src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130"
                                            height="%" /></td>
                                </tr>
                                <tr>
                                    <td height="41" colspan="2" align="center" valign="middle">
                                        <span class="tachado">
                                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                                        </span>
                                        <span class="PRECIOFERTA">
                                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                                        </span>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>
            </div>

</body>

</html>