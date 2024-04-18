<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <base href="https://www.pawacorp.com/index.html" />-->


    <title>Jpawaj SAC</title>

</head>
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

    $bxproducto = $_GET['bxproducto'];
    // ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
    $viewmodi = $_GET['viewmodi'];
    $xgl = $_GET['xgl'];
    ?>



    <a name="xinicio" id="xinicio"></a>

    <a name="xsyscomputer" id="xsyscomputer"></a>

    <div class="linea_division"> </div>

    <div class="logo_new">
        <img src="imagenes/logo_SyscomputerCorp_ok_png.png" alt="logo_quienessomos">
    </div>

    <!--  <div class="campo_formulario_prod_nuevo"> -->
    <div class="div_productos">

        <!-- <div class="imagen_prod_nuevo">  -->
        <div class="prod_contenedor">


            <? $result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%S%' order by producto_it");
            $total = mysqli_num_rows($result);
            //echo "Registro con : ".$total. " ITEMS ";
            $simbolo_mone = "S/ "; ?>

            <table width="398" height="504" border="1" cellpadding="3" cellspacing="1">
                <tr>
                    <td height="52" colspan="2" align="center"><img src="imagenes/cab_ofertas_sys.jpg" width="406"
                            height="43"></td>
                </tr>
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
        

        <!--  MUJER BONITA AREA 02 "OFERTAS DE LA SEMANA   -->
        <a name="xmujerbonita" id="xmujerbonita"></a>

        <div class="linea_division"> </div>

        <div class="logo_new">
            <img src="imagenes/logo_mujerbonita_boutique_ok_png.png" alt="logo_quienessomos">
        </div>

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
                        <td height="52" colspan="2" align="center"><img src="imagenes/cab_ofertas_semana_rosado.jpg"
                                width="406" height="43"></td>
                    </tr>
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


            <a name="xproductos" id="xproductos"></a>

            <div class="linea_division"> </div>

            <a name="xinterclass" id="xinterclass"></a>

            <a name="xstecnico" id="xstecnico"></a>

            <a name="xclientes" id="xclientes"></a>

            <a name="xcontactos" id="xcontactos"></a>


</body>

</html>