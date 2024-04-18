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
<?php

echo ("AAAQQQUUIII: ");
echo ("AAAQQQUUIII: ");


include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$datehoying=date("Y/m/d");
$datehoyperu=date("d/m/Y");
 // viene de aLGUN SISTIO SOLO NECESITO COD CLIENTE Y NRO DOCU
//$xcodigo_cli=$_POST['xcodigo_cli'];
//$xdoc=$_POST['xdoc'];
//$tcta_caja=XI0000;


//if(strlen($xcodigo_cli)==0){
$xcodigo_cli=$_GET['xcodigo'];
$xdoc=$_GET['xdoc'];
$xnxixvx=$_GET['xnxixvx'];
$xtipodemov=$_GET['xtipodemov'];
$xcodper=$_GET['xcodper'];
$xaperturak="NO";	
//echo "viene codpersonal: ".$xcodper."<br>";

echo ("nivel  ".$xnxixvx);
$xaperturak=$_GET['xaperturak'];
$sw_aperturak="0";
$xcodtr=$_GET['xcodtr'];
$xqtytr=$_GET['xqtytr'];
$xrestar=$_GET['xrestar'];
$xqtyrestar=$_GET['xqtyrestar'];


if($xaperturak=="SIII" AND $xqtytr>0){
			$sqlalmai="INSERT INTO a_almacen (nro_alma,codcli_alma,nrodocu_alma,fecmov_alma,coditem_alma, desc_alma, cant_alma, 
			tmov_alma,mone_alma,pvent_alma,pcosto_alma,codven_alma) VALUES ('000004','$xcodigo_cli','$xdoc','$datehoying','$xcodtr','Inicio de Sub K/Provisional','$xqtytr','I','$xmone','$pvent_provi','$pcosto_provi','$codven_provi')";
			$resultalmai=mysqli_query($connec,$sqlalmai);
			if(! $resultalmai ){
			  echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  ALMACEN.</span>");
			}
   $xaperturak="NO";	
 $sw_aperturak="1";  
}
$xaperturak="NO";	
//}
if($xrestar=="SIII" AND $xqtyrestar>0){
			$sqlalmai="INSERT INTO a_almacen (nro_alma,codcli_alma,nrodocu_alma,fecmov_alma,coditem_alma, desc_alma, cant_alma, 
			tmov_alma,mone_alma,pvent_alma,pcosto_alma,codven_alma) VALUES ('000004','$xcodigo_cli','$xdoc','$datehoying','$xcodtr','Descarga ','$xqtyrestar' ,'S','$xmone','$pvent_provi','$pcosto_provi','$codven_provi')";
			$resultalmai=mysqli_query($connec,$sqlalmai);
			if(! $resultalmai ){
			  echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  ALMACEN.</span>");
			}
   $xrestar="NO";	
}
$xrestar="NO";	



if(strlen($xcodigo_cli) !==0 and strlen($xdoc)!==0){

$result=mysqli_query($connec,"select * from a_cteclientes  where codcli_ctecli=$xcodigo_cli AND nrodocu_ctecli='$xdoc' AND tmov_ctecli='I' ");
}

$totali=mysqli_num_rows($result);
$tablai = mysqli_fetch_array( $result );
        $id=$tablai["id"];
        $xid_saldo_estado_ctecli=$tablai["id"];
		$codcli_ctecli=$tablai["codcli_ctecli"];
		$nrodocu_ctecli=$tablai["nrodocu_ctecli"];
		$fecha_ctecli=$tablai["fecha_ctecli"];
		$fecha_formato=date('d/m/Y',strtotime($fecha_ctecli));
		$desc_ctecli=$tablai["desc_ctecli"];
		$tmov_ctecli=$tablai["tmov_ctecli"];
		$mone_ctecli=$tablai["mone_ctecli"];
		if ($mone_ctecli=="S") { $xmonesig="S/."; $xmonetxt="Soles"; }else{ $xmonesig="US$"; $xmonetxt="Dólares"; }
		$total_ctecli=$tablai["total_ctecli"];
		$esta_ctecli=$tablai["esta_ctecli"];
		$fpago_ctecli=$tablai["fpago_ctecli"];
		$obs_ctecli=$tablai["obs_ctecli"];	
		$codven_ctecli=$tablai["codven_ctecli"];
		
//}
$result2=mysqli_query($connec,"select * from a_clientes  where codigo_cli=$xcodigo_cli");
$tabla2 = mysqli_fetch_array( $result2 );

$rsocial_cli=$tabla2["rsocial_cli"];
$doc_cli=$tabla2["doc_cli"];
$dir_cli=$tabla2["dir_cli"];
$ciu_cli=$tabla2["ciu_cli"];
$ncom_cli=$tabla2["ncom_cli"];

//echo ("OJO-X-VIEW este es el id de x cancelar OJO-X-VIEW: ".$xid_saldo_estado_ctecli.":ES OK ".$id."<br>");

echo "VOOOY A AAAA  BOOODDDDYYYY ";
?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="1043" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#00238c" class="tit_menu_sup"><table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="170" height="71" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="578" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">ANALIZA LA VENTA <?php echo(": ".$nrodocu_ctecli."   --- ".$fecha_formato." ---   "."<br>"."   por: ".$xmonesig." ".$total_ctecli);?></span></td>
        <td width="225" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
        <td width="53" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php??zxyw=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="66" colspan="2" align="center" valign="top" ><table width="1029" height="61" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td rowspan="2" class="TITULO">&nbsp;</td>
        <td bgcolor="#999999" class="TITULO">Codigo Cli:</td>
        <td align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$codcli_ctecli) ?></td>
        <td width="90" bgcolor="#999999" class="TITULO">Nom. Comercial: </td>
        <td width="221" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$ncom_cli) ?></td>
        <td width="67" bgcolor="#999999" class="TITULO">Cliente.</td>
        <td colspan="3" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$rsocial_cli) ?></td>
        </tr>
      <tr>
        <td bgcolor="#999999" class="TITULO">Nro./RUC</td>
        <td align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$doc_cli) ?></td>
        <td bgcolor="#999999" class="TITULO">Ciudad</td>
        <td align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$ciu_cli) ?></td>
        <td bgcolor="#999999" class="TITULO">Dirección:</td>
        <td colspan="3" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$dir_cli) ?></td>
        </tr>
      <tr>
        <td width="31" bgcolor="#CCCCCC" class="TITULO"><a href="a_modview1venta.php?xcodigo=<?php echo($codcli_ctecli);?>&xdoc=<?php echo($nrodocu_ctecli);?>&xnxixvx=<?php echo($xnxixvx);?>&xcodper=<?php echo($xcodper);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx);?>&rsocial=<?php echo($rsocial_cli);?>">Modif.</a>   </td>
        <td width="72" bgcolor="#CCCCCC" class="TITULO">Documento:</td>
        <td width="109" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$nrodocu_ctecli) ?></td>
        <td bgcolor="#CCCCCC" class="TITULO">Fecha:</td>
        <td align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$fecha_formato) ?></td>
        <td bgcolor="#CCCCCC" class="TITULO">Moneda</td>
        <td width="269" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$mone_ctecli) ?></td>
        <td width="39" bgcolor="#999999" class="TITULO">Estado:</td>
        <td width="111" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$esta_ctecli) ?></td>
      </tr>
      <tr>
        <td class="TITULO">&nbsp;</td>
        <td bgcolor="#999999" class="TITULO">Desc. Venta :</td>
        <td colspan="5" align="left" bgcolor="#FFFFCC" class="TITULO"><?php echo(" ".$desc_ctecli) ?></td>
        <td bgcolor="#999999"><span class="TITULO">Total: </span></td>
        <td align="left" bgcolor="#FFFFCC"><span class="TITULO"><?php echo(" ".$total_ctecli) ?></span></td>
      </tr>
    </table></td>
  </tr>
  <tr class="tit_menu_sup">
    <td height="66" align="center" valign="top" ><table width="511" height="62" border="1" cellspacing="0">
      <tr  class="diez">
        <td width="43" height="20" align="center" bgcolor="#999999" >CODIGO</td>
        <td width="266" align="center" bgcolor="#999999">GUIA DE PRODUCTOS</td>
        <td width="26" align="center" bgcolor="#999999" >Qty</td>
        <td width="31" align="center" bgcolor="#999999" >Moneda</td>
        <td width="57" align="center" bgcolor="#999999" >PRECIO</td>
        <td width="62" align="center" bgcolor="#999999" >Total</td>
        </tr>
      <?php 

$result3=mysqli_query($connec,"select * from a_almacen where codcli_alma=$xcodigo_cli AND nrodocu_alma='$xdoc' AND nro_alma<>'000004' order by id");
$total3=mysqli_num_rows($result3);
echo "Esta VENTA tiene : ".($total3). " registros";

while ($tabla3=mysqli_fetch_array($result3)) {


		$id=$tabla3["id"];	
		$codcli_alma=$tabla3["codcli_alma"];
		$nrodocu_alma=$tabla3["nrodocu_alma"];
		$fecmov_alma=$tabla3["fecmov_alma"];
		$coditem_alma=$tabla3["coditem_alma"];
		$codtr=$tabla3["coditem_alma"];
		$desc_alma=$tabla3["desc_alma"];
		$cant_alma=$tabla3["cant_alma"];
		$qtytr=$tabla3["cant_alma"];
		$tmov_alma=$tabla3["tmov_alma"];
		$mone_alma=$tabla3["mone_alma"];
		if ($mone_alma=="S") { $xmonesig="S/."; $xmonetxt="Soles"; }else{ $xmonesig="US$"; $xmonetxt="Dólares"; }
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
        <td align="center"><?php echo($xmonesig) ?></td>
        <td align="right"><?php echo($pvent_alma) ?></td>
        <td align="right"><?php echo money_format('%n',$subtot_alma)."\n"; ?></td>
   
      </tr>
      <?php 
	}

?>
    </table>
      <table width="482" height="22" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" bgcolor="#99FF66" class="tabla10">VENTA TOTAL ....</td>
          <td width="63" align="right" bgcolor="#99FF66" class="tabla10"><?php echo money_format('%n', $sumtot_alma)."\n"; ?></td>
        </tr>
      </table>
<?php // INICIOOOOOOON  Almacén PROVISIONALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL
$result4=mysqli_query($connec,"select * from a_almacen where codcli_alma=$xcodigo_cli AND nrodocu_alma='$xdoc' AND nro_alma='000004' order by id");
$total4=mysqli_num_rows($result4);
if ($total4>0) {
	?>      
      <table width="458" height="46" border="1" cellspacing="0">
        <tr  class="diez">
          <td width="80" align="center" bgcolor="#999999" >FECHA</td>
          <td width="53" height="20" align="center" bgcolor="#999999" >CODIGO</td>
          <td width="194" align="center" bgcolor="#999999">SUB-KARDEX</td>
          <td width="36" align="center" bgcolor="#999999" >Ingreso</td>
          <td width="36" align="center" bgcolor="#999999" >Salida</td>
          <td width="33" align="center" bgcolor="#999999" >Saldo</td>
        </tr>
        <?php 
$subingr=0;
$subsali=0;
echo "Almacén PROVISIONAL con: ".($total4). " registros";

while ($tabla4=mysqli_fetch_array($result4)) {

		$id=$tabla4["id"];
		$codcli_alma=$tabla4["codcli_alma"];
		$nrodocu_alma=$tabla4["nrodocu_alma"];
		$fecmov_alma=$tabla4["fecmov_alma"];
		$fechaperu=date("d-m-Y",strtotime($fecmov_alma));
		
		$coditem_alma=$tabla4["coditem_alma"];
		$desc_alma=$tabla4["desc_alma"];
		$cant_alma=$tabla4["cant_alma"];
		$tmov_alma=$tabla4["tmov_alma"];
		$mone_alma=$tabla4["mone_alma"];
		if ($xmone=="S") { $xmonesig="S/."; $xmonetxt="Soles"; }else{ $xmonesig="US$"; $xmonetxt="Dólares"; }
		$pvent_alma=$tabla4["pvent_alma"];
		$subtot_alma=$cant_alma*$pvent_alma;		
		$pcosto_alma=$tabla4["pcosto_alma"];	
		$codven_alma=$tabla4["codven_alma"];
        $sumtot_alma=$sumtot_alma+$subtot_alma; 
		
					?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td bgcolor="#FFFFFF"><?php echo($fechaperu) ?></td>
          <td height="24" bgcolor="#FFFFFF"><?php echo($coditem_alma) ?></td>
          <td><?php echo($desc_alma) ?></td>
          <td align="center">
              <?php if ($tmov_alma=="I"){ echo($cant_alma);
			   $subingr=$subingr+$cant_alma; 				
				 }else{ echo("0"); }
			  ?>
		  </td>
          <td align="center">
                <?php if ($tmov_alma=="S"){ echo($cant_alma);
			$subsali=$subsali+$cant_alma;	
				 }else{ echo("0");  }
			  ?>
          </td>
          <td align="center">
                <?php echo($subingr-$subsali); ?>             
          </td>
        </tr>
        <?php 
	}   
?>
      </table>
      <table width="331" height="49" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="50" height="49"> mov</td>
          <td width="213"><form id="formtra" name="formtra" method="get" onSubmit="return checkSubmit();" action="a_view_1_venta.php" onkeypress="javascript:if(event.keyCode==13){return false;}">
              <table width="108" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                    <tr>
                      <td width="26" height="14">
                      <input name="xqtyrestar" type="text" id="xqtyrestar" size="4" maxlength="4" value="1"/>
                      </td>
                      <input type="hidden" name="xcodtr" value="<?php echo($codtr) ?>"/>
                      <input type="hidden" name="xcodigo" value="<?php echo($codcli_ctecli); ?>" />
                      <input type="hidden" name="xdoc" value="<?php echo($nrodocu_ctecli); ?>" />
                      <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                      <input type="hidden" name="xcodper" value="<?php echo($codven_ctecli); ?>" />
                      <input type="hidden" name="xtipodemov" value="S" />
                      <input type="hidden" name="xrestar" value="SIII" />

                      <td width="76" align="center" ><input name="Submit2" type="submit" class="Estilo38" value="Descarga " /></td>
                    </tr>
                  </table>
                </form>
          
          </td>
          <td width="68" align="center"><a href="pdf_subkardex.php?xcodigo=<?php echo($codcli_ctecli); ?>&xdoc=<?php echo($nrodocu_ctecli); ?>">Imprime</a></td>
        </tr>
      </table>
<?
} // FINNNNNNN  Almacén PROVISIONALLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL

?>      
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td height="66" align="center" valign="top" ><table width="481" height="62" border="1" cellspacing="0">
      <tr  class="diez">
        <td width="55" height="20" align="center" bgcolor="#999999" >N.RECIBO</td>
        <td width="82" align="center" bgcolor="#999999">FECHA</td>
        <td width="216" align="center" bgcolor="#999999">CAJA - DESCRIPCION</td>
        <td width="38" align="center" bgcolor="#999999" >MONE</td>
        <td width="68" align="center" bgcolor="#999999" >CANTIDAD</td>
        </tr>
      <?php 
//echo "caja1 codicli: ".$xcodigo_cli.'<br />';
//echo "caja2 nrodocu: ".$xdoc.'<br />';
//echo "caja3 tcta   : ".$tcta_caja.'<br />';

$result5=mysqli_query($connec,"select * from a_caja  where codcli_caja=$xcodigo_cli AND nrodocu_caja='$xdoc' AND tipo_caja='I' order by id");
$total5=mysqli_num_rows($result5);

echo "En CAJA : ".($total5). " Recibos";

while ($tabla5=mysqli_fetch_array($result5)) {

		$id=$tabla5["id"];
		$nrorec_caja=$tabla5["nrorec_caja"];
		$fecha_caja=$tabla5["fecha_caja"];
		$codcli_caja=$tabla5["codcli_caja"];
		$nrodocu_caja=$tabla5["nrodocu_caja"];
		$xmone=$tabla5["mone_caja"];
		if ($xmone=="S") { $xmonesig="S/."; $xmonetxt="Soles"; }else{ $xmonesig="US$"; $xmonetxt="Dólares"; }
		$desc_caja=$tabla5["desc_caja"];
		$cant_caja=$tabla5["cant_caja"];
        $sumtot_caja=$sumtot_caja+$cant_caja; 
		
					?>
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td height="40" bgcolor="#FFFFFF"><?php echo($nrorec_caja) ?></td>
        <td><?php echo($fecha_caja) ?></td>
        <td><?php echo($desc_caja) ?></td>
        <td align="center"><?php echo($xmonesig) ?></td>
        <td align="right"><?php echo($cant_caja) ?></td>
    
      </tr>
      <?php 
	}
	
// ***************** CODIGO VAAAAA.. Y CONVIERTE EN $xoxgxixdxoxcx
$cod2x=substr($xcodper,-2);
$cod4x=substr($xcodper,0,4);
$xoxgxixdxoxcx=$cod2x.$cod4x;
// ***************** FFFIIINNNNN....
	
?>
    </table>
      <table width="485" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="411" align="right" bgcolor="#66FFFF" class="tabla10">TOTAL DE RECIBOS CAJA <?php echo $xmonesig ?></td>
          <td align="right" bgcolor="#66FFFF" class="tabla10"><?php echo money_format('%n',$sumtot_caja)."\n"; ?></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#CC6633" class="tabla10">SALDO X COBRAR <?php echo $xmonesig ?></td>
          <td width="74" align="right" bgcolor="#CC6633" class="tabla10"><?php
	  $saldoxcobrar=$sumtot_alma-$sumtot_caja;
	   echo  money_format('%n',$saldoxcobrar)."\n"; ?></td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="513" height="59" align="center" valign="middle" >
      <table width="503" height="31" border="0" cellpadding="0" cellspacing="0">
      <tr>
<!--ñññññññññññññññññññññññññññññññññññ -->
<? if ( $total5==0) { 
	  if ($sw_aperturak=="1") {
		    $codtr=" ";
	    	$qtytr=" ";
      }?>


    <td width="153" align="center">
       <form id="formtra" name="formtra" method="get" onSubmit="return checkSubmit();" action="a_view_1_venta.php" onkeypress="javascript:if(event.keyCode==13){return false;}">
               <table width="145" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                  <tr>
                    <td width="70" height="14" ><input name="xcodtr" type="text" id="xcodtr" size="6" maxlength="6" value="<?php echo($codtr) ?>"/></td>
                    <td width="35" ><input name="xqtytr" type="text" id="xqtytr" size="4" maxlength="5" value="<?php echo($qtytr) ?>"/></td>
                       <input type="hidden" name="xcodigo" value="<?php echo($codcli_ctecli); ?>" />
                      <input type="hidden" name="xdoc" value="<?php echo($nrodocu_ctecli); ?>" />
                      <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                      <input type="hidden" name="xcodper" value="<?php echo($codven_ctecli); ?>" />
                      <input type="hidden" name="xtipodemov" value="S" />
                      <input type="hidden" name="xaperturak" value="SIII" />
                    <td width="36" ><input name="Submit" type="submit" class="Estilo38" value="Gen. Kardex" /></td>
                  </tr>
                </table>
        </form>
    </td>

<? } else {
   echo "Genera K."."<br>";

} ?>
<!--  ññññññññññññññññññññññññññ -->
        <td width="89" align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09">Genera(PDF)-GUIA</a></td>
        <td width="164" align="center">
        <form id="formfec" name="formfec" method="get" action="a_pdf_factura.php" >
               <table width="145" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                    <tr>
                      <td height="14" ><input name="xfefact" type="text" id="xfefact" size="11" maxlength="11" value="<?php echo($datehoyperu) ?>"/></td>
                    </tr>
                    <tr>
                      <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" />
                      <input type="hidden" name="xdoc" value="<?php echo($xdoc); ?>" />
                      <input type="hidden" name="xmone" value="<?php echo($mone_ctecli); ?>" />
                 
                      <td width="36" height="14" ><input name="Submit" type="submit" class="Estilo38" value="Gen. Factura" /></td>
                    </tr>
                    </table>
                </form>
		       

        
        </td>
        <td width="93" align="center" bgcolor="#CCCCCC"> <!-- <a href="a_pdf_factura.php?xcodigo_cli=<?php echo($xcodigo_cli);?>&xdoc=<?php echo($xdoc);?>&xmone=<?php echo($mone_ctecli);?> ">Genera(PDF) FACTURA</a> --></td>
        
      </tr>
    </table></td>
    <td width="526" align="center" valign="middle" ><table width="526" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="110" align="center" bgcolor="#CCCCCC"><a href="a_caja2.php?xcodigo=<?php echo($xcodigo_cli);?>&xrsocial=<?php echo($rsocial_cli);?>&xdoc=<?php echo($xdoc);?>&xsaldoxcobrar=<?php echo($saldoxcobrar);?>&xtotal=<?php echo($total_ctecli);?>&xsumtot_caja=<?php echo($sumtot_caja);?>&xid_saldo_estado=<?php echo($xid_saldo_estado_ctecli);?>&xtcta_caja=XI0000&xcodper=<?php echo($xcodper);?>&xtitrec=I&xnxixvx=<?php echo($xnxixvx);?>">CAJA</a></td>
        <td width="17" align="center">&nbsp;</td>
        <td width="177" align="center" bgcolor="#CCCCCC"><a href="a_lista_clientes_ventas.php?zyxw=SCADCASA2014_09&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>&xcodper=<?php echo($xcodper);?>">Retorna CLIENTES</a></td>
        <td width="13" align="center">&nbsp;</td>
        
        
        
        <td width="145" align="center"><a href="xcxoxmxaxnxdxox.php?zyxw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>">RET. COMANDO G.</a></td>
        <td width="19" align="center">&nbsp;</td>
        <td width="45" align="center"><a href="a_ligapostrecibo.php?zyxw=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>&xcod_seek=<?php echo($codcli_ctecli);?>&xnro_docu=<?php echo($nrodocu_ctecli);?>&xid_cte=<?php echo($xid_saldo_estado_ctecli);?>">l</a>
        
        
        
        </td>
      </tr>
    </table></td>
    </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
<!-- SELECT DISTINCT owner FROM pet -->