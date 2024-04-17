
<?php 
$texto=$_POST['xmensaje'];
$nombre=$_POST['xnombre'];
$xarea=$_POST['xarea'];
$xcelular=$_POST['xcelular'];

if(strlen($xcelular)==0){
  echo "* SIN DATOS - El Nro. de celular- VERIFIQUE *";
}else {
  //echo "* datos = " . $xcelular;

  $para = 'jpawajsac@gmail.com';
  $subject = 'WEB_JPAWAJ';
  //$message = $texto." ".$xarea." ".$xcelular." ".$nombre;
  
   $mensaje = 'hola est es una prueba';
   
  $cabeceras = 'From: jpawajsac@gmail.com' . "\r\n" .
    'Reply-To: administracion@jpawaj.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	

    if (mail($para, $subject, $mensaje, $cabeceras)) {

        echo "Mensaje enviado exitosamente."; ?>
			<table width="363" border="0">
  				<tr bgcolor="#F8DA94">
    				<th scope="col"><div align="center"><a href="https://www.jpawaj.com">Sus datos ingresaron correctamente</a></div></th>
  				</tr>
			</table>
  <?  } else {
        echo "Error al enviar el mensaje."; ?>
			<table width="363" border="0">
  				<tr bgcolor="#F8DA94">
    				<th scope="col"><div align="center"><a href="https://www.jpawaj.com">Sus datos NO se enviaron</a></div></th>
  				</tr>
			</table>
  <? }
   }
  ?>
 

