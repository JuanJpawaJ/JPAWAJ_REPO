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
   <?php // viene de a_ingclientes " nva. venta"
$xcodigo_cli=$_GET['xcodigo_cli'];
$xrsocial_cli=$_GET['xrsocial_cli'];
$xtprec_cli=$_GET['xtprec_cli'];
$xestado_cli=$_GET['xestado_cli'];
$diahoy=date("d/m/Y");
$xnxixvx=$_GET['xnxixvx'];
$vendedor_cli=$_GET['xvendedor_cli'];
echo ("nivel  ".$xnxixvx);
echo ("vendedor ".$vendedor_cli);
?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="834" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" bgcolor="#00238c" class="tit_menu_sup"><table width="831" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="170" height="71" align="center" valign="middle"><img src="logo_sca_p.fw.png" width="134" height="60" /></td>
        <td width="487" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">VENTAS C/PEDIDO - P.PENDIENTES -  VENTAS  - NVO. PEDIDO</span></td>
        <td width="106" align="center" valign="middle"><img src="logo_empresa_p.fw.png" width="61" height="60" /></td>
        <td width="68" bgcolor="#FFFF00"><div align="center"><a href="n_admin.php">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td colspan="3" align="center" bgcolor="#FFFFCC" class="TITULO"><table width="699" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" align="left">CLIENTE :<?php echo($xrsocial_cli) ?> </td>
        </tr>
      <tr>
        <td width="186">Cod: Cliente :<?php echo($xcodigo_cli) ?> </td>
        <td width="198">Tip. Precio :<?php echo($xtprec_cli) ?> </td>
        <td width="307">Estado :<?php echo($xestado_cli) ?></td>
        </tr>
      </table>    </td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="496" valign="top" bgcolor="#FFFFCC"><span class="TITULO"><a href="n_form_gra.php" ></a></span>
    <table width="493" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="493" bgcolor="#FFFFCC" class="TITULO"><form id="form0" name="form0" method="post" action="a_ing_clientes.php">
          <table width="490" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
            <tr>
              <td width="230" height="28" bgcolor="#FFCC66"> Dato a buscar R.Soc.:
                <input name="bxrsocial" type="text" id="bxrsocial" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();"/></td>
              <td width="164" bgcolor="#FFCC66">Nom. Comercial:
                <input name="bxncom" type="text" id="bxncom" size="25" maxlength="60" /></td>
              <td width="88" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
              </tr>
            </table>
          </form></td>
      </tr>
      </table>
    <table width="484" height="62" border="1" cellspacing="0">
      <tr  class="diez">
        <td width="43" height="20" align="center" >CODIGO</td>
        <td width="234" align="center">PEDIDO PENDIENTE</td>
        <td width="36" align="center" >Qty</td>
        <td width="59" align="center" >PRECIO</td>
        <td width="54" align="center" >Total</td>
        <td width="32" ><div align="center"> Elimina</div></td>
      </tr>
      <?php 

include("connec_sql.php");
mysql_query("SET NAMES 'utf8'");

if(strlen($bxncom)==0 and strlen($bxrsocial)==0){


$result=mysql_query("select * from a_provisional  where codcli_provi=$xcodigo_cli  AND tmov_provi='I' order by id",$connec);
}
	
$totalpp=mysql_num_rows($result);

echo "Cliente con PEDIDO PENDIENTE : ".($totalpp). " Items";
for($i=0;$i<$totalpp;$i++)
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
		$total_provi=$cant_ppend*$pvent_ppend;		
		$pcosto_provi=mysql_result($result,$i,"pcosto_provi");	
		$codven_provi=mysql_result($result,$i,"codven_provi");
        $sumtot_ped=$sumtot_ped+$total_ppend; 
		
					?>
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td height="40" bgcolor="#FFFFFF"><?php     echo($coditem_provi) ?></td>
        <td><?php echo($desc_provi) ?></td>
        <td align="right"><?php echo($cant_provi) ?></td>
        <td align="right"><?php echo($pvent_provi) ?></td>
        <td align="right"><?php echo money_format('%n', $total_provi)."\n"; ?></td>
        <td align="center"><a href="a_view_clientes.php?id=<?php  echo($id); ?>&amp;xretornar_ax=<?php echo($xretornar);?>"> X</a></td>
      </tr>
      <?php 
	}


  
mysql_close($connec);
?>
    </table>
    <p>&nbsp;</p></td>
    <td width="333" colspan="2" valign="top" bgcolor="#FFFFCC">
<form id="form1" name="form1" method="post" onSubmit="return checkSubmit();" action="a_ventas2.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >

<!--  
<form id="form1" name="form1" method="post" onSubmit="return checkSubmit();" onsubmit="return false;" action="n_areg_alu.php" >
-->
  <table width="185" border="1" align="center" class="tablaingrenuevo">
    <tr>
      <td colspan="2" bgcolor="#FFCC66"><div align="center"><strong>NVO. PEDIDO</strong></div></td>
    </tr>
 
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO"><span class="TITULO1">Doc. Referencia - N/Venta</span></span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="xdoc" type="text" class="diez" id="xdoc" size="15" maxlength="15" />
          </label>
        <span class="TITULO1">
        <label> </label>
(9-9 Generado)</span></span></td>
    </tr>
 
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO1">Fecha hoy: [dd][mm][aaaa]:</span></td>
    </tr>
    <tr>
      <td colspan="2" class="diez"><?php echo($diahoy) ?></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO1">Vendedor:</span></td>
    </tr>
    <tr>
      <td colspan="2"> <?php

include("connec_sql.php");
mysql_query("SET NAMES 'utf8'");

$dat="SELECT * FROM a_personal where area_per='V' order by nom_per";
$sql=mysql_query($dat,$connec);
 ?>
 
<select name="xcodper" class="diez">
<?php
while($row=mysql_fetch_array($sql)){
       $codven_x=$row['cod_per'];
 if($codven_x==$vendedor_cli) {

      echo "<option  value='".$row["cod_per"]."' selected >".$row["nom_per"]." en if ".$row["ape_per"]."</option>";

//   <option value="amarillo" selected >amarillo</option>

 }else{

	  echo "<option  value='".$row["cod_per"]."'>".$row["nom_per"]." out  ".$row["ape_per"]."</option>"; 	 
 }
}?>
    
</select>

             <?php

// while($row=mysql_fetch_array($sql)){
  //     $codven_x=$row['cod_per'];

    //  echo ($codven_x."<br/>");
	  
 //}?>
    
    
 
        </td>
    </tr>

    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Crédito:</span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="xcred" type="text" class="diez" id="xcred" size="25" maxlength="100" />
          </label>
        </span></td>
    </tr>

    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Otros:</span></td>
    </tr>
    <tr>
      <td colspan="2"><input name="xotros" type="text" class="diez" id="xotros" size="25" maxlength="60" /></td>
    </tr>
    <tr>
     <input type="hidden" name="xcodigo_cli" value="<?php echo($xcodigo_cli); ?>" >  
     <input type="hidden" name="xrsocial_cli" value="<?php echo($xrsocial_cli); ?>" >  
     <input type="hidden" name="xtprec_cli" value="<?php echo($xtprec_cli); ?>" >  
     <input type="hidden" name="xestado_cli" value="<?php echo($xestado_cli); ?>" >  
     <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx)?>" >  
   
                        
      <td width="121"><input name="Submit" type="Submit" class="Estilo38" value="-&gt; Continúa &lt;-" /></td>
      
      <td width="52"><input name="Submit2" type="reset" class="Estilo38" value="Borrar" /></td>
    </tr>
  </table>
</form>
<?php
echo ("nivel  ".$xnxixvx);
?>
    </td>
    </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
