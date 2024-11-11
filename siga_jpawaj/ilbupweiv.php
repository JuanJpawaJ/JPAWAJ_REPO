<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ver producto</title>

  <style type="text/css">
    .PRECIO1 {
      color: #009;
      font-weight: bold;
      font-size: 18px;
    }

    .PRECIO2 {
      color: #009;
      font-size: 18px;
    }

    .PRECIOFERTA {
      color: #009;
      font-weight: bold;
      font-size: 20px;
    }

    .TEXTOFERTA {
      color: #CC3300;
      font-size: 12px;
    }

    .diez {
      font-size: 9px;
    }

    .texto_tablas11 {
      font-size: 11px;
    }

    .tabla10 {
      font-size: 10px;
      font-family: Tahoma, Geneva, sans-serif;
    }

    .tabla20 {
      font-size: 20px;
      font-family: Tahoma, Geneva, sans-serif;
    }

    .TITULO {
      font-size: 13px;
      color: #000;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bold;
    }

    .tit_menu_sup {
      color: #000;
    }

    .tit_menu_sup td .tablaingrenuevo tr td {
      font-size: 10px;
    }

    .viewtexto {
      font-family: "Arial";
      font-size: 20px;
      color: #009;
    }

    .tachado {
      text-decoration: line-through;
      color: red;
      font-size: 12px;
    }
  </style>

  <head>
    <title>Nombre del Producto</title>
    <meta name="description" content="Descripción breve del producto">

  </head>


  <link rel="icon" href="../assets/img/imagenes_index/icono_pestana/icono_jpawaj.png" type="image/png">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="PRECIOFERTA">
  
<?php
    $agregado_en_cab = "../";
    include 'widgets/navegador.php';
  ?>

<table width="915" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#cccccc">
    <tr>
      <td height="116" align="center">
        <table width="877" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="438" align="center"><img src="iconos/logo_jpawaj_120_60.png" width="134" height="61" /></td>
            <td width="439" align="center"><img src="iconos/logo_syscomputer.png" width="135" height="46" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <table width="900" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="318" height="27" align="center" bgcolor="#F3F3F3"><input type="button"
                      value="Página anterior" onClick="history.go(-1);">
                  </td>
                  <td width="266" align="center" bgcolor="#F3F3F3"> <a href="../index.php">
                      <button>Principal</button></a> </td>
                  <td width="316" align="center" bgcolor="#F3F3F3"><a href="ilbupsil.php"><img
                        src="../imagenes_idx/bot_listaprecios.png" alt="" width="140" height="20" style="border:0;"
                        onmouseover="this.style.border='solid 3px #c2bdb8';" onmouseout="this.style.border=0;" /></a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

        </table>
      </td>
    </tr>
    <tr class="tit_menu_sup">
      <td width="911" height="457" align="center" valign="middle">

        <!-- 11111111 ↓↓↓↓↓↓↓↓↓↓↓    *********************************  INICIO DE DATOS GENERALES    ***************   -->
        <table width="863" border="0" align="center" cellpadding="0" cellspacing="0" class="tabla20">

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


          <tr>
            <td width="386" height="363">
              <table width="374" height="654" border="0" cellpadding="0" cellspacing="0">
                <?php if (strlen($codigo_it) <> 0) { ?>
                  <tr>
                    <td width="134" height="56"><span class="TITULO">CODIGO : </span></td>
                    <td colspan="2"><span class="viewtexto">
                        <?php echo ($codigo_it); ?>
                      </span></td>
                  </tr>
                <?php } ?>

                <tr>
                  <td height="54"><span class="TITULO">PRODUCTO </span></td>
                  <td colspan="2"><span class="viewtexto">
                      <?php echo ($producto_it); ?>
                    </span></td>
                </tr>
                <tr>
                  <td height="54"><span class="TITULO">CODIGO</span></td>
                  <td colspan="2"><span class="viewtexto">
                      <?php echo ($codfabrica_it); ?>
                  </td>
                </tr>

                <?php if (strlen($marka_it) <> 0) { ?>
                  <tr>
                    <td height="55"><span class="TITULO">MARCA </span></td>
                    <td colspan="2"><span class="viewtexto">
                        <?php echo ($marka_it); ?>
                      </span></td>
                  </tr>
                <?php } ?>

                <?php if (strlen($fabricante_it) <> 0) { ?>
                  <tr>
                    <td height="56"><span class="TITULO">FABRICA </span></td>
                    <td colspan="2"><span class="viewtexto">
                        <?php echo ($fabricante_it); ?>
                      </span></td>
                  </tr>
                <?php } ?>

                <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <?php //if (strlen($obspub_it)<>0){ ?>
                <tr>
                  <td height="42"><span class="TITULO">OBSERVACIONES </span></td>
                  <td colspan="2"><span class="diez">
                      <?php echo ($msjpublico_it); ?>
                    </span></td>
                </tr>
                <tr>
                  <td height="27">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td height="27" class="TITULO">P. ESPECIAL</td>
                  <td colspan="2">
                    <? if ($pv03_it > 0) { ?>
                      <span class="tachado">
                        <?php echo ($simbolo_mone . money_format('%n', ($pv01_it))) ?>
                      </span>
                    <? } else { ?>
                      <span class="PRECIO1">
                        <?php echo ($simbolo_mone . money_format('%n', ($pv01_it))) ?>
                      </span>
                    <? } ?>  

                </td>
                </tr>
                <tr>
                  <td height="24" class="TITULO">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td height="27" class="TITULO">
                    <? if ($pv02_it > 0) { ?> P. DISTRIBUIDOR
                    <? } ?></
                  td>
                  <td colspan="2"><span class="PRECIO2">
                      <? if ($pv02_it > 0) {
                        echo ($simbolo_mone . money_format('%n', ($pv02_it)));
                      } ?>
                    </span></td>
                </tr>
                <tr>
                  <td height="115" align="center">
                    <? if ($pv03_it > 0) { ?> <img src="iconos/promocion.jpg" width="25" height="54" /> <? } ?><
                  /td>
                  <td width="122">
                    <? if ($pv03_it > 0) { ?> <span class="TEXTOFERTA">Producto en PROMOCIÓN:</span> <? } ?><
                  /td>
                  <td width="118">
                    <? if ($pv03_it > 0) { ?> <span class="PRECIOFERTA">
                        <? echo ($simbolo_mone . money_format('%n', ($pv03_it))) ?>
                      </span> <? } ?><
                  /td>
                </tr>
                <tr>
                  <td height="27">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td height="27">&nbsp;</td>
                  <td colspan="2">&nbsp;</td>
                </tr>
              </table>
            </td>
            <td width="477" align="center" valign="top">
              <p><img src="<? echo "img_items/" . $img_it ?>" width="421" height="%" /></p>
              <p>&nbsp;</p>
              <p class="TITULO">NOTA: La imagen es referencial.</p>
            </td>




          </tr>
          <tr>
            <td height="19">&nbsp;</td>
          </tr>

        </table>

        <!-- 11111111 ↑↑↑↑↑↑↑↑↑↑  FIN GENERALES  **************************  DE DATOS GENERALES    ***************   -->

      </td>
    </tr>

  </table>

  <p>&nbsp;</p>

  <?php
    $agregado_en = "../";
    include 'widgets/footer.php';
  ?>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "<?php echo  $producto_it; ?>",
    "image": "https://www.jpawaj.com/siga_jpawaj/<?php echo "img_items/" . $img_it ?>",
    "description": "<?php echo  $msjpublico_it; ?>",
    "brand": {
      "@type": "Brand",
      "name": "<?php echo  $marka_it; ?>"
    },
    "offers": {
      "@type": "Offer",
      "url": "https://www.jpawaj.com/siga_jpawaj/?idx=<?php echo $id ?>", <!-- Cambia esta URL por el enlace directo a la página del producto -->
      "priceCurrency": "PEN",
      "price": "<?php $pv01_it ?>",
      "itemCondition": "https://schema.org/NewCondition",
      "availability": "https://schema.org/InStock"
    }
  }
  </script>
</body>

</html>