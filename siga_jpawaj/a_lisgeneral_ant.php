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
.ocho {	font-size: 8px;
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
</style>

<script language="JavaScript">
function checkSubmit() {
    document.getElementById("btsubmit").value = "Enviando...";
    document.getElementById("btsubmit").disabled = true;
    return true;
} 
</script>


</head>
<?php  // MODULO DE ****** VENTAS ****** Lista clientes

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");
//setlocale(LC_MONETARY, 'en_US');
//setlocale(LC_MONETARY, 'sp_Peru');


// ***************** CODIGO VIENE Y CONVIERTE EN $codigox
//$xoxgxixdxoxcx=$_GET['xoxgxixdxoxcx']; 
// $xoxgxixdxoxcx debe ser igual a: "A"
$xoxgxixdxoxcx="B";
//echo " viene cod: ".$xoxgxixdxoxcx."<br>";
//$cod2ix=substr($xoxgxixdxoxcx,0,2);
//$cod4ix=substr($xoxgxixdxoxcx,-4);
//$codigox=$cod4ix.$cod2ix;

// ***************** CODIGO VAAAAA.. Y CONVIERTE EN $xoxgxixdxoxcx
//$cod2ox=substr($codigox,-2);
//$cod4ox=substr($codigox,0,4);
//$xoxgxixdxoxcx_o=$cod2ox.$cod4ox;
//echo " vaaa cod: ".$xoxgxixdxoxcx_o."<br>";
// ***************** FFFIIINNNNN....



//echo " cod consulta:  ".$codigox."<br>";

//---
//$result1=mysql_query("select * from n_secciones where trim(cod_secc)='$csecc'",$connec);
//$des_csecc=mysql_result($result1,0,"nom_secc");
//---
//$resultx=mysql_query("select * from a_personal where trim(cod_per)='$codigox'",$connec);
//$totalx=mysql_num_rows($resultx);
// consulta y genera el timex
//$xnxixvx=mysql_result($resultx,0,"nivel_per");
//$xtimex_per=mysql_result($resultx,0,"xtimex_per");
$xactualtimex=time(); 
//echo " totalx       :  ".$totalx."<br>";
//echo " xnivel       :  ".$xnxixvx."<br>";
//echo " timex sistema:  ".$xtimex_per."<br>";
//echo " timex actual :  ".$xactualtimex."<br>";

// ***************** FFFIIINNNNN....
$tchoy=3.60;
$totalx=1;
$xnxixvx="8";

if ($totalx==0 OR $xnxixvx<"2"){
	?>
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="www.empresacom.com">NO ESTA UD. AUTORIZADO</a></div>
    </th>
  </tr>
</table>
<?php
}else{
//$nom_per=mysql_result($resultx,0,"nom_per");
//$ape_per=mysql_result($resultx,0,"ape_per");
?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="1209" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#CCCCCC"  class="tit_menu_sup"><table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="164" height="71" align="center" valign="middle"><img src="../imagenes_idx/cabecera1.jpg" width="450" height="100" /></td>
        <td width="597" align="center" class="TITULO"><img src="../imagenes_idx/cabecera2.jpg" width="450" height="100" /></td>
		
        
        
        <td width="227" align="center" valign="middle"><img src="../imagenes_idx/cabecera3.jpg" width="300" height="100" /></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="1205" class="TITULO">
      <table width="1168" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
          <tr>
            <td width="263" bgcolor="#999999">
           <form id="form0" name="form0" method="get" action="a_lisgeneral.php">
           Lista Normal: 
               <input type="hidden" name="bxdatosx" value="" />
               <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx_o); ?>" />
               <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
               <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
               <input name="Submit4" type="submit" class="Estilo38" value=" Lista Normal" />
           </form>

            </td>
           <td width="488" height="28" bgcolor="#999999"> 
           <form id="form0" name="form0" method="get" action="a_lisgeneral.php">
           Dato a buscar: 
               <input name="bxdatosx" type="text" id="bxdatosx" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();"/>
               <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx_o); ?>" />
               <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
               <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
               <input name="Submit4" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" />
           </form>
           </td>
           <td width="333" bgcolor="#999999">&nbsp;</td>
           <td width="74" bgcolor="#999999">&nbsp;</td>
           </tr>

    </table></td>

    </tr>
  <tr class="tit_menu_sup">
    <td valign="top" bgcolor="#FFFFCC">
         <? if ($xoxgxixdxoxcx=="A") { 
            $width=1207;
           }else{  
             $width=800;          
           } ?>     
            

     <table width="<?php echo($width) ?>" height="56" border="1" cellspacing="0">
     

      <tr bgcolor="#CCFFFF" class="diez">
        <td width="87" height="20" align="center" bgcolor="#CCCCCC">PRODUC</td>
        <td width="151" align="center" bgcolor="#CCCCCC">MARCA</td>
        <td width="455" bgcolor="#CCCCCC"><div align="center">DESCRIPCIÓN</div></td>
        <td width="72" align="center" bgcolor="#CCCCCC" class="ocho">Precio Soles</td>
        <td width="37" align="center" bgcolor="#CCCCCC" class="ocho">Q/LIM-AQP</td>
        <td width="13" bgcolor="#CCCCCC">&nbsp;</td>
        <? if ($xoxgxixdxoxcx=="A") { 	?>
            <td width="69" align="center" bgcolor="#CCCCCC" class="ocho">K Soles</td>
            <td width="56" align="center" bgcolor="#CCCCCC" class="ocho">Util</td>
            <td width="54" align="center" bgcolor="#CCCCCC" class="ocho">K Dolar</td>
            <td width="37" bgcolor="#CCCCCC"><div align="center">OBS</div></td>
            <td width="30" bgcolor="#CCCCCC"><div align="center">CTKTO</div></td>
            <td width="96" bgcolor="#CCCCCC"><div align="center"> VENTA</div></td>
        <? }?>
         
        </tr>
      <?php 

$bxncom=$_GET['bxncom'];
//$bxdatosx=$_GET['bxdatosx'];
$bxdatosx=0;


if(strlen($bxdatosx)==0){
   	$result=mysqli_query($connec,"select * from a_items order by producto_it");

} else {
	$bxdatosx=trim($bxdatosx);
	echo ($bxdatosx);
	$result=mysqli_query($connec,"select * from a_items where producto_it like '%$bxproducto1%' .or. codfabrica_it like '%$bxproducto1%' order by producto_it");
}


$total=mysqli_num_rows($result);

echo "Registro con : ".$total. " ITEMS ";


while ($tabla=mysqli_fetch_array($result)){

		$id=$tabla["id"];
		$codigo_it=$tabla["codigo_it"];
		$codfabrica_it=$tabla["codfabrica_it"];
		$img_it=$tabla["img_it"];
		$grupolista_it=$tabla["grupolista_it"];
		$producto_it=$tabla["producto_it"];
		$marka_it=$tabla["marka_it"];
    	$fabricante_it=$tabla["fabricante_it"];
		$precom_it=$tabla["precom_it"];
		$pv01_it=$tabla["pv01_it"];
        $util01=$pv01_it-$precom_it;
		$pv02_it=$tabla["pv02_it"];
		$pv03_it=$tabla["pv03_it"];
		$view01_it=$tabla["view01_it"];
		
		//if ($pv01_it<=$precom_it) { $color1="#FF0000";  } else {  $color1="#E4E4E4";  }
		//if ($pv02_it<=$precom_it) { $color2="#FF0000";  } else {  $color2="#E4E4E4";  }
		//if ($pv03_it<=$precom_it) { $color3="#FF0000";  } else {  $color3="#E4E4E4";  }


		
					?>
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td height="30" bgcolor="#FFFFFF"><?php echo($codigo_it) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($marka_it) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($producto_it) ?></td>
        <td align="right" bgcolor="#FFFFCC"><?php echo(money_format('S/ %i',$pv01_it)."\n"); ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo($stock_del) ?></td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td align="right" bgcolor="#FFFFFF"><?php echo(money_format('S/ %i',$pks_igv)."\n"); ?></td>
        <td bgcolor="#FFFFFF"><?php echo(money_format('S/ %i',$util)."\n"); ?></td>
        <td align="right" bgcolor="#FFFFFF"><?php echo(money_format('$ %i',$pkd_igv)."\n"); ?></td>
        <td bgcolor="#FFFFFF"><?php echo($obs_del) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($id) ?></td>

     </tr>
      <?php 
	  }

  
//mysqli_close($connec);
?>

    </table> 
   
    </tr>
</table>


<?php 
	}
?>
</body>
</html>
