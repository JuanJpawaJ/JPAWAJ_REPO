<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro PROVISIONAL</title>
</head>

<body>
<?php 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

// genera el codigo de 6 digitos en base al max id anterior
//$rs = mysql_query("SELECT MAX(id) AS id FROM a_clientes");
//if ($row = mysql_fetch_row($rs)) {
//$idid = trim($row[0]);
// }
//$codigo_cli=substr((string)$idid+1000001,1);

$cant1=$_GET['cant1'];
$prec1=$_GET['prec1'];
$xcodigo_cli=$_GET['xcodigo_cli'];
$xrsocial_cli=$_GET['xrsocial_cli'];
$xdoc=$_GET['xdoc'];

$xfecha_pe=$_GET['xfecha_pe'];
$dia = substr($xfecha_pe,0,2); 
$mes = substr($xfecha_pe,3,2); 
$ano = substr($xfecha_pe,-4); 
$xfecha_eu = $ano . '-' . $mes . '-' . $dia; 
echo ("la fecchaaaaaa 01 esssss: ".$xfecha_pe." --  ".$xfecha_eu);
$xfecha_eu=date('y-m-d');
echo ("la fecchaaaaaa 02 esssss: ".$xfecha_pe." --  ".$xfecha_eu);
$xcodigo_it1=$_GET['xcodigo_it1'];
$xproducto_it1=$_GET['xproducto_it1'];
$xtmov=$_GET['xtmov'];
//falta regularizar precio de costo
$xcodper=$_GET['xcodper'];
$xnxixvx=$_GET['xnxixvx'];
$xnroalmacen=$_GET['xnroalmacen'];





if(strlen($cant1)==0 OR strlen($prec1)==0 OR strlen($xcodigo_cli)==0) {

echo "* NO TIENEN DATOS - VERIFIQUE *";
}else {
//VERIFICA SI TIENE REGISTROS CON EL MISMO CODIGO DE CLIENTE Y EL MISMO NRO. DE DOCUMENTO
//$result=mysql_query("select * from a_pedidopend  where codcli_ppend=$xcodigo_cli AND nrodocu_ppend=$xdoc ",$connec);
//$total=mysql_num_rows($result);
//if ($total>0) {
	//echo "Ya existe el Pedido con: ".($total). " registros";
 //?>
 <!--
 <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="a_view_1_venta.php?xcodigo_cli=<?php //echo($xcodigo_cli);?>&xdoc=<?php //echo($xdoc);?>&xnxixvx=<?php //echo($xnxixvx);?>">Existen Pedidos con los mismos datos.. VERIFICAR...</a></div></th>
  </tr>
</table>
--->
<?php 
//}
$sql="INSERT INTO a_provisional (codcli_provi,razsoc_provi,nrodocu_provi,fecmov_provi,coditem_provi,desc_provi,cant_provi,tmov_provi,pvent_provi,pcosto_provi,codven_provi) VALUES ('$xcodigo_cli','$xrsocial_cli','$xdoc','$xfecha_eu','$xcodigo_it1','$xproducto_it1','$cant1','$xtmov','$prec1','$prec1','$xcodper')";

$result=mysqli_query($connec,$sql);
if($result) {
echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
}else{
echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");
}}
mysqli_close($connec);
?>

<table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center">
    <?php if ($xtmov=='I') {   ?>
     <a href="a_compras2.php?
     xcodigo_prov=<?php echo($xcodigo_cli);?>&
xrsocial_prov=<?php echo($xrsocial_cli);?>&
xtprec_cli=<?php echo($xtprec_cli);?>&
xestado_cli=<?php echo($xestado_cli);?>&
xdoc=<?php echo($xdoc);?>&
xfecha_pe=<?php echo($xfecha_pe);?>&
xcodper=<?php echo($xcodper);?>&
xnxixvx=<?php echo($xnxixvx);?>&
xnroalmacen=<?php echo($xnroalmacen);?>&
auxiliar=0">RETORNAR - Compras</a></div>
	<?php	}else{       //No se por que hay esta opcion pero.. en todo caso si no va I entonces solo es proforma...???      ?>
     <a href="a_ventas2_rapida.php?
     xcodigo_cli=<?php echo($xcodigo_cli);?>&
xrsocial_cli=<?php echo($xrsocial_cli);?>&
xtprec_cli=<?php echo($xtprec_cli);?>&
xestado_cli=<?php echo($xestado_cli);?>&
xdoc=<?php echo($xdoc);?>&
xfecha_pe=<?php echo($xfecha_pe); // al parecer no es necesario enviar este dato?>&
xcodper=<?php echo($xcodper);?>&
xnxixvx=<?php echo($xnxixvx);?>&
auxiliar=0">RETORNAR - Ventas rápida</a></div>
    <?php      }               ?>

</th>



  </tr>
</table>





</body>
</html>