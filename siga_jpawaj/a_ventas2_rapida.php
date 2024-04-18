<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VENTA - RAPIDA</title>

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
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

 // viene de a_ventas1 " nva. venta"
//   //$auxiliar=0;
//$xcodigo_cli=$_POST['xcodigo_cli'];
//$xrsocial_cli=$_POST['xrsocial_cli'];
//$xtprec_cli=$_POST['xtprec_cli'];
//$xestado_cli=$_POST['xestado_cli'];
//$xdoc=$_POST['xdoc'];
//$xdia=$_POST['xdia'];
//$xmes=$_POST['xmes'];
//$xano=$_POST['xano'];
//$xcodper=$_POST['xcodper'];
//$xnxixvx=$_POST['xnxixvx'];
//echo ("nivel  ".$xnxixvx);



$xcodigo_cli=$_GET['xcodigo_cli'];
$xrsocial_cli=$_GET['xrsocial_cli'];
$xtprec_cli=$_GET['xtprec_cli'];
$xestado_cli=$_GET['xestado_cli'];
$xdoc=$_GET['xdoc'];
//$xdia=$_GET['xdia'];
//$xmes=$_GET['xmes'];
//$xano=$_GET['xano'];
$xcodper=$_GET['xcodper'];
$xnxixvx=$_GET['xnxixvx'];
echo ("nivel  ".$xnxixvx);

$xcodigo_it1=$_GET['xcodigo_it'];
$producto_it1=$_GET['xproducto_it'];
$prec_ok_it1=$_GET['xprec_ok_it'];
$stock_it1=$_GET['xstock_it'];

$auxiliar=$_GET['xauxiliar'];
$idauxi=$_GET['xidauxi'];
echo (" -auxiliarrrrrr 0001111....").$auxiliar;


//        xid_auxi=<?php echo($id);?>


?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="1026" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" bgcolor="#00238c" class="tit_menu_sup"><table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="170" height="71" align="center" valign="middle"><img src="logo_sca_p.fw.png" width="134" height="60" /></td>
        <td width="627" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">VENTA MOSTRADOR - (RÁPIDA) </span></td>
        <td width="146" align="center" valign="middle"><img src="logo_empresa_p.fw.png" width="61" height="60" /></td>
        <td width="83" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="436" height="178" valign="top" bgcolor="#FFFFCC"><span class="TITULO"><a href="n_form_gra.php" ></a></span>
      <table width="430" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="430" bgcolor="#FFFFCC" class="TITULO"><form id="form0" name="form0" method="get" action="a_ventas2_rapida.php">
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
                
                
                
                <td width="96" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
                </tr>
              </table>
          </form></td>
        </tr>
      </table>
      <table width="698" height="61" border="1" cellspacing="0">
        <tr bgcolor="#CCFFFF" class="diez">
          <td width="50" height="20" align="center">CODIGO</td>
          <td width="117" align="center">PRODUCTO</td>
          <td width="69">DES-MODELO</td>
          <td width="69">COMPRA</td>
          <td width="69">PRECIO1</td>
          <td width="69">UTIL</td>
          <td width="69">PRECIO2</td>
          <td width="36">PRECIO3</td>
          <td width="36">STOCK</td>
          
          <td width="34"><div align="center"> AÑADIR</div></td>
          <td width="34"> XX</td>
        </tr>
        <?php 


$bxproducto=$_GET['bxproducto'];

if(strlen($bxproducto)==0){
$result=mysqli_query($connec,"select * from a_items order by producto_it");
} else {
$bxproducto1=trim($bxproducto);
$result=mysqli_query($connec,"select * from a_items where producto_it like '%$bxproducto1%' order by producto_it");}
	
// comentario..... UN FORMULARIO DENTRO DE ESTE PHP CON ACTION AL MISMO PHP

  
// Consulta a: items ***********************************************************
$total=mysqli_num_rows($result);

echo ($total). " Lista de ITEMS a la Venta";

while ($tabla=mysqli_fetch_array($result)) {

		$id=$tabla["id"];
		$codigo_it=$tabla["codigo_it"];
		$producto_it=$tabla["producto_it"];
		$codfabrica_it=$tabla["codfabrica_it"];
		$marka_it=$tabla["marka_it"];
		$fabricante_it=$tabla["fabricante_it"];
		$precom_it=$tabla["precom_it"];
		$pv01_it=$tabla["pv01_it"];
		$util01=$pv01_it - $precom_it;
		$pv02_it=$tabla["pv02_it"];
		$pv03_it=$tabla["pv03_it"];
		$stockmin_it=$tabla["stockmin_it"];		
		$lugar_al_it=$tabla["lugar_al_it"];	
		
					?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td height="39" bgcolor="#FFFFFF"><?php echo($codigo_it) ?></td>
          <td><?php echo($producto_it) ?></td>
          <td><?php echo($codfabrica_it) ?></td>
          <td><?php echo($precom_it) ?></td>
          <td bgcolor="#FFFFCC"><?php echo($pv01_it) ?></td>
          <td><?php echo($util01) ?></td>
          <td><?php echo($pv02_it) ?></td>
          <td><?php echo($pv03_it) ?></td>
          <td><?php echo($stock_it) ?></td>
          <td><a href="a_ventas2_rapida.php?xcodigo_cli=<?php echo($xcodigo_cli);?>&xrsocial_cli=<?php echo($xrsocial_cli);?>&xtprec_cli=<?php echo($xtprec_cli);?>&xestado_cli=<?php echo($xestado_cli);?>&xdoc=<?php echo($xdoc);?>&xcodper=<?php echo($xcodper);?>&xcodigo_it=<?php echo($codigo_it);?>&xproducto_it=<?php echo($producto_it);?>&xprec_ok_it=<?php echo($pv01_it);?>&xstock_it=<?php echo($stock_it);?>&xnxixvx=<?php echo($xnxixvx);?>&xauxiliar=1&xidauxi=<?php echo($id);?>">Añadir</a></td>
          <td> 
            
</td>
          
        </tr>
        <?php 
	}


  
//mysqli_close($connec);
$auxiliar=$_GET['xauxiliar'];
echo (" -auxiliarrrrrr 0002 ....").$auxiliar;
?>
      </table>
    <p>&nbsp;</p></td>
    <td width="584" align="center" valign="top" > 
    
    
               <?php
			    if ($auxiliar==1 ) { ?>	 
            
            
            <table width="96" border="1" align="center" class="tablaingrenuevo">
              <form id="form1" name="form1" method="get" action="a_reg_provisional.php">
                <tr>
                  <td bgcolor="#E3E3E1"><table width="83" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="83" align="center"><span class="TITULO">*Qty</span>  
                        <input name="cant1" type="text" id="cant1" size="5" maxlength="5" value=1></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td bgcolor="#E3E3E1"><table width="89" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50" align="center" class="TITULO">Precio:</td>
                      </tr>
                    <tr>
                      <td><input name="prec1" type="text" id="prec1" size="15" maxlength="15" value="<?php echo($pv01_it); ?>"/></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <input type="hidden" name="xcodigo_it1" value="<?php echo($xcodigo_it1); ?>" >  
                  <input type="hidden" name="xproducto_it1" value="<?php echo($producto_it1); ?>" >  
                  <input type="hidden" name="xtmov" value="S">
                  
                  <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" >  
                  <input type="hidden" name="xrsocial_cli" value="<?php echo($xrsocial_cli); ?>" >  
                  <input type="hidden" name="xtprec_cli" value="<?php echo($xtprec_cli); ?>" >  
                  <input type="hidden" name="xestado_cli" value="<?php echo($xestado_cli); ?>" >    
                  <input type="hidden" name="xdoc" value="<?php echo($xdoc); ?>" >    
                  <input type="hidden" name="xcodper" value="<?php echo($xcodper); ?>" >    
                  <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
                  <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                  
                  <td width="50" align="center"><input name="Submit" type="Submit" class="Estilo38" value=" Continúa " /></td>
                </tr>
              </form>
            </table>  
            
            <!--- FIIIIINNNNN AUXILIAR de ventas = cantidad y precio -->  
  <?php } ?>
  
  
  </td>
    <td width="584" colspan="2" align="center" valign="top" ><table width="470" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="62" bgcolor="#999999"><span class="diez">Cliente</span>: </td>
          <td colspan="3" align="left"><?php echo(" ".$xcodigo_cli." - ".$xrsocial_cli) ?></td>
        </tr>
        <tr>
          <td bgcolor="#999999"><span class="diez">Documento:</span></td>
          <td width="203" align="left"><?php echo(" ".$xdoc) ?></td>
          <td width="39" bgcolor="#999999"><span class="diez">Fecha:</span></td>
<?php 
$xdia=date("d");
$xmes=date("m");
$xano=date("Y");
?>
          <td width="156" align="left"><?php echo(" ".$xdia."/".$xmes."/".$xano) ?></td>
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

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

//$bxncom=$_POST['bxncom'];
//$bxrsocial=$_POST['bxrsocial'];

// AND nrodocu_ppend=$xdoc order 
$resultprov=mysqli_query  ( $connec,"select * from a_provisional where codcli_provi=$xcodigo_cli AND nrodocu_provi='$xdoc' AND tmov_provi='S' order by id");

$total=mysqli_num_rows($resultprov);

echo "Este PEDIDO cuenta con: ".($total). " registros";
while ($tablaprov=mysqli_fetch_array($resultprov)) {

		$id=$tablaprov["id"];
		$codcli_provi=$tablaprov["codcli_provi"];
		$nrodocu_provi=$tablaprov["nrodocu_provi"];
		$fecmov_provi=$tablaprov["fecmov_provi"];
		$coditem_provi=$tablaprov["coditem_provi"];
		$desc_provi=$tablaprov["desc_provi"];
		$cant_provi=$tablaprov["cant_provi"];
		$tmov_provi=$tablaprov["tmov_provi"];
		$pvent_provi=$tablaprov["pvent_provi"];
		$total_provi=$cant_provi*$pvent_provi;		
		$pcosto_provi=$tablaprov["pcosto_provi"];	
		$codven_provi=$tablaprov["codven_provi"];
        $sumtot_ped=$sumtot_ped+$total_provi; 
		
					?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td height="26" bgcolor="#FFFFFF">
		  <?php     echo($coditem_provi) ?></td>
          <td><?php echo($desc_provi) ?></td>
          <td align="right"><?php echo($cant_provi) ?></td>
          <td align="right"><?php echo($pvent_provi) ?></td>
          <td align="right"><?php echo money_format('%n', $total_provi)."\n"; ?> </td>

          <td align="center"><a href="a_delregpedido_x.php?delidx=<?php echo($id);?>&
  xcodigo_cli=<?php echo($xcodigo_cli);?>&
xrsocial_cli=<?php echo($xrsocial_cli);?>&
xtprec_cli=<?php echo($xtprec_cli);?>&
xestado_cli=<?php echo($xestado_cli);?>&
xdoc=<?php echo($xdoc);?>&
xcodper=<?php echo($xcodper);?>&
xnxixvx=<?php echo($xnxixvx);?>"> X</a></td> 

 
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


    <table width="551" border="0" cellspacing="0" cellpadding="0">
           <?php
        if ($sumtot_ped >0){
			

$result0=mysqli_query($connec,"select * from a_sistema  where id=1");

$tabla0 = mysqli_fetch_array($result0);
$nrofac1_ser_sis=$tabla0["nrofac1_ser_sis"];
$nrofac1_sis=$tabla0["nrofac1_sis"];
$nroped1_sis=$tabla0["nroped1_sis"];
$nrogui1_sis=$tabla0["nrogui1_sis"];
			
        ?> 
    
    
        <tr>
             <td align="center">&nbsp;</td>
             <td align="center">&nbsp;</td>
             <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
        <td colspan="3" align="center" bgcolor="#FFCC66" class="texto_tablas11"><span class="TITULO_AMARILLO"><span class="TITULO"><span class="titulotablafactura">Al finalizar la venta, ingrese el Nro. de  Documento........ </span></span></span><span class="titulotablafactura"><span class="TITULO"><span class="titulotablafactura"></span></span></span></td>
        </tr>
      <tr>
        <td><table width="186" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="186" bgcolor="#FFFFCC" class="TITULO">
            
            <form id="formgui" name="formgui" method="get" action="a_reg_xalma_ctasx.php">
              <table width="157" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                <tr>
                  <td width="153" height="14" bgcolor="#FFCC66">
                  <input name="xdoc" type="text" id="xdoc" size="10" maxlength="15" value="<?php echo($nrogui1_sis+1); ?>"/>
                  </td>
                  <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" />
                  <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                  <input type="hidden" name="xtipodemov" value="S" />
                  <input type="hidden" name="xtdoc" value="GR" />
                  

                </tr>
                <tr>
                  <td height="14" bgcolor="#FFCC66"><input name="Submit5" type="submit" class="Estilo38" value="-> Doc. GuíaRem. " /></td>
                </tr>
              </table>
            </form></td>
          </tr>
        </table></td>
        <td>
        
<table width="186" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="186" bgcolor="#FFFFCC" class="TITULO">
            <form id="formnp" name="formnp" method="get" action="a_reg_xalma_ctasx.php">
              <table width="157" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                <tr>
                  <td width="153" height="14" bgcolor="#FFCC66">
                  <input name="xdoc" type="text" id="xdoc" size="10" maxlength="15" value="<?php echo($nroped1_sis+1); ?>"/>
                  </td>
                  <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" />
                  <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                  <input type="hidden" name="xtipodemov" value="S" />
                  <input type="hidden" name="xtdoc" value="NP" />
                </tr>
                <tr>
                  <td height="14" bgcolor="#FFCC66"><input name="Submit4" type="submit" class="Estilo38" value="-> Doc. N/Pedido " /></td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table>        
        
        </td>
        <td align="center"><table width="186" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="186" bgcolor="#FFFFCC" class="TITULO">
            <form id="formfa" name="formfa" method="get" action="a_reg_xalma_ctasx.php">
              <table width="157" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
                <tr>
                  <td width="153" height="14" bgcolor="#FFCC66">
                  <?php echo($nrofac1_ser_sis); ?>
                  <input name="xdoc" type="text" id="xdoc" size="10" maxlength="15" value="<?php echo($nrofac1_sis+1); ?>"/>
                  </td>
                  <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" />
                  <input type="hidden" name="xdoc_ser" value="<?php echo($nrofac1_ser_sis.'-'); ?>" />
                  <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                  <input type="hidden" name="xtipodemov" value="S" />
                  <input type="hidden" name="xtdoc" value="FA" />                  
                </tr>
                <tr>
                  <td height="14" bgcolor="#FFCC66"><input name="Submit4" type="submit" class="Estilo38" value="-> Doc. Factura " /></td>
                </tr>
              </table>
            </form></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td width="203" align="center">&nbsp;</td>
        <td width="203" align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>">Fin Pedido - RETORNAR</a></td>

        <td width="145" align="center"><a href="a_reg_xalma_ctasx.php?xcodigo_cli=<?php echo($xcodigo_cli);?>&xdoc=<?php echo($xdoc);?>&xnxixvx=<?php echo($xnxixvx);?>&xtipodemov=S">FACTURA y Descarga</a></td>
		  <?php
	}
        ?>
      </tr>
    </table>
    <p>&nbsp;</p></td>
    </tr>
</table>

 <?php
mysqli_close($connec);
?>
<p>&nbsp;</p>
</body>
</html>
<!-- SELECT DISTINCT owner FROM pet -->