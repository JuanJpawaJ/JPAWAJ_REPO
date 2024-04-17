
<?php 
//$servername = "localhost";

//$username = "pawacorp_rosvi";
//$password = "Bu~#{WOScwu)";
//$database = "pawacorp_pana";

//$connec = mysqli_connect("localhost", "pawacorp_juan", "C?}azwJt^%!d", "pawacorp_siga");//PRUEBA EDWAR
//if (!$connec) {
  //  die("Connection failed: " . mysqli_connect_error());
//}

//echo "Connected successfully";

//me parece que no funciona: me lo dió DOn WEB, mayo 2023 pero.. tiene .....

	$dbhost = 'localhost';
	$dbuser = 'c2081645_jpawajb';
	$dbpass = '15faTEgiku';
	$dbname = 'c2081645_jpawajb';

	//$connec = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Ocurrio un error al conectarse al servidor mysql');
	//mysqli_select_db($dbname);


$connec = mysqli_connect("localhost", "c2081645_jpawajb", "15faTEgiku", "c2081645_jpawajb");//PRUEBA EDWAR
if (!$connec) {
  die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";

?>
