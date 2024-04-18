<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bonofertas Administrador</title>
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
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$bxproducto=$_GET['bxapellido'];
// ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
   $xdelreg="NOOO";
$xareg=$_GET['xareg'];
$xmodi=$_GET['xmodi'];
$xdelreg=$_GET['xdelreg'];
$viewmodi=$_GET['viewmodi'];
// ++++$xtipoi=$_GET['xtipoi'];

$xgl=$_GET['xgl']; //CMRD
		
if ($xareg=="SIAREG") {
  // genera el codigo de 6 digitos en base al max id anterior
  $rs = mysqli_query($connec,"SELECT MAX(id) AS id FROM a_bonofertas");
   if ($row = mysqli_fetch_row($rs)) {
	   $idid = trim($row[0]);
   }
   	$codigo_bo=substr((string)$idid+1000001,1);
	
	$fechahoy_bo=date("Y/m/d");
	$fechafin_bo=date("Y/m/d", strtotime($fecha_actual . ' + 30 days'));
	$registro_bo=$_GET['xregistro'];
    $registro_bo=substr(date("D"),0,1).substr($codigo_bo,0,3).substr(date("F"),0,1).substr($codigo_bo,3,3);
	$nombre_bo=$_GET['xnombre'];
	$apellido_bo=$_GET['xapellido'];
	$celular_bo=$_GET['xcelular'];
	$grupobo_bo=$_GET['xgrupobo'];
	$producto_bo=$_GET['xproducto'];
	$qdescuento_bo=$_GET['xqdescuento'];
	$qcantidad_bo=$_GET['xqcantidad'];
	$img_bo=$_GET['ximg'];
	//$fechahoy_bo=$_GET['xfechahoy'];
	//$fechafin_bo=$_GET['xfechafin'];
	$obspublico_bo=$_GET['xobspublico'];
	$obsadmin_bo=$_GET['xobsadmin'];
   
   // verifica si hay duplicados ....
   //$result=mysql_query("select * from a_items where producto_it=$xproducto",$connec);
   //$total=mysql_num_rows($result);
   //if ($total==0) {
	   $xspce="s";
	   $xum=0;

     $sql="INSERT INTO a_bonofertas (codigo_bo, registro_bo, nombre_bo, apellido_bo, celular_bo, grupobo_bo, producto_bo, qdescuento_bo, qcantidad_bo, img_bo, fechahoy_bo, fechafin_bo, obspublico_bo, obsadmin_bo) VALUES ('$codigo_bo', '$registro_bo', '$nombre_bo', '$apellido_bo', '$celular_bo', '$grupobo_bo', '$producto_bo', '$qdescuento_bo', '$qcantidad_bo', '$img_bo', '$fechahoy_bo', '$fechafin_bo', '$obspublico_bo', '$obsadmin_bo')";
	 $result=mysqli_query($connec,$sql);
     if($result){
	   echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
     }else{
	   echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
     }	
   //}
   $xareg="NO";
   $xmodi="NOOO";
   $xdelreg="NOOO";
  
   
} // ********++  FFFIIINNN  NUEVO REGISTROS 

// ********++  MODIFICA REGISTRO
if ($xmodi=="SIMODI") {

   $idmodi=$_GET['xidmodi'];	
   $xcodfab=$_GET['xcodfab'];
   $xproducto=$_GET['xproducto'];
   $xmarka=$_GET['xmarka'];
  $xventa=$_GET['xventa'];
   $xcosto=$_GET['xcosto'];
   $ximg=$_GET['ximg'];
$sql="UPDATE a_bonofertas SET codfabrica_it='$xcodfab',producto_it='$xproducto',producto_it='$xproducto',marka_it='$xmarka',preven_it='$xventa',img_it='$ximg' WHERE id=$idmodi";

   $result=mysqli_query($connec,$sql);
   if($result){
 	echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
   }else{
	echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
   }	
   $xmodi="NO";
   $xareg="NO";
   $xdelreg="NOOO";

}  // ********++  FFFIIINNN  MODIFICA
// ******************* COMO RETORNO *************************
// ********++  DEL REGISTRO
if ($xdelreg=="SIDELREG") {
	

   $idx=$_GET['idx']; 
   $delcod=$_GET['delcod'];
   $query = "delete from a_bonofertas where codigo_bo ='$delcod'";  
   $result = mysqli_query($connec,$query); 
  
   $xdelreg="NO";
   $xareg="NO";
   $xmodi="NOOO";
}
?>

  <table width="926" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4" bgcolor="#000066" class="tit_menu_sup"><table width="904" height="63" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="121" align="center" valign="top"><img src="iconos/ico_yo_sigachef.png" width="120" height="60"></td>
        <td width="575"><div align="center"><span class="TITULO_NARANJA">ADMINISTRADOR - BONOFERTAS *****</span></div></td>
        <td width="154" align="center" valign="middle"><img src="iconos/logo_cli_120_60_png.png" width="120" height="60"></td>
        </tr>
    </table></td>
    </tr>
  <tr class="tit_menu_sup">
    <td width="679" align="center" bgcolor="#FFFFCC"><table width="912" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="63" height="17" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=SMRP">TODO</a></td>
        <td width="64" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=S">SYSCOMP</a></td>
        <td width="98" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=M">M.BONITA</a></td>
        <td width="89" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=R">R.STORE</a></td>
        <td width="88" align="center" class="tabla10"><a href="a_list_items_admin.php?xgl=P">PERFUMERIA</a></td>
        <td width="510" rowspan="2" align="center">
    <form id="form0" name="form0" method="get" action="a_list_bonofertas.php">
          <table width="395" border="1" align="center" cellpadding="0" cellspacing="0" class="tablaingrenuevo">
            <tr>
              <td width="250" height="28" bgcolor="#FFCC66"> Dato a buscar Producto.:
    <input name="bxapellido" type="text" id="bxapellido" size="25" maxlength="60" onKeyUp="this.value=this.value.toUpperCase();"/></td>

              <td width="139" bgcolor="#FFCC66"><input name="Submit3" type="submit" class="Estilo38" value="-&gt; Buscar &lt;-" /></td>
               
              </tr>
           </table>
        </form>

        </td>
      </tr>
      <tr>
        <td height="17" colspan="5" align="center" class="tabla10">
		<? if ($xgl=="SMRD") {
			 echo "TODO";
		   }elseif ($xgl=="S") {
			 echo "SYSCOMPUTER";			   
		   }elseif ($xgl=="M") {
			 echo "MUJER BONITA";			
		   }elseif ($xgl=="R"){   
			 echo "REGAL STORE";
		   }elseif ($xgl=="D"){   
			 echo "DELIBEARS";			   
		   } ?>
			    </td>
        </tr>
    </table></td>
    <td width="5" bgcolor="#FFFFCC">&nbsp;</td>
    <td width="390" colspan="2" bgcolor="#FFFFCC"height="76" align="center"><table width="600" border="1">
      <tr>
        <td width="64"><a href="../index.php">INDEX</a></td>
        <td width="188"> <a href="ilbupsil.php">publico</a></td>
        <td width="283"><a href="mesas.php"><img src="iconos/ico_retornoamesas.png" width="64" height="64" style="border:0;" onMouseOver="this.style.border='solid 3px #c2bdb8';" onMouseOut="this.style.border=0;" /></a></td>
        <td width="37">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr class="tit_menu_sup">
    <td height="262" colspan="2" rowspan="4" valign="top" bgcolor="#FFFFCC">
    <!-- INICIO DE MUESTRA ITEMS -->
    <table width="1027" height="80" border="1" cellspacing="0">
      <tr bgcolor="#CCFFFF" class="diez">
        <td width="55" align="center">COD. Item</td>
        <td width="55">REGISTRO</td>
        <td width="79">Grupo</td>
        <td width="102" align="center">APELLIDOS</td>
        <td width="141" align="center">NOMBRES</td>
        <td width="50" align="center">CELULAR</td>
        <td width="114" align="center">PRODUCTO</td>
        <td width="51">F. INICIO</td>
        <td width="48">F. FINAL</td>
        <td width="115">OBSERVACIONES</td>
        <td width="37">VIEW01</td>
        <td width="37">MOD</td>
        <td width="89" align="center">DEL Reg.</td>
      </tr>
      <?php 


  
//$result=mysql_query("select * from items order by codfabrica_it",$connec);

 
        $result=mysqli_query($connec,"select * from a_bonofertas order by fechahoy_bo DESC");

//if(strlen($bxapellido)==0){
	//if ($xgl=="SMRD") {
       // $result=mysqli_query($connec,"select * from a_bonofertas order by fechahoy_bo");
       // $result=mysqli_query($connec,"select * from a_bonofertas");

	//}else{
  //      $result=mysqli_query($connec,"select * from a_bonofertas where grupolista_it like '%$xgl%' order by producto_it");
//	}
//} else {
//$bxproducto1=trim($bxproducto);
//$result=mysqli_query($connec,"select * from a_bonofertas where apellido_bo like '%$bxapellido%' order by fechahoy_bo");
//}



//$result=mysql_query("select * from a_items",$connec);
$total=mysqli_num_rows($result);


while ($tabla=mysqli_fetch_array($result)){

	$id=$tabla["id"];
	$codigo_bo=$tabla["codigo_bo"];
	$registro_bo=$tabla["registro_bo"];
	$nombre_bo=$tabla["nombre_bo"];
	$apellido_bo=$tabla["apellido_bo"];
	$celular_bo=$tabla["celular_bo"];
	$grupobo_bo=$tabla["grupobo_bo"];
	$producto_bo=$tabla["producto_bo"];
	$qdescuento_bo=$tabla["qdescuento_bo"];
	$qcantidad_bo=$tabla["qcantidad_bo"];
	$img_bo=$tabla["img_bo"];
	$fechahoy_bo=$tabla["fechahoy_bo"];
	$fechafin_bo=$tabla["fechafin_bo"];
	$obspublico_bo=$tabla["obspublico_bo"];
	$obsadmin_bo=$tabla["obsadmin_bo"];
	
	
        
		//$lugar_al_it=$tabla["lugar_al_it"];	

		//$monelista_it=$tabla["monelista_it"];
        //if ($monelista_it=="S") {
         //   $simbolo_mone="S/  ";
		//} else {
        //    $simbolo_mone="US$ ";
		//}

?>
      
      <tr bgcolor="#FFFFFF" class="tabla10">
        <td bgcolor="#FFFFFF"><?php echo($codigo_bo) ?></td>

        <td bgcolor="#FFFFFF"><?php echo($registro_bo) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($grupobo_bo) ?></td>
        <td bgcolor="#FFFFFF"><?php echo($apellido_bo) ?></td>
        <td align="right" bgcolor="#FFFFFF"><?php echo($nombre_bo) ?></td>
        <td align="right" bgcolor="#FFFFFF"><?php echo($celular_bo) ?></td>
        <td align="right" ><?php echo($producto_bo) ?></td>
        <td align="right" ><?php echo($fechahoy_bo) ?></td>
        <td align="right" ><?php echo($fechafin_bo) ?></td>
        <td align="right" ><?php echo($obspublico_bo) ?></td>
        <td><?php echo($view01_it) ?></td>
        <td><a href="n_admin_3view.php?idx=<?php  echo($id); ?>&xview=<?php  echo("ADMIN"); ?>&xareg=NNOOO&xmodi=NOOOOO&xdelreg=NOOOOO"><img src="iconos/ico_editar.png" width="30" height="30"></a></td>
        <td bgcolor="#FFCC66" align="center"><a href="a_list_bonofertas.php?delcod=<?php echo($codigo_bo);?>&xdelreg=<?php echo("SIDELREG");?>&xareg=NNOOO&xmodi=NOOOOO&viewmodi=NOOOO&idx=NOOOO">X</a></td>
      </tr>
      <?php 
	}
  
?>
    </table> 
        <!-- FFFIIINNN  MUESTRA ITEMS -->
      
       </td>
         
    <td colspan="2" valign="top" bgcolor="#FFFFCC">
    <?php
	if($viewmodi<>"SIVM"){
	?>
    <form id="form1" name="form1" method="get" action="a_list_bonofertas.php">
    <table width="290" border="1" class="tablaingrenuevo">
    <tr>
      <td colspan="2" bgcolor="#FFCC66"><div align="center"><strong>INGRESO BONO-OFERTA</strong></div></td>
    </tr>
    <tr>
      <td bgcolor="#FDF19B"><span class="TITULO">Cod. Item</span></td>
      <td bgcolor="#FDF19B">&nbsp;</td> <!-- xcod -->
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FF9933" class="TITULO">DATOS SOLICITANTE:</td>
    </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Apellidos</td>
      <td><span class="TITULO">
        <input name="xapellido" type="text" id="xapellido" size="25" maxlength="30" onKeyUp="this.value=this.value.toUpperCase();" />
        </span></td>
    </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Nombres</td>
      <td><span class="TITULO">
        <input name="xnombre" type="text" id="xnombre" size="25" maxlength="30"  />
        </span></td>
    </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Nro. Celular</td>
      <td><span class="TITULO">
        <input name="xcelular" type="text" id="xcelular" size="25" maxlength="30"  />
        </span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FF9933" class="TITULO">PRODUCTO</td>
      </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Producto</td>
      <td><span class="TITULO">
        <input name="xproducto" type="text" id="xproducto" size="25" maxlength="30"  />
        </span></td>
    </tr>
    <tr>
      <td bgcolor="#FDF19B" class="TITULO">Observaciones para el publico.</td>
      <td><span class="TITULO">
        <textarea name="xobspublico" id="xobspublico" cols="27" rows="5"></textarea>
        </span></td>
    </tr>
    <tr>
      <td width="98"><span class="TITULO">
        <input type="hidden" name="xareg" value="<?php echo("SIAREG"); ?>" />
        <input type="hidden" name="xmodi" value=NOOO/>
        <input type="hidden" name="xcosto" value=NOOO/>
        <input type="hidden" name="xdelreg" value=NOOO/>
        <input type="hidden" name="viewmodi" value=NOOO/>
        <input name="Submit" type="submit" class="Estilo38" value="-&gt; Guardar &lt;-" />
        </span></td>
      <td width="180"><span class="TITULO">
        <input name="Submit2" type="reset" class="Estilo38" value="Borrar" />
        </span></td>
    </tr>
  </table>
</form>
</td>
    </tr>
  <tr class="tit_menu_sup">
    <td colspan="2" valign="top" bgcolor="#FFFFCC">
          <?php 
// ************************  VER FORMULARIO DE MODIFICAR 
} elseif($viewmodi=="SIVM"){
   $idx=$_GET['idx']; 

$result=mysqli_query($connec,"select * from a_bonofertas where id=$idx");	

$tabla = mysqli_fetch_array( $result );
		$idmodi=$tabla["id"];
		$codigo_it=$tabla["codigo_it"];
		$codfabrica_it=$tabla["codfabrica_it"];
		$producto_it=$tabla["producto_it"];
		$marka_it=$tabla["marka_it"];
		$precom_it=$tabla["precom_it"];
		$preven_it=$tabla["preven_it"];
		$img_it=$tabla["img_it"];


?>
    
        <form id="form1" name="form1" method="get" action="a_list_bonofertas.php">
          <table width="290" border="1" class="tablaingrenuevo">
            <tr>
              <td colspan="2" bgcolor="#FF0000"><div align="center"><strong>MODIFICA  ITEM</strong></div></td>
            </tr>
            <tr>
              <td bgcolor="#FDF19B"><span class="TITULO">Cod. Item</span></td>
              <td bgcolor="#FDF19B"><?php echo($codigo_it); ?></td>
              <!-- xcod -->
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Grupo: Ej. 100, 200, 300, 400, 500</span></td>
            </tr>
            <tr>
              <td colspan="2"><span class="TITULO">
                <input name="xcodfab" type="text" id="xcodfab" size="30" maxlength="30" value="<?php echo($codfabrica_it); ?>" onKeyUp="this.value=this.value.toUpperCase();"  />
              </span></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FDF19B" class="TITULO">Producto</td>
            </tr>
            <tr>
              <td colspan="2"><span class="TITULO">
                <input name="xproducto" type="text" id="xproducto" size="35" maxlength="60" value="<?php echo($producto_it); ?>" onKeyUp="this.value=this.value.toUpperCase();"  />

              </span></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FDF19B"><span class="TITULO">Insumos = PRIMA</span></td>
            </tr>
            <tr>
              <td colspan="2"><span class="TITULO">
                <input name="xmarka" type="text" id="xmarka" size="30" maxlength="30" value="<?php echo($marka_it); ?>" onKeyUp="this.value=this.value.toUpperCase();"  />
              </span></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FDF19B" class="TITULO">Imagen (JPG 120 X 73)</td>
            </tr>
            <tr>
              <td colspan="2" class="TITULO"><input name="ximg" type="text" id="ximg" size="45" maxlength="60" value="<?php echo($img_it); ?>"/></td>
            </tr>
            <tr>
              <td bgcolor="#FDF19B" class="TITULO">P.Venta:</td>
              <td><span class="TITULO">
                <input name="xventa" type="text" id="xventa" size="15" maxlength="15" value="<?php echo($preven_it); ?>" />
              </span></td>
            </tr>
            <tr>
              <td width="98"><span class="TITULO">
                <input type="hidden" name="xmodi" value="<?php echo("SIMODI"); ?>" />
                <input type="hidden" name="xidmodi" value="<?php echo($idmodi); ?>" />
                <input type="hidden" name="xcosto" value="<?php echo($precom_it); ?>" />
                <input type="hidden" name="xdelreg" value=NOOO/>
                <input type="hidden" name="xareg" value=NOOO/>
                <input type="hidden" name="viewmodi" value=NOOO/>
                <input name="Submit3" type="submit" class="Estilo38" value="-&gt; Guardar &lt;-" />
              </span></td>
              <td width="180"><span class="TITULO">
                <input name="Submit3" type="reset" class="Estilo38" value="Borrar" />
              </span></td>
            </tr>
          </table>
        </form>
      </td>
  </tr>
  <tr class="tit_menu_sup">
    <td colspan="2" valign="top" bgcolor="#FFFFCC"><a href="img_items/n_subir_xfile.php?id_img=<?php echo ($idmodi); ?>">ir</a></td>
  </tr>
  <tr class="tit_menu_sup">
    <td colspan="2" valign="top" bgcolor="#FFFFCC">ññ</td>
  </tr>
  
  <?php  } // ************************  FFFIIIINNNN FORMULARIO DE MODIFICAR  ?>
  
</table>

<p>&nbsp;</p>
</body>
</html>
