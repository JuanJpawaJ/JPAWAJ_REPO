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
	font-size: 12px;
	color: #000;
}
.tit_menu_sup {
	color: #000;
}
.tit_menu_sup td .tablaingrenuevo tr td {
	font-size: 10px;
}
.TITULO1 {	font-size: 10px;
	color: #003;
	font-family: "Comic Sans MS", cursive;
}
.TITULO_AMARILLO {	font-family: "Comic Sans MS", cursive;
	color: #FF0;
	font-size: 18px;
}
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

 
  <table width="805" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#00238C" class="tit_menu_sup"><table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="184" height="82" align="center" valign="middle"><img src="logo_sca_p.fw.png" width="134" height="60" /></td>
        <td width="690" align="center" valign="middle"><span class="TITULO1"><span class="TITULO_AMARILLO">VISTA y/o MODIFICA  PROVEEDORES</span></span></td>
        <td width="104" align="center" valign="middle"><img src="logo_empresa_p.fw.png" width="61" height="60" /></td>
        <td width="48" bgcolor="#FFFF00"><div align="center"><a href="javascript:history.go(-1)">X</a></div></td>        
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="524" align="center" valign="top" bgcolor="#FFFFCC"><table width="423" border="1" align="center" class="tablaingrenuevo">
      
       <?php 

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$xnxixvx=$_GET['xnxixvx'];
echo ("nivel  ".$xnxixvx);
$id=$_GET[id]; 
$result=mysqli_query($connec,"select * from a_proveedores where id=$id");	
$tabla = mysqli_fetch_array( $result ); 

		$rsocial_prov=$tabla["rsocial_prov"];
		$doc_prov=$tabla["doc_prov"];
		$dir_prov=$tabla["dir_prov"];
		$ciu_prov=$tabla["ciu_prov"];
		$ncom_prov=$tabla["ncom_prov"];		
		$telf_prov=$tabla["telf_prov"];	
		$ctk_prov=$tabla["ctk_prov"];
		$email1_prov=$tabla["email1_prov"];			
		$email2_prov=$tabla["email2_prov"];
		$credito_prov=$tabla["credito_prov"];
		$estado_prov=$tabla["estado_prov"];
		$observa_prov=$tabla["observa_prov"];	
	
	
?>

<form id="form1" name="form1" method="post" action="a_mod_proveedores.php">
      <tr>
        <td colspan="2" bgcolor="#FFCC66"><div align="center" class="tablaingrenuevo"><strong>DATOS</strong> PROVEEDOR</div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#E3E3E1"><table width="387" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="203">DOCUMENTO:
              <input name="doc" type="text" id="doc" size="10" maxlength="10" value="<?php echo($doc_prov); ?>" /></td>
            <td width="92">&nbsp;</td>
            <td width="92">SECC:
              <input name="xsecc" type="text" id="xsecc" size="3" maxlength="3" value="<?php echo($secc_prov); ?>" /></td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#E3E3E1">
          <table width="200" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>*Razón Social</td>
              </tr>
            <tr>
              <td><input name="rsocial" type="text" id="rsocial" size="25" maxlength="60" value="<?php echo($rsocial_prov); ?>"/></td>
              </tr>
            </table>
          <label>          </label></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#E3E3E1"><table width="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>*Dirección:</td>
            <td>*Ciudad</td>
          </tr>
          <tr>
            <td><input name="dir" type="text" id="dir" size="25" maxlength="60" value="<?php echo($dir_prov); ?>"/></td>
            <td><input name="ciu" type="text" id="ciu" size="25" maxlength="60" value="<?php echo($ciu_prov); ?>"/></td>
          </tr>
        </table>      
        </tr>
      <tr>
        <td colspan="2" bgcolor="#E3E3E1">
          <table width="304" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="150">Precio:</td>
              <td width="154">-Nombre Comercial:</td>
              </tr>
            <tr>
              <td><input name="tprec" type="text" id="tprec" size="25" maxlength="100" value="<?php echo($tprec_prov); ?>"/></td>
              <td><input type="text" name="ncom" id="ncom" size="25" maxlength="25" value="<?php echo($ncom_prov); ?>"/></td>
              </tr>
          </table></tr>
      <tr>
        <td colspan="2" bgcolor="#E3E3E1">
          <table width="200" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>Teléfono:</td>
              <td>Contacto:</td>
              </tr>
            <tr>
              <td><input name="telf" type="text" id="telf" size="25" maxlength="100" value="<?php echo($telf_prov); ?>"/></td>
              <td><input name="ctk" type="text" id="ctk" size="25" maxlength="100" value="<?php echo($ctk_prov); ?>"/></td>
              </tr>
            </table></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#E3E3E1">
          <table width="50" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>Email 1 ..@..</td>
              <td>Email 2 ..@..</td>
              </tr>
            <tr>
              <td><input name="email1" type="text" id="email1" size="25" maxlength="60" value="<?php echo($email1_prov); ?>"/></td>
              <td><input name="email2" type="text" id="email2" size="25" maxlength="60" value="<?php echo($email2_prov); ?>"/></td>
              </tr>
            </table></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#E3E3E1">
          <table width="200" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>Crédito
                <input name="credito" type="text" id="credito" size="25" maxlength="60" value="<?php echo($credito_prov); ?>" /></td>
              <td>Estado Alumno
                <select name="estado" id="estado">
            <option value="ACTIVO">ACTIVO</option> 
            <option value="SUSPENDIDO">SUSPENDIDO</option>
            <option VALUE="OTRO">OTRO</option>
 
                  </select></td>
              </tr>
            </table></td>
      </tr>
      <tr>
        <td>Observaciones</td>
        <td>Password</td>
      </tr>
      <tr>
<td><textarea name="observa" id="observa" cols="27" rows="5"><?php echo($observa_prov); ?></textarea></td>
<td>&nbsp;</td>

      </tr>
      <tr>

        <td width="235">
<input type="hidden" name="id" value=<?php echo($id); ?> >
<input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />

        <input name="Submit3" type="submit" class="Estilo38" value="-&gt; MODIFICAR &lt;-" /></td>
        <td width="172"><img src="iconos/bot_retornar.png" width="75" height="25" /></td>
      </tr>
      </form>
    </table>

 
    </td>
     
    <td width="500" bgcolor="#FFFFCC">&nbsp;</td>
    </tr>

</table>
<?php
mysqli_close($connec);
?>
<p>&nbsp;</p>
</body>
</html>
