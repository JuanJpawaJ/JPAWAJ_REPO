<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NVA. COMPRA</title>

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
<?php // viene de a_compras1 " nva. venta"
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$result0=mysqli_query($connec,"select * from a_sistema  where id=1");
$tabla0 = mysqli_fetch_array( $result0 );
$tc_sis=$tabla0["tc_sis"];

$xdoc=$_GET['xdoc'];
if (strlen($xdoc)==0){
    echo (" !!! El Nro. de documento está en blanco !!! ".$xnroalmacen);
}
$xfecha_pe=$_GET['xfecha_pe'];
$xcodigo_prov=$_GET['xcodigo_prov'];
$xrsocial_prov=$_GET['xrsocial_prov'];
$xnxixvx=$_GET['xnxixvx'];
$xalma=$_GET['xalma'];
$xnroalmacen=$_GET['xnroalmacen'];

echo (" VIENE NRO. ALMACEN :  ".$xnroalmacen);
//$xtprec_cli=$_POST['xtprec_cli'];
//$xestado_cli=$_POST['xestado_cli'];
//$xdia=$_POST['xdia'];
//$xmes=$_POST['xmes'];
//$xano=$_POST['xano'];

$auxiliar=0;
$auxiliar=$_GET['xauxiliar'];
$bxproducto=$_GET['bxproducto'];
$xcodigo_it1=$_GET['xcodigo_it'];
$xproducto_it1=$_GET['xproducto_it'];
$stock_it1=$_GET['xstock_it'];
$prec_ok_it1=$_GET['xprec_ok_it'];
 echo($prec_ok_it1);
 echo "llega esta información 001 : ".$bxproducto;
 
// IIIIIIFFFFFFF EEELLLLIIIIMMMIIINNNNAAARRR
$sieliminar=$_GET['sieliminar'];
$delregx=$_GET['delidx'];
echo "eliminar: ".$sieliminar."<br>";
echo "del reg : ".$delregx."<br>";

if($sieliminar=="SI"){
echo "Listo para eliminar: ".$sieliminar."<br>";
	
$query = "delete from a_provisional where id=$delregx";  
$result = mysqli_query($connec,$query); 
//if($result){
//echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO  Ok.</span>");
//}else{
//echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR  XX.</span>");
//}
$sieliminar="NO";
} // FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
 
 
?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="1213" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" bgcolor="#00238c" class="tit_menu_sup"><table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="170" height="71" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="627" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">COMPRAS - INGRESO PROD. <?php echo(" - ".$nalmacen);?></span></td>
        <td width="146" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
        <td width="83" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="566" height="178" valign="top" bgcolor="#FFFFCC"><span class="TITULO"><a href="n_form_gra.php" ></a></span>
    <table width="529" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="529" bgcolor="#FFFFCC" class="TITULO">
        <form id="form0" name="form0" method="get" action="a_compras2.php">
          <table width="507" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
            <tr>
              <td width="238" height="28" bgcolor="#FFCC66"> Dato a buscar Producto.:
    <input name="bxproducto" type="text" id="bxproducto" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();"/></td>
     <input type="hidden" name="xcodper" value="<?php echo($xcodper); ?>" >
     <input type="hidden" name="xrsocial" value="<?php echo($xrsocial); ?>" >  
     <input type="hidden" name="xdoc" value="<?php echo($xdoc); ?>" >    
     <input type="hidden" name="xfecha_pe" value="<?php echo($xfecha_pe); ?>">   
     <input type="hidden" name="xcodigo_prov" value="<?php echo($xcodigo_prov); ?>" >    

     <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
     <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
                

              <td width="108" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
               <td width="153" bgcolor="#FFCC66"><a href="https://www.jpawaj.com/siga_jpawaj/a_list_items_admin.php" target="_blank" rel="noopener noreferrer">ABRIR NUEVA PAG. ITEMS </a>-</td>
              </tr>
            </table>
        </form></td>
        </tr>
      </table>
    <table width="623" height="62" border="1" cellspacing="0">
      <tr bgcolor="#CCFFFF" class="diez">
        <td width="66" height="20" align="center" bgcolor="#336699">CODIGO</td>
        <td width="169" align="center" bgcolor="#336699"> BREVE</td>
        <td width="54" bgcolor="#336699">COD-MODELO</td>
        <td width="54" bgcolor="#336699">PRE. COMPRA</td>
        <td width="57" bgcolor="#336699">PRECIO1</td>
        <td width="59" bgcolor="#336699">STOCK</td>
        <td width="37" bgcolor="#336699">AQP</td>
        <td width="37" bgcolor="#336699">MATAR</td>
        <td width="52" bgcolor="#336699">KARDEX</td>
      </tr>
      <?php 


echo "llega esta información 002 : ".$bxproducto;
//$bxproducto=$_POST['bxproducto'];

if(strlen($bxproducto)==0){
$result=mysqli_query($connec,"select * from a_items order by producto_it");
} else {
$bxproducto1=trim($bxproducto);
$result=mysqli_query($connec,"select * from a_items where producto_it like '%$bxproducto%' OR  codfabrica_it like '%$bxproducto%' order by producto_it");
}
  
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
		$pv01_it=$tabla["pv01_it"];
		$precom_it=$tabla["precom_it"];
		$pv02_it=$tabla["pv02_it"];
		$stockmin_it=$tabla["stockmin_it"];		
		$lugar_al_it=$tabla["lugar_al_it"];	
		
					?>
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td height="39" bgcolor="#FFFFFF">
		<?php echo($codigo_it) ?></td>
        <td><?php echo($producto_it) ?></td>
        <td><?php echo($codfabrica_it) ?></td>
        <td><?php echo($precom_it) ?></td>
        <td><?php echo($pv01_it) ?></td>
 
  <?          
$tabla_01_i = mysqli_query($connec,"SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='I'  AND nro_alma='000001' ");
$columna = mysqli_fetch_array( $tabla_01_i);
$suma_01_i=$columna["SUM(cant_alma)"];

$tabla_01_s = mysqli_query($connec,"SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='S'   AND nro_alma='000001' ");
    // $suma_01_s=mysqli_result($tabla_01_s,0);
$tabla_02_i = mysqli_query($connec,"SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='I'  AND nro_alma='000002' ");
    // $suma_02_i=mysqli_result($tabla_02_i,0);
$tabla_02_s = mysqli_query($connec,"SELECT SUM(cant_alma) FROM a_almacen WHERE coditem_alma=$codigo_it AND tmov_alma='S'   AND nro_alma='000002' ");
    // $suma_02_s=mysqli_result($tabla_02_s,0);
$stock_01=$suma_01_i-$suma_01_s;  
$stock_02=$suma_02_i-$suma_02_s;  
$stock_tot=$stock_01+$stock_02;  
 ?>       
        
        
        
          <td><?php echo($stock_tot) ?></td>
          <td><?php echo($stock_01)?></td>
          <td><?php echo($stock_02)?></td>

      <? $producto_it=urlencode($producto_it); ?>
	  
        <td><a href="a_compras2.php?
       xcodigo_prov=<?php echo($xcodigo_prov);?>&
       xrsocial_prov=<?php echo($xrsocial_prov);?>&
       xdoc=<?php echo($xdoc);?>&
       xfecha_pe=<?php echo($xfecha_pe);?>&
       xcodigo_it=<?php echo($codigo_it);?>&
       xproducto_it=<?php echo ($producto_it);?>&
       xprec_ok_it=<?php echo($prec_ok_it);?>&
       xstock_it=<?php echo($stock_it);?>&
       xnxixvx=<?php echo($xnxixvx);?>&
       xnroalmacen=<?php echo($xnroalmacen);?>&
       xauxiliar=1">Añadir</a></td>
      </tr>
      <?php 
	}

//mysqli_close($connec);
?>
    </table>
    <p>&nbsp;</p></td>
    <td width="127" valign="top">
    


    <!--- AUXILIAR de ventas = cantidad y precio -->
    
    <?php 
	if ($auxiliar==1){
	?>	

    <table width="96" border="1" align="center" class="tablaingrenuevo">
      <form id="form1" name="form1" method="get" action="a_reg_provisional.php">
        <tr>
          <td align="center" bgcolor="#FFCC66" class="TITULO"><strong>INGRESO</strong></td>
        </tr>
        <tr>
          <td align="center" bgcolor="#E3E3E1"><table width="82" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="82" align="center" class="TITULO"><?php echo($xproducto_it1); ?></td>
            </tr>
          </table>
            </td>
        </tr>
        <tr>
          <td bgcolor="#E3E3E1"><table width="83" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="83" align="center" class="TITULO">Stock<?php echo " ".($stock_it1); ?> </td>
            </tr>
            <tr>
              <td align="center"><span class="TITULO">*Qty</span> 
                <input name="cant1" type="text" id="cant1" size="5" maxlength="5" value=1></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td bgcolor="#E3E3E1"><table width="89" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="50" align="center" class="TITULO">Precio compra</td>
            </tr>
            <tr>
              <td><input name="prec1" type="text" id="prec1" size="15" maxlength="15" value="<?php echo($prec_ok_it1); ?>"/> </td>
 
            </tr>
          </table></td>
        </tr>
        <tr>
       
     <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_prov); ?>" >  
     <input type="hidden" name="xrsocial_cli" value="<?php echo($xrsocial_prov); ?>" >  
     <input type="hidden" name="xdoc" value="<?php echo($xdoc); ?>" >    
     <input type="hidden" name="xfecha_pe" value="<?php echo($xfecha_pe); ?>" >        
     <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
     <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
     <input type="hidden" name="xcodigo_it1" value="<?php echo($xcodigo_it1); ?>" >  
     <input type="hidden" name="xproducto_it1" value="<?php echo($xproducto_it1); ?>" >  
     <input type="hidden" name="xnroalmacen" value="<?php echo($xnroalmacen); ?>" >  
     <input type="hidden" name="xtmov" value="I">
    
    
     <td width="50" align="center"><input name="Submit" type="Submit" class="Estilo38" value=" Continúa " /></td>
        </tr>
        <tr>
          <td align="center"><input name="Submit2" type="reset" class="Estilo38" value="Borrar" /></td>
        </tr>
      </form>
    </table>  
    
    <!--- FIIIIINNNNN AUXILIAR de ventas = cantidad y precio -->  
<?php } ?>
    <td width="512" colspan="2" align="center" valign="top" >
    <table width="470" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td width="62" bgcolor="#999999"><span class="diez">Cliente</span>: </td>
          <td colspan="3" align="left"><?php echo(" ".$xcodigo_prov." - ".$xrsocial_prov) ?></td>
        </tr>
        <tr>
          <td bgcolor="#999999"><span class="diez">Documento:</span></td>
          <td width="203" align="left"><?php echo(" ".$xdoc) ?></td>
          <td width="39" bgcolor="#999999"><span class="diez">Fecha:</span></td>
<?php 
//$xdia=date("d");
//$xmes=date("m");
//$xano=date("Y");
?>
          <td width="156" align="left"><?php echo(" ".$xfecha_pe) ?></td>
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


//$bxncom=$_POST['bxncom'];
//$bxrsocial=$_POST['bxrsocial'];

// AND nrodocu_ppend=$xdoc order 
$result2=mysqli_query($connec,"select * from a_provisional  where codcli_provi='$xcodigo_prov' AND nrodocu_provi='$xdoc' AND tmov_provi='I' order by id");
$total2=mysqli_num_rows($result2);

echo "Esta COMPRA PROVISIONAL cuenta con: ".($total2). " registros";

while ($tabla2=mysqli_fetch_array($result2)) {


		$id=$tabla2["id"];
    	$codcli_provi=$tabla2["codcli_provi"];
		$nrodocu_provi=$tabla2["nrodocu_provi"];
		$fecmov_provi=$tabla2["fecmov_provi"];
		$coditem_provi=$tabla2["coditem_provi"];
		$desc_provi=$tabla2["desc_provi"];
		$cant_provi=$tabla2["cant_provi"];
		$tmov_provi=$tabla2["tmov_provi"];
		$pvent_provi=$tabla2["pvent_provi"];
		$total_provi=$cant_provi*$pvent_provi;		
		$pcosto_provi=$tabla2["pcosto_provi"];	
		$codven_provi=$tabla2["codven_provi"];
        $sumtot_ped=$sumtot_ped+$total_provi; 
		
					?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td height="26" bgcolor="#FFFFFF">
		  <?php     echo($coditem_provi) ?></td>
          <td><?php echo($desc_provi) ?></td>
          <td align="right"><?php echo($cant_provi) ?></td>
          <td align="right"><?php echo($pvent_provi) ?></td>
          <td align="right"><?php echo money_format('%n', $total_provi)."\n"; ?> </td>
          <td align="center"><a href="a_compras2.php?delidx=<?php echo($id);?>&xdoc=<?php echo($xdoc);?>&xfecha_pe=<?php echo($xfecha_pe);?>&xcodigo_prov=<?php echo($xcodigo_prov);?>&xrsocial_prov=<?php echo($xrsocial_prov);?>&xnxixvx=<?php echo($xnxixvx);?>&sieliminar=<?php echo("SI");?>&xnroalmacen=<?php echo($xnroalmacen);?>"> X</a></td>




        </tr>
        <?php 
	}


  
//mysqli_close($connec);
?>
      </table>
      
      <table width="484" height="23" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="391" align="right"><?php echo "---- Total : " ?></td>
          <td width="56" align="right"><?php echo money_format('%n', $sumtot_ped)."\n"; ?></td>
          <td width="37">&nbsp;</td>
        </tr>
      </table>


    <table width="472" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><table width="245" border="1" align="center" class="tablaingrenuevo">
     <? if ($sumtot_ped >0){ ?>
        
          <form id="form6" name="form6" method="get" action="a_reg_compras.php">
            <tr>
              <td colspan="2" align="center" bgcolor="#FFCC66" class="TITULO"><strong>TERMINA COMPRA</strong></td>
            </tr>
            <tr>
              <td colspan="2" align="center" bgcolor="#E3E3E1"><table width="82" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="82" align="center" class="TITULO"><?php echo($xproducto_it1); ?></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td width="99" bgcolor="#E3E3E1" class="TITULO">Nro. Documento</td>
              <td width="130" bgcolor="#E3E3E1"><input name="xdoc" type="text" id="xdoc" size="15" maxlength="15" value="<?php echo($xdoc); ?>"/></td>
            </tr>
            <tr>
              <td bgcolor="#E3E3E1" class="TITULO">Fecha</td>
              <td bgcolor="#E3E3E1"><input name="xfepe" type="text" id="xfepe" size="15" maxlength="15" value="<?php echo($xfecha_pe); ?>"/></td>
            </tr>
            <tr>
              <td bgcolor="#E3E3E1" class="TITULO">Esta Factura está en :<br />  
                Moneda &quot;S&quot; - &quot;D&quot; </td>
              <td bgcolor="#E3E3E1"><input name="xmone" type="text" id="xmone" size="1" value="S"/></td>
            </tr>
            <tr>
              <td bgcolor="#E3E3E1" class="TITULO">&nbsp;</td>
              <td bgcolor="#E3E3E1">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#E3E3E1" class="TITULO">En la:<br />LISTA DE PRECIOS<br />
              la Moneda será en:</td>
              <td bgcolor="#E3E3E1"><input name="xmonelista" type="text" id="xmonelista" size="1" value="S"/></td>
            </tr>
            <tr>
              <td bgcolor="#E3E3E1" class="TITULO">Solo si es &quot;D&quot;,<br />
              verifica el T/C</td>
              <td bgcolor="#E3E3E1"><input name="xtc" type="text" id="xtc" size="15" maxlength="15" value="<?php echo($tc_sis); ?>"/></td>
            </tr>
            <tr>
              <td bgcolor="#E3E3E1">&nbsp;</td>
              <td bgcolor="#E3E3E1">&nbsp;</td>
            </tr>
            <tr>
              <td bgcolor="#E3E3E1" class="TITULO">Para la lista de precios el costo cambiará a soles al tipo de cambio de:</td>
              <td bgcolor="#E3E3E1"><span class="TITULO"><?php echo " ".($stock_it1); ?></span></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#E3E3E1">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#E3E3E1">&nbsp;</td>
            </tr>
            <tr>
              <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_prov); ?>" />
               <input type="hidden" name="xdoc" value="<?php echo($xdoc); ?>" />
               <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
              <input type="hidden" name="xtipodemov" value="I" />
              <input type="hidden" name="xnroalmacen" value="<?php echo($xnroalmacen); ?>" />
            
               <td colspan="2" align="center"><input name="Submit4" type="submit" class="Estilo38" value=" Continúa " /></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input name="Submit4" type="reset" class="Estilo38" value="Borrar" /></td>
            </tr>
          </form>
        </table></td>
      </tr>
      <tr>
    	  <?php
	}
        ?>
      </tr>
    </table>
</td>
    </tr>
</table>


</body>
</html>
<!-- SELECT DISTINCT owner FROM pet -->