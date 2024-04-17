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
	font-size: 14px;
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
titulotabla2 {
	font-family: "Comic Sans MS", cursive;
	font-size: 12px;
	font-weight: bold;
}
titulotablafactura {
	font-family: "Comic Sans MS", cursive;
	font-size: 12px;
}
.titulotablafactura {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-weight: normal;
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
<?php // viene de lista_clientes_ventas
include("connec_sql.php");
mysql_query("SET NAMES 'utf8'");
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

// ---------------> RECIBE GETS
$codigox=$_GET['xcodper']; 
$xcodigo_cli=$_GET['xcodigo_cli'];
$xrsocial_cli=$_GET['xrsocial_cli'];
$xnroalmacen=$_GET['xnroalmacen'];
$deproforma=$_GET['deproforma'];
$xdoc_venta=$_GET['xdoc_venta'];
$xoxgxixdxoxcx=$_GET['xoxgxixdxoxcx']; //invertido


if ($deproforma=="SI"){
	$result=mysql_query("select * from a_prefprof where nrodocu_provi='$xdoc_venta'  order by id ",$connec);
	$total=mysql_num_rows($result);
	$sumtot_ped=0;
	echo "de prefprof va a guardar en provi: ".($total). " registros";
	for($i=0;$i<$total;$i++) {
		$codcli_provi=mysql_result($result,$i,"codcli_provi");
		$razsoc_provi=mysql_result($result,$i,"razsoc_provi");
		$nrodocu_provi=mysql_result($result,$i,"nrodocu_provi");
		$fecmov_provi=mysql_result($result,$i,"fecmov_provi");
		$coditem_provi=mysql_result($result,$i,"coditem_provi");
		$desc_provi=mysql_result($result,$i,"desc_provi");
		$cant_provi=mysql_result($result,$i,"cant_provi");
		$tmov_provi=mysql_result($result,$i,"tmov_provi");
		$pvent_provi=mysql_result($result,$i,"pvent_provi");
		$pcosto_provi=mysql_result($result,$i,"pcosto_provi");	
		$codven_provi=mysql_result($result,$i,"codven_provi");
		$observa_provi=mysql_result($result,$total-1,"observa_provi");
		$sql="INSERT INTO a_provisional   (codcli_provi,razsoc_provi,nrodocu_provi,fecmov_provi,coditem_provi,desc_provi,cant_provi,tmov_provi,pvent_provi,pcosto_provi,codven_provi)".
		"values ('$codcli_provi','$razsoc_provi','$xdoc','$xfecha_eu','$coditem_provi','$desc_provi','$cant_provi','$tmov_provi','$pvent_provi','$pvent_provi',
		'$codven_provi')";
		$resultin=mysql_query($sql,$connec);
	}
}

if ($xnroalmacen=="000001"){$nalmacen="AREQUIPA";}elseif($xnroalmacen=="000002"){$nalmacen="MATARANI";}elseif($xnroalmacen=="000003"){$nalmacen=" OTRO ";}
$xtprec_cli=$_GET['xtprec_cli'];
$xestado_cli=$_GET['xestado_cli'];
$xdoc=$_GET['xdoc'];

$xcodper=$_GET['xcodper'];
$xnxixvx=$_GET['xnxixvx'];


// IIIIIIFFFFFFF EEELLLLIIIIMMMIIINNNNAAARRR
$sieliminar=$_GET['sieliminar'];
$delregx=$_GET['delidx'];
if($sieliminar=="SI"){
$query = "delete from a_provisional where id = $delregx";  
$result = mysql_query($query); 
$sieliminar="NO";
} // FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF

// IIIIIIFFFFFFF AAAAÑÑÑÑAAAADDDDIIIIIIIIIRRRRRRRRR
$anadir=$_GET['anadir'];
$ultimoprec=$_GET['prec1'];

if ($anadir=="SI"){
	$cant1=$_GET['cant1'];
	$prec1=$_GET['prec1'];
	$xdoc=$_GET['xdoc'];
	$xfecha_pe=$_GET['xfecha_pe'];
	$dia = substr($xfecha_pe,0,2); 
	$mes = substr($xfecha_pe,3,2); 
	$ano = substr($xfecha_pe,-4); 
	$xfecha_eu = $ano . '-' . $mes . '-' . $dia; 
	
	$xcodigo_it1=$_GET['xcodigo_it1'];
	$xproducto_it1=$_GET['xproducto_it1'];
	$xtmov=$_GET['xtmov'];
	if ($xcodigo_it1=="000009"){ // es Descto. lo convierto a negativo
	$prec1=$prec1*-1;
	}
	$ultimoprec=$prec1;
	if(strlen($cant1)==0 OR strlen($prec1)==0 OR strlen($xcodigo_cli)==0) {
	
		echo "* NO TIENEN DATOS - VERIFIQUE *";
	}else {
		//VERIFICA SI TIENE REGISTROS CON EL MISMO CODIGO DE CLIENTE Y EL MISMO NRO. DE DOCUMENTO
		//$result=mysql_query("select * from a_pedidopend  where codcli_ppend=$xcodigo_cli AND nrodocu_ppend=$xdoc ",$connec);
		//$total=mysql_num_rows($result);
		//if ($total>0) {
		//echo "Ya existe el Pedido con: ".($total). " registros";
	
			 $sql="INSERT INTO a_provisional   (codcli_provi,razsoc_provi,nrodocu_provi,fecmov_provi,coditem_provi,desc_provi,cant_provi,tmov_provi,pvent_provi,pcosto_provi,
			 codven_provi)"."values ('$xcodigo_cli','$xrsocial_cli','$xdoc','$xfecha_eu','$xcodigo_it1','$xproducto_it1','$cant1','$xtmov','$prec1','$prec1','$xcodper')";
			 $result=mysql_query($sql,$connec);
	}
}    // FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
	
// AAACCCCEEEESSSOOOO AAAAUUUUUTTTTOOOORRRRIIIIIZZZZAAACCCCIIIIOOOOONNNN consulta PERSONAL --NIVEL -- A VECES NO SE USA
$resultx=mysql_query("select * from a_personal where trim(cod_per)='$codigox'",$connec);
$totalx=mysql_num_rows($resultx);
// consulta y genera el timex
$xtimex_per=mysql_result($resultx,0,"xtimex_per");
$xactualtimex=time(); 

if ($totalx==0 OR $xtimex_per<=$xactualtimex){ ?>	
  <table width="363" border="0">
    <tr bgcolor="#F8DA94">
     <th scope="col"><div align="center"><a href="sca.html">- NO ESTA UD. REGISTRADO</a></div> </th>
    </tr>
  </table>
<?  }else{  // SI TIENE ACCESO AUTORIZADO

$xnxixvx=mysql_result($resultx,0,"nivel_per");
$nom_per=mysql_result($resultx,0,"nom_per");
$ape_per=mysql_result($resultx,0,"ape_per");

$xtprec_cli=$_GET['xtprec_cli'];
$xestado_cli=$_GET['xestado_cli'];
$xdoc=$_GET['xdoc'];
//$xdia=$_GET['xdia'];
//$xmes=$_GET['xmes'];
//$xano=$_GET['xano'];
$xcodper=$_GET['xcodper'];
$xnxixvx=$_GET['xnxixvx'];
//echo ("nivel  ".$xnxixvx);
$xcodigo_it1=$_GET['xcodigo_it'];
$producto_it1=$_GET['xproducto_it'];
$prec_ok_it1=$_GET['xprec_ok_it'];
$stock_it1=$_GET['xstock_it'];
$auxiliar=$_GET['xauxiliar'];
$idauxi=$_GET['xidauxi'];
$xfecha_pe=date("d/m/Y");
$ultimoprec=$_GET['xprec_ok_it'];
?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="1379" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" bgcolor="#00238c" class="tit_menu_sup"><table width="1051" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="167" height="71" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="623" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">PROFORMA / PREFACTURA  VENDEDOR <?php echo(" - ".$nalmacen);?></span><br />
		<?php  echo "<font color='#FFFFFF'>".$nom_per.", ".$ape_per."</font>"; ?></td>
        <td width="220" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
        <td width="41" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td width="844" height="178" valign="top" bgcolor="#FFFFCC">
      <table width="430" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="430" bgcolor="#FFFFCC" class="TITULO">
          <form id="form0" name="form0" method="get" action="a_prefprof.php">
          <table width="419" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
          <tr>
             <td width="317" height="28" bgcolor="#FFCC66"> Dato a buscar Producto.:
                <input name="bxproducto" type="text" id="bxproducto" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();"/></td>
                <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" >  
                <input type="hidden" name="xrsocial_cli" value="<?php echo($xrsocial_cli); ?>" >  
                <input type="hidden" name="xtprec_cli" value="<?php echo($xtprec_cli); ?>" >  
                <input type="hidden" name="xestado_cli" value="<?php echo($xestado_cli); ?>" >    
                <input type="hidden" name="xdoc" value="<?php echo($xdoc); ?>" >    
                <input type="hidden" name="xcodper" value="<?php echo($xcodper); ?>" >    
                <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
                <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" />
                <td width="96" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
          </tr>
          </table>
          </form></td>
         </tr>
      </table>
      <table width="844" height="120" border="1" cellspacing="0">
        <tr bgcolor="#CCFFFF" class="diez">
          <td height="20" align="center" bgcolor="#CCCCCC">&nbsp;</td>
          <td align="center" bgcolor="#CCCCCC">&nbsp;</td>
          <td colspan="5" align="center" bgcolor="#CCCCCC">CONTADO . USA $</td>
          <td colspan="5" align="center" bgcolor="#CCCCCC">CREDITO - USA $</td>
          <td bgcolor="#E8FFFF">&nbsp;</td>
          <td bgcolor="#E8FFFF">&nbsp;</td>
          <td bgcolor="#E8FFFF">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr bgcolor="#CCFFFF" class="diez">
          <td width="43" height="20" rowspan="2" align="center" bgcolor="#CCCCCC">CODIGO</td>
          <td width="108" rowspan="2" align="center" bgcolor="#CCCCCC">PRODUCTO</td>
          <td width="28" rowspan="2" align="center" bgcolor="#CCCCCC">1/10</td>
          <td width="26" rowspan="2" align="center" bgcolor="#CCCCCC">11/30</td>
          <td width="29" rowspan="2" align="center" bgcolor="#CCCCCC">31 +</td>
          <td colspan="2" align="center" bgcolor="#FFFF00">OFERTA<BR />Prec. Ref.</td>
          <td width="29" rowspan="2" align="center" bgcolor="#CCCCCC">1/10</td>
          <td width="26" rowspan="2" align="center" bgcolor="#CCCCCC">11/30</td>
          <td width="31" rowspan="2" align="center" bgcolor="#CCCCCC">31 +</td>
          <td colspan="2" align="center" bgcolor="#FFFF00">OFERTA<br />
          Prec. Ref.</td>
          <td width="35" rowspan="2" align="center" bgcolor="#E8FFFF">STOCK</td>
          <td width="42" rowspan="2" align="center" bgcolor="#E8FFFF">AQP</td>
          <td width="43" rowspan="2" align="center" bgcolor="#E8FFFF">MATA</td>
          <td width="38" rowspan="2">PROV</td>
          
          <td width="38" rowspan="2"><div align="center"> AÑADIR</div></td>
          <td width="126" rowspan="2"> XX</td>
        </tr>
        <tr bgcolor="#CCFFFF" class="diez">
          <td width="33" align="center" bgcolor="#FFFF00">15+1</td>
          <td width="31" align="center" bgcolor="#FFFF00">30+2</td>
          <td width="32" align="center" bgcolor="#FFFF00">15+1</td>
          <td width="32" align="center" bgcolor="#FFFF00">30+2</td>
        </tr>
<?php 

include("connec_sql.php");
mysql_query("SET NAMES 'utf8'");
$bxproducto=$_POST['bxproducto'];
if(strlen($bxproducto)==0){
$result=mysql_query("select * from a_items order by id",$connec);
} else {
$bxproducto1=trim($bxproducto);
$result=mysql_query("select * from a_items where producto_it like '%$bxproducto1%' order by producto_it",$connec);}
	
// Consulta a: items ***********************************************************
$total=mysql_num_rows($result);

echo ($total). " Lista de ITEMS a la Venta";
for($i=0;$i<$total;$i++)
{
		$id=mysql_result($result,$i,"id");
		$codigo_it=mysql_result($result,$i,"codigo_it");
		$producto_it=mysql_result($result,$i,"producto_it");
		$marka_it=mysql_result($result,$i,"marka_it");
		$fabricante_it=mysql_result($result,$i,"fabricante_it");
		$precom_it=mysql_result($result,$i,"precom_it");
		$pje1_it=mysql_result($result,$i,"pje1_it");
		$pje2_it=mysql_result($result,$i,"pje2_it");
		$pje3_it=mysql_result($result,$i,"pje3_it");

		$pjecred1_it=mysql_result($result,$i,"pjecred1_it");

		$precon1=round($precom_it*(100+$pje1_it)/100,0);
		$precon2=round($precom_it*(100+$pje2_it)/100,0);
		$precon3=round($precom_it*(100+$pje3_it)/100,0);

		$precre1=round($precon1*(100+$pjecred1_it)/100,0);
		$precre2=round($precon2*(100+$pjecred1_it)/100,0);
		$precre3=round($precon3*(100+$pjecred1_it)/100,0);

        $precon151=round($precon2*15/16,0);
		$precon302=round($precon3*30/32,0);
        $precre151=round($precre2*15/16,0);
		$precre302=round($precre3*30/32,0);

		
		$stockmin_it=mysql_result($result,$i,"stockmin_it");		
		$lugar_al_it=mysql_result($result,$i,"lugar_al_it");	
		$stock_it=mysql_result($result,$i,"stock_it");
		?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td align="center"><?php echo($codigo_it) ?></td>
          <td><?php echo($producto_it) ?></td>
          <td align="center"><?php echo($precon1) ?></td>
          <td align="center"><?php echo($precon2) ?></td>
          <td align="center"><?php echo($precon3) ?></td>
          <td align="center" bgcolor="#FFFF99"><?php echo($precon151) ?></td>
          <td align="center" bgcolor="#FFFF99"><?php echo($precon302) ?></td>
          <td align="center"><?php echo($precre1) ?></td>
          <td align="center"><?php echo($precre2) ?></td>
          <td align="center"><?php echo($precre3) ?></td>
          <td align="center" bgcolor="#FFFF99" ><?php echo($precre151) ?></td>
          <td align="center" bgcolor="#FFFF99" ><?php echo($precre302) ?></td>
          
 <?          
$tabla_01_i = mysql_query("SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='I'  AND nro_alma='000001' ",$connec);
     $suma_01_i=mysql_result($tabla_01_i,0);
$tabla_01_s = mysql_query("SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='S'   AND nro_alma='000001' ",$connec);
     $suma_01_s=mysql_result($tabla_01_s,0);
$tabla_02_i = mysql_query("SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='I'  AND nro_alma='000002' ",$connec);
     $suma_02_i=mysql_result($tabla_02_i,0);
$tabla_02_s = mysql_query("SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='S'   AND nro_alma='000002' ",$connec);
     $suma_02_s=mysql_result($tabla_02_s,0);
$tabla_03_i = mysql_query("SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='I'  AND nro_alma='000003' ",$connec);
     $suma_03_i=mysql_result($tabla_03_i,0);
$tabla_03_s = mysql_query("SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='S'   AND nro_alma='000003' ",$connec);
     $suma_03_s=mysql_result($tabla_03_s,0);
$tabla_04_i = mysql_query("SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='I'  AND nro_alma='000004' ",$connec);
     $suma_04_i=mysql_result($tabla_04_i,0);
$tabla_04_s = mysql_query("SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='S'   AND nro_alma='000004' ",$connec);
     $suma_04_s=mysql_result($tabla_04_s,0);
$stock_01=$suma_01_i-$suma_01_s;  
$stock_02=$suma_02_i-$suma_02_s;  
$stock_03=$suma_03_i-$suma_03_s;  
$stock_04=$suma_04_i-$suma_04_s;  
$stock_tot=$stock_01+$stock_02+$stock_03+$stock_04;  
 ?>
          <td align="center"><?php echo($stock_tot) ?></td>
          <td align="center"><?php echo($stock_01)?></td>
          <td align="center"><?php echo($stock_02)?></td>
          <td align="center"><?php echo($stock_04)?></td>
          
          <? $producto_it=urlencode($producto_it); ?>
          <!--- INICIO AÑADIR EL ITEM A REG PROV. -->
          <td><a href="a_prefprof.php?
              xcodigo_cli=<?php echo($xcodigo_cli);?>&
        	  xrsocial_cli=<?php echo($xrsocial_cli);?>&
              xtprec_cli=<?php echo($xtprec_cli);?>&
              xestado_cli=<?php echo($xestado_cli);?>&
              xdoc=<?php echo($xdoc);?>&
              xcodper=<?php echo($xcodper);?>&

              xcodigo_it=<?php echo($codigo_it);?>&
              xproducto_it=<?php echo($producto_it);?>&
              xprec_ok_it=<?php echo($prec_ok_it);?>&
              xstock_it=<?php echo($stock_it);?>&
              xnxixvx=<?php echo($xnxixvx);?>&
       
              xauxiliar=1&
              xidauxi=<?php echo($id);?>&
			  xnroalmacen=<?php echo($xnroalmacen);?>&
			  xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx);?>
              ">Añadir</a></td>
          <td> 
            
     <?php if ($auxiliar==1 AND $idauxi==$id)   { 
	$anadir="SI";
	if ($codigo_it=="000009"){
		echo ("estoy en dto 1-".$prec1." 2-".$ultimoprec);
        $preven1_it=$prec1;
	}

	 ?>	 
            <table width="96" border="1" align="center" class="tablaingrenuevo">
             <form id="form1" name="form1" method="get" action="a_prefprof.php">
              <tr>
               <td bgcolor="#E3E3E1"><table width="83" border="0" cellspacing="0" cellpadding="0">
                 <tr>
                   <td width="83" align="center"><span class="TITULO">*Qty</span>  
                    <input name="cant1" type="text" id="cant1" size="5" maxlength="5" value=1></td>
                 </tr>
             </table></td>
             </tr>
                <tr>
                <? if (trim($producto_it)=="SERVICIO"){ ?>
                  <td height="69" bgcolor="#E3E3E1"><textarea name="xproducto_it1" cols="15" id="xproducto_it1"><?php echo($producto_it1);?></textarea>

                  </td>
				<? }else{ ?>
                  <input type="hidden" name="xproducto_it1" value="<?php echo($producto_it1); ?>" >  
					
				<? }?>
                </tr>
                <tr>
                  <td height="44" bgcolor="#E3E3E1"><table width="89" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50" align="center" class="TITULO">Precio:</td>
                      </tr>
                    <tr>
                      <td><input name="prec1" type="text" id="prec1" size="15" maxlength="15" value="<?php echo($ultimoprec); ?>"/></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <input type="hidden" name="xcodigo_it1" value="<?php echo($xcodigo_it1); ?>" >  
       

                  <input type="hidden" name="xtmov" value="S">
                  
                  <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" >  
                  <input type="hidden" name="xrsocial_cli" value="<?php echo($xrsocial_cli); ?>" >  
                  <input type="hidden" name="xtprec_cli" value="<?php echo($xtprec_cli); ?>" >  
                  <input type="hidden" name="xestado_cli" value="<?php echo($xestado_cli); ?>" >    
                  <input type="hidden" name="xdoc" value="<?php echo($xdoc); ?>" >    
                  <input type="hidden" name="xcodper" value="<?php echo($xcodper); ?>" >    
                  <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
                  <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                  <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" />
                  <input type="hidden" name="anadir" value="<?php echo($anadir); ?>" />
                  <input type="hidden" name="xfecha_pe" value="<?php echo($xfecha_pe); ?>" />
                  <input type="hidden" name="xnroalmacen" value="<?php echo($xnroalmacen); ?>" /> 
               
                  <td width="50" align="center"><input name="Submit" type="Submit" class="Estilo38" value=" Continúa " /></td>
                </tr>
              </form>
            </table>  
            
            <!--- FIIIIINNNNN AUXILIAR de ventas = cantidad y precio -->  
  <? } ?></td>
          
        </tr>
  <? } ?>
      </table>
    <p>&nbsp;</p></td>
    <td width="529" colspan="2" align="center" valign="top" ><table width="470" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="62" bgcolor="#999999"><span class="diez">Cliente</span>: </td>
          <td colspan="3" align="left"><?php echo(" ".$xcodigo_cli." - ".$xrsocial_cli) ?></td>
        </tr>
        <tr>
          <td bgcolor="#999999"><span class="diez">Documento:</span></td>
          <td width="203" align="left"><?php echo(" ".$xdoc) ?></td>
          <td width="39" bgcolor="#999999"><span class="diez">Fecha:</span></td>
          <td width="156" align="left">
		  
		  <?php echo(" ".$xfecha_pe) ?></td>
        </tr>
        <tr>
          <td bgcolor="#999999"><span class="diez">Vendedor:</span></td>
          <td align="left"><?php echo(" ".$xcodper) ?></td>
          <td colspan="2" bgcolor="#FFFF99">&nbsp;</td>
        </tr>
        </table>
      <table width="484" height="48" border="1" cellspacing="0">
        <tr  class="diez">
          <td width="43" height="20" align="center" >CODIGO</td>
          <td width="234" align="center">PRODUCTO</td>
          <td width="36" align="center" >Qty</td>
          <td width="59" align="center" >PRECIO</td>
          <td width="54" align="center" >Total</td>
          <td width="32" ><div align="center"> Elimina</div></td>
        </tr>
        <?php 

include("connec_sql.php");
mysql_query("SET NAMES 'utf8'");

//$bxncom=$_POST['bxncom'];
//$bxrsocial=$_POST['bxrsocial'];

// AND nrodocu_ppend=$xdoc order 

$result=mysql_query("select * from a_provisional where codcli_provi=$xcodigo_cli AND tmov_provi='S' order by id",$connec);
$total=mysql_num_rows($result);

echo "Este PEDIDO cuenta con: ".($total). " registros";
for($i=0;$i<$total;$i++)
{
		$id=mysql_result($result,$i,"id");
		$codcli_provi=mysql_result($result,$i,"codcli_provi");
		$nrodocu_provi=mysql_result($result,$i,"nrodocu_provi");
		$fecmov_provi=mysql_result($result,$i,"fecmov_provi");
		$coditem_provi=mysql_result($result,$i,"coditem_provi");
		$desc_provi=mysql_result($result,$i,"desc_provi");
		$cant_provi=mysql_result($result,$i,"cant_provi");
		$tmov_provi=mysql_result($result,$i,"tmov_provi");
		$pvent_provi=mysql_result($result,$i,"pvent_provi");
		$xultimoprec=$pvent_provi;
		$total_provi=$cant_provi*$pvent_provi;		
		$pcosto_provi=mysql_result($result,$i,"pcosto_provi");	
		$codven_provi=mysql_result($result,$i,"codven_provi");
        $sumtot_ped=$sumtot_ped+$total_provi; 
		
					?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td height="26" bgcolor="#FFFFFF">
		  <?php     echo($coditem_provi) ?></td>
          <td><?php echo($desc_provi) ?></td>
          <td align="right"><?php echo($cant_provi) ?></td>
          <td align="right"><?php echo($pvent_provi) ?></td>
          <td align="right"><?php echo money_format('%n', $total_provi)."\n"; ?> </td>

          <td align="center"><a href="a_prefprof.php?sieliminar=SI&delidx=<?php echo($id);?>&
  xcodigo_cli=<?php echo($xcodigo_cli);?>&
xrsocial_cli=<?php echo($xrsocial_cli);?>&
xtprec_cli=<?php echo($xtprec_cli);?>&
xestado_cli=<?php echo($xestado_cli);?>&
xdoc=<?php echo($xdoc);?>&
xcodper=<?php echo($xcodper);?>&
xnxixvx=<?php echo($xnxixvx);?>&
xultimoprec=<?php echo($xultimoprec);?>&
xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx);?>&
xnroalmacen=<?php echo($xnroalmacen);?>"> X</a></td> 
        </tr>
        <?php 
	}
?>
      </table>
      
      <table width="484" height="23" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="391" align="right"><?php echo "---- Total : " ?></td>
          <td width="56" align="right"><?php echo money_format('%n', $sumtot_ped)."\n"; ?></td>
          <td width="37">&nbsp;</td>
        </tr>
      </table>


    <table width="500" border="0" cellspacing="0" cellpadding="0">
           <?php
        if ($sumtot_ped >0){
			

$result0=mysql_query("select * from a_sistema  where id=1",$connec);
	$nropro1_sis=mysql_result($result0,0,"nropro1_sis");
if ($xnroalmacen=="000001"){
	$nrofacx_ser_sis=mysql_result($result0,0,"nrofac1_ser_sis");
	$nrofacx_sis=mysql_result($result0,0,"nrofac1_sis");
	$nropedx_sis=mysql_result($result0,0,"nroped1_sis");
	$nroguix_sis=mysql_result($result0,0,"nrogui1_sis");
	$nrobolx_ser_sis=mysql_result($result0,0,"nrobol1_ser_sis");
	$nrobolx_sis=mysql_result($result0,0,"nrobol1_sis");
}elseif  ($xnroalmacen=="000002"){
	$nrofacx_ser_sis=mysql_result($result0,0,"nrofac2_ser_sis");
	$nrofacx_sis=mysql_result($result0,0,"nrofac2_sis");
	$nropedx_sis=mysql_result($result0,0,"nroped2_sis");
	$nroguix_sis=mysql_result($result0,0,"nrogui2_sis");
}elseif  ($xnroalmacen=="000003"){		
	$nrofacx_ser_sis=mysql_result($result0,0,"nrofac3_ser_sis");
	$nrofacx_sis=mysql_result($result0,0,"nrofac3_sis");
	$nropedx_sis=mysql_result($result0,0,"nroped3_sis");
	$nroguix_sis=mysql_result($result0,0,"nrogui3_sis");
}
		?> 
    
    
        <tr>
          <td width="150" align="center">&nbsp;</td>
             <td width="350" align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#FFCC66" class="texto_tablas11"><span class="TITULO_AMARILLO"><span class="TITULO"><span class="titulotablafactura">Al finalizar la venta, ingrese el Nro. de  Documento........ </span></span></span><span class="titulotablafactura"><span class="TITULO"><span class="titulotablafactura"></span></span></span></td>
        </tr>
        <tr>
          <td><table width="150" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="186" bgcolor="#FFFFCC" class="TITULO">
                
                <form id="formgui" name="formgui" method="get" action="a_reg_movictasx.php">
                  <table width="125" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                    <tr>
                      <td width="120" height="14" bgcolor="#FFCC66">
                        <input name="xmone" type="text" id="xmone" size="1" maxlength="1" value="D"/>
                        
                        <input name="xdoc" type="text" id="xdoc" size="10" maxlength="15" value="<?php echo($nroguix_sis+1); ?>"/>
                        </td>
                      <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" />
                      <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                      <input type="hidden" name="xtipodemov" value="S" />
                      <input type="hidden" name="xtdoc" value="GR" />
                      <input type="hidden" name="xnroalmacen" value="<?php echo($xnroalmacen); ?>" />
                      
                      
                      </tr>
                    <tr>
                      <td height="14" bgcolor="#FFCC66"><input name="Submit5" type="submit" class="Estilo38" value="-> Doc. GuíaRem. " /></td>
                      </tr>
                    </table>
                </form></td>
              </tr>
          </table></td>
          <td align="center"><table width="337" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="162" bgcolor="#FFFFCC" class="TITULO"><table width="162" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                <form id="formbol" name="formbol" method="get" action="a_reg_movictasx.php">
                  <tr>
                    <td bgcolor="#FFCC66">Venta:</td>
                    <td height="14" colspan="2" bgcolor="#FFCC66"><select name="xconcre" class="diez">
                      <option value="CO">COntado</option>
                      <option value="CR">CRédito</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFCC66">Moneda:</td>
                    <td height="14" colspan="2" bgcolor="#FFCC66"><select name="xmone" class="diez">
                      <option value="D">Dólares</option>
                      <option value="S">Soles </option>
                    </select></td>
                  </tr>
                  <tr>
                    <td width="49" bgcolor="#FFCC66">Ser/Nro</td>
                    <td width="18" height="14" bgcolor="#FFCC66"><input name="xdoc_ser" type="text" id="xdoc_ser" size="3" maxlength="3" value="<?php echo($nrobolx_ser_sis); ?>"/></td>
                    <td width="87" bgcolor="#FFCC66"><input name="xdoc" type="text" id="xdoc" size="6" maxlength="6" value="<?php echo($nrobolx_sis+1); ?>"/></td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFCC66">Fecha:</td>
                    <td height="14" colspan="2" bgcolor="#FFCC66"><input name="xfeant" type="text" id="xfeant" size="10" maxlength="15" value="<?php echo($xfecha_pe); ?>"/></td>
                  </tr>
                  <tr>
                    <td height="14" colspan="3" align="center" bgcolor="#FFCC66"><input name="Submit2" type="submit" class="Estilo38" value="-&gt; Doc. Boleta " /></td>
                    <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" />
                    <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                    <input type="hidden" name="xtipodemov" value="S" />
                    <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" />
                    <input type="hidden" name="xtdoc" value="BO" />
                    <input type="hidden" name="xnroalmacen" value="<?php echo($xnroalmacen); ?>" />
                  </tr>
                </form>
              </table></td>
              <td width="175" bgcolor="#FFFFCC" class="TITULO">
                  <table width="157" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                <form id="formfa" name="formfa" method="get" action="a_reg_movictasx.php">
                    <tr>
                      <td bgcolor="#FFCC66">Venta:</td>
                      <td height="14" colspan="2" bgcolor="#FFCC66">
                        <select name="xconcre" class="diez">
                          <option value="CO">COntado</option>
                          <option value="CR">CRédito</option>
                          </select>
                        </td>
                      </tr>
                    <tr>
                      <td bgcolor="#FFCC66">Moneda:</td>
                      <td height="14" colspan="2" bgcolor="#FFCC66">
                        <select name="xmone" class="diez">
                          <option value="D">Dólares</option>
                          <option value="S">Soles  </option>
                          </select>
                        </td>
                      </tr>
                    <tr>
                      <td width="57" bgcolor="#FFCC66">Nro.</td>
                      <td width="19" height="14" bgcolor="#FFCC66"><input name="xdoc_ser" type="text" id="xdoc_ser" size="3" maxlength="3" value="<?php echo($nrofacx_ser_sis); ?>"/></td>
                      <td width="73" bgcolor="#FFCC66"><input name="xdoc" type="text" id="xdoc" size="6" maxlength="6" value="<?php echo($nrofacx_sis+1); ?>"/></td>
                      </tr>
                    <tr>
                      <td bgcolor="#FFCC66">Fecha:</td>
                      <td height="14" colspan="2" bgcolor="#FFCC66">
                        <input name="xfeant" type="text" id="xfeant" size="10" maxlength="15" value="<?php echo($xfecha_pe); ?>"/>
                        
                        </td>
                    </tr>
                    <tr>
                      <td height="14" colspan="3" align="center" bgcolor="#FFCC66"><input name="Submit4" type="submit" class="Estilo38" value="-> Doc. Factura " /></td>
                      <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" />
                      <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                      <input type="hidden" name="xtipodemov" value="S" />
                      <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" />                  
                      <input type="hidden" name="xtdoc" value="FA" />                  
                      <input type="hidden" name="xnroalmacen" value="<?php echo($xnroalmacen); ?>" />
                    </tr>
                 </form>
                    </table>
</td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="20" align="center">&nbsp;</td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
    </tr>
</table>

 <?php
}  }
mysql_close($connec);
?>
<p>&nbsp;</p>
</body>
</html>
<!-- SELECT DISTINCT owner FROM pet -->