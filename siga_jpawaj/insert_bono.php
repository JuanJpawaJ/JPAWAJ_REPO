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

$xareg="SIAREG";		
if ($xareg=="SIAREG") {

	$producto_bo=$_POST['xproducto'];
	$nombre_bo=$_POST['xnombre'];
	$celular_bo=$_POST['xcelular'];
	$grupobo_bo=$_POST['xgrupobo'];
	$qdescuento_bo=$_POST['xqdescuento'];
	$genbono=$_POST['xgenbono'];

   // genera el codigo de 6 digitos en base al max id anterior
   $rs = mysqli_query($connec,"SELECT MAX(id) AS id FROM a_bonofertas");
   if ($row = mysqli_fetch_row($rs)) {
	   $idid = trim($row[0]);
   }
   
   	$codigo_bo=substr($idid+1000001,1);   
 
   
	$fechahoy_bo=date("d/m/Y");
	$fechafin_bo=date("d/m/Y", strtotime($fecha_actual . ' + 30 days'));
    $registro_bo=substr(date("D"),0,1).substr($codigo_bo,0,3).substr(date("F"),0,1).substr($codigo_bo,3,3);

	$apellido_bo=$_POST['xapellido'];
	$qcantidad_bo=$_POST['xqcantidad'];
	$img_bo=$_POST['ximg'];
	$_POST=$_POST['xobspublico'];
	$obsadmin_bo=$_POST['xobsadmin'];
   
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
	   if ($genbono=="SI") {
		?>   
		   <div align="center"><a href="xpdfxbxoxexrxa.php?xregistro=<?php echo($registro_bo)?>">GENERA BONO PDF - Recuerde tomar nota de su código.</a></div>
		<?   
		
	   }
     }else{
	   echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
     }	
   //}
   $genbono="NO";
   
} // ********++  FFFIIINNN  NUEVO REGISTROS 

