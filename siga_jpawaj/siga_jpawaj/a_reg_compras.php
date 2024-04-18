<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REG COMPRAS</title>
</head>
<body>
<p>
<?php 

include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");


$xdoc=$_GET['xdoc'];
$xmone=$_GET['xmone'];   // TIPO DE MONEDA D o S
$xmonelista=$_GET['xmonelista'];   // TIPO DE MONEDA D o S
$xfecha_pe=$_GET['xfepe'];
$xtc=$_GET['xtc'];

$xcodigo_cli=$_GET['xcodigo_cli'];
$xdoc_ser=$_GET['xdoc_ser']."-";
$xconcre=$_GET['xconcre'];   // TIPO DE MONEDA D o S


//echo "viene xdocccccc ser: ".$xdoc_ser."<br>";

$xnxixvx=$_GET['xnxixvx'];
$xtipodemov=$_GET['xtipodemov'];
$xtdoc=$_GET['xtdoc'];
$docu_repe="N";
$xcodper=$_GET['xcodper'];
$xnroalmacen=$_GET['xnroalmacen'];
$xoxgxixdxoxcx=$_GET['xoxgxixdxoxcx']; //invertido




//echo "11111 xcodigo_cli: ".$xcodigo_cli.'<br />';
//echo "doc:  ".$xdoc_venta.'<br />';
//echo ("TIPOMOV:  ".$xtipodemov.'<br />');

$result0=mysqli_query($connec,"select * from a_sistema  where id=1");
$tabla0 = mysqli_fetch_array($result0);
$tc_sis=$tabla0["tc_sis"];



// verifica si hay duplicidad de documentos
$result_repe=mysqli_query($connec,"select * from a_almacen where nrodocu_alma='$xdoc'");
$total_repe=mysqli_num_rows($result_repe);

if ($total_repe>0) { ?>
   <table width="363" border="0">
  	<tr bgcolor="#F8DA94">
   	    <? echo($xdoc) ?>
        <a href="javascript:window.history.back();">..DOCUMENTO REPETIDO .. RETORNAR ..</a>
	</tr>
   </table>	
    <?
}else{ 
    if ($xnroalmacen=="000001"){$xalma="1";}elseif($xnroalmacen=="000002"){$xalma="2";}elseif($xnroalmacen=="000003"){$xalma="3";}
	$resultite=mysqli_query($connec,"select * from a_provisional where codcli_provi='$xcodigo_cli' AND nrodocu_provi='$xdoc' AND tmov_provi='$xtipodemov' order by id");
	$totalite=mysqli_num_rows($resultite);
	echo "Esta consulta PROVISIONAL, tiene : ".($totalite). " registros";



while ($tablaite=mysqli_fetch_array($resultite)) {

	   //$xdoc viene del GET
	   //$xmone viene del GET
	   $id=$tablaite["id"];
	   $codcli_provi=$tablaite["codcli_provi"];
	   $razsoc_provi=$tablaite["razsoc_provi"];
       $coditem_provi=$tablaite["coditem_provi"];
	   $desc_provi=$tablaite["desc_provi"];
	   $descriventa="Compra- ".$desc_provi;
       $cant_provi=$tablaite["cant_provi"];
	   $tmov_provi=$tablaite["tmov_provi"];
	   $pvent_provi=$tablaite["pvent_provi"];
	   $total_provi=$cant_provi*$pvent_provi;		
	   $pcosto_provi=$tablaite["pcosto_provi"];	
	   $codven_provi=$tablaite["codven_provi"];
	   $sumtot_ped=$sumtot_ped+$total_provi; 
	   $estado_ctecli=" ";
       // cambi fecha_pe por, fecha_eeuu 
	   $xfecf_d=substr($xfecha_pe,0,2);
	   $xfecf_m=substr($xfecha_pe,3,2);
	   $xfecf_y=substr($xfecha_pe,-4);
	   $fec_eeuu=date('Y/m/d',strtotime($xfecf_y."/".$xfecf_m."/".$xfecf_d));
       //if ($xmone=="D" AND $xmonelista=="S") {
		//   $precom=$pvent_provi*$xtc;
	   //} else {
		//   $precom=$pvent_provi;
	  // }
       
       // guarda en almacen. ESTAMOS DENTRO DEL FOR... 
	   $sqlalma="INSERT INTO a_almacen (nro_alma,codcli_alma,nrodocu_alma,fecmov_alma,coditem_alma, desc_alma, cant_alma, 				tmov_alma,concre_alma,mone_alma,pvent_alma,pcosto_alma,codven_alma) VALUES ('$xnroalmacen','$codcli_provi','$xdoc','$fec_eeuu','$coditem_provi','$desc_provi','$cant_provi' 				,'$tmov_provi','$xconcre','$xmone','$pvent_provi','$pcosto_provi','$codven_provi')";
	   $resultalma=mysqli_query($connec,$sqlalma);
	   if(! $resultalma ){
		 echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  ALMACEN.</span>");
	   }

	   $resultit=mysqli_query($connec,"select * from a_items where codigo_it=$coditem_provi");	
	   $tablait =mysqli_fetch_array( $resultit );
	   $xpv01=$tablait["pv01_it"];
	   if($xpv01<=0){
		  if ($pcosto_provi<11) { $pv01=round($pcosto_provi*1.70,0); $pv02=0; $pv03=0;
		  } elseif ($pcosto_provi<21) { $pv01=round($pcosto_provi*1.60,0); $pv02=0; $pv03=0;
		  } elseif ($pcosto_provi<61) { $pv01=round($pcosto_provi*1.30,0); $pv02=0; $pv03=0;
		  } elseif ($pcosto_provi<101) { $pv01=round($pcosto_provi*1.20,0); $pv02=0; $pv03=0;
		  } elseif ($pcosto_provi<1000) { $pv01=round($pcosto_provi*1.10,0); $pv02=0; $pv03=0;
		  } elseif ($pcosto_provi<3000) { $pv01=round($pcosto_provi*1.09,0); $pv02=0; $pv03=0;
		  } else {
			$pv01=round($pcosto_provi*1.07,0); $pv02=0; $pv03=0;
		  }
		  $sql="UPDATE a_items SET precom_it='$pcosto_provi', pv01_it=$pv01, monelista_it='$xmonelista'  WHERE codigo_it=$coditem_provi";
		  $result=mysqli_query($connec,$sql);
	  } else {
		  $sql="UPDATE a_items SET precom_it='$pcosto_provi', monelista_it='$xmonelista'  WHERE codigo_it=$coditem_provi";
		  $result=mysqli_query($connec,$sql);
	  }
	   if(! $result ){
		 echo ("<span style='background-color: #CC0000'>XX. ERROR AL REGISTRARSE  ITEMS.</span>");
	   }

	} // FINALIZA PROFORMA 1er IF
} // FINALIZA EL FOR...
	
// echo (" Despues del FOR. Ahora genera la cta del CLiente que es solo una cuenta total. "."<br>");
	
 $sqlctecli="INSERT INTO a_cteproveedores (codcli_cteprov,rsocial_cteprov, nrodocu_cteprov,fecha_cteprov,desc_cteprov,tmov_cteprov,mone_cteprov,total_cteprov,esta_cteprov,fpago_cteprov,obs_cteprov,codven_cteprov,saldo_cteprov) VALUES  ('$codcli_provi','$razsoc_provi', '$xdoc','$fec_eeuu','$descriventa','I','$xmone','$sumtot_ped','$estado_ctecli','$fecmov_provi','  ', '$codven_provi','$sumtot_ped')";
$resultctecli=mysqli_query($connec,$sqlctecli);	
	   
// Despues de Cta Cliente, el elimna todos los pedidos pendientes..
$querydelprovi = "delete from a_provisional where codcli_provi='$xcodigo_cli' AND nrodocu_provi='$xdoc' AND tmov_provi='$xtipodemov' ";  
$resultdel = mysqli_query($connec,$querydelprovi);
mysqli_close($connec);
?>
	<table width="363" border="0">
	  <tr bgcolor="#F8DA94">
	<? if ($xtdoc=="PR") { // SOLO PROFORMA ?>
		<th scope="col"><div align="center"><a href="a_view_prof.php?xcodper=<?php echo($xcodper);?>&xdoc_venta=<?php echo($xdoc_venta);?>&xcodigo_cli=<?php         echo($xdoc);?>&xnxixvx=<?php echo($xnxixvx);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx);?>">DATOS ALMACENADOS.. PRE ..CONTINUAR....</a></div></th> 
	<? }else if ($xtipodemov=='I'){  ?>
		<th scope="col"><div align="center"><a href="a_view_1_compra.php?xcodigo=<?php echo($xcodigo_cli);?>&xdoc=<?php echo($xdoc);?>&xnxixvx=<?php echo($xnxixvx);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx);?>">DATOS ALMACENADOS.. INGRESO ..CONTINUAR....</a></div></th>
	<? }else{ ?>
		<th scope="col"><div align="center"><a href="a_view_1_venta.php?xcodigo=<?php echo($xcodigo_cli);?>&xdoc=<?php echo($nrodocu_provi);?>&xnxixvx=<?php         echo($xnxixvx);?>&xoxgxixdxoxcx=<?php echo($xoxgxixdxoxcx);?>">DATOS ALMACENADOS.. SALIDA ..CONTINUAR....</a></div></th>
    <? }?>
     </tr>
    </table>




</body>
</html>