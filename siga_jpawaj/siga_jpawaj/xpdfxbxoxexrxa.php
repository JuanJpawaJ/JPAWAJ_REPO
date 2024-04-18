<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDF-BONO</title>

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
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.TITULO {
	font-size: 12px;
	color: #000;
}
.tit_menu_sup {
	color: #000;
}
.usuario {	font-family: Tahoma, Geneva, sans-serif;
	font-size: 10px;
	font-style: italic;
	font-weight: normal;
}
.tx1bl {
	color: #FFFFFF;
	font-weight: bold;
}
.tx1az {
	color: #000066;
	font-weight: bold;
}
.tx1rj {
	color: #FF0000;
	font-weight: bold;
}
.tx1vd {
	color: #00CC00;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.tabla10 BL {
	color: #FFFFFF;
}
.C14TIT {
	font-size: 14px;
	font-weight: bold;
}
.C14NEG {
	font-size: 16px;
	font-weight: bold;
}
.tabla10 table .tabla10 td {
	font-weight: bold;
}
.tabla10 table .tabla10 td {
	font-weight: normal;
}
</style>


</head>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="tabla10">




		  <?php 
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$datehoy=date("Y-m-d H:i:s"); 

include ('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$registro = $_GET['xregistro'];

if (strlen($registro)==0){
    $registro=$_GET['registro'];
}



$result=mysqli_query($connec,"SELECT * FROM a_bonofertas where registro_bo='$registro'");
$total=mysqli_num_rows($result);
$tabla = mysqli_fetch_array( $result );

	$id=$tabla["id"];
	$codigo_bo=$tabla["codigo_bo"];
//	$registro_bo=$tabla["registro_bo"];

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

//$result1=mysqli_query($connec,"select * from n_secciones where trim(cod_secc)='$secc_alu'");
//$tabla1 = mysqli_fetch_array( $result1 );
//$des_csecc=$tabla1["nom_secc"];
  
$pdf->Image('imagenes2/logo_jpawaj_250_png.png',10,13,45);
$pdf->Image('imagenes2/logo_interclass_250_png.png',153,19,45);
$pdf->Ln(14);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(30,8," ",0,0,'C');
$pdf->Cell(130,8,"BONO DE DESCUENTO - ".$grupobo_bo,0,0,'C');
$pdf->Ln(10);
$pdf->Cell(30,8," ",0,0,'C');
$pdf->SetFont('Arial', 'B' ,15); $pdf->Cell(130,14,$qdescuento_bo,0,0,'C');
$pdf->Ln(15);
$pdf->Image('imagenes2/qrcode_interclass.png',153,30,45);
$pdf->Cell(55,8," ",0,0,'C');
$pdf->SetFont('Arial', '' ,6); $pdf->Cell(80,5,"CODIGO DE REGISTRO",1,0,'C');
$pdf->Ln(5);
$pdf->Cell(55,8," ",0,0,'C');
$pdf->SetFillColor(233,235,236);
$pdf->SetFont('Arial', 'B' ,15); $pdf->Cell(80,16,$registro,1,0,'C',True);
$pdf->SetFont('Arial', '' ,7);
$pdf->Ln(20);
$pdf->Cell(30,8,"A: ",0,0,'R');
$pdf->Cell(130,8," ",1,0,'L');
$pdf->Ln(8);
$pdf->Cell(30,8,"DOCUMENTO: ",0,0,'R');
$pdf->Cell(130,8," ",1,0,'L');
$pdf->Ln(18);
$pdf->SetFont('Arial', '' ,8); $pdf->Cell(30,7,"Solicitado por: ",1,0,'R');
$pdf->SetFont('Arial', 'B',12); $pdf->Cell(130,7,utf8_decode($nombre_bo),1,0,'L');
$pdf->SetFont('Arial', '' ,8); $pdf->Cell(30,7,$fechahoy_bo,1,0,'C');
$pdf->Ln(10);
$pdf->Cell(70,8," ",0,0,'C');
$pdf->SetFont('Arial', '' ,10); $pdf->Cell(45,7,"Fecha Vto. : ".$fechafin_bo,1,0,'C');

//$pdf->Ln(10);


$pdf->SetTextColor(0,0,0);

$pdf->Cell(30,7," ",0,0,'C');
$pdf->SetFont('Arial', '' ,8); $pdf->Cell(45,7,"Gerencia Administrativa",0,0,'R');
$pdf->Ln(8);
$pdf->SetFont('Arial', '' ,6); $pdf->Cell(200,7,utf8_decode("Tome nota de su CÓDIGO DE REGISTRO o IMPRIMA este documento y valide el descuento en cualquier producto ").$grupobo_bo.utf8_decode(". Tiene validez de 30 días. "),0,0,'C');
$pdf->Ln(8);
$pdf->SetFont('Arial', '' ,10);
$pdf->Cell(200,10," -- -- -- - -- -- - -- - -- - -- - -- - -- -- - -- -- -- -- -- -- - -- - -- - - ",0,0,'C');


	       $pdf->Output('reporte.pdf','F');   // ok
		echo "<script language='javascript'>window.open('reporte.pdf','_self','');</script>";
		
		//para ver el archivo pdf generado
		exit; 
  
mysqli_close($connec);
?>
</body>
</html>
