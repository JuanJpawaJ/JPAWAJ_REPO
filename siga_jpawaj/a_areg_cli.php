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
$rs = mysqli_query($connec,"SELECT MAX(id) AS id FROM a_clientes");

if ($row = mysqli_fetch_row($rs)) {
$idid = trim($row[0]);
 }
$codigo_cli=substr((string)$idid+1000001,1);


		$rsocial_cli=$_POST['rsocial'];
		$doc_cli=$_POST['doc'];
		$dir_cli=$_POST['dir'];
		$distrito_cli=$_POST['distri'];
		$ciu_cli=$_POST['ciu'];
		$tprec_cli=$_POST['tprec'];
		$ncom_cli=$_POST['ncom'];		
		$giro_cli=$_POST['giro'];		
		$telf_cli=$_POST['telf'];	
		$ctk_cli=$_POST['ctk'];
		$email1_cli=$_POST['email1'];			
		$email2_cli=$_POST['email2'];
		$pagweb_cli=$_POST['pweb'];

		$credito_cli=$_POST['credito'];
		$vendedor_cli=$_POST['xcodper'];
		$observa_cli=$_POST['observa'];
		$xnxixvx=$_POST['xnxixvx'];		
		$xoxgxixdxoxcx=$_POST['xoxgxixdxoxcx'];		


if(strlen($rsocial_cli)==0 OR strlen($dir_cli)==0)
{echo "R. SOCIAL  :".$rsocial_cli."<br>";
echo "DOCUMENTO :".$doc_cli."<br>";
echo "DIRECCION  :".$dir_cli."<br>";

echo "* NO TIENEN DATOS - VERIFIQUE *";}
else {


$sql="INSERT INTO a_clientes (codigo_cli,rsocial_cli,doc_cli,dir_cli,distrito_cli,ciu_cli,tprec_cli,ncom_cli,giro_cli,telf_cli,ctk_cli,
          email1_cli,email2_cli,pagweb_cli,credito_cli,vendedor_cli,observa_cli) VALUES ('$codigo_cli','$rsocial_cli','$doc_cli','$dir_cli','$distrito_cli','$ciu_cli','$tprec_cli','$ncom_cli','$giro_cli','$telf_cli','$ctk_cli',
		'$email1_cli','$email2_cli','$pagweb_cli','$credito_cli','$vendedor_cli','$observa_cli')";


$result=mysqli_query($connec,$sql);

if($result)
{echo "R. SOCIAL  :".$rsocial_cli."<br>";
echo "DOCUMENTOO :".$doc_cli."<br>";
echo "DIRECCION  :".$dir_cli."<br>";

echo ("<span style='background-color: #006600'>Ok. ---DATOS REGISTRADOS-- Ok.</span>");


}else{
echo "R. SOCIAL  :".$rsocial_cli."<br>";
echo "DOCUMENTOO :".$doc_cli."<br>";
echo "DIRECCION  :".$dir_cli."<br>";

 echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  XX.</span>");

}}
mysqli_close($connec);


?>

<table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="a_lista_clientes_ventas.php?zyxw=SCADCASA2014_09&xnxixvx=<?php echo($xnxixvx)?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>">RETORNAR</a></div></th>
  </tr>
</table>





</body>
</html>