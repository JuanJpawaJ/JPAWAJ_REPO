<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CLIENTES-VENTAS</title>

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
<?php  // MODULO DE ****** VENTAS ****** Lista clientes

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");


// ***************** CODIGO VIENE Y CONVIERTE EN $codigox
$xoxgxixdxoxcx=$_GET['xoxgxixdxoxcx']; 
//echo " viene cod: ".$xoxgxixdxoxcx."<br>";
$cod2ix=substr($xoxgxixdxoxcx,0,2);
$cod4ix=substr($xoxgxixdxoxcx,-4);
$codigox=$cod4ix.$cod2ix;

// ***************** CODIGO VAAAAA.. Y CONVIERTE EN $xoxgxixdxoxcx
$cod2ox=substr($codigox,-2);
$cod4ox=substr($codigox,0,4);
$xoxgxixdxoxcx_o=$cod2ox.$cod4ox;
//echo " vaaa cod: ".$xoxgxixdxoxcx_o."<br>";
// ***************** FFFIIINNNNN....



//echo " cod consulta:  ".$codigox."<br>";

//---
//$result1=mysql_query("select * from n_secciones where trim(cod_secc)='$csecc'",$connec);
//$des_csecc=mysql_result($result1,0,"nom_secc");
//---
//$resultx=mysqli_query($connec,"select * from a_personal where trim(cod_per)='$codigox'");
//$totalx=mysqli_num_rows($resultx);
// consulta y genera el timex

//$xnxixvx=mysql_result($resultx,0,"nivel_per");
$xnxixvx=10;


//$xtimex_per=mysql_result($resultx,0,"xtimex_per");
//$xactualtimex=time(); 
//echo " totalx       :  ".$totalx."<br>";
//echo " xnivel       :  ".$xnxixvx."<br>";
//echo " timex sistema:  ".$xtimex_per."<br>";
//echo " timex actual :  ".$xactualtimex."<br>";

// ***************** FFFIIINNNNN....

//if ($totalx==0 OR $xnxixvx<"2"){
	$totalx=0;
if ($totalx<>0){
	?>
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="www.empresacom.com">NO ESTA UD. AUTORIZADO</a></div>
    </th>
  </tr>
</table>
<?php
}else{
//$nom_per=mysql_result($resultx,0,"nom_per");
//$ape_per=mysql_result($resultx,0,"ape_per");
?>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="1028" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" bgcolor="#00238c" class="tit_menu_sup"><table width="1026" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="164" height="71" align="center" valign="middle"><img src="iconos/logo_yo_png.png" width="96" height="60" /></td>
        <td width="597" align="center" bgcolor="#00238C" class="TITULO"><span class="TITULO_AMARILLO">MODULO VENTAS - CLIENTES</span><br />
		<?php  echo "<font color='#FFFFFF'>".$nom_per.", ".$ape_per."</font>"; ?>
       </td>
		
        
        
        <td width="227" align="center" valign="middle"><img src="iconos/logo_cli_png.png" width="169" height="55" /></td>
        <td width="38" bgcolor="#FFFF00"><div align="center"><a href="xcxoxmxaxnxdxox.php?clavexxx=SCADCASA2014_09&
        xnxixvx=<?php echo($xnxixvx);?>">X</a></div></td>
      </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="380" bgcolor="#FFFFCC" class="TITULO">
            <form id="form0" name="form0" method="get" action="a_lista_clientes_ventas.php">
  <table width="733" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
    <tr>
      <td width="460" height="28" bgcolor="#FFCC66"> Dato a buscar: :
        <input name="bxdatosx" type="text" id="bxdatosx" size="25" maxlength="60" onkeyup="this.value=this.value.toUpperCase();"/>
        <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx_o); ?>" />
        <input type="hidden" name="zyxw" value="SCADCASA2014_09" />
        <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />

        <input name="Submit4" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
        
      <td width="124" bgcolor="#FFCC66">...  </td>
      <td width="141" bgcolor="#FFCC66">..</td>
 
    </tr>
    </table>

</form>
</td>
    <td width="190" colspan="2" bgcolor="#FFFFCC">

  </tr>
  <tr class="tit_menu_sup">
    <td valign="top" bgcolor="#FFFFCC"><table width="1080" height="62" border="1" cellspacing="0">
      <tr bgcolor="#CCFFFF" class="diez">
        <td width="44" height="20" align="center" bgcolor="#CCFFFF">CODIGO</td>
        <td width="141" align="center" bgcolor="#CCFFFF">RAZON SOCIAL</td>
        <td width="69" bgcolor="#CCFFFF"><div align="center">DOCUMENTO</div></td>
        <td width="130" bgcolor="#CCFFFF"><div align="center">DIRECCION</div></td>
        <td width="64" bgcolor="#CCFFFF"><div align="center">DISTRIT</div></td>
        <td width="43" bgcolor="#CCFFFF"><div align="center">T. PREC</div></td>
        <td width="95" bgcolor="#CCFFFF"><div align="center">NOM. COMERCIAL</div></td>      
        <td width="56" bgcolor="#CCFFFF"><div align="center">TELFS</div></td>
        <td width="58" bgcolor="#CCFFFF"><div align="center">CTKTO</div></td>
        <td width="36" align="center" bgcolor="#CCFFFF">VER</td>
        <td width="36" align="center" bgcolor="#C4FDB3">ALMACEN</td>
        <td width="36" align="center" bgcolor="#B7CEFF">ALMACEN</td>
        <td width="36" align="center" bgcolor="#FFFF99">ALMACEN</td>
        <td width="36">CTA.CTE</td>
        <? if ($xnxixvx>="4"){ ?>
        <td width="36" bgcolor="#D8DCF5">Provi</td>
        <td width="38" bgcolor="#FCF5A9">Venta Mo</td>
        <td width="54" bgcolor="#CCFFFF"><div align="center"> VENTA</div></td>
        <? } ?>
         
        </tr>
      <?php 


$bxncom=$_GET['bxncom'];
$bxdatosx=$_GET['bxdatosx'];

if(strlen($bxdatosx)==0){
   	$result=mysqli_query($connec,"select * from a_clientes order by rsocial_cli");
} else {
	$bxdatosx=trim($bxdatosx);
	echo ($bxdatosx);
	$result=mysqli_query($connec,"select * from a_clientes where rsocial_cli like '%$bxdatosx%' or ncom_cli like '%$bxdatosx%' or doc_cli like '%$bxdatosx%' order by rsocial_cli");
}

$total=mysqli_num_rows($result);


echo "Registro con : ".($total). " CLIENTES";
while ($tabla=mysqli_fetch_array($result)) {


		$id=$tabla["id"];
		$codigo_cli=$tabla["codigo_cli"];
	    $xcodigo_cli=$tabla["codigo_cli"];
		$rsocial_cli=$tabla["rsocial_cli"];
		$doc_cli=$tabla["doc_cli"];
		$dir_cli=$tabla["dir_cli"];
		$distrito_cli=$tabla["distrito_cli"];
		
		$ciu_cli=$tabla["ciu_cli"];
		$tprec_cli=$tabla["tprec_cli"];
		$ncom_cli=$tabla["ncom_cli"];	
		$giro_cli=$tabla["giro_cli"];	
			
		$telf_cli=$tabla["telf_cli"];	
		$ctk_cli=$tabla["ctk_cli"];
		$email1_cli=$tabla["email1_cli"];			
		$email2_cli=$tabla["email2_cli"];
		$credito_cli=$tabla["credito_cli"];
		$vendedor_cli=$tabla["vendedor_cli"];
		$observa_cli=$tabla["observa_cli"];
		
					?>
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td height="40" bgcolor="#FFFFFF"><?php echo($codigo_cli) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($rsocial_cli) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($doc_cli) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($dir_cli) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($distrito_cli) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($tprec_cli) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($ncom_cli) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($telf_cli) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($ctk_cli) ?></td>
        <td bgcolor="#FFFFFF"><a href="a_view_clientes.php?id=<?php  echo($id); ?>&xnxixvx=<?php echo($xnxixvx)?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx_o)?>"><img src="iconos/ver.png" width="30" height="26" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';"/></a></td>
        <td align="center" bgcolor="#C4FDB3"><a href="a_prefprof.php?xcodigo_cli=<?php echo($codigo_cli) ?>&xrsocial_cli=<?php echo($rsocial_cli) ?>&xcodper=<?php echo($codigox) ?>&xnroalmacen=<?php echo("000001") ?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx_o)?>"><img src="iconos/misti.png" width="30" height="28" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
        <td align="center" bgcolor="#B7CEFF"><a href="a_prefprof.php?xcodigo_cli=<?php echo($codigo_cli) ?>&xrsocial_cli=<?php echo($rsocial_cli) ?>&xcodper=<?php echo($codigox) ?>&xnroalmacen=<?php echo("000002") ?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx_o)?>"><img src="iconos/timon.png" width="30" height="27" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a></td>
        <td align="center" bgcolor="#FFFF99"><a href="a_prefprof.php?xcodigo_cli=<?php echo($codigo_cli) ?>&xrsocial_cli=<?php echo($rsocial_cli) ?>&xcodper=<?php echo($codigox) ?>&xnroalmacen=<?php echo("000003") ?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx_o)?>">Pre/Venta<br />MMelg.</a></td>
        <td align="center" bgcolor="#FFFFFF"><a href="a_ctecli.php?xcodigo_cli=<?php echo($codigo_cli);?>&xrsocial_cli=<?php echo($rsocial_cli);?>&xnxixvx=<?php echo($xnxixvx)?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx_o)?>">Cta. Cliente</a></td>
                <? if ($xnxixvx>="4"){ ?>
        <td align="center" bgcolor="#D8DCF5">    
          <a href="a_caja2.php?xcodigo=<?php echo($xcodigo_cli);?>&xrsocial=<?php echo($rsocial_cli);?>&xdoc=<?php echo($xdoc);?>&xsaldoxcobrar=<?php echo($saldoxcobrar);?>&xtotal=<?php echo($total_ctecli);?>&xsumtot_caja=<?php echo($sumtot_caja);?>&xid_saldo_estado=<?php echo($xid_saldo_estado_ctecli);?>&xtcta_caja=XI0000&
        xnxixvx=<?php echo($xnxixvx);?>&xtitrec=I&sw_docu_caja=N&xcodper=<?php echo($codigox);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx_o)?>"><img src="iconos/caja.png" width="30" height="27" style="border: solid 3px #cccccc;" onmouseover="this.style.border='solid 3px #0066CC';" onmouseout="this.style.border='solid 3px #cccccc';" /></a>   
          </td>
        <td align="center" bgcolor="#FCF5A9"><a href="a_ventas2_rapida.php?xcodigo_cli=<?php echo($codigo_cli);?>&xrsocial_cli=<?php echo($rsocial_cli);?>&xtprec_cli=<?php echo($tprec_cli);?>&xestado_cli=<?php echo($estado_cli);?>&xnxixvx=<?php echo($xnxixvx)?>&xvendedor_cli=<?php echo($vendedor_cli)?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx_o)?>">Venta Rapida</a></td>
        <td align="center" bgcolor="#FFFFFF"><a href="a_ventas1.php?xcodigo_cli=<?php echo($codigo_cli);?>&xrsocial_cli=<?php echo($rsocial_cli);?>&xtprec_cli=<?php echo($tprec_cli);?>&xestado_cli=<?php echo($estado_cli);?>&xnxixvx=<?php echo($xnxixvx)?>&xvendedor_cli=<?php echo($vendedor_cli)?>">Nva. Venta.</a></td>
       </tr>
      <?php 
	  }
	  }


  
//mysqli_close($connec);
?>

    </table> 
    
                <? $xnxixvx=6;
				 if ($xnxixvx>="5"){ ?>
    <td colspan="2" valign="top" bgcolor="#FFFFCC">

  <table width="185" border="1" align="center" class="tablaingrenuevo">
<form id="form1" name="form1" method="post" onSubmit="return checkSubmit();" action="a_areg_cli.php" onkeypress="javascript:if(event.keyCode==13){return false;}" >
  
    <tr>
      <td colspan="2" bgcolor="#FFCC66"><div align="center"><strong>NVO. CLIENTE</strong></div></td>
    </tr>
 
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">DOCUMENTO: (Cliente)</span></td>
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
      <td colspan="2" bgcolor="#FDF19B" class="TITULO">DISTRITO</td>
    </tr>
    <tr>
      <td colspan="2">
      <input name="distri" type="text" id="distri" size="25" maxlength="60" onKeyUp="this.value=this.value.toUpperCase();"/>
</td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">*CIUDAD:</span></td>
    </tr>
    <tr>
      <td colspan="2"><input name="ciu" type="text" class="TITULO" id="ciu" size="25" maxlength="60" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">T.PREC.:</span></td>
    </tr>
    <tr>
      <td colspan="2"><input name="tprec" type="text" class="TITULO" id="tprec" size="2" maxlength="2" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">NOMBRE COMERCIAL:</span></td>
    </tr>
    <tr>
      <td colspan="2"><input name="ncom" type="text" class="TITULO" id="ncom" size="25" maxlength="100" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B" class="TITULO">Giro</td>
    </tr>
    <tr>
      <td colspan="2">
      <input name="giro" type="text" id="giro" size="25" maxlength="60" onKeyUp="this.value=this.value.toUpperCase();"/>
      </td>
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
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Página WEB</span></td>
    </tr>
    <tr>
      <td colspan="2"><input name="pweb" type="text" id="pweb" size="25" maxlength="60" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">CREDITO:</span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><input name="credito" type="text" class="TITULO" id="credito" size="12" maxlength="12" /></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Estado Cliente: </span></td>
    </tr>
    <tr>
      <td colspan="2">
      <?php


//$dat="SELECT * FROM a_personal where area_per='V' order by nom_per";
$sql=mysqli_query($connec,"SELECT * FROM a_personal where area_per='V' order by nom_per");

 ?>
        <select name="xcodper" class="diez">
          <option value="">Vendedor?-----------&gt; </option>
          <?php
		  
//while ($tabla=mysqli_fetch_array($result)) {

 while($rosvi=mysqli_fetch_array($sql)){
  echo "<option  value='".$rosvi["cod_per"]."'>".$rosvi["nom_per"]." ".$rosvi["ape_per"]."</option>"; 
 }?>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Observaciones</span></td>
    </tr>
    <tr>
      <td colspan="2"><textarea name="observa" cols="27" rows="6" class="TITULO" id="observa"></textarea></td>
    </tr>
    <tr>
     <input type="hidden" name="xnxixvx" value="<?php echo($xnxixvx); ?>" />
     <input type="hidden" name="xoxgxixdxoxcx" value="<?php echo($xoxgxixdxoxcx_o); ?>" />
      <td width="121"><input name="Submit" type="Submit" class="Estilo38" value="-&gt; Guardar &lt;-" /></td>
   
      <td width="52"><input name="Submit2" type="reset" class="Estilo38" value="Borrar" /></td>
    </tr>
 </form>
  </table>

<?php 
	}
?>  
    </td>
    </tr>
</table>


<p>&nbsp;</p>
<?php 
	}
?>
</body>
</html>
