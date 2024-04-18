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
.tit_menu_sup td table tr td table .diez td {
	color: #000;
}
.tit_menu_sup td table tr td table .diez .diez .diez {
	color: #000;
}
.diez_titbl_blanco {
	color: #FFF;
	font-size: 10px;
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

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");




$zyxw= $_GET['zyxw'];
$xnxixvx=6;
//$xnxixvx=$_GET['xnxixvx'];
echo ("nivel  ".$xnxixvx."<br>");

$xoxgxixdxoxcx=$_GET['xoxgxixdxoxcx']; //invertido


$resultx=mysqli_query($connec,"select * from a_personal where trim(cod_per)='$xcodper'");
//$xnxixvx=mysql_result($resultx,0,"nivel_per");
echo ("nivel  ".$xnxixvx."<br>");
$xactualtimex=time(); 


if ($xnxixvx <5){

	?>
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="www.empresacom.com">NO ESTA UD. AUTORIZADO</a></div>
    </th>
  </tr>
</table>
<?php
}else{
?>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="1079" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#00238c" class="tit_menu_sup"><table width="1059" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="163" height="71" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="635" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">COMANDO - CAJA / BANCOS</span></td>
        <td width="223" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
        <td width="38" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="59" align="center" valign="middle" ><table width="1077" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="358" height="48" valign="top">
          <table width="352" height="78" border="1" cellspacing="0">
            <tr  class="texto_tablas11">
              <td width="64" height="20" align="center" bgcolor="#000066" class="tabla10" ><span class="diez_titbl_blanco">CODIGO</span></td>
              <td width="190" align="center" bgcolor="#000066" class="diez_titbl_blanco">CAJA - RECIBO  DE INGRESO</td>
              <td width="40" bgcolor="#000066" class="diez_titbl_blanco" >CAJA</td>
              </tr>
            <tr  class="diez">
              <td height="22" align="center" class="diez" ><span class="diez">XI0000</span></td>
              <td align="left" class="diez">DE CLIENTES</td>
              <td align="center" > <a href="a_lista_clientes_ventas.php?xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>">Caja</a></td>
              </tr>
            <?php 

$resulti=mysqli_query($connec,"select * from a_cajaitem where tipcaja_cajitem='I' order by codigo_cajitem");
$totali=mysqli_num_rows($resulti);

while ($tablacit=mysqli_fetch_array($resulti)) {

	   $id=$tablacit["id"];
		$id=$tablacit["id"];
		$tipcaja_cajitem=$tablacit["tipcaja_cajitem"];
		$codigo_cajitem=$tablacit["codigo_cajitem"];
		$descri_cajitem=$tablacit["descri_cajitem"];
		$titrec="I"
	
					?>
            <tr bgcolor="#FFFFFF" class="tabla10">
              <td height="26" bgcolor="#FFFFFF">
               <?php echo($codigo_cajitem) ?></td>
              <td align="left"><?php echo($descri_cajitem) ?></td>
              <td align="center"><a href="a_caja3.php?
              xtipo_caja=<?php echo($titrec);?>&
              xtcta_caja=<?php echo($codigo_cajitem);?>&
              xdesc_caja=<?php echo($descri_cajitem);?>&
              xnxixvx=<?php echo($xnxixvx);?>&              
              xtitrec=I&
              xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>">Caja</a></td>
 </tr>
            <?php 
	}

?>
      </table></td>
        <td width="359" valign="top"><table width="352" height="77" border="1" cellspacing="0">
          <tr align="center"  class="diez_titbl_blanco">
            <td width="64" height="20" bgcolor="#FF0000" >CODIGO</td>
            <td width="190" bgcolor="#FF0000">CAJA - RECIBO DE SALIDA</td>
            <td width="40" bgcolor="#FF0000" >CAJA</td>
            </tr>
          <tr  class="diez">
            <td height="23" align="center" >XS0000</td>
            <td align="left">A PROVEEDORES Y OTRAS CUENTAS</td>
            <td align="center" ><a href="a_ing_proveedores.php?zyxw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>">Caja</a></td>
            </tr>
          <?php 

$resulti=mysqli_query($connec,"select * from a_cajaitem where tipcaja_cajitem='S'order by codigo_cajitem");
$totali=mysqli_num_rows($resulti);

while ($tablacit=mysqli_fetch_array($resulti)) {

		$id=$tablacit["id"];
		$tipcaja_cajitem=$tablacit["tipcaja_cajitem"];
		$codigo_cajitem=$tablacit["codigo_cajitem"];
		$descri_cajitem=$tablacit["descri_cajitem"];
		$titrec="S"
?>
          <tr bgcolor="#FFFFFF" class="tabla10">
            <td height="24" bgcolor="#FFFFFF">
			<?php echo($codigo_cajitem) ?></td>
            <td align="left"><?php echo($descri_cajitem) ?></td>
            <td align="center"><a href="a_caja3.php?
              xtipo_caja=<?php echo($titrec);?>&
              xtcta_caja=<?php echo($codigo_cajitem);?>&
              xdesc_caja=<?php echo($descri_cajitem);?>&
              xnxixvx=<?php echo($xnxixvx);?>& 
              xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>&             
              xtitrec=S">Caja</a></td>           
 </tr>
<?php 
	}
?>
        </table></td>
        <td width="360" valign="top"><table width="352" height="49" border="1" cellspacing="0">
          <tr align="center"  class="diez_titbl_blanco">
            <td width="64" height="24" bgcolor="#006600" >CODIGO</td>
            <td width="190" bgcolor="#006600">BANCOS  - TRANSFERENCIAS</td>
            <td width="40" bgcolor="#006600" >EJEC.</td>
            </tr>
          <?php 

$resulti=mysqli_query($connec,"select * from a_cajaitem where tipcaja_cajitem='B'order by codigo_cajitem");
$totali=mysqli_num_rows($resulti);

while ($tablacit=mysqli_fetch_array($resulti)) {
	
		$id=$tablacit["id"];
		$tipcaja_cajitem=$tablacit["tipcaja_cajitem"];
		$codigo_cajitem=$tablacit["codigo_cajitem"];
		$descri_cajitem=$tablacit["descri_cajitem"];
	
					?>
          <tr bgcolor="#FFFFFF" class="tabla10">
            <td height="23" bgcolor="#FFFFFF"><?php echo($codigo_cajitem) ?></td>
            <td align="left"><?php echo($descri_cajitem) ?></td>
            <td align="center"><a href="a_caja3.php?
              xtipo_caja=<?php echo($titrec);?>&
              xtcta_caja=<?php echo($codigo_cajitem);?>&
              xdesc_caja=<?php echo($descri_cajitem);?>&
              xnxixvx=<?php echo($xnxixvx);?>&
              xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>&              
              xtitrec=S">Exe.</a></td>         
            </tr>
          <?php 
	}

?>
        </table></td>
      </tr>
      <tr>
        <td width="358" height="47" valign="top">&nbsp;</td>
        <td width="359" valign="top">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr class="tit_menu_sup">
    <td width="1075" height="59" align="center" valign="middle" >

      
  <!------    C U A D R A   CCC  AAA JJJ AAAA   ***********************+   !---->
       
  

     <table width="751" border="1" cellspacing="1" cellpadding="0">
       <tr>
         <td width="745" bgcolor="#FFCC66"><div align="center" class="tablaingrenuevo"><strong>CUADRA CAJA</strong></div></td>
       </tr>
       <tr>
         <td bgcolor="#FFFF99">
         <table width="744" border="1" class="tablaingrenuevo">
           <form id="cdracaja1" name="cdracaja1" method="get" action="a_cdracaja.php">
             <tr>
               <td width="553" height="28" bgcolor="#999999"><span class="tabla10">LISTA TODO</span></td>
               <td width="175">
               <input type="hidden" name="xlista" value="ltx" />
               <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" /> 
               <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" /> 
               
               <input name="Submit" type="submit" class="Estilo38" value="-&gt; LISTA TODO &lt;-" />
               </td>
             </tr>
           </form>
         </table></td>
       </tr>
<tr>
 <?php 
 $xfec=date("d/m/Y");   
 ?> 
<td bgcolor="#C8FC8D">         
 <table width="745" height="28" border="1">
 <form id="cdracaja2" name="cdracaja2" method="get" action="a_cdracaja.php">          
 <tr>
 <td width="96" height="26" align="left" bgcolor="#999999" class="tabla10">FECHA INICIAL</td>
 <td width="173" align="left"><input name="xfeci" type="text" id="xfeci" size="25" maxlength="10" value="<?php echo($xfec); ?>"/></td>
 <td width="85" align="left" bgcolor="#999999" class="tabla10">FECHA FINAL</td>
 <td width="180" align="left"><input name="xfecf" type="text" id="xfecf" size="25" maxlength="10" value="<?php echo($xfec); ?>"/></td>
 <td width="177" align="center"><input type="hidden" name="xlista" value="lfx" />
                <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
               <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" /> 
                <input name="Submit" type="submit" class="Estilo38" value="-&gt; LISTA X FECHA &lt;-" />
 </td>
 </tr>
 </form>
 </table>
</td>
</tr>

<tr>
   <td bgcolor="#FFFF99"><table width="745" height="60" border="1">
   <tr>
   <td height="58" colspan="4" align="left" class="tabla10">
   <table width="551" border="1">
   <tr>
     <td width="96" bgcolor="#999999">Razón Social: </td>
     <td colspan="3"><input name="xrsocialcaja" type="text" id="xrsocialcaja" size="50" maxlength="50"/></td>
   </tr>
   <tr>
     <td width="96" bgcolor="#999999">FECHA INICIAL</td>
     <td width="176"><input name="xfeci" type="text" id="xfeci" size="25" maxlength="10" value="<?php echo($xfec); ?>"/></td>
     <td width="85" bgcolor="#999999">FECHA FINAL</td>
     <td width="166"><input name="xfecf" type="text" id="xfecf" size="25" maxlength="10" value="<?php echo($xfec); ?>"/></td>
   </tr>
   </table>
   </td>
   <td width="181" align="center"><input type="hidden" name="xlista" value="lrs" />
      <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
               <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" /> 
      <input name="Submit" type="submit" class="Estilo38" value="-&gt; LISTA X R.Soc. &lt;-" />
   </td>
  </tr>
  </form>
  </table></td>
       </tr>
       <tr>
 <td bgcolor="#C8FC8D"><table width="743" height="60" border="1">
           <tr>
             <td height="58" colspan="4" align="left" class="tabla10">
             <table width="550" border="1">
           <tr>
             <td width="97" bgcolor="#999999">Código de Caja</td>
             <td colspan="3">
               
               <?php
$sql=mysqli_query($connec,"select * from a_cajaitem order by descri_cajitem");
 ?>
               <select name="xcodigocaja">
                 <option value="">Código de Caja ----------> </option>
                 <option value="XI0000">I - DE CLIENTES    </option>
                 <option value="XS0000">S - A PROVEEDORES  </option>
                 <?php
 while($rosvi=mysqli_fetch_array($sql)){
  echo "<option  value='".$rosvi["codigo_cajitem"]."'>".$rosvi["tipcaja_cajitem"]." - ".$rosvi["descri_cajitem"]."</option>"; 
} ?>
                 </select></td>
             
           </tr>
               <tr>
                 <td width="97" bgcolor="#999999">FECHA INICIAL</td>
                 <td width="174"><input name="xfeci" type="text" id="xfeci" size="25" maxlength="10" value="<?php echo($xfec); ?>"/></td>
                 <td width="85" bgcolor="#999999">FECHA FINAL</td>
                 <td width="166"><input name="xfecf" type="text" id="xfecf" size="25" maxlength="10" value="<?php echo($xfec); ?>"/></td>
               </tr>
                 
             </table></td>
             <td width="176" align="center"><input type="hidden" name="xlista" value="lcod" />
               <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
               <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" /> 
               <input name="Submit" type="submit" class="Estilo38" value="-&gt; LISTA X Tip. Caja &lt;-" /></td>
           </tr>
            </form>
         </table></td>
       </tr>
     </table>
     <p>&nbsp; </p></td>
    </tr>
</table>

<p>&nbsp;</p>
<?php
}
?>
</body>
</html>
<!-- SELECT DISTINCT owner FROM pet -->