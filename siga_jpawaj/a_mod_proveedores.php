<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$id = $_POST['id'];
//$xnxixvx=$_POST['xnxixvx'];
$xnxixvx=10;
echo ("nivel  ".$xnxixvx);
$xoxgxixdxoxcx=$_GET['xoxgxixdxoxcx']; //invertido


if($xnxixvx <5 ){
	?>
  <table width="363" border="0">
  <tr bgcolor="#F8DA94">
    <th scope="col"><div align="center"><a href="www.sca.html">NO TIENE NIVEL PARA ESTA OPCION </a></div>
    </th>
  </tr>
</table>
<?php
}else{


		$rsocial_prov=$_POST['rsocial'];
		$doc_prov=$_POST['doc'];
		$dir_prov=$_POST['dir'];
		$ciu_prov=$_POST['ciu'];
		$tprec_prov=$_POST['tprec'];
		$ncom_prov=$_POST['ncom'];		
		$telf_prov=$_POST['telf'];	
		$ctk_prov=$_POST['ctk'];
		$email1_prov=$_POST['email1'];			
		$email2_prov=$_POST['email2'];
		$credito_prov=$_POST['credito'];
		$estado_prov=$_POST['estado'];
		$observa_prov=$_POST['observa'];

echo "RSOC ".$rsocial_prov."<br>";
echo "DOC ".$doc_prov."<br>";
echo "DIR ".$dir_prov."<br>";



if(strlen($rsocial_prov)==0 OR strlen($dir_prov)==0)
{echo "R. SOCIAL  :".$rsocial_prov."<br>";
echo "DOCUMENTO :".$doc_prov."<br>";
echo "DIRECCION  :".$dir_cli."<br>";

echo "* NO TIENEN DATOS - VERIFIQUE *";}
else {



$sql="UPDATE a_proveedores SET
rsocial_prov='$rsocial_prov',doc_prov='$doc_prov',dir_prov='$dir_prov',ciu_prov='$ciu_prov',ncom_prov='$ncom_prov',telf_prov='$telf_prov', ctk_prov='$ctk_prov',email1_prov='$email1_prov',email2_prov='$email2_prov',credito_prov='$credito_prov',estado_prov='$estado_prov',observa_prov='$observa_prov' WHERE id=$id";
	

$result=mysqli_query($connec,$sql);
if($result){
	

 //   echo("Ok.  ACTUALIZADO  Ok.");
echo ("<span style='background-color: #006600'>Ok.  ACTUALIZADO  Ok.</span>");

}else{
echo ("<span style='background-color: #CC0000'>XX.  ERROR AL ACTUALIZAR  XX.</span>");

   
}}}
mysqli_close($connec);
?>
<table width="363" border="0">
  <tr bgcolor="#F8DA94">
 <!--   <th scope="col"><div align="center"><a href="<?php //echo ($retornar_ax);?>?id=<?php //echo($id);?>&xretornar_ax=<?php //echo ($retornar_ax);?>&xret_sg=<?php //echo($ret_sg);?>">RETORNAR</a></div>
-->
  <th scope="col"><div align="center"><a href="a_ing_proveedores.php?zyxw=SCADCASA2014_09&amp;xnxixvx=<?php echo($xnxixvx)?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx)?>">RETORNAR</a></div>
    </th>

  </tr>
</table>


