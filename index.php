<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <base href="https://www.pawacorp.com/index.html" />-->

    <meta name="robots" content="index, follow" />
    <meta name="keywords"
        content="jpawaj.com:: jpawaj :: porongoche : Av. Porongoche: jpawaj computadoras JPAWAJ tecnologia : pawa :: laptos jpawaj:: delivery laptos :: AQP :: servicio tecnico :: Jpawaj Clases de computo, python, profesor de computo, Arequipa, impresoras, camaras de vigilancia, profesor Jose Luis Bustamante y Rivero, jlb y rivero, salchipapas hamburguesas, técnico en arequipa, regalos" />
    <meta name="description"
        content="jpawaj.com:: jpawa :: jjpawa :: tecnico :: COMPUTADORAS :: DELIBERY laptos AREQUIPA :: AQP :: tintas arequipa delivery :: delibears peru :: Delibears Arequipa Perú :: syscomputer :: mujer bonita :: Boutique :: mujer bonita boutique" />
    <title>Jpawaj SAC</title>

    <link rel="stylesheet" href="estilos/normalize.css">
    <link rel="stylesheet" href="estilos/estilos_generales.css">
    <link rel="stylesheet" href="estilos/estilos_espacio_formulario.css">
    <link rel="stylesheet" href="estilos/estilos_nuestrosprincipalesclientes_parte2.css">
    <link rel="stylesheet" href="estilos/estilos_footer.css">
    <link rel="stylesheet" href="estilos/estilos_barra_nueva.css">
    <link rel="stylesheet" href="estilos/estilos_barra_horizontal.css">
    <link rel="stylesheet" href="estilos/estilos_barra_hamburguesa.css">
    <link rel="stylesheet" href="estilos/estilo_circulos.css">
    <link rel="stylesheet" href="estilos/estilos_formulario_nuevo.css">
    <link rel="stylesheet" href="estilos/estilos_4espacios.css">
    <link rel="stylesheet" href="estilos/estilos_productos_nuevo.css">
    <link rel="stylesheet" href="estilos/estilos_stecnico_nuevo.css">
    <link rel="stylesheet" href="estilos/estilos_boton_whatsapp.css">
    <link rel="stylesheet" href="estilos/estilos_fixed.css">

    
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

        <div class="formulario_prod_nuevo">
            <div class="imagen_prod_nuevo">
                <div class="prod_contenedor">

                    <table width="398" height="499" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="200" height="168" align="center">
                                <a href="siga_jpawaj/a_lisgeneral.php?xgl=S"><img src="imagenes/bsys_lista.jpg"
                                        width="180" height="160" style="border:0;"
                                        onmouseover="this.style.border='solid  2px  #0a3d89';"
                                        onmouseout="this.style.border=0;" border="0"></a>
                            </td>
                            <td width="198" align="center"><img src="imagenes/bsys_ofecemos.jpg" width="182"
                                    height="162"></td>
                        </tr>
                        <tr>
                            <td height="168" align="center"><a href="siga_jpawaj/a_lisimagenes.php?xgl=S"><img
                                        src="imagenes/bsys_oferta.jpg" width="180" height="160" style="border:0;"
                                        onmouseover="this.style.border='solid  2px  #0a3d89';"
                                        onmouseout="this.style.border=0;" border="0"></a> </td>
                            <td align="center"><img src="imagenes/bsys_stecnico.jpg" width="180" height="160"></td>
                        </tr>
                        <tr>
                            <td height="63" align="center"> <a
                                    href="siga_jpawaj/a_lisgeneral.php?bxproducto=laptop&Submit3=-%3E+Buscar+%3C-"><img
                                        src="imagenes/bsys_masv.jpg" width="180" height="160" style="border:0;"
                                        onmouseover="this.style.border='solid  2px  #0a3d89';"
                                        onmouseout="this.style.border=0;" border="0"></a>
                            </td>
                            <td align="center">
                                <table width="100" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td><img src="imagenes/bsys_disponible.jpg" width="184" height="65"></td>
                                    </tr>
                                    <tr>
                                        <td width="120" height="96" align="center" bgcolor="#CCCCCC">
                                            <form class="formulario_nohay" method="post" action="insert_mail.php">
                                                <div class="campos_formulario">
                                                    <!--  <label  class="label_form">Su Número de Celular</label> -->
                                                    <input type="text" id="xcelular" name="xcelular"
                                                        placeholder="N° Celular">
                                                    <input type="hidden" name="xarea" value="Syscomputer: ">
                                                </div>
                                                <div class="contorno_bot_celular">
                                                    <input type="submit" value="Enviar">
                                                </div>

                                            </form>


                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                </div>

            </div>
        </div>
        

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