<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style type="text/css">
.TITULO_NARANJA {
	color: #FC0;
	font-weight: bold;
}
.diez {	font-size: 9px;
}
.texto_tablas11 {	font-size: 11px;
}
.tabla10 {
	font-size: 10px;
	font-family: Tahoma, Geneva, sans-serif;
}
.TITULO {
	font-size: 10px;
	color: #003;
	font-family: "Comic Sans MS", cursive;
}
.tit_menu_sup {
	color: #000;
}
.TITULO_AMARILLO {
	font-family: "Comic Sans MS", cursive;
	color: #FF0;
	font-size: 18px;
}
.TITULO1 {	font-size: 10px;
	color: #000;
	font-family: "Comic Sans MS", cursive;
}
</style>

<script language="JavaScript">
function checkSubmit() {
    document.getElementById("btsubmit").value = "Enviando...";
    document.getElementById("btsubmit").disabled = true;
    return true;
} 
</script>

</head>
<?php // viene de aLGUN SISTIO SOLO NECESITO COD CLIENTE Y NRO DOCU
$xcodigo_prov=$_POST['xcodigo'];
$xdoc=$_POST['xdoc'];
$tcta_caja=X20000;

if(strlen($xcodigo_cli)==0){
$xcodigo_prov=$_GET['xcodigo'];
$xdoc=$_GET['xdoc'];
$xnxixvx=$_GET['xnxixvx'];
$xtipodemov=$_GET['xtipodemov'];


//echo "codi: ".$xcodigo_prov.'<br />';
//echo "doc:  ".$xdoc.'<br />';
//echo ("TIPOMOV:  ".$xtipodemov.'<br />');


echo ("nivel  ".$xnxixvx);
}

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

if(strlen($xcodigo_prov) !=0 and strlen($xdoc)!=0){

$result=mysqli_query($connec,"select * from a_cteproveedores  where codcli_cteprov='$xcodigo_prov' AND nrodocu_cteprov='$xdoc' AND  tmov_cteprov='I' ");
}

$totali=mysqli_num_rows($result);

$tablai = mysqli_fetch_array( $result );
$id=$tablai["id"];
$xid_saldo_estado_ctecli=$tablai["id"];
$codcli_cteprov=$tablai["codcli_cteprov"];
$nrodocu_cteprov=$tablai["nrodocu_cteprov"];
$fecha_cteprov=$tablai["fecha_cteprov"];
$desc_cteprov=$tablai["desc_cteprov"];
$tmov_cteprov=$tablai["tmov_cteprov"];
$total_cteprov=$tablai["total_cteprov"];
$esta_cteprov=$tablai["esta_cteprov"];
$fpago_cteprov=$tablai["fpago_cteprov"];
$obs_cteprov=$tablai["obs_cteprov"];	
$codven_cteprov=$tablai["codven_cteprov"];

$result2=mysqli_query($connec,"select * from a_proveedores  where codigo_prov=$xcodigo_prov");
$tabla2 = mysqli_fetch_array( $result2 );

$rsocial_prov=$tabla2["rsocial_prov"];
$doc_prov=$tabla2["doc_prov"];
$dir_prov=$tabla2["dir_prov"];
$ciu_prov=$tabla2["ciu_prov"];
$ncom_prov=$tabla2["ncom_prov"];

?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="1018" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#00238c" class="tit_menu_sup"><table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="170" height="71" align="center" valign="middle"><img src="logo_sca_p.fw.png" width="134" height="60" /></td>
        <td width="668" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">ANALIZA 1 COMPRA </span></td>
        <td width="145" align="center" valign="middle"><img src="logo_empresa_p.fw.png" width="61" height="60" /></td>
        <td width="43" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php??zxyw=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>&zxyw=<?php echo("SCADCASA2014_09");?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="66" colspan="2" align="center" valign="top" ><table width="1013" height="61" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#999999" class="TITULO">Codigo Cli:</td>
        <td align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$codcli_cteprov) ?></td>
        <td width="86" bgcolor="#999999" class="TITULO">Nom. Comercial: </td>
        <td width="224" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$ncom_prov) ?></td>
        <td width="58" bgcolor="#999999" class="TITULO">Cliente.</td>
        <td colspan="3" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$rsocial_prov) ?></td>
        </tr>
      <tr>
        <td bgcolor="#999999" class="TITULO">Nro./RUC</td>
        <td align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$doc_prov) ?></td>
        <td bgcolor="#999999" class="TITULO">Ciudad</td>
        <td align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$ciu_prov) ?></td>
        <td bgcolor="#999999" class="TITULO">Dirección:</td>
        <td colspan="3" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$dir_prov) ?></td>
        </tr>
      <tr>
        <td width="73" bgcolor="#999999" class="TITULO">Documento:</td>
        <td width="108" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$xdoc) ?></td>
        <td bgcolor="#999999" class="TITULO">Fecha:</td>
        <td align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$fecha_cteprov) ?></td> 
        <td bgcolor="#999999" class="TITULO">Vendedor:</td>
        <td width="280" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$codven_cteprov) ?></td>
        <td width="40" bgcolor="#999999" class="TITULO">Estado:</td>
        <td width="126" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$esta_ctecli) ?></td>
      </tr>
      <tr>
        <td bgcolor="#999999" class="TITULO">Desc. Venta :</td>
        <td colspan="5" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$desc_cteprov) ?></td>
        <td bgcolor="#999999"><span class="TITULO">Total: </span></td>
        <td align="left" bgcolor="#FFFFCC"><span class="TITULO"><?php echo(" ".$total_cteprov) ?></span></td>
      </tr>
    </table></td>
  </tr>
  <tr class="tit_menu_sup">
    <td height="66" valign="top" ><table width="484" height="62" border="1" cellspacing="0">
      <tr  class="diez">
        <td width="43" height="20" align="center" bgcolor="#999999" >CODIGO</td>
        <td width="234" align="center" bgcolor="#999999">COMPRA</td>
        <td width="36" align="center" bgcolor="#999999" >Qty</td>
        <td width="59" align="center" bgcolor="#999999" >PRECIO</td>
        <td width="54" align="center" bgcolor="#999999" >Total</td>
        </tr>
      <?php 

$result3=mysqli_query($connec,"select * from a_almacen where codcli_alma=$xcodigo_prov AND nrodocu_alma='$xdoc' AND tmov_alma='I' order by id");
$total3=mysqli_num_rows($result3);
echo "Esta COMPRA tiene : ".($total2). " registros";

while ($tabla3=mysqli_fetch_array($result3)) {


		$id=$tabla3["id"];
		$codcli_alma=$tabla3["codcli_alma"];
		$nrodocu_alma=$tabla3["nrodocu_alma"];
		$fecmov_alma=$tabla3["fecmov_alma"];
		$coditem_alma=$tabla3["coditem_alma"];
		$desc_alma=$tabla3["desc_alma"];
		$cant_alma=$tabla3["cant_alma"];
		$tmov_alma=$tabla3["tmov_alma"];
		$pvent_alma=$tabla3["pvent_alma"];
		$subtot_alma=$cant_alma*$pvent_alma;		
		$pcosto_alma=$tabla3["pcosto_alma"];	
		$codven_alma=$tabla3["codven_alma"];
        $sumtot_alma=$sumtot_alma+$subtot_alma; 
		
					?>
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td height="40" bgcolor="#FFFFFF"><?php echo($coditem_alma) ?></td>
        <td><?php echo($desc_alma) ?></td>
        <td align="right"><?php echo($cant_alma) ?></td>
        <td align="right"><?php echo($pvent_alma) ?></td>
        <td align="right"><?php echo money_format('%n',$subtot_alma)."\n"; ?></td>
        <?php $xretornar="n_list_alumnos.php";?>
      </tr>
      <?php 
	}

?>
    </table>
      <table width="482" height="22" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" bgcolor="#99FF66" class="tabla10">COMPRA TOTAL S/.</td>
          <td width="63" align="right" bgcolor="#99FF66" class="tabla10"><?php echo money_format('%n', $sumtot_alma)."\n"; ?></td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
    <td height="66" valign="top" ><table width="486" height="58" border="1" cellspacing="0">
      <tr  class="diez">
        <td width="52" height="20" align="center" bgcolor="#999999" >N.RECIBO</td>
        <td width="77" align="center" bgcolor="#999999">FECHA</td>
        <td width="240" align="center" bgcolor="#999999">CAJA - DESCRIPCION</td>
        <td width="67" align="center" bgcolor="#999999" >CANTIDAD</td>
        <td width="28" bgcolor="#999999" ><div align="center"> Elimina</div></td>
      </tr>
      <?php 

$result4=mysqli_query($connec,"select * from a_caja  where codcli_caja=$xcodigo_prov AND nrodocu_caja='$xdoc' AND tipo_caja='S' order by id");
$total4=mysqli_num_rows($result4);

echo "En CAJA : ".($total4). " Recibos";

while ($tabla4=mysqli_fetch_array($result4)) {

		$id=$tabla4["id"];
		$nrorec_caja=$tabla4["nrorec_caja"];
		$fecha_caja=$tabla4["fecha_caja"];
		$codcli_caja=$tabla4["codcli_caja"];
		$nrodocu_caja=$tabla4["nrodocu_caja"];
		$desc_caja=$tabla4["desc_caja"];
		$cant_caja=$tabla4["cant_caja"];
        $sumtot_caja=$sumtot_caja+$cant_caja; 
		
					?>
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td height="36" bgcolor="#FFFFFF"><?php echo($nrorec_caja) ?></td>
        <td><?php echo($fecha_caja) ?></td>
        <td><?php echo($desc_caja) ?></td>
        <td align="right"><?php echo($cant_caja) ?></td>
        <td align="center"><a href="a_view_clientes.php?id=<?php  echo($id); ?>&amp;xretornar_ax=<?php echo($xretornar);?>"> X</a></td>

      </tr>
      <?php 
	}
?>
    </table>
      <table width="485" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right" bgcolor="#66FFFF" class="tabla10">TOTAL DE RECIBOS CAJA S/.</td>
          <td align="right" bgcolor="#66FFFF" class="tabla10"><?php echo money_format('%n',$sumtot_caja)."\n"; ?></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right" bgcolor="#CC6633" class="tabla10">SALDO X PAGAR S/.</td>
          <td width="69" align="right" bgcolor="#CC6633" class="tabla10"><?php
	  $saldoxcobrar=$sumtot_alma-$sumtot_caja;
	   echo  money_format('%n',$saldoxcobrar)."\n"; ?></td>
          <td width="37">&nbsp;</td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="528" height="59" align="center" valign="middle" >&nbsp;</td>
    <td width="486" align="center" valign="middle" ><table width="484" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="215" align="center"><a href="a_caja2.php?xcodigo=<?php echo($xcodigo_prov);?>&xrsocial=<?php echo($rsocial_prov);?>&xdoc=<?php echo($xdoc);?>&xsaldoxcobrar=<?php echo($saldoxcobrar);?>&xtotal_ctecli=<?php echo($total_cteprov);?>&xsumtot_caja=<?php echo($sumtot_caja);?>&xid_saldo_estado_ctecli=<?php echo($xid_saldo_estado_cteprov);?>&xtcta_caja=X20000&xnxixvx=<?php echo($xnxixvx);?>&xtitrec=S ">CAJA</a></td>
        <td width="269" align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>&zxyw=<?php echo("SCADCASA2014_09");?>">RETORNA</a></td>
      </tr>
    </table></td>
    </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
<!-- SELECT DISTINCT owner FROM pet -->