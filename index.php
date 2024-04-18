<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <base href="https://www.pawacorp.com/index.html" />-->
 
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="jpawaj.com:: jpawaj :: porongoche : Av. Porongoche: jpawaj computadoras JPAWAJ tecnologia : pawa :: laptos jpawaj:: delivery laptos :: AQP :: servicio tecnico :: Jpawaj Clases de computo, python, profesor de computo, Arequipa, impresoras, camaras de vigilancia, profesor Jose Luis Bustamante y Rivero, jlb y rivero, salchipapas hamburguesas, técnico en arequipa, regalos" />
    <meta name="description" content="jpawaj.com:: jpawa :: jjpawa :: tecnico :: COMPUTADORAS :: DELIBERY laptos AREQUIPA :: AQP :: tintas arequipa delivery :: delibears peru :: Delibears Arequipa Perú :: syscomputer :: mujer bonita :: Boutique :: mujer bonita boutique" />
    <title>Jpawaj SAC</title> 
  
    <link rel="stylesheet" href="estilos/normalize.css">
    <link rel="stylesheet" href="estilos/estilos_generales.css">
    <link rel="stylesheet" href="estilos/estilos_espacio_formulario.css">
    <link rel="stylesheet" href="estilos/estilos_nuestrosprincipalesclientes_parte2.css"> 
    <link rel="stylesheet" href="estilos/estilos_footer.css">
    <link rel="stylesheet" href="estilos/estilos_barra_nueva.css">
    <link rel="stylesheet" href="estilos/estilos_barra_horizontal.css">
    <link rel="stylesheet" href="estilos/estilos_barra_hamburguesa.css">
    <link rel="stylesheet" href="estilos/estilo_circulos.css">
    <link rel="stylesheet" href="estilos/estilos_formulario_nuevo.css">
    <link rel="stylesheet" href="estilos/estilos_4espacios.css">
    <link rel="stylesheet" href="estilos/estilos_productos_nuevo.css">
    <link rel="stylesheet" href="estilos/estilos_stecnico_nuevo.css">
    <link rel="stylesheet" href="estilos/estilos_boton_whatsapp.css">
    <link rel="stylesheet" href="estilos/estilos_fixed.css">

<style type="text/css">
.PRECIOFERTA
{
	color: #009;
	font-weight: bold;
		font-size: 20px;
}
.TELEFONOS
{
	color: #009;
	font-weight: bold;
		font-size: 30px;
		font-style:italic
		
}

.PRODUCTOTXT
{
	font-weight: bold;
		font-size: 10px;
}
.div_productos{
    /* background-color:var(--azul_principal); */
    /* background-color:#FFFFC4;  */
    height:70vh;
    display:flex;
    flex-wrap: wrap;
    align-items:center;
    padding:1rem;
    justify-content:space-around;
  /*  justify-content:center; */
}

.prod_contenedor{

   /*  width:1rem; */
    
}
.contorno_bot_celular{
    display:flex;
    justify-content:center;
    margin-top:1rem;
}
.cabecera_principal img{
	
	width: 100%;
  height: auto;
  
/*with:50%; */
/*height:200px; */
    display:flex;
    justify-content:center;
    align-items:center;
    /*padding:1rem; */
    overflow:hidden;

    padding-top:6rem;
}



@media screen and (max-width: 700px){
.div_productos{
    height:180vh;
}
}

.logo_new{

    display:flex;
    justify-content:center;
    align-items:center;
    padding:1rem;
    overflow:hidden;

    padding-top:2rem;
}
.logo_new > img{
 	 height:80px;
	
 	 /* height:60%; */
    margin-right:0.5rem;
    /* max-height:60px; */
}
.tachado {
    text-decoration:line-through;
    color: red;
	font-size: 12px;
}


</style>    
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RMB75PC13F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RMB75PC13F');
</script>
<body>
<?php
include("connec_sql_new.php");
mysqli_set_charset($connec,'utf8'); 
date_default_timezone_set("America/Lima");
setlocale(LC_ALL, "sp");

$bxproducto=$_GET['bxproducto'];
// ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
$viewmodi=$_GET['viewmodi'];
$xgl=$_GET['xgl'];
?>



    <a name="xinicio" id="xinicio"></a>

    <div class="barra_menu">
        <div class="imagen_barra_menu">
            <img src="imagenes/jpawaj.png" alt="logo" class="logo">
        </div>
        <!-- DIV HORIZONTAL--> 
        <div class="enlaces_menu">

      <!--  <nav class="nav_horizontal">
                <ul>
                    <li><a href="#xinicio">Inicio</a></li>
                    <li><a href="#xproductos">Productos</a></li>
                    <li><a href="#xeducacion">Educación</a></li>
                    <li><a href="#xstecnico">S. Técnico</a></li>
                    <li><a href="#xdelivery">Delivery</a></li>-->
                 <!--   <li><a href="#xclientes">Clientes</a></li> -->
                  <!--  <li><a href="#xcontactos">Contactos</a></li>
                </ul>
        </nav>-->

          <span class="TELEFONOS">959956000 - 959956060</span> 
             <!-- DIV HAMBURGUESA--> 

        <nav class="nav_hamburguesa">
        
            <ul>
              <li><a href="#"><img src="imagenes/3rayas.png" alt="logo" width="%" height="30"></a>
              <ul>
                <li><a href="#xinicio">Inicio</a></li>
                <li><a href="#xproductos">Productos</a></li>
                <li><a href="#xeducacion">Educación</a></li>
                <li><a href="#xstecnico">S. Técnico</a></li>
                <li><a href="#xdelivery">Delivery</a></li>
             <!--   <li><a href="#xclientes">Clientes</a></li> -->
                <li><a href="#xcontactos">Contactos</a></li>
          </ul>
              </li>
            </ul>
        </nav>

        </div>

    </div>
   
   <div class="cabecera_principal">
            <img src="imagenes/cab_principal.jpg" alt="logo_quienessomos">
           
   </div>
  

   <!-- <div style="height:5rem"></div> -->


        <!-- DIV 3 CIRCULOS--> 
    <div class="div_circulos">

        <div class="cir_contenedor">
            <div class="cir_imagen">
                <a href="#xsyscomputer"><img src="imagenes/b_rectangulo_syscomputer.png" width="250" height="%" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a> 
            </div>
        </div>

        <div class="cir_contenedor">
            <div class="cir_imagen">
                <a href="#xmujerbonita"><img src="imagenes/b_rectangulo_mujerbonita.png" width="250" height="%" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>  
            </div>
        </div>

        <div class="cir_contenedor">
            <div class="cir_imagen">
                 <a href="https://www.jpawaj.com/siga_jpawaj/a_lisgeneral.php?xgl=R"><img src="imagenes/b_rectangulo_perfumeria.png" width="250" height="%" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a> 
            </div>
        </div>
        
        <div class="cir_contenedor">
            <div class="cir_imagen">
                 <a href="#xinterclass"><img src="imagenes/b_rectangulo_interclass.png" width="250" height="%" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a> 
            </div>
        </div>



    </div>
    
<!--  SYSCOMPUTER AREA 01 "OFERTAS DE LA SEMANA   -->
    <a name="xsyscomputer" id="xsyscomputer"></a>

   <div class="linea_division"> </div>

         <div class="logo_new">
            <img src="imagenes/logo_SyscomputerCorp_ok_png.png" alt="logo_quienessomos">
        </div>

  <!--  <div class="campo_formulario_prod_nuevo"> -->
        <div class="div_productos"> 

    <!-- <div class="imagen_prod_nuevo">  -->
         <div class="prod_contenedor">
        
        
 <? $result=mysqli_query($connec,"select * from a_items where view03_it='S' AND grupolista_it like '%S%' order by producto_it");
    $total=mysqli_num_rows($result);
    //echo "Registro con : ".$total. " ITEMS ";
    $simbolo_mone="S/ "; ?>   

  <table width="398" height="504" border="1" cellpadding="3" cellspacing="1">
    <tr>
      <td height="52" colspan="2" align="center" ><img src="imagenes/cab_ofertas_sys.jpg" width="406" height="43"></td>
      </tr>
    <tr>
      <td width="195" height="230" align="center">
         <table width="186" border="0" cellspacing="0" cellpadding="0">
           <tr>
              <td width="31" height="43"> <span class="PRODUCTOTXT"><? $tabla = mysqli_fetch_array( $result ); $producto_it=$tabla["producto_it"]; echo $producto_it; ?> </span></td>
              <td width="155" align="center" valign="middle"><img src="<? echo "siga_jpawaj/img_items/".$tabla["img_it"]; ?>" width="130" height="%" /></td>
           </tr>
           <tr>
              <td height="41" colspan="2" align="center" valign="middle">
               <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($tabla["pv01_it"]))) ?></span>
               <span class="PRECIOFERTA"><? echo ($simbolo_mone.money_format('%n',($tabla["pv03_it"])))?></span>
             
               </td>
            </tr>
         </table>
      </td>
      <td width="194" align="center">
          <table width="186" border="0" cellspacing="0" cellpadding="0">
           <tr>
              <td width="31" height="43"> <span class="PRODUCTOTXT"><? $tabla = mysqli_fetch_array( $result ); $producto_it=$tabla["producto_it"]; echo $producto_it; ?> </span></td>
              <td width="155" align="center" valign="middle"><img src="<? echo "siga_jpawaj/img_items/".$tabla["img_it"]; ?>" width="130" height="%" /></td>
           </tr>
           <tr>
              <td height="41" colspan="2" align="center" valign="middle">
             <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($tabla["pv01_it"]))) ?></span>
			 <span class="PRECIOFERTA"><? echo ($simbolo_mone.money_format('%n',($tabla["pv03_it"])))?></span></td>
            </tr>
         </table>

      </td>
   </tr>
   <tr>
     <td height="214" align="center">
         <table width="186" border="0" cellspacing="0" cellpadding="0">
           <tr>
              <td width="31" height="43"> <span class="PRODUCTOTXT"><? $tabla = mysqli_fetch_array( $result ); $producto_it=$tabla["producto_it"]; echo $producto_it; ?> </span></td>
              <td width="155" align="center" valign="middle"><img src="<? echo "siga_jpawaj/img_items/".$tabla["img_it"]; ?>" width="130" height="%" /> </td>
           </tr>
           <tr>
              <td height="41" colspan="2" align="center" valign="middle">
                <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($tabla["pv01_it"]))) ?></span>
               <span class="PRECIOFERTA"><? echo ($simbolo_mone.money_format('%n',($tabla["pv03_it"])))?></span></td>
            </tr>
         </table>

     </td>
     <td align="center">
         <table width="186" border="0" cellspacing="0" cellpadding="0">
           <tr>
              <td width="31" height="43"> <span class="PRODUCTOTXT"><? $tabla = mysqli_fetch_array( $result ); $producto_it=$tabla["producto_it"]; echo $producto_it; ?> </span></td>
              <td width="155" align="center" valign="middle"><img src="<? echo "siga_jpawaj/img_items/".$tabla["img_it"]; ?>" width="130" height="%" /></td>
           </tr>
           <tr>
              <td height="41" colspan="2" align="center" valign="middle">
               <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($tabla["pv01_it"]))) ?></span>
               <span class="PRECIOFERTA"><? echo ($simbolo_mone.money_format('%n',($tabla["pv03_it"])))?></span></td>
            </tr>
         </table>

     </td>
   </tr>
</table>
        </div>

<!--  SYSCOMPUTER AREA 02 "COMUNICATE CON NOSOTROS  -->

      <div class="formulario_prod_nuevo">
         <div class="imagen_prod_nuevo"> 
          <div class="prod_contenedor">        
 
  <table width="398" height="499" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="200" height="168" align="center">      
  <a href="siga_jpawaj/a_lisgeneral.php?xgl=S"><img src="imagenes/bsys_lista.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>     
      </td>
      <td width="198" align="center"><img src="imagenes/bsys_ofecemos.jpg" width="182" height="162"  ></td>
    </tr>
    <tr>
      <td height="168" align="center"><a href="siga_jpawaj/a_lisimagenes.php?xgl=S"><img src="imagenes/bsys_oferta.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>  </td>
      <td align="center"><img src="imagenes/bsys_stecnico.jpg" width="180" height="160"></td>
    </tr>
    <tr>
      <td height="63" align="center"> <a href="siga_jpawaj/a_lisgeneral.php?bxproducto=laptop&Submit3=-%3E+Buscar+%3C-"><img src="imagenes/bsys_masv.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>      
      </td>
      <td align="center"><table width="100" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="imagenes/bsys_disponible.jpg" width="184" height="65"></td>
        </tr>
        <tr>
          <td width="120" height="96" align="center" bgcolor="#CCCCCC">
            <form class="formulario_nohay" method="post" action="insert_mail.php"> 
              <div class="campos_formulario">
                <!--  <label  class="label_form">Su Número de Celular</label> -->
                <input type="text" id="xcelular" name="xcelular" placeholder="N° Celular">
                <input type="hidden" name="xarea" value="Syscomputer: " >         
                </div>
              <div class="contorno_bot_celular">
                <input type="submit" value="Enviar">
                </div>
              
              </form>
            
            
            </td>
        </tr>
        </table></td>
    </tr>
    </table>
   
         </div>
        
      </div>
    </div>
    <div style=" display:flex; justify-content:flex-end;">
        <p><a href="https://api.whatsapp.com/send?phone=51959956000&text=Más información" target="_blank"><img  src="imagenes/b_whats_consulta1.png"  onmouseover="this.src='imagenes/b_whats_consulta2.png'"  onmouseout="this.src='imagenes/b_whats_consulta1.png'" /></a></p>
    </div>

    <div class="div_texto_producto">
         <div class="parte_texto_new">
            <p>&nbsp;</p>

        </div>



    </div>

<!--  MUJER BONITA AREA 02 "OFERTAS DE LA SEMANA   -->
    <a name="xmujerbonita" id="xmujerbonita"></a>

   <div class="linea_division"> </div>

         <div class="logo_new">
            <img src="imagenes/logo_mujerbonita_boutique_ok_png.png" alt="logo_quienessomos">
        </div>

  <!--  <div class="campo_formulario_prod_nuevo"> -->
        <div class="div_productos"> 

    <!-- <div class="imagen_prod_nuevo">  -->
         <div class="prod_contenedor">
        
        
 <? $result=mysqli_query($connec,"select * from a_items where view03_it='S' AND grupolista_it like '%M%' order by producto_it");
    $total=mysqli_num_rows($result);
    //echo "Registro con : ".$total. " ITEMS ";
    $simbolo_mone="S/ "; ?>   

  <table width="398" height="504" border="1" cellpadding="3" cellspacing="1">
    <tr>
      <td height="52" colspan="2" align="center" ><img src="imagenes/cab_ofertas_semana_rosado.jpg" width="406" height="43"></td>
      </tr>
    <tr>
      <td width="195" height="230" align="center">
         <table width="186" border="0" cellspacing="0" cellpadding="0">
           <tr>
              <td width="31" height="43"> <span class="PRODUCTOTXT"><? $tabla = mysqli_fetch_array( $result ); $producto_it=$tabla["producto_it"]; echo $producto_it; ?> </span></td>
              <td width="155" align="center" valign="middle"><img src="<? echo "siga_jpawaj/img_items/".$tabla["img_it"]; ?>" width="130" height="%" /></td>
           </tr>
           <tr>
              <td height="41" colspan="2" align="center" valign="middle">
                             <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($tabla["pv01_it"]))) ?></span>
                              <span class="PRECIOFERTA"><? echo ($simbolo_mone.money_format('%n',($tabla["pv03_it"])))?></span></td>
            </tr>
         </table>
      </td>
      <td width="194" align="center">
          <table width="186" border="0" cellspacing="0" cellpadding="0">
           <tr>
              <td width="31" height="43"> <span class="PRODUCTOTXT"><? $tabla = mysqli_fetch_array( $result ); $producto_it=$tabla["producto_it"]; echo $producto_it; ?> </span></td>
              <td width="155" align="center" valign="middle"><img src="<? echo "siga_jpawaj/img_items/".$tabla["img_it"]; ?>" width="130" height="%" /></td>
           </tr>
           <tr>
              <td height="41" colspan="2" align="center" valign="middle">
                             <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($tabla["pv01_it"]))) ?></span>
                              <span class="PRECIOFERTA"><? echo ($simbolo_mone.money_format('%n',($tabla["pv03_it"])))?></span></td>
            </tr>
         </table>

      </td>
   </tr>
   <tr>
     <td height="214" align="center">
         <table width="186" border="0" cellspacing="0" cellpadding="0">
           <tr>
              <td width="31" height="43"> <span class="PRODUCTOTXT"><? $tabla = mysqli_fetch_array( $result ); $producto_it=$tabla["producto_it"]; echo $producto_it; ?> </span></td>
              <td width="155" align="center" valign="middle"><img src="<? echo "siga_jpawaj/img_items/".$tabla["img_it"]; ?>" width="130" height="%" /> </td>
           </tr>
           <tr>
              <td height="41" colspan="2" align="center" valign="middle">
                             <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($tabla["pv01_it"]))) ?></span>
                              <span class="PRECIOFERTA"><? echo ($simbolo_mone.money_format('%n',($tabla["pv03_it"])))?></span></td>
            </tr>
         </table>

     </td>
     <td align="center">
         <table width="186" border="0" cellspacing="0" cellpadding="0">
           <tr>
              <td width="31" height="43"> <span class="PRODUCTOTXT"><? $tabla = mysqli_fetch_array( $result ); $producto_it=$tabla["producto_it"]; echo $producto_it; ?> </span></td>
              <td width="155" align="center" valign="middle"><img src="<? echo "siga_jpawaj/img_items/".$tabla["img_it"]; ?>" width="130" height="%" /></td>
           </tr>
           <tr>
              <td height="41" colspan="2" align="center" valign="middle">
                             <span class="tachado"> <? echo($simbolo_mone.money_format('%n',($tabla["pv01_it"]))) ?></span>
                              <span class="PRECIOFERTA"><? echo ($simbolo_mone.money_format('%n',($tabla["pv03_it"])))?></span></td>
            </tr>
         </table>

     </td>
   </tr>
</table>
        </div>

<!--  SYSCOMPUTER AREA 02 "COMUNICATE CON NOSOTROS  -->

      <div class="formulario_prod_nuevo">
         <div class="imagen_prod_nuevo"> 
          <div class="prod_contenedor">        
 
  <table width="398" height="499" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="200" height="168" align="center">      
  <a href="siga_jpawaj/a_lisgeneral.php?xgl=M"><img src="imagenes/bmujerb_lista.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>     
      </td>
      <td width="198" align="center"><img src="imagenes/bsys_ofecemos.jpg" width="182" height="162"  ></td>
    </tr>
    <tr>
      <td height="168" align="center"><a href="siga_jpawaj/a_lisimagenes.php?xgl=M"><img src="imagenes/bmujerb_oferta.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>  </td>
      <td align="center"><a href="https://www.facebook.com/mujerbonita.mb00/"><img src="imagenes/bmujerb_face.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>  </td>
    </tr>
    <tr>
      <td height="63" align="center"><a href="siga_jpawaj/a_lisgeneral.php?bxproducto=vestido&Submit3=-%3E+Buscar+%3C-"><img src="imagenes/bmujerb_masv.jpg" width="180" height="160" style="border:0;" onmouseover="this.style.border='solid  2px  #0a3d89';" onmouseout="this.style.border=0;" border="0"></a>     
      </td>
      <td align="center"><table width="100" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="imagenes/bsys_disponible.jpg" width="184" height="65"></td>
        </tr>
        <tr>
          <td width="120" height="96" align="center" bgcolor="#CCCCCC">
            <form class="formulario_nohay" method="post" action="insert_mail.php"> 
              <div class="campos_formulario">
                <!--  <label  class="label_form">Su Número de Celular</label> -->
                <input type="text" id="xcelular" name="xcelular" placeholder="N° Celular">
                <input type="hidden" name="xarea" value="Syscomputer: " >         
                </div>
              <div class="contorno_bot_celular">
                <input type="submit" value="Enviar">
                </div>
              
              </form>
            
            
            </td>
        </tr>
        </table></td>
    </tr>
    </table>
   
         </div>
        
      </div>
    </div>
    <div style=" display:flex; justify-content:flex-end;">
        <p><a href="https://api.whatsapp.com/send?phone=51959956000&text=Más información" target="_blank"><img  src="imagenes/b_whats_consulta1.png"  onmouseover="this.src='imagenes/b_whats_consulta2.png'"  onmouseout="this.src='imagenes/b_whats_consulta1.png'" /></a></p>
    </div>

    <div class="div_texto_producto">
         <div class="parte_texto_new">
            <p>
               Somos una empresa comercializadora de productos generales y tecnológicos de calidad y garantía. Nuestra experiencia data de más de 25 años en el mercado PERUANO, siendo parte del Grupo SYSCOMPUTER. Contamos con una vitrina de productos de seguridad e informática. Gracias por su confianza y recuerde que trabajamos para usted. 


            </p>

        </div>


    </div>

        <!-- FFFFIIIINNNN *****    01A   **************************** --> 

   <!-- DIV PRODUCTOS ******   01B   *************************** --> 
    <a name="xproductos" id="xproductos"></a>

   <div class="linea_division"> </div>

    
         <div class="titular_con_logo_prod_new">
            <img src="imagenes/titico_productos.png" alt="logo_quienessomos">
           
        </div>



    <div class="campo_formulario_prod_nuevo">
   
        <div class="imagen_prod_nuevo">
            <img src="imagenes/f_productos.jpg" alt="logo_quienessomos" >
        </div>
        <div class="formulario_prod_nuevo">
            <div class="parte_formulario">
                <div class="contenedor_formulario">
                    <h2 class="cabecera_formulario">Buenos productos.<br>Necesito más información.</h2>
                    
                    <form class="formulario_oficial" method="post" action="insert_mail.php"> 
                        <div class="campos_formulario">
                            <label  class="label_form"> Que producto? - Mensaje:</label>
                            <input type="text" id="xmensaje" name="xmensaje" placeholder="ej. Impresora epson">
                        </div>
    
                        <div class="campos_formulario">
                            <label  class="label_form">Dirección de correo:</label>
                            <input type="text"  id="correo" name="correo" placeholder="ej. arturomanrique@hotmail.com">
                        </div>
    
                        <div class="campos_formulario">
                            <label  class="label_form">Número telefónico:</label>
                            <input type="text" id="telefono" name="telefono" placeholder="ej. 987458647">
                        </div>
                        <input type="hidden" name="xarea" value="PRODUCTOS" >                        
                        <div class="contorno_boton">
                            <input type="submit" value="Enviar">
                        </div>
                        <h2 class="pie_formulario">Responderemos inmediatamente.<br> Gracias.</h2>
 
                    </form>
                    
               
                </div>
            </div>
        </div>
    </div>
    <div style=" display:flex; justify-content:flex-end;">
        <p><a href="https://api.whatsapp.com/send?phone=51959956000&text=Más información" target="_blank"><img  src="imagenes/b_whats_consulta1.png"  onmouseover="this.src='imagenes/b_whats_consulta2.png'"  onmouseout="this.src='imagenes/b_whats_consulta1.png'" /></a></p>
    </div>

    <div class="div_texto_producto">
         <div class="parte_texto_new">
            <p>
               Somos una empresa comercializadora de productos generales y tecnológicos de calidad y garantía. Nuestra experiencia data de más de 25 años en el mercado PERUANO, siendo parte del Grupo SYSCOMPUTER. Contamos con una vitrina de productos de seguridad e informática. En esta situación de cuarentena activamos nuestro servicio DELIVERY. Gracias por su confianza y recuerde que trabajamos para usted. 


            </p>

        </div>

    </div>



        <!-- FFFFIIIINNNN *****    01B   **************************** --> 


        
        <!-- DIV EDUCACION ********************************* --> 

    <a name="xinterclass" id="xinterclass"></a>
    <div class="linea_division"> </div>
         <div class="logo_new">
            <img src="imagenes/logo_interclass_png.png" alt="logo_quienessomos">
        </div>
    <div class="campo_formulario_nuevo campo_formulario_d">
   
        <div class="imagen_nuevo">

            <img src="imagenes/aviso_curso_web.jpg" alt="logo_quienessomos">

        </div>
 
         <div class="imagen_nuevo">

            <img src="imagenes/f_contenido_excel_2024.jpg" alt="logo_quienessomos">

        </div>

        <div class="imagen_nuevo">
       <!-- <div class="formulario_nuevo"> -->
            <div class="parte_formulario">
                <div class="contenedor_formulario">
                    <h2 class="cabecera_formulario">Si, me interesa el curso. <br>Deseo matricularme con el descuento<br> de 25%. Gracias</h2>
                    
                    <form class="formulario_oficial" method="post" action="siga_jpawaj/insert_bono.php"> 
                        <div class="campos_formulario">
                            <label  class="label_form"> Que cursos? - Mensaje:</label>
                            <input type="text" id="xproducto" name="xproducto" placeholder="ej. Corel Draw">
                        </div>
    
                        <div class="campos_formulario">
                            <label  class="label_form">Mi nombre y apellido:</label>
                            <input type="text"  id="xnombre" name="xnombre" placeholder="ej. Jose Ruiz..">
                        </div>
    
                        <div class="campos_formulario">
                            <label  class="label_form">IMPORTANTE! Mi número telefónico:</label>
                            <input type="text" id="xcelular" name="xcelular" placeholder="ej. 987458647">
                        </div>
                        <input type="hidden" name="xgrupobo" value="CURSOS" >                        
                        <input type="hidden" name="xqdescuento" value="25%" >                        
                        <input type="hidden" name="xgenbono" value="SI" >                        

                        <div class="contorno_boton">
                            <input type="submit" value="Enviar">
                        </div>
                        <h2 class="pie_formulario">Responderemos inmediatamente.<br> Gracias.</h2>

                    </form>
                   
               
                </div>
            </div>
        </div>
    </div>



        <!-- DIV STECNICO ********************************* -->     
        <a name="xstecnico" id="xstecnico"></a>

        <div class="linea_division"> </div>

    
         <div class="titular_con_logo_stec_new">
            <img src="imagenes/titico_stecnico.png" alt="logo_quienessomos">
           
        </div>



    <div class="campo_formulario_nuevo">
   
        <div class="imagen_stec_nuevo">
            <img src="imagenes/f_stecnico.png" alt="logo_quienessomos" >
        </div>
        <div class="formulario_stec_nuevo">
            <div class="parte_formulario">
                <div class="contenedor_formulario">
                    <h2 class="cabecera_formulario">Deseo obtener una<br> revisión GRATUITA!<br> de mi equipo. Gracias</h2>
                    
                    <form class="formulario_oficial" method="post" action="insert_mail.php"> 
                        <div class="campos_formulario">
                            <label  class="label_form"> Mi equipo es: PC, Laptop, Impresora, otro?:</label>
                            <input type="text" id="xmensaje" name="xmensaje" placeholder="ej. Laptop">
                        </div>
    
                        <div class="campos_formulario">
                            <label  class="label_form">Descripción de la falla:</label>
                            <input type="text"  id="correo" name="correo" placeholder="ej. Enciende. Pero... se queda en un cursor">
                        </div>
    
                        <div class="campos_formulario">
                            <label  class="label_form">IMPORTANTE! Mi número telefónico:</label>
                            <input type="text" id="telefono" name="telefono" placeholder="ej. 987458647">
                        </div>
                        <input type="hidden" name="xarea" value="STECNICO" >                        
                        <div class="contorno_boton">
                            <input type="submit" value="Enviar">
                        </div>
                        <h2 class="pie_formulario">Responderemos inmediatamente.<br> Gracias.</h2>

                    </form>
                    
               
                </div>
            </div>
        </div>
    </div>
    <div style=" display:flex; justify-content:flex-end;">
        <p><a href="https://api.whatsapp.com/send?phone=51959956000&text=Más información" target="_blank"><img  src="imagenes/b_whats_consulta1.png"  onmouseover="this.src='imagenes/b_whats_consulta2.png'"  onmouseout="this.src='imagenes/b_whats_consulta1.png'" /></a></p>
    </div>

    <div class="div_texto_stecnico">
         <div class="parte_texto_new">
            <p>
                Nuestro departamento de Ingeniería con la experiencia de más de 20 años al servicio de empresas y público en general. Agradeciendo sobre todo la confianza depositada en nuestra empresa es que, ante esta situación de cuarentena, hemos reformulado nuestro SERVICIO DELIVERY el cual, tiene 3 fases: Recogemos su equipo, reparamos y devolvemos a domicilio sin costo adicional. Contamos con stock de repuestos de todas las marcas en PCs, Laptops e impresoras.
            </p>

        </div>


    <div class="campos_cursos_stec_nuevo">
        <div class="curso_x">
            <p>
                <h2> FORMATEO<BR>PC Y LAPTOP</h2>
            </p>
           
        </div>
        <div class="curso_x">
            <p>
                <h2> REPARACIÓN<br> IMPRESORAS</h2>
            </p>
           
        </div>
        <div class="curso_x">
            <p>
                <h2> VENTA DE <br> REPUESTOS</h2>
            </p>
           
        </div>
        <div class="curso_x">
            <p>
                <h2> CABLEADO<br> DE REDES - Wifi</h2>
            </p>
            
        </div>
    </div>

    </div>



         <a name="xclientes" id="xclientes"></a>
<p>
</p>

<p>
</p>
<div style=" display:flex; justify-content:flex-end;">
    <p><a href="https://api.whatsapp.com/send?phone=51959956000&text=Más información" target="_blank"><img  src="imagenes/b_whats_consulta1.png"  onmouseover="this.src='imagenes/b_whats_consulta2.png'"  onmouseout="this.src='imagenes/b_whats_consulta1.png'" /></a></p>
</div>


        <!-- DIV PRINCIPALES CLIENTES ********************************* --> 
    <div class="linea_division"> </div>

    <div class="div_nuestrosprincipalesclientes">
        <div class="espacio_de_titulo">
            <h2>NUESTROS PRINCIPALES CLIENTES</h2>
        </div>

        <div class="campo_clientes">
            <div class="espacio_clientes">
                    <img src="imagenes/panamericano.jpg" class="logclientes">
            </div>
            <div class="espacio_clientes">
                   <img src="imagenes/sigso.jpg" class="logclientes"> 
            </div>
            <div class="espacio_clientes">
                   <img src="imagenes/virgenrosario.jpg" class="logclientes"> 
            </div>
            <div class="espacio_clientes">
                    <img src="imagenes/iberoamericana.jpg" class="logclientes"> 
            </div>
            <div class="espacio_clientes">
                    <img src="imagenes/moliplast.jpg" class="logclientes"> 
            </div>
            
            <div class="espacio_clientes">
                    <img src="imagenes/andaloz.jpg" class="logclientes">
            </div>
            <div class="espacio_clientes">
                   <img src="imagenes/tancca.jpg" class="logclientes"> 
            </div>
            <div class="espacio_clientes">
                   <img src="imagenes/tiam.jpg" class="logclientes"> 
            </div>
            <div class="espacio_clientes">
                    <img src="imagenes/caretur.jpg" class="logclientes"> 
            </div>
            <div class="espacio_clientes">
                    <img src="imagenes/geophysics.jpg" class="logclientes"> 
            </div>

        </div>
        
    </div>



    <a name="xcontactos" id="xcontactos"></a>


    <!-- DIV FOOTER ********************************* --> 

    <div class="linea_division"> </div>

    <div class="div_footer">
        <div class="campos_footer">
            <div class="centrado_campos_footer">
                    <img src="imagenes/c_direccion.jpg" class="logcontactos"> 
            </div>
        </div>
        <div class="campos_footer">
            <div class="centrado_campos_footer">
                   <img src="imagenes/c_telefonos.jpg" class="logcontactos">            
            </div>
        </div>
        <div class="campos_footer">
            <div class="centrado_campos_footer">
                   <img src="imagenes/c_face.jpg" usemap="#Map" class="logcontactos">
                   <map name="Map">
                     <area shape="rect" coords="46,68,222,108" href="https://es-la.facebook.com/tiamperu/">
                     <area shape="rect" coords="48,19,223,57" href="https://www.instagram.com/tiam_peru/">
                   </map>
            </div>
        </div>
        <div class="campos_footer">
            <div class="centrado_campos_footer">
                   <img src="imagenes/c_logo.jpg" class="logcontactos">
            </div>
        </div>


    </div>


    
</body>
</html>