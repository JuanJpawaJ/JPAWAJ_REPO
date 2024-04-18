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
	color: #333;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 12px;
	font-style: italic;
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
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

 // viene de aLGUN SISTIO SOLO NECESITO COD CLIENTE Y NRO DOCU
$xcodigo=$_POST['xcodigo_cli'];
$xdoc=$_POST['xdoc'];
$xcodper=$_GET['xcodper']; 
echo ("codpersonal ->  ".$xcodper."<br>");
//$def_moneda=$_GET['def_moneda'];
$xoxgxixdxoxcx=$_GET['xoxgxixdxoxcx']; //invertido
$def_moneda="S";

//$xnxixvx=$_GET['xnxixvx'];

//$resultx=mysqli_query($connec,"select * from a_personal where trim(cod_per)='$xcodper'");

//$xnxixvx=mysql_result($resultx,0,"nivel_per");
//echo ("nivel  ".$xnxixvx."<br>");
//$xactualtimex=time(); 

$xnxixvx=6;

if($xnxixvx <5){
	?>
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="www.sca.html">NO TIENE NIVEL PARA ESTA OPCION </a></div>
    </th>
  </tr>
</table>
<?php
}else{

	
$xcodigo=$_GET['xcodigo'];
$xrsocial=$_GET['xrsocial'];
$xdoc=$_GET['xdoc'];
$xdocprov=$_GET['xdoc'];
$xsaldoxcobrar=$_GET['xsaldoxcobrar'];
$xtotal=$_GET['xtotal'];
$xsumtot_caja=$_GET['xsumtot_caja'];
$xid_saldo_estado=$_GET['xid_saldo_estado'];
$xtcta_caja=$_GET['xtcta_caja'];
$xtitrec=$_GET['xtitrec'];
$sw_docu_caja=$_GET['sw_docu_caja'];


$datehoy=date("d/m/Y");
if ($xtitrec=="I") {
	if ($sw_docu_caja=="S") {
	   $xtcta_caja="XI0000";
       $desc_recibo="I. : ".$xdoc;
	}else{
	   $xtcta_caja="XI00SD";
	   $xdoc="SD";
       $desc_recibo="I. : ".$xtcta_caja;
	}
}else{
	if ($sw_docu_caja=="S") {
       $xtcta_caja="XS0000";
       $desc_recibo="S. : ".$xdoc;
	}else{
	   $xtcta_caja="XS00SD";
	   $xdoc="F";	
       $desc_recibo="S.: ".$xtcta_caja;
	}	
}

?>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="948" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#00238c" class="tit_menu_sup"><table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="166" height="71" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="605" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">CAJA <?php echo(":  ".$xrsocial);?></span></td>
        <td width="205" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
        <td width="50" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="397" align="center" valign="top" >
<?php if ($xtitrec=="I") {      // es Caja ingreso  ?>    
  <!--  >>>>>>>>>>>>>>>>> -->
    <table width="657" height="60" border="1" cellspacing="0">
        <tr bgcolor="#CCFFFF" class="diez">
          <td width="63" height="20" align="center">N. DOCU.</td>
          <td width="70">FECHA</td>
          <td width="188">DESCRIPCION</td>
          <td width="21">TIPO</td>
          <td width="27" align="center">Mone</td>
          <td width="66">TOTAL xx</td>
          <td width="29">EST</td>
          <td width="72" align="center">SALDO</td>
          <td width="30">OBSER</td>
          <td width="23">CAJA</td>
          <td width="22"><div align="center"> VER</div></td>
        </tr>
        <?php 

$result=mysqli_query($connec,"select * from a_cteclientes  where codcli_ctecli=$xcodigo AND tmov_ctecli='I' AND saldo_ctecli>0 order by fecha_ctecli");
$total=mysqli_num_rows($result);
echo "Cliente con : ".($total). " DOCS.PENDIENTES DE PAGO ";

while ($tablacli=mysqli_fetch_array($result)) {

	   $id=$tablacli["id"];
		$codigox=$tablacli["codcli_ctecli"];
		$nrodocux=$tablacli["nrodocu_ctecli"];
		$fechax=$tablacli["fecha_ctecli"];
		$descx=$tablacli["desc_ctecli"];
		$tmovx=$tablacli["tmov_ctecli"];
		$mone=$tablacli["mone_ctecli"];
		$totalx=$tablacli["total_ctecli"];
		$estax=$tablacli["esta_ctecli"];		
		$fpagox=$tablacli["fpago_ctecli"];	
		$obsx=$tablacli["obs_ctecli"];
		$saldox=$tablacli["saldo_ctecli"];
			?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td height="40"><?php echo($nrodocux) ?></td>
          <td><?php echo($fechax) ?></td>
          <td><?php echo($descx) ?></td>
          <td><?php echo($tmovx) ?></td>
          <td align="center"><?php echo($mone) ?></td>
          <td><?php echo($totalx) ?></td>
          <td><?php echo($estax) ?></td>
          <td><?php echo($saldox) ?></td>
          <td><?php echo($obsx) ?></td>
          <td>
          
  <a href="a_caja2.php?xcodigo=<?php echo($xcodigo);?>&xrsocial=<?php echo($xrsocial);?>&xdoc=<?php echo($nrodocux);?>&xsaldoxcobrar=<?php echo($saldox);?>&xtotal=<?php echo($totalx);?>&xsumtot_caja=<?php echo($sumtot_caja);?>&xid_saldo_estado=<?php echo($id);?>&xtcta_caja=<?php echo($xtcta_caja);?>&xcodper=<?php echo($xcodper);?>&xtitrec=I&sw_docu_caja=S">Ligar</a></td>
          <td><a href="a_view_1_venta.php?xcodigo=<?php echo($xcodigo);?>&xdoc=<?php echo($nrodocux);?>&xnxixvx=<?php echo($xnxixvx);?>">Ver.</a></td>
          

        </tr>
        <?php } ?>
    </table>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>><   -->
  <?php }else{ // si caja es "S" SALIDA ********* SALIDA   * ******** SALIDA ********* SALIDA   * ********  ?>   
  <!--  >>>>>>>>>>>>>>>>> -->
    <table width="657" height="60" border="1" cellspacing="0">
        <tr bgcolor="#CCFFFF" class="diez">
          <td width="69" height="20" align="center">N. DOCU.</td>
          <td width="77">FECHA</td>
          <td width="176">DESCRIPCION</td>
          <td width="21">TIPO</td>
          <td width="25" align="center">Mone</td>
          <td width="66">TOTALzz</td>
          <td width="28">EST</td>
          <td width="67" align="center">SALDO</td>
          <td width="32">OBSER</td>
          <td width="25">CAJA</td>
          <td width="25"><div align="center"> VER</div></td>
        </tr>
        <?php 
$xcodigo=$_GET['xcodigo'];
//$xcodigo_cli=$_GET['xcodigo_cli'];
$xrsocial=$_GET['xrsocial'];
echo (" xcodigooooooo ".$xcodigo);
echo (" xrsocial  ".$xrsocial);
$resultcpro=mysqli_query($connec,"select * from a_cteproveedores  where codcli_cteprov=$xcodigo AND tmov_cteprov='I' AND saldo_cteprov>0 order by fecha_cteprov");
$total=mysqli_num_rows($resultcpro);
echo "Proveedor con : ".($total). " DOCS.PENDIENTES DE PAGO ";

while ($tablacpro=mysqli_fetch_array($resultcpro)) {

	   $id=$tablacpro["id"];
		$codigox=$tablacpro["codcli_cteprov"];
		$nrodocux=$tablacpro["nrodocu_cteprov"];
		$fechax=$tablacpro["fecha_cteprov"];
		$descx=$tablacpro["desc_cteprov"];
		$tmovx=$tablacprotepr["tmov_cov"];
		$mone=$tablacpro["mone_cteprov"];
		$totalx=$tablacpro["total_cteprov"];
		$estax=$tablacpro["esta_cteprov"];		
		$fpagox=$tablacpro["fpago_cteprov"];	
		$obsx=$tablacpro["obs_cteprov"];
		$saldox=$tablacpro["saldo_cteprov"];
			?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td height="40"><?php echo($nrodocux) ?></td>
          <td><?php echo($fechax) ?></td>
          <td><?php echo($descx) ?></td>
          <td><?php echo($tmovx) ?></td>
          <td align="center"><?php echo($mone) ?></td>
          <td><?php echo($totalx) ?></td>
          <td><?php echo($estax) ?></td>
          <td><?php echo($saldox) ?></td>
          <td><?php echo($obsx) ?></td>
          <td>
  <a href="a_caja2.php?xcodigo=<?php echo($xcodigo);?>&xrsocial=<?php echo($xrsocial);?>&xdoc=<?php echo($nrodocux);?>&xsaldoxcobrar=<?php echo($saldox);?>&xtotal=<?php echo($totalx);?>&xsumtot_caja=<?php echo($sumtot_caja);?>&xid_saldo_estado=<?php echo($id);?>&xtcta_caja=<?php echo($xtcta_caja);?>&xcodper=<?php echo($xcodper);?>&xtitrec=S&sw_docu_caja=S">Ligar</a></td>
          <td><a href="a_view_1_compra.php?xcodigo_cli=<?php echo($codclix);?>&xdoc=<?php echo($nrodocux);?>&xnxixvx=<?php echo($xnxixvx);?>">Ver.</a></td>
          
        </tr>
        <?php } ?>
    </table>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>><   -->
  
  
  
  <?php }
  
  echo "Vaaaaaaa de caja2: ".$xcodper."<br>"; ?>
   </td>
    <td width="545" height="381" align="center" valign="top" ><table width="473" border="1" align="center" class="tablaingrenuevo">
      
      <form id="form1" name="form1" method="post" action="a_regcaja.php">
        <tr>
          <td colspan="2" bgcolor="#FFCC66"><div align="center" class="tablaingrenuevo"><strong>CAJA</strong></div></td>
          </tr>
        <tr>
          <td colspan="2" align="left" bgcolor="#E3E3E1"><table width="387" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="112" bgcolor="#999999">Documento:</td>
              <td width="275" align="left"><?php echo("  ".$xtitrec); ?></td>
              </tr>
            </table></td>
          </tr>
        <tr>
          <td colspan="2" align="left" bgcolor="#E3E3E1"><table width="449" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="95" bgcolor="#999999">Razón Social: </td>
              <td width="348" align="left">
			  
			  <?php if (($xcodigo=="000001" OR $xcodigo=="000002") AND $xtitrec=="S") {  // ES DE GASTOS DE OFICINA DE AQP O MATARANI 
			  echo($xdocprov);
			  ?>
                  <input type="hidden" name="xprers" value="<?php echo($xcodigo); ?>" />    
				  <input name="xrsocial" type="text" id="xrsocial" size="40" maxlength="60" />
                <? } else { ?>
				  <?php echo($xrsocial); ?>
                  <input type="hidden" name="xrsocial" value="<?php echo($xrsocial); ?>" />    

                <? } ?>
              </td>
              </tr>
            </table>
            </td>
          </tr>
        <tr>
          <td colspan="2" align="left" bgcolor="#E3E3E1"><table width="423" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="248" align="center" bgcolor="#999999">Nro. Docu. Referencia</td>
              <td width="169" align="center" bgcolor="#999999">Fecha</td>
              </tr>
            <tr>
              <td align="left"><input name="xdoc" type="text" id="xdoc" size="25" maxlength="60" value="<?php echo($xdoc); ?>"/></td>
              <td align="center"><input name="xfecha_per" type="text" id="xfecha_per" size="10" maxlength="10" value="<?php echo($datehoy); ?>"/></td>
            </tr>
            <tr>
              <td colspan="2" align="left">
                </td>
            </tr>
            </table></td>
          </tr>
        <tr>
          <td colspan="2" align="left" bgcolor="#E3E3E1">
          <?php  if (($xcodigo=="000001" OR $xcodigo=="000002") AND $xtitrec=="S"){ // codigo de gastos oficina ?>  
          <table width="385" border="1" cellspacing="0" cellpadding="0">
<td width="104" bgcolor="#999999">Cód. Gasto: </td>              
       <td width="275" align="left">
       <span class="TITULO">
		<?php 
		$dat="SELECT * FROM a_cajaitem where mk_cajitem='OFI' order by id";
		$sql=mysqli_query($connec,$dat);
		?>
		<select name="xdescofi" id="xdescofi">
		<option value="">Oficina -----------> </option>
		<?php
		while($rosvi=mysqli_fetch_array($sql))
		// OJO - falta pensar xrsocial como llevar a a_regcaja
		{echo "<option  value='".$rosvi['codigo_cajitem']." ".$rosvi["descri_cajitem"]."'>".$rosvi["codigo_cajitem"]." ".$rosvi["descri_cajitem"]."</option>"; }
		?>
        
    
		</select>
       </td>
       

       
            </table>			  
		 
         <?php } ?>
          <table width="385" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="385">Descripción:</td>
              </tr>
            <tr>
              
              <td><textarea name="xdesc" id="xdesc" cols="60" rows="3"><?php echo($desc_recibo); ?></textarea></td>
              
              
              
              </tr>
            </table>
           
            </td>
          </tr>
        <tr>
          <td colspan="2" align="left" bgcolor="#E3E3E1"><table width="438" border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center">Tot. Compra </td>
              <td width="198" align="center">Tot. Recibos Caja</td>
              <td width="67" align="center">&nbsp;</td>
              </tr>
            <tr>
              <td width="165" align="right"><?php echo($xtotal)?></td>
              <td align="right"><?php echo($xsumtot_caja)?></td>
              <td align="left">&nbsp;</td>
              </tr>
            <tr>
              <td colspan="3" align="center">
              <?php if ($xtitrec=="S") { ?>
              <table width="384" border="1" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="150" align="center" bgcolor="#999999">V. Venta</td>
                  <td width="138" align="center" bgcolor="#999999">I.G.V.</td>
                  <td width="88" align="center" bgcolor="#999999">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="center"><input name="xvventa" type="text" id="vventa" size="10" maxlength="10" value="<?php echo "0" ?>"/></td>
                  <td align="center"><input name="xigv" type="text" id="xigv" size="10" maxlength="10" value="<?php echo "0" ?>"/></td>
                  <td>&nbsp;</td>
                  </tr>
                </table>
                <? } ?>
              
              
              
              </td>
              </tr>
            <tr>
              <td align="right">Este recibo por:</td>
              <td align="right"><input style='text-align:right;' name="xcant" type="text" id="xcant" size="25" maxlength="100" value="<?php echo($xsaldoxcobrar); ?>"/></td>
              <td align="right">
              <? if ($def_moneda=="S"){ ?>
          <select name="xmone">
            <option value="S">SOLES</option> 
            <option value="D">DOLARES</option> 
          </select>
               <? }else{ ?>              
          <select name="xmone">
            <option value="D">DOLARES</option> 
            <option value="S">SOLES</option> 
          </select>
          <? } ?>
              </td>
              </tr>
            </table></td>
          </tr>
        <tr>
          <td width="235"><input type="hidden" name="xcodigo" value="<?php echo($xcodigo); ?>" />
            <input type="hidden" name="xsaldoxcobrar" value="<?php echo($xsaldoxcobrar); ?>" />
            <input type="hidden" name="xid_saldo_estado" value="<?php echo($xid_saldo_estado); ?>" />
            <input type="hidden" name="xtitrec" value="<?php echo($xtitrec); ?>" />
            <input type="hidden" name="xtcta_caja" value="<?php echo($xtcta_caja); ?>" />
            <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />  
            <input type="hidden" name="xcodper" value="<?php echo($xcodper); ?>" />    
            <input name="Submit3" type="submit" class="Estilo38" value="-&gt; GUARDAR &lt;-" /></td>
          <td width="222"><a href="xcxoxmxaxnxdxox.php?zyxw=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>"><img src="iconos/bot_retornar.png" alt="" width="75" height="25" /></a></td>
          
          </tr>
        </form>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td height="59" colspan="2" align="center" valign="middle" >&nbsp;</td>
    </tr>
</table>

<p>&nbsp;</p>
<?php
}
?>
</body>
</html>
<!-- SELECT DISTINCT owner FROM pet -->