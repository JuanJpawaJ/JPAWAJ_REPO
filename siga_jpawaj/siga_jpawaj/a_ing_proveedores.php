<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proveedores</title>

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




//$zyxw= $_GET['zyxw'];
//$xnxixvx=$_GET['xnxixvx'];
//$xoxgxixdxoxcx=$_GET['xoxgxixdxoxcx']; 


//echo " viene cod: ".$xoxgxixdxoxcx."<br>";
//$cod2ix=substr($xoxgxixdxoxcx,0,2);
//$cod4ix=substr($xoxgxixdxoxcx,-4);
//$codigox=$cod4ix.$cod2ix;
//echo " el nuevo cod: ".$codigox."<br>";

//$resultx=mysql_query("select * from a_personal where trim(cod_per)='$codigox'",$connec);
//$totalx=mysql_num_rows($resultx);
//// consulta y genera el timex
//$xnxixvx=mysql_result($resultx,0,"nivel_per");
//$xtimex_per=mysql_result($resultx,0,"xtimex_per");
//$xactualtimex=time(); 


//echo ("nivel  ".$xnxixvx);
	
$totalx=1111;
if ($totalx==9999){
//if ($totalx==0 OR $xnxixvx<"2"){
	?>
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="www.jpawaj.com">NO ESTA UD. AUTORIZADO</a></div>
    </th>
  </tr>
</table>
<?php
}else{
?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="1028" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" bgcolor="#00238c" class="tit_menu_sup">
    <table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="170" height="71" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="704" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO"> PROVEEDORES - Ingreso  / Compras  / (Especiales) / Cta. Cte.</span></td>
        <td width="112" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
        <td width="40" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="380" bgcolor="#FFFFCC" class="TITULO">
            <form id="form0" name="form0" method="get" action="a_ing_proveedores.php">
  <table width="733" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
    <tr>
      <td width="460" height="28" bgcolor="#FFCC66"> Dato a buscar: :
        <input name="bxdatosx" type="text" id="bxdatosx" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();"/>
        <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" />
        

        <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
        <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />

        <input name="Submit4" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
        
      <td width="124" bgcolor="#FFCC66">...  </td>
      <td width="141" bgcolor="#FFCC66">..</td>
 
    </tr>
    </table>

</form>

</td>
    <td width="190" colspan="2" bgcolor="#FFFFCC">hola</td>

  </tr>
  <tr class="tit_menu_sup">
    <td height="141" valign="top" bgcolor="#FFFFCC"><table width="959" height="62" border="1" cellspacing="0">
      <tr bgcolor="#CCFFFF" class="diez">
        <td width="45" height="20" align="center">CODIGO</td>
        <td width="144" align="center">RAZON SOCIAL</td>
        <td width="69"><div align="center">DOCUMENTO</div></td>
        <td width="133"><div align="center">DIRECCION</div></td>
        <td width="65"><div align="center">CUDAD</div></td>
        <td width="96"><div align="center">NOM. COMERCIAL</div></td>      
        <td width="57"><div align="center">TELFS</div></td>
        <td width="59"><div align="center">CTKTO</div></td>
        <td width="40"><div align="center">CREDITO</div></td>
        <td width="38" align="center">CAJAi</td>
        <td width="30"><div align="center"> VER</div></td>
        <td width="57"><div align="center"> VENTA</div></td>
        <td width="72">CTA.CTE</td>
        </tr>
      <?php 



$bxncom=$_GET['bxncom'];
$bxdatosx=$_GET['bxdatosx'];

if(strlen($bxdatosx)==0) {

$result=mysqli_query($connec,"select * from a_proveedores order by rsocial_prov");

} else {

	$bxdatosx=trim($bxdatosx);
$result=mysqli_query($connec,"select * from a_proveedores where rsocial_prov like '%$bxdatosx%' or ncom_prov like '%$bxdatosx%' or
doc_prov like '%$bxdatosx%'order by rsocial_prov");
} 

$total=mysqli_num_rows($result);
echo "Registro con : ".($total). " PROVEEDORES";
while ($tabla=mysqli_fetch_array($result)) {


		$id=$tabla["id"];
		$codigo_prov=$tabla["codigo_prov"];
		$xcodigo_prov=$tabla["codigo_prov"];
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
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td height="40"><?php echo($codigo_prov) ?></td>
        <td><?php echo($rsocial_prov) ?></td>
        <td><?php echo($doc_prov) ?></td>
        <td><?php echo($dir_prov) ?></td>
        <td><?php echo($ciu_prov) ?></td>
        <td><?php echo($ncom_prov) ?></td>
        <td><?php echo($telf_prov) ?></td>
        <td><?php echo($ctk_prov) ?></td>
        <td><?php echo($credito_prov) ?></td>
        <td>
         <a href="a_caja2.php?xcodigo=<?php echo($xcodigo_prov);?>&xrsocial=<?php echo($rsocial_prov);?>&xdoc=<?php echo($doc_prov);?>&xsaldoxcobrar=<?php echo($saldoxcobrar);?>&xtotal=<?php echo($total_cteprov);?>&xsumtot_caja=<?php echo($sumtot_caja);?>&xid_saldo_estado=<?php echo($xid_saldo_estado_ctecli);?>&xtcta_caja=XS00SD&
        xnxixvx=<?php echo($xnxixvx);?>&xtitrec=S&xcodper=<?php echo($codigox);?>&def_moneda=<?php echo("S");?> "><img src="iconos/caja.png" width="30" height="27" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a>   
 </td>
        <td><a href="a_view_proveedores.php?id=<?php  echo($id); ?>&xnxixvx=<?php echo($xnxixvx)?>"><img src="iconos/ver.png" width="30" height="26" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
        <td><a href="a_compras1.php?xcodigo_prov=<?php echo($codigo_prov);?>&xrsocial_prov=<?php echo($rsocial_prov);?>&xnxixvx=<?php echo($xnxixvx)?>">Nva.Compra</a></td>
          <td><a href="a_cteprov.php?xcodigo_prov=<?php echo($codigo_prov);?>&xrsocial_prov=<?php echo($rsocial_prov);?>&xnxixvx=<?php echo($xnxixvx)?>">Cta. Proveedor</a></td>
        </tr>
      <?php 
	}


  
mysqli_close($connec);
?>
    </table>      
    <td colspan="2" valign="top" bgcolor="#FFFFCC">
    
 <form id="form1" name="form1" method="post" onSubmit="return checkSubmit();" action="a_reg_proveedores.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
   
    
    <table width="185" border="1" align="center" class="tablaingrenuevo">
    <tr>
      <td colspan="2" bgcolor="#FFCC66"><div align="center"><strong>NVO. PROVEEDOR</strong></div></td>
    </tr>
 
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">DOCUMENTO: (Proveedor)</span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="doc" type="text" id="doc" size="12" maxlength="12" />
          </label>
        </span></td>
    </tr>
 
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">*RAZÓN SOCIAL:</span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="rsocial" type="text" id="rsocial" size="25" maxlength="60" onKeyUp="this.value=this.value.toUpperCase();"/>
          
        </label>
      </span></td>
    </tr>

    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">*DIRECCIÓN: </span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="dir" type="text" id="dir" size="25" maxlength="100" />
          </label>
        </span></td>
    </tr>

    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">*CIUDAD:</span></td>
    </tr>
    <tr>
      <td colspan="2"><input name="ciu" type="text" class="TITULO" id="ciu" size="25" maxlength="60" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">NOMBRE COMERCIAL:</span></td>
    </tr>
    <tr>
      <td colspan="2"><input name="ncom" type="text" class="TITULO" id="ncom" size="25" maxlength="100" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Teléfonos:</span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="telf" type="text" id="telf" size="25" maxlength="40" />
        </label>
      </span></td>
    </tr>


    
    <tr>
    <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">CONTACTO:</span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="ctk" type="text" id="ctk" size="25" maxlength="60" />
        </label>
      </span></td>
    </tr>    

    <tr>
    <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Email 1 ..@..</span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="email1" type="text" id="email1" size="25" maxlength="60" />
          </label>
        </span></td>
    </tr>
 
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Email 2  ..@..</span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <input name="email2" type="text" id="email2" size="25" maxlength="60" />
        </label>
      </span></td>
    </tr>

    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">CREDITO:</span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><input name="credito" type="text" class="TITULO" id="credito" size="12" maxlength="12" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Estado Proveedor: </span></td>
    </tr>
    <tr>
      <td colspan="2"><span class="TITULO">
        <label>
          <select name="estado" id="estado">
            <option value="ACTIVO">ACTIVO</option> 
            <option value="SUSPENDIDO">SUSPENDIDO</option>
            <option VALUE="OTRO">OTRO</option>
          </select>
        </label>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Observaciones</span></td>
    </tr>
    <tr>
      <td colspan="2"><textarea name="observa" cols="27" rows="6" class="TITULO" id="observa"></textarea></td>
    </tr>
    <tr>

     <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
     <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx); ?>" />
     
      <td width="121"><input name="Submit" type="Submit" class="Estilo38" value="-&gt; Guardar &lt;-" /></td>
   
      <td width="52"><input name="Submit2" type="reset" class="Estilo38" value="Borrar" /></td>
    </tr>
  </table>
</form>
    </td>
  </tr>
</table>


<?php 
	}
?>
</html>
