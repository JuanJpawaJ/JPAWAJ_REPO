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
$xcodigo_cli=$_GET['xcodigo_prov'];
$xrsocial_cli=$_GET['xrsocial_prov'];
$xtprec_cli=$_GET['xtprec_cli'];
$xestado_cli=$_GET['xestado_cli'];
$diah=substr(date("d"),0,2);
$mesh=date("m");
$anoh=date("Y");
$xnxixvx= $_GET['xnxixvx'];
echo ("nivel  ".$xnxixvx);

?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="953" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#00238c" class="tit_menu_sup"><table width="955" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="170" height="71" align="center" valign="middle"><img src="logo_sca_p.fw.png" width="134" height="60" /></td>
        <td width="649" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">CTA. CTE. - PROVEEDOR</span></td>
        <td width="113" align="center" valign="middle"><img src="logo_empresa_p.fw.png" width="61" height="60" /></td>
        <td width="23" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td align="center" bgcolor="#FFFFCC" class="TITULO"><table width="884" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="55" align="left" bgcolor="#999999">CODIGO :</td>
        <td width="91" align="left"><?php echo($xcodigo_cli) ?></td>
        <td width="108" align="left" bgcolor="#999999">NOM.COMERCIAL :</td>
        <td width="160" align="left">&nbsp;</td>
        <td width="76" align="left" bgcolor="#999999">RAZON SOC.:</td>
        <td width="380" align="left"><?php echo($xrsocial_cli) ?></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="840" valign="top" bgcolor="#FFFFCC"><span class="TITULO"><a href="n_form_gra.php" ></a></span>
      <table width="642" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="642" bgcolor="#FFFFCC" class="TITULO"><form id="form0" name="form0" method="post" action="a_ing_clientes.php">
            <table width="591" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
              <tr>
                <td width="275" height="28" bgcolor="#FFCC66"> D???? A BUSCAR ???c.:
                  <input name="bxrsocial" type="text" id="bxrsocial" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();"/></td>
                <td width="194" bgcolor="#FFCC66">D???? A BUSCAR ???c.:
                  <input name="bxncom" type="text" id="bxncom" size="25" maxlength="60" /></td>
                <td width="114" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
                </tr>
              </table>
          </form></td>
        </tr>
      </table>
      <table width="884" height="62" border="1" cellspacing="0">
        <tr bgcolor="#CCFFFF" class="diez">
          <td width="69" height="20" align="center">N. DOCU.</td>
          <td width="63">FECHA</td>
          <td width="196">COMPRA</td>
          <td width="23">TIPO</td>
          <td width="80">TOTAL</td>
          <td width="19">EST</td>
          <td width="74" align="center">SALDO</td>
          <td width="94">OBSER</td>
          <td width="60">INGRE</td>
          <td width="63">SALI</td>
          <td width="59">SALDO</td>
          <td width="34"><div align="center"> VER</div></td>
        </tr>
        <?php 

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");



if(strlen($bxncom)==0 and strlen($bxrsocial)==0){
$result=mysqli_query($connec,"select * from a_cteproveedores  where codcli_cteprov=$xcodigo_cli order by fecha_cteprov");
} elseif (strlen($bxrsocial)==0) {
$bxncom1=trim($bxncom);
$result=mysqli_query($connec,"select * from a_clientes where ncom_cli like '%$bxncom1%'  order by rsocial_cli");
} else {
$bxrsocial1=trim($bxrsocial);
echo ($bxrsocial1);
$result=mysqli_query($connec,"select * from a_clientes where rsocial_cli like '%$bxrsocial1%' order by rsocial_cli");
}
	
// comentario..... UN FORMULARIO DENTRO DE ESTE PHP CON ACTION AL MISMO PHP

$total=mysqli_num_rows($result);

echo "Proveedor  : ".($total). " Registros ";

while ($tabla=mysqli_fetch_array($result)){
	
		$id=$tabla["id"];
		$codcli_cteprov=$tabla["codcli_cteprov"];
		$nrodocu_cteprov=$tabla["nrodocu_cteprov"];
		$fecha_cteprov=$tabla["fecha_cteprov"];
		$desc_cteprov=$tabla["desc_cteprov"];
		$tmov_cteprov=$tabla["tmov_cteprov"];
		$total_cteprov=$tabla["total_cteprov"];
		$esta_cteprov=$tabla["esta_cteprov"];		
		$fpago_cteprov=$tabla["fpago_cteprov"];	
		$obs_cteprov=$tabla["obs_cteprov"];
		$saldo_ctecli=$tabla["saldo_cteprov"];

		
					?>
        <tr bgcolor="#FFFFFF" class="tabla10">
          <td height="40"><?php echo($nrodocu_cteprov) ?></td>
          <td><?php echo($fecha_cteprov) ?></td>
          <td><?php echo($desc_cteprov) ?></td>
          <td><?php echo($tmov_cteprov) ?></td>
          <td><?php echo($total_cteprov) ?></td>
          <td><?php echo($esta_cteprov) ?></td>
          <td><?php echo($saldo_cteprov) ?></td>
          <td><?php echo($obs_cteprov) ?></td>
          <td align="right">
                <?php if ($tmov_cteprov=="I"){ echo($total_cteprov);
			   $subingr=$subingr+$total_cteprov; 				
				 }else{ echo("0"); }
			  ?>
          </td>
              <td align="right">
                <?php if ($tmov_cteprov=="S"){ echo($total_cteprov);
			$subsali=$subsali+$total_cteprov;	
				 }else{ echo("0");  }
			  ?>
          </td>
          <td align="right">
                <?php echo($subingr-$subsali); ?>             
          </td>
          <td><a href="a_view_1_compra.php?xcodigo=<?php echo($codcli_cteprov);?>&xdoc=<?php echo($nrodocu_cteprov);?>&xnxixvx=<?php echo($xnxixvx);?>">Ver.</a></td>

        </tr>
        <?php 
	}


  
mysqli_close($connec);
?>
    </table>
      <table width="884" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
          <td width="63" align="right" bgcolor="#CCFFFF" class="tabla10"><?php echo($subingr); ?></td>
          <td width="67" align="right" bgcolor="#CCFFFF" class="tabla10"><?php echo($subsali); ?></td>
          <td width="63" align="right" bgcolor="#CCFFFF" class="tabla10"><?php echo($subingr-$subsali); ?></td>
          <td width="39">&nbsp;</td>
        </tr>
      </table>
    <p>&nbsp;</p></td>
    </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
