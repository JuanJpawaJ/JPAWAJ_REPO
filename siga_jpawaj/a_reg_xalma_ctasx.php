<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<p>
<?php 

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$xcodigo_cli=$_GET['xcodigo_cli'];
$xdoc_ser=$_GET['xdoc_ser'];
$xdoc=$_GET['xdoc'];
$xnxixvx=$_GET['xnxixvx'];
$xtipodemov=$_GET['xtipodemov'];
$xtdoc=$_GET['xtdoc'];
$docu_repe="N";

//echo "11111 xcodigo_cli: ".$xcodigo_cli.'<br />';
//echo "doc:  ".$xdoc_venta.'<br />';
//echo ("TIPOMOV:  ".$xtipodemov.'<br />');

$result0=mysqli_query($connec,"select * from a_sistema  where id=1");
$tabla0 = mysqli_fetch_array($result0);
$cambiofechacaja_sis=$tabla0["cambiofechacaja_sis"];
$fechacaja_sis=$tabla0["fechacaja_sis"];

if ($xtdoc=="GR") { // Guia de remision
	$xdoc_venta="G".substr((string)$xdoc+1000000,1);	
}elseif ($xtdoc=="NP") {
	$xdoc_venta="N".substr((string)$xdoc+1000000,1);			
}elseif ($xtdoc=="FA") {
	$xdoc_venta="F".$xdoc_ser.substr((string)$xdoc+1000000,1);
}
$result_repe=mysqli_query($connec,"select * from a_almacen where nrodocu_alma='$xdoc_venta'");
$total_repe=mysqli_num_rows($result_repe);
if ($total_repe>0) { ?>
	<table width="363" border="0">
  		<tr bgcolor="#F8DA94">
    	<?php echo($xdoc_venta) ?>
<a href="javascript:window.history.back();">..DOCUMENTO REPETIDO .. RETORNAR ..</a>

  		</tr>
	</table>	
<?php } else { 

if ($xtdoc=="GR") { // Guia de remision
	$xdoc_venta="G".substr((string)$xdoc+1000000,1);	
  	$sqlsis="UPDATE a_sistema SET nrogui1_sis=$xdoc WHERE id=1";
	$resultsis=mysqli_query($connec,$sqlsis); 
}elseif ($xtdoc=="NP") {
	$xdoc_venta="N".substr((string)$xdoc+1000000,1);			
	$sqlsis="UPDATE a_sistema SET nroped1_sis=$xdoc WHERE id=1";
	$resultsis=mysqli_query($connec,$sqlsis);
}elseif ($xtdoc=="FA") {
	$xdoc_venta="F".$xdoc_ser.substr((string)$xdoc+1000000,1);
	$sqlsis="UPDATE a_sistema SET nrofac1_sis=$xdoc WHERE id=1";
	$resultsis=mysqli_query($connec,$sqlsis);
}

if ($cambiofechacaja_sis=="S") { // el sistema=S  ordena fecha normal   EEELLLIIIMMMMIIINNNAARRRR  OOOJJJOOOOO
    $fechahoy=$fechacaja_sis;	
}


if(strlen($xcodigo_cli) !==0 and strlen($xdoc)!==0  ){
echo (" xcodigo: ".	$xcodigo_cli. "  nro docu: ".$xdoc. " tmov: ".$xtipodemov);
$result=mysqli_query($connec,"select * from a_provisional where codcli_provi='$xcodigo_cli'  AND tmov_provi='$xtipodemov' order by id");
}
$total=mysqli_num_rows($result);
echo "Esta consulta tiene : ".($total). " registros";

while ($tablaprovi=mysqli_fetch_array($result)) {

		$id=$tablaprovi["id"];
		$codcli_provi=$tablaprovi["codcli_provi"];
		if ($xtipodemov=="S") {  //es venta rápida ----> el nro se genera automáticamente. 
    		$nrodocu_provi=$xdoc_venta;
		}else{                   // es compra ---> ingresa el nro de documento compra
		    $nrodocu_provi=$tablaprovi["nrodocu_provi"];
		}
		$fecmov_provi=date('y-m-d');
		$coditem_provi=$tablaprovi["coditem_provi"];
		$desc_provi=$tablaprovi["desc_provi"];
		$descriventa="Venta- ".substr($desc_provi,20);
		$cant_provi=$tablaprovi["cant_provi"];
		$tmov_provi=$tablaprovi["tmov_provi"];
		$pvent_provi=$tablaprovi["pvent_provi"];
		$total_provi=$cant_provi*$pvent_provi;		
		$pcosto_provi=$tablaprovi["pcosto_provi"];	
		$codven_provi=$tablaprovi["codven_provi"];
        $sumtot_ped=$sumtot_ped+$total_provi; 
		$estado_ctecli=" ";
		
		
$sqlalma="INSERT INTO a_almacen (codcli_alma,nrodocu_alma,fecmov_alma,coditem_alma,desc_alma,cant_alma,tmov_alma,mone_alma,pvent_alma,pcosto_alma,codven_alma) VALUES ('$codcli_provi','$nrodocu_provi','$fecmov_provi','$coditem_provi','$desc_provi','$cant_provi','$tmov_provi','S','$pvent_provi','$pcosto_provi','$codven_provi')";
$resultalma=mysqli_query($connec,$sqlalma);
if(! $resultalma ){
 echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  ALMACEN.</span>");
}

} // FINALIZA EL FOR...

// Despues del FOR. Ahora genera la cta del CLiente que es solo una cuenta total.

if ($xtipodemov=='I'){ // EL INGRESO DE MERCADERÍA AFECTA A: APROVEEDORES COMO INGRESO=I
$sqlctecli="INSERT INTO a_cteproveedores
(codcli_cteprov,nrodocu_cteprov,fecha_cteprov,desc_cteprov,tmov_cteprov,total_cteprov,esta_cteprov,fpago_cteprov,obs_cteprov,codven_cteprov,saldo_cteprov) VALUES ('$codcli_provi','$nrodocu_provi','$fecmov_provi','$descriventa','I','$sumtot_ped','$estado_ctecli','$fecmov_provi','  ','$codven_provi','$sumtot_ped')";
$resultctecli=mysqli_query($connec,$sqlctecli);	

}else{ // LA SALIDA DE MERCADERÍA AFECTA A: CUENTA DE CLIENTES COMO INGRESO=I

$sqlctecli="INSERT INTO a_cteclientes 
(codcli_ctecli,nrodocu_ctecli,fecha_ctecli,desc_ctecli,tmov_ctecli,total_ctecli,esta_ctecli,fpago_ctecli,obs_ctecli,codven_ctecli,saldo_ctecli) VALUES ('$codcli_provi','$nrodocu_provi','$fecmov_provi','$descriventa','I','$sumtot_ped','$estado_ctecli','$fecmov_provi','  ','$codven_provi','$sumtot_ped')";
$resultctecli=mysqli_query($connec,$sqlctecli);	
}

if(! $resultctecli ){
 echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  CTECLI.</span>");
}





//echo "55555 xcodigo_cli: ".$xcodigo_cli.'<br />';
// Despues de Cta Cliente, el elimna todos los pedidos pendientes..
$querydelprovi = "delete from a_provisional where codcli_provi='$xcodigo_cli'  AND tmov_provi='$xtipodemov' ";  

$resultdel = mysqli_query($connec,$querydelprovi); 

mysqli_close($connec);
?>
 
 
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
<?php  if ($xtipodemov=='I'){
	//echo "66666 xcodigo_cli: ".$xcodigo_cli.'<br />';
	 ?>
    <th scope="col"><div align="center"><a href="a_view_1_compra.php?xcodigo=<?php echo($xcodigo_cli);?>&xdoc=<?php echo($xdoc);?>&xnxixvx=<?php echo($xnxixvx);?>">DATOS ALMACENADOS.. INGRESO ..CONTINUAR....</a></div></th>
<?php } else {
	//echo "77777 xcodigo_cli: ".$xcodigo_cli.'<br />';
	 ?>
    <th scope="col"><div align="center"><a href="a_view_1_venta.php?xcodigo=<?php echo($xcodigo_cli);?>&xdoc=<?php echo($nrodocu_provi);?>&xnxixvx=<?php echo($xnxixvx);?>">DATOS ALMACENADOS.. SALIDA ..CONTINUAR....</a></div></th>
<?php } ?>
  </tr>
</table>

<?php } ?>



</body>
</html>