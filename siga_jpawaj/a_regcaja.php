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
$xcodper=$_POST['xcodper'];
echo " el codper recibido 11111 es: ".$xcodper."<br>";
// ***************** CODIGO VAAAAA.. Y CONVIERTE EN $xoxgxixdxoxcx
$cod2x=substr($xcodper,-2);
$cod4x=substr($xcodper,0,4);
$xoxgxixdxoxcx=$cod2x.$cod4x;
// ***************** FFFIIINNNNN....
echo " el codper que se vaaaa 22222 es: ".$xoxgxixdxoxcx."<br>";

$xcant=$_POST['xcant'];
if (strlen($xcant ==0)){  // if de: cantidad = 0
echo (" NO GUARDA.. Cantidad 0 "); 
}else{


include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$result0=mysqli_query($connec,"select * from a_sistema  where id=1");
$tabla0 = mysqli_fetch_array($result0);
$recing_sis=$tabla0["recing_sis"];
$recsal_sis=$tabla0["recsal_sis"];
$cambiofechacaja_sis=$tabla0["cambiofechacaja_sis"];
$fechacaja_sis=$tabla0["fechacaja_sis"];

$xcodigo=substr($_POST['xcodigo'],0,6);
$xbingreso=$_POST['xbingreso']; //banco
$xdoc=$_POST['xdoc'];
$xtitrec=$_POST['xtitrec'];
$xmone=$_POST['xmone'];
$xdesc=$_POST['xdesc'];
$xdescofi=$_POST['xdescofi'];
$xdesc=$xdescofi." ".$xdesc;
$xcant=$_POST['xcant'];
$xestado=$_POST['xestado'];
$xsaldoxcobrar=$_POST['xsaldoxcobrar'];
$saldo=$xsaldoxcobrar-$xcant;
$xid_saldo_estado=$_POST['xid_saldo_estado'];
$xtcta_caja=$_POST['xtcta_caja'];
// seguro que viene de a_caja2.php y registrará el vavlor de venta, ugv, y fecha.
$xvventa=$_POST['xvventa'];
$xigv=$_POST['xigv'];
//$xrsocial=$_POST['xrsocial'];
$xfecha_per=$_POST['xfecha_per'];
$xprers=$_POST['xprers'];


if ($xtcta_caja=='XS0001' OR $xtcta_caja=='XS0003' OR $xtcta_caja=='BT0001') { //a:personal, a:bancos, a:bco-caja 
//echo ("estoy en el if xtcta "); 
$xrsocial=substr($_POST['xcodigo'],6); // solo si la rsocial viene de un formulario
}else{
$xrsocial=$xprers." ".$_POST['xrsocial']; // solo si la rsocial no viene de un formulario
}

$xnxixvx=$_POST['xnxixvx'];
if ($xtcta_caja=="BT0001") { //a:bco-caja 
$xtitrec="I";	
}
// if ($cambiofechacaja_sis=="N") { // el sistema=S  ordena fecha normal
    if ($xtitrec=="S") { // supongo que viene de a_caja2  y ya viene con fecha
		$xfecf_d=substr($xfecha_per,0,2);
		$xfecf_m=substr($xfecha_per,3,2);
		$xfecf_y=substr($xfecha_per,-4);
		$fechahoy=date('Y/m/d',strtotime($xfecf_y."/".$xfecf_m."/".$xfecf_d));

	}else{  // ojo inserte las lineas azules. espero que funcione para jhonatan
    	//$fechahoy=date("Y/m/d");
		$xfecf_d=substr($xfecha_per,0,2);
		$xfecf_m=substr($xfecha_per,3,2);
		$xfecf_y=substr($xfecha_per,-4);
		$fechahoy=date('Y/m/d',strtotime($xfecf_y."/".$xfecf_m."/".$xfecf_d));


	}
//}else{ // el sistema ordena la fecha a usar =N
//    $fechahoy=$fechacaja_sis;	
//}

// vvvvvvvvvvvvvvvv REGISTRA TODO EN CAJA vvvvvvv SALVO QUE SEA: BT0002=BANCO A BANCO vvvvvvvvvvvvvvvvvvvvvv
if ($xtcta_caja !=='BT0002'){ 
	if ($xtitrec=="I"){
		$nrorec=$xtitrec.substr((string)$recing_sis+1000001,1);
	}else{
		$nrorec=$xtitrec.substr((string)$recsal_sis+1000001,1);
	}
	$sql3="INSERT INTO a_caja (nrorec_caja,tipo_caja,tcta_caja,fecha_caja,codcli_caja,rsocial_caja,nrodocu_caja,desc_caja,mone_caja,cant_caja) VALUES ('$nrorec','$xtitrec','$xtcta_caja','$fechahoy','$xcodigo','$xrsocial','$xdoc','$xdesc','$xmone','$xcant')";
	$result=mysqli_query($connec,$sql3);
	$idcaja_insert=mysqli_insert_id();
	if($result){
	   echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");
	}else{
	   echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  CAJA.</span>");
	}
	// ------ cambia el numero Recibo-Caja en el sistema
	if ($xtitrec=="I"){
		$sqlsis="UPDATE a_sistema SET recing_sis=recing_sis+1 WHERE id=1";
		$resultsis=mysqli_query($connec,$sqlsis);
	}else{
		$sqlsis="UPDATE a_sistema SET recsal_sis=recsal_sis+1 WHERE id=1";
		$resultsis=mysqli_query($connec,$sqlsis);
	}
} // endif de B10002  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
?>

<?php // DESPUES DE REGISTRAR CAJA... AHORA--> SEGUN LA OPCION -X?????? vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvV
if ($xtcta_caja=='XI0000' OR $xtcta_caja=='XI00SD') { // XIOOOO=I -- PERO EN CTECLIENTES=S --- UPDATE  --- IMPRIME RECIBO  -----
	$xtitrec='I';

	// ------- adiciona el mov en cteclientes
	if ($xtcta_caja=='XI00SD') {
			//$xdoc=$nrorec;
		$xdesc=$xdesc." XI00SD";
	}
	$sqlctecli="INSERT INTO a_cteclientes
(codcli_ctecli,nrodocu_ctecli,fecha_ctecli,desc_ctecli,tmov_ctecli,mone_ctecli,nrec_ctecli,vventa_ctecli,igv_ctecli,total_ctecli, esta_ctecli,fpago_ctecli,obs_ctecli,codven_ctecli,saldo_ctecli) VALUES ('$xcodigo','$xdoc','$fechahoy','$xdesc','S','$xmone','$nrorec','$xvventa','$xigv','$xcant',' ',' ','  ',' ',' ')";
	$resultctecli=mysqli_query($connec,$sqlctecli);
	// ------- nuevamente en  cteclientes si cumple la condicion = cancelado
    if ($xtcta_caja=='XI0000') { // update solo or recibo normal=XI0000 mas no: SINDOC
		if ($xsaldoxcobrar <= $xcant){
			$sqlcli="UPDATE a_cteclientes SET esta_ctecli='C',saldo_ctecli='$saldo' WHERE id=$xid_saldo_estado";
			$resultcli=mysqli_query($connec,$sqlcli);
		}else{  
			$sqlcli2="UPDATE a_cteclientes SET saldo_ctecli='$saldo' WHERE id=$xid_saldo_estado"; 
			$resultcli2=mysqli_query($connec,$sqlcli2);
		}
	}
?>	
	<table width="363" border="0">
  	<tr bgcolor="#F8DA94">
	 
      	<th scope="col"><div align="center">
        <?php if ($xtcta_caja=='XI0000') { ?>
    <a href="a_view_1_venta.php?xcodigo=<?php echo($xcodigo);?>&xdoc=<?php echo($xdoc);?>&xnxixvx=<?php echo($xnxixvx);?>"
        <?php }else{ ?>
    <a href="a_lista_clientes_ventas.php?xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>&zxyw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>"
    
       <?php } ?>
        >RETORNAR</a></div>
    	</th>

    	<th width="165" scope="col"><a href="a_pdfcajarecibo.php?xid=<?php echo($idcaja_insert);?>"target="_blank">IMPRIMIR</a>
        </th>
 	 </tr>
	 </table>
<?php 
}else if ($xtcta_caja=='XS0000' OR $xtcta_caja=='XS00SD') { // XSOOOO=I -- PERO EN CTEPROVEEDORES=S -- UPDATE  -- IMPRIME RECIBO--

	$xtitrec='S';
	// ------- adiciona el mov en ctePROVEEDORES

	if ($xtcta_caja=='XS00SD') {
		//$xdoc=$nrorec;
		$xdesc=$xdesc." XS00SD";
	}
	$sqlctecli="INSERT INTO a_cteproveedores
(codcli_cteprov,rsocial_cteprov,nrodocu_cteprov,fecha_cteprov,desc_cteprov,tmov_cteprov,mone_cteprov,nrec_cteprov,vventa_cteprov,igv_cteprov,total_cteprov,esta_cteprov,
fpago_cteprov,obs_cteprov,codven_cteprov,saldo_cteprov) VALUES ('$xcodigo','$xrsocial','$xdoc','$fechahoy','$xdesc','S','$xmone','$nrorec','$xvventa','$xigv','$xcant',' ',' ','  ',' ',' ')";

	$resultctecli=mysqli_query($connec,$sqlctecli);
	
	if($resultctecli){
echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS PROVEEDORESSSSSS-- Ok.</span>");
}else{
echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE PROVEEDORESSSSSS.</span>");
}
	// ------- nuevamente en  cteclientes si cumple la condicion = cancelado
    if ($xtcta_caja=='XS0000') { // update solo or recibo normal=XI0000 mas no: SINDOC
		if ($xsaldoxcobrar <= $xcant){
			//echo ("id saldoooooooooo iiiiiffffff: ".$xid_saldo_estado."<br>");
			$sqlcli="UPDATE a_cteproveedores SET esta_cteprov='C', saldo_cteprov='$saldo' WHERE id=$xid_saldo_estado";

			$resultcli=mysqli_query($connec,$sqlcli);
		}else{
			//echo ("id saldo eeellllsssseeee: ".$xid_saldo_estado."<br>");

			$sqlcli2="UPDATE a_cteproveedores SET saldo_cteprov='$saldo_cteprov' WHERE id=$xid_saldo_estado"; 
			$resultcli2=mysqli_query($connec,$sqlcli2);
		}
	}
?>	
	<table width="363" border="0">
  	<tr bgcolor="#F8DA94">
  	<th scope="col"><div align="center">
        <?php if ($xtcta_caja=='XI0000') { ?>
    <a href="a_view_1_venta.php?xcodigo=<?php echo($xcodigo);?>&xdoc=<?php echo($xdoc);?>&xnxixvx=<?php echo($xnxixvx);?>"
        <?php }else{ ?>
    <a href="a_caja1.php?zxyw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>"
       <?php } ?>
	>RETORNAR</a></div>
    </th>
    <th width="165" scope="col"><a href="a_pdfcajarecibo.php?xid=<?php echo($idcaja_insert);?>"target="_blank">IMPRIMIR</a></th>
  	</tr>
	</table>
<?php
}else if ($xtcta_caja=='XS0001') { // SALIDA A PERSONAL 
// ------- adiciona el mov en cteclientes

$sqlper="INSERT INTO a_ctepersonal
(codper_cteper,nrodocu_cteper,fecha_cteper,desc_cteper,tmov_cteper,mone_cteper,nrec_cteper,total_cteper,esta_cteper,
obs_cteper,saldo_cteper) VALUES ('$xcodigo','$nrorec','$fechahoy','$xdesc','$xtitrec','$xmone','$nrorec','$xcant','  ',' ',0)";
$resultper=mysqli_query($connec,$sqlper);
if($resultper){
echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS CTEPER-- Ok.</span>");
}else{
echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE CTEPER.</span>");
}?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
  <th scope="col"><div align="center"><a href="a_caja1.php?zxyw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>">RETORNAR</a></div>
    </th>
      <th width="165" scope="col"><a href="a_pdfcajarecibo.php?xid=<?php echo($idcaja_insert);?>"target="_blank">IMPRIMIR</th>
  </tr>
</table>
<!---  -->
<?php }else if ($xtcta_caja=='XS0003') { // SALIDA A BANCOS??????????????????????????????????? 
$sqlper="INSERT INTO a_ctebancos
(codban_cteban,nrodocu_cteban,fecha_cteban,desc_cteban,tmov_cteban,nrec_cteban,total_cteban) VALUES ('$xcodigo','$xdoc','$fechahoy','$xdesc','I','$nrorec','$xcant')";
$resultper=mysqli_query($connec,$sqlper);
if($resultper){
echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS CTEPER-- Ok.</span>");
}else{
echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE CTEPER.</span>");
}?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
  <th scope="col"><div align="center"><a href="a_caja1.php?zxyw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>">RETORNAR</a></div>
    </th>
      <th width="165" scope="col"><a href="a_pdfcajarecibo.php?xid=<?php echo($idcaja_insert);?>"target="_blank">IMPRIMIR</th>
  </tr>
</table>
<!---  -->
<?php }else if ($xtcta_caja=='BT0001') { // BANCOS A CAJA 
// ****** ya arriba se ingreso en caja ahora SALIDA DE BANCOS
$sqlper="INSERT INTO a_ctebancos
(codban_cteban,nrodocu_cteban,fecha_cteban,desc_cteban,tmov_cteban,nrec_cteban,total_cteban) VALUES ('$xcodigo','$xdoc','$fechahoy','$xdesc','S','$nrorec','$xcant')";
$resultper=mysqli_query($connec,$sqlper);
if($resultper){
echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS CTEPER-- Ok.</span>");
}else{
echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE CTEPER.</span>");

}?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
  <th scope="col"><div align="center"><a href="a_caja1.php?zxyw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>">RETORNAR</a></div>
    </th>
      <th width="165" scope="col"><a href="a_pdfcajarecibo.php?xid=<?php echo($idcaja_insert);?>"target="_blank">IMPRIMIR</th>
  </tr>
</table>
<!---  -->
<!---  -->
<?php }else if ($xtcta_caja=='BT0002') { // BANCOS A BANCOS 
// ****** ya arriba se ingreso en caja ahora SALIDA DE BANCOS
$sqlper="INSERT INTO a_ctebancos
(codban_cteban,nrodocu_cteban,fecha_cteban,desc_cteban,tmov_cteban,total_cteban) VALUES ('$xcodigo','$xdoc','$fechahoy','$xdesc','S','$xcant')";
$resultper=mysqli_query($connec,$sqlper);
if($resultper){
echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS CTEPER-- Ok.</span>");
}else{
echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE CTEPER.</span>");
}

$sqlper="INSERT INTO a_ctebancos
(codban_cteban,nrodocu_cteban,fecha_cteban,desc_cteban,tmov_cteban,total_cteban) VALUES ('$xbingreso','$xdoc','$fechahoy','$xdesc','I','$xcant')";
$resultper=mysqli_query($connec,$sqlper);
if($resultper){
echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS CTEPER-- Ok.</span>");
}else{
echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE CTEPER.</span>");

}?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
  <th scope="col"><div align="center"><a href="a_caja1.php?zxyw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>">RETORNAR</a></div>
    </th>
  </tr>
</table>
<!---  -->

<?php }else{
?>	
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
  <th width="188" scope="col"><div align="center"><a href="a_caja1.php?zxyw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx);?>">RETORNAR</a></div>
    </th>
      <th width="165" scope="col"><a href="a_pdfcajarecibo.php?xid=<?php echo($idcaja_insert);?>"target="_blank">IMPRIMIR</th>
  </tr>
</table>

<?php }
}   // endif de cantidad = 0
?>



