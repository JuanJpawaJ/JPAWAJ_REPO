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

date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");
   
   
   
   // viene de a_ingclientes " nva. venta"
$xcodigo_prov=$_GET['xcodigo_prov'];
$xrsocial_prov=$_GET['xrsocial_prov'];
$diahoy_pe=date("d/m/Y");
$xnxixvx=$_GET['xnxixvx'];
echo ("nivel  ".$xnxixvx);

?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="953" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#00238c" class="tit_menu_sup"><table width="955" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="170" height="71" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="560" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">COMPRAS  (1)</span></td>
        <td width="202" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
        <td width="23" bgcolor="#FFFF00"><div align="center"><a href="n_admin.php">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="185" colspan="2" bgcolor="#FFFFCC"><table width="954" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="70" bgcolor="#999999">CODIGO:</td>
        <td width="75" bgcolor="#FFFFFF"><?php echo($xcodigo_prov); ?></td>
        <td width="82" bgcolor="#999999">R. SOCIAL:</td>
        <td width="465" bgcolor="#FFFFFF"><?php echo($xrsocial_prov); ?></td>
        <td width="124" bgcolor="#999999">FECHA HOY:</td>
        <td width="138" bgcolor="#FFFFFF"><?php echo($diahoy); ?></td>
      </tr>
      </table>
      
    </tr>
  <tr class="tit_menu_sup">
    <td colspan="2" valign="top" bgcolor="#FFFFCC">
  <form id="form1" name="form1" method="get" onSubmit="return checkSubmit();" action="a_compras2.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
    
  <!--  
<form id="form1" name="form1" method="post" onSubmit="return checkSubmit();" onsubmit="return false;" action="n_areg_alu.php" >
-->
    <table width="185" border="1" align="center" class="tablaingrenuevo">
      <tr>
        <td colspan="2" bgcolor="#FFCC66"><div align="center"><strong>COMPRAS </strong></div></td>
        </tr>
      
      <tr>
        <td colspan="2" bgcolor="#FDF19B"><span class="TITULO"><span class="TITULO1">Ingrese el Nro. DOC. de COMPRA. Ej.: F001-00346 o B001-086, etc.</span></span></td>
        </tr>
      <tr>
        <td colspan="2"><span class="TITULO">
          <label>
            <input name="xdoc" type="text" class="diez" id="xdoc" size="15" maxlength="15" />
          </label>
          <span class="TITULO1">
                       (9-9 Generado)</span></span></td>
        </tr>
      
      <tr>
        <td colspan="2" bgcolor="#FDF19B"><span class="TITULO1">Fecha del Documento: [dd][mm][aaaa]:</span></td>
        </tr>
      <tr>
        <td><input name="xfecha_pe" type="text" id="xfecha_pe" size="10" maxlength="10" value="<?php echo($diahoy_pe); ?>"/></td>
        
      </tr>
      <tr>
        <td colspan="2" bgcolor="#FDF19B" class="TITULO1">Ingresa a: Almacen de:</td>
        </tr>
      <tr>
        <td>
        <select name="xnroalmacen">
            <option value="000001">AREQUIPA</option> 
            <option value="000002">MATARANI</option> 
            <option value="000003">OTROS   </option> 
          </select>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx)?>" >  
        
        <input type="hidden" name="xcodigo_prov" value="<?php echo($xcodigo_prov); ?>" >  
        <input type="hidden" name="xrsocial_prov" value="<?php echo($xrsocial_prov); ?>" >  
        
        
        <td width="121"><input name="Submit" type="Submit" class="Estilo38" value="-&gt; Continúa &lt;-" /></td>
        
        <td width="52"><input name="Submit2" type="reset" class="Estilo38" value="Borrar" /></td>
      </tr>
      </table>
  </form>
    </td>
    </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
