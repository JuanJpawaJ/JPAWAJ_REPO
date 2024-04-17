<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");



// genera el codigo de 6 digitos en base al max id anterior
$rs = mysqli_query($connec, "SELECT MAX(id) AS id FROM a_proveedores");
//$result=mysqli_query($connec,"select * from a_proveedores order by rsocial_prov");


if ($row = mysqli_fetch_row($rs)) {
$idid = trim($row[0]);
 }
$codigo_prov=substr((string)$idid+1000001,1);



		$rsocial_prov=$_POST['rsocial'];
		$doc_prov=$_POST['doc'];
		$dir_prov=$_POST['dir'];
		$ciu_prov=$_POST['ciu'];
		$ncom_prov=$_POST['ncom'];		
		$telf_prov=$_POST['telf'];	
		$ctk_prov=$_POST['ctk'];
		$email1_prov=$_POST['email1'];			
		$email2_prov=$_POST['email2'];
		$credito_prov=$_POST['credito'];
		$estado_prov=$_POST['estado'];
		$observa_prov=$_POST['observa'];
		$xnxixvx=$_POST['xnxixvx'];
		$xoxgxixdxoxcx=$_POST['xoxgxixdxoxcx'];

if(strlen($rsocial_prov)==0 OR strlen($dir_prov)==0)
{echo "R. SOCIAL  :".$rsocial_prov."<br>";
echo "DOCUMENTO :".$doc_prov."<br>";
echo "DIRECCION  :".$dir_prov."<br>";

echo "* NO TIENEN DATOS - VERIFIQUE *";}
else {


$sql="INSERT INTO a_proveedores (codigo_prov,rsocial_prov,doc_prov,dir_prov,ciu_prov,ncom_prov,telf_prov,ctk_prov,
          email1_prov,email2_prov,credito_prov,estado_prov,observa_prov) VALUES ('$codigo_prov','$rsocial_prov','$doc_prov','$dir_prov','$ciu_prov','$ncom_prov','$telf_prov','$ctk_prov',
		'$email1_prov','$email2_prov','$credito_prov','$estado_prov','$observa_prov')";
$result=mysqli_query($connec,$sql);

if($result)
{echo "R. SOCIAL  :".$rsocial_prov."<br>";
echo "DOCUMENTOO :".$doc_prov."<br>";
echo "DIRECCION  :".$dir_prov."<br>";

echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");


}else{
echo "R. SOCIAL  :".$rsocial_prov."<br>";
echo "DOCUMENTOO :".$doc_prov."<br>";
echo "DIRECCION  :".$dir_prov."<br>";

 echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");

}}
mysqli_close($connec);
?>

<table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="a_ing_proveedores.php">RETORNAR</a></div></th>
  </tr>
</table>





</body>
</html>