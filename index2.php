<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_generales.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_navegador.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_footer.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_slider_imagenes.css">
        <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloques_marcas/estilos_bloques_marcas_general.css">
        <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloques_marcas/estilos_contenedor_ofertas_semana.css">
        <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloques_marcas/estilos_contenedor_imagenes_grid.css">
        <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloques_marcas/estilos_cotenedor_quienes_somos.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_contenedor_marcas.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_servicio_tecnico.css">
    <link rel="stylesheet" href="assets/css/estilos_index/estilos_bloque_marca_interclass.css">
    <title>JPAWAJ</title>
    <link rel="icon" href="assets/img/imagenes_index/icono_pestana/icono_jpawaj.png" type="image/png">
</head> 
<body>


    <?php
        include ("connec_sql_new.php");
        mysqli_set_charset($connec, 'utf8');
        date_default_timezone_set("America/Lima");
        setlocale(LC_ALL, "sp");

        $bxproducto = $_GET['bxproducto'];
        // ********  ADICIONA, MODIFICA, ELIMINA REGISTROS 
        $viewmodi = $_GET['viewmodi'];
        $xgl = $_GET['xgl'];
    ?>


    <div class="navegador">
        <img src="assets/img/imagenes_index/logo_JPAWAJ_rojo_blanco.png" alt="" class="logo_principal">
        
        <button class="boton_nav" id="boton_hamburguesa"  onclick="desplegarBotonHamburguesa()">
            <span class="material-symbols-outlined">
                menu
                </span>
        </button>

        <div class="cont_lista_elementos" id="cont_elementos_navegador">
            <ul>    
                <li><a href="#syscomputer"><img src="assets/img/imagenes_index/logo_syscomputer_blanco.png" alt=""></a></li>
                <li><a href="#mujer_bonita"><img src="assets/img/imagenes_index/logo_mujer_bonita_blanco.png" alt=""></a></li>
                <li><a href="#"><img src="assets/img/imagenes_index/logo_mujer_bonita_blanco.png" alt=""></a></li>
                <li><a href="#interclass"><img src="assets/img/imagenes_index/logo_interclass_blanco.png" alt=""></a></li>
            </ul>
        </div>
    </div>

    <div class="navegador_espaciado"></div>

    <div class="contenedor_slider_imagenes">
        <div class="slider-wrapper">
            <div class="slider">
                <div class="imagen" id="slide-1" style="background-image: url('assets/img/imagenes_index/imagen_slider_1.jpg');"></div>
                <div class="imagen" id="slide-2" style="background-image: url('assets/img/imagenes_index/imagen_slider_1.jpg');"></div>
                <div class="imagen" id="slide-3" style="background-image: url('assets/img/imagenes_index/imagen_slider_1.jpg');"></div>
                <div class="imagen" id="slide-4" style="background-image: url('assets/img/imagenes_index/imagen_slider_1.jpg');"></div>
                <div class="imagen" id="slide-5" style="background-image: url('assets/img/imagenes_index/imagen_slider_1.jpg');"></div>
            </div>

            <div class="slider-nav" id="slider-nav">
            </div>
        </div>
    </div>

    <div class="bloque_marca bloque_marca_syscomputer" id="syscomputer">

        <? 
            $result = mysqli_query($connec, "select * from a_items where view03_it='S' AND grupolista_it like '%S%' order by producto_it");
            $total = mysqli_num_rows($result);
            $simbolo_mone = "S/ "; 
        ?>


        <img src="assets/img/imagenes_index/logo_syscomputer.png" alt="">
        <div class="contenedor_ofertas_semana">
            <div class="header_ofertas">
                <h2>OFERTAS DE LA SEMANA</h2>
                <span class="material-symbols-outlined">
                    timer
                </span>
            </div>
            <div class="contenedor_productos">
                <div class="producto">
                    <div class="contenedor_imagen"><img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" alt=""></div>
                    <h3>
                        <? $tabla = mysqli_fetch_array($result);
                        $producto_it = $tabla["producto_it"];
                        echo $producto_it; ?>
                    </h3>
                    <div class="precios">
                        <p class="precio_antiguo">
                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                        </p>
                        <p class="precio_oferta">
                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                        </p>
                    </div>
                    <a href="">
                        Comprar
                    </a>
                </div>

                <div class="producto">
                    <div class="contenedor_imagen"><img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" alt=""></div>
                    <h3>
                        <? $tabla = mysqli_fetch_array($result);
                        $producto_it = $tabla["producto_it"];
                        echo $producto_it; ?>
                    </h3>
                    <div class="precios">
                        <p class="precio_antiguo">
                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                        </p>
                        <p class="precio_oferta">
                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                        </p>
                    </div>
                    <a href="">
                        Comprar
                    </a>
                </div>

                <div class="producto">
                    <div class="contenedor_imagen"><img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" alt=""></div>
                    <h3>
                        <? $tabla = mysqli_fetch_array($result);
                        $producto_it = $tabla["producto_it"];
                        echo $producto_it; ?>
                    </h3>
                    <div class="precios">
                        <p class="precio_antiguo">
                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                        </p>
                        <p class="precio_oferta">
                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                        </p>
                    </div>
                    <a href="">
                        Comprar
                    </a>
                </div>

                <div class="producto">
                    <div class="contenedor_imagen"><img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" alt=""></div>
                    <h3>
                        <? $tabla = mysqli_fetch_array($result);
                        $producto_it = $tabla["producto_it"];
                        echo $producto_it; ?>
                    </h3>
                    <div class="precios">
                        <p class="precio_antiguo">
                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv01_it"]))) ?>
                        </p>
                        <p class="precio_oferta">
                            <? echo ($simbolo_mone . money_format('%n', ($tabla["pv03_it"]))) ?>
                        </p>
                    </div>
                    <a href="">
                        Comprar
                    </a>
                    
                </div>
            </div>
        </div>
        <div class="contenedor_imagenes_grid grid_syscomputer">
            <div class="imagen_1">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_4_mas_10px_3.png" alt="">
            </div>
            <div class="imagen_2">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_2_5.png" alt="">
            </div>
            <div class="imagen_3">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_2_5.png" alt="">
            </div>
            <div class="imagen_4">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_2_4.png" alt="">
            </div>
            <div class="imagen_5">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_2_4.png" alt="">
            </div>
 
        </div>
        <div class="contenedor_quienes_somos">
            <h3>¿Quienes somos?</h3>
            <p>Somos una empresa comercializadora de productos generales y tecnológicos de calidad y garantía. Nuestra experiencia data de más de 25 años en el mercado PERUANO, siendo parte del Grupo SYSCOMPUTER. Contamos con una vitrina de productos de seguridad e informática. En esta situación de cuarentena activamos nuestro servicio DELIVERY. Gracias por su confianza y recuerde que trabajamos para usted.</p>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/+51959956000" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:+51959956000">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="division_secciones"></div>

    <div class="bloque_marca bloque_marca_mujer_bonita"  id="mujer_bonita">
        <img src="assets/img/imagenes_index/logo_mujer_bonita.png" alt="">
        <div class="contenedor_ofertas_semana">
            <div class="header_ofertas">
                <h2>OFERTAS DE LA SEMANA</h2>
                <span class="material-symbols-outlined">
                    timer
                </span>
            </div>
            <div class="contenedor_productos">
                <div class="producto">
                    <div class="contenedor_imagen"><img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_1_1.png" alt=""></div>
                    <h3>LAPTOP LENOVO AMD RYZEN 5 752U 2.8/4.3GHZ IDEAPAD 1 15AM 15.5” FHD...</h3>
                    <div class="precios">
                        <p class="precio_antiguo">S/. 1699.00</p>
                        <p class="precio_oferta">S/. 1599.00</p>
                    </div>
                    <a href="">
                        Comprar
                    </a>
                </div>

                <div class="producto">
                    <div class="contenedor_imagen"><img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_1_1.png" alt=""></div>
                    <h3>LAPTOP LENOVO AMD RYZEN 5 752U 2.8/4.3GHZ IDEAPAD 1 15AM 15.5” FHD...</h3>
                    <div class="precios">
                        <p class="precio_antiguo">S/. 1699.00</p>
                        <p class="precio_oferta">S/. 1599.00</p>
                    </div>
                    <a href="">
                        Comprar
                    </a>
                </div>

                <div class="producto">
                    <div class="contenedor_imagen"><img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_1_1.png" alt=""></div>
                    <h3>LAPTOP LENOVO AMD RYZEN 5 752U 2.8/4.3GHZ IDEAPAD 1 15AM 15.5” FHD...</h3>
                    <div class="precios">
                        <p class="precio_antiguo">S/. 1699.00</p>
                        <p class="precio_oferta">S/. 1599.00</p>
                    </div>
                    <a href="">
                        Comprar
                    </a>
                </div>

                <div class="producto">
                    <div class="contenedor_imagen"><img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_1_1.png" alt=""></div>
                    <h3>LAPTOP LENOVO AMD RYZEN 5 752U 2.8/4.3GHZ IDEAPAD 1 15AM 15.5” FHD...</h3>
                    <div class="precios">
                        <p class="precio_antiguo">S/. 1699.00</p>
                        <p class="precio_oferta">S/. 1599.00</p>
                    </div>
                    <a href="">
                        Comprar
                    </a>
                </div>
            </div>
        </div>
        <div class="contenedor_imagenes_grid grid_mujer_bonita">
            <div class="imagen_6">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_3_5.png" alt="">
            </div>
            <div class="imagen_7">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_3_5.png" alt="">
            </div>
            <div class="imagen_8">
                <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_6_3.png" alt="">
            </div>
 
        </div>
        <div class="contenedor_quienes_somos">
            <h3>¿Quienes somos?</h3>
            <p>Somos una empresa comercializadora de productos generales y tecnológicos de calidad y garantía. Nuestra experiencia data de más de 25 años en el mercado PERUANO, siendo parte del Grupo SYSCOMPUTER. Contamos con una vitrina de productos de seguridad e informática. En esta situación de cuarentena activamos nuestro servicio DELIVERY. Gracias por su confianza y recuerde que trabajamos para usted.</p>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/+51959956060" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:+51959956060">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="division_secciones"></div>

    <div class="bloque_marca_interclass" id="interclass">
        <img src="assets/img/imagenes_index/logo_inter_class.png" alt="">
        <div class="contenedor_grid_interclass">
            <div class="contenedor_imagen_inter">
                <img src="assets/img/imagenes_index/imagenes_of/aviso_curso_web.jpg" alt="">
            </div>
            <div class="contenedor_imagen_inter">
                <img src="assets/img/imagenes_index/imagenes_of/f_contenido_excel_2024.jpg" alt="">
            </div>
            <div class="contenedor_formulario">
                <h4>Deseo obtener una revisión GRATUITA de mi equipo. Gracias</h4>
                <div class="contenedor_botones_de_contacto">
                    <a href="https://wa.me/+51959956000" target="_blank">
                        <p>Escribir por Whatsapp</p>
                        <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                    </a>
    
                    <a href="tel:+51959956000">
                        <p>Llamar por teléfono</p>
                        <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                    </a>
                </div>
                <form action="">
                    <div class="campo_texto_linea">
                        <label for="fname">¿Que cursos?</label>
                        <input type="text" id="fname" name="fname" value="" placeholder="Ej. Corel Draw">
                    </div>
                    <div class="campo_texto_linea">
                        <label for="fname">Nombre y Apellido:</label>
                        <input type="text" id="fname" name="fname" value="" placeholder="Ej. Juan Carlos Pérez">
                    </div>
                    <div class="campo_texto_linea">
                        <label for="fname">Número Telefónico:</label>
                        <input type="text" id="fname" name="fname" value="" placeholder="Ej. 987654321" type="number">
                    </div>
                    <button>Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="division_secciones mg-bt-none"></div>

    <div class="bloque_servicio_tecnico">
        <div class="contenedor_imagen_servicio">
            <img src="assets/img/imagenes_index/Medidas_proporciones/proporcion_1_1.png" alt="">
        </div>
        <div class="contenedor_formulario">
            <h4>Deseo obtener una revisión GRATUITA de mi equipo. Gracias</h4>
            <div class="contenedor_botones_de_contacto">
                <a href="https://wa.me/+51959956000" target="_blank">
                    <p>Escribir por Whatsapp</p>
                    <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                </a>

                <a href="tel:+51959956000">
                    <p>Llamar por teléfono</p>
                    <img src="assets/img/imagenes_index/logo_llamada_negro.png" alt="">
                </a>
            </div>
            <form action="">
                <div class="campo_texto_linea">
                    <label for="fname">Nombre:</label>
                    <input type="text" id="fname" name="fname" value="" placeholder="Ej. Juan Carlos Perez">
                </div>
                <div class="campo_texto_linea">
                    <label for="fname">Descripción de la falla:</label>
                    <textarea name="" id="" cols="30" rows="5" placeholder="El problema que tengo es ..."></textarea>
                </div>
                <div class="campo_texto_linea">
                    <label for="fname">Número Telefónico:</label>
                    <input type="text" id="fname" name="fname" value="" placeholder="Ej. 987654321" type="number">
                </div>
                <button>Enviar</button>
            </form>
        </div>
    </div>


    <div class="contenedor_marcas">
        <h3>NUESTROS PRINCIPALES CLIENTES</h3>
        <div class="contenedor_slider">
            <div class="slider-track">
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_1_23_40.png" alt=""></div>
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_2_23_40.png" alt=""></div>
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_3_23_40.png" alt=""></div>
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_4_23_40.png" alt=""></div>
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_5_23_40.png" alt=""></div>

                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_1_23_40.png" alt=""></div>
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_2_23_40.png" alt=""></div>
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_3_23_40.png" alt=""></div>
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_4_23_40.png" alt=""></div>
                <div class="slide"><img src="assets/img/imagenes_index/Medidas_proporciones/Proporciones_marcas/marca_5_23_40.png" alt=""></div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div>
            <h4>Tienda exhibición:</h4>
            <p>Av. Porongoche 323 (1/2 cuadra del Mall Aventura Plaza - Porongoche)</p>

            <h4>Almacen:</h4>
            <p>Calle Sena 105 - Coop 58 (1/2 cuadra del Mall Aventura Porongoche)</p>
        </div>

        <div>
            <h4>Teléfonos:</h4>
            <ul>
                <li>959956000</li>
                <li>959956060</li>
            </ul>

            <h4>Correo electrónico:</h4>
            <ul>
                <li>jpawasac@gmail.com</li>
                <li>jpawasac@gmail.com</li>
            </ul>
        </div>
        <div>
            <ul class="lista_de_redes_sociales">
                <li>
                    <a href="#">
                        <img src="assets/img/imagenes_index/logo_facebook_blanco.png" alt="">
                        <p>instagram/jpawaj</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/imagenes_index/logo_facebook_blanco.png" alt="">
                        <p>instagram/jpawaj</p>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <img src="assets/img/imagenes_index/logo_instagram_blanco.png" alt="">
                        <p>instagram/jpawaj</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                        <p>instagram/jpawaj</p>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="assets/img/imagenes_index/logo_whatsapp_blanco.png" alt="">
                        <p>instagram/jpawaj</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="contenedor_final_footer">
            <img src="assets/img/imagenes_index/logo_JPAWAJ_blanco.png" alt="">
            <p>Arequipa - Peru - 2024</p>
        </div>
    </div>

    <script src="assets/js/navegador.js"></script>
    <script src="assets/js/slider_automatico.js"></script>
</body>
</html>