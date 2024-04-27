<link rel="stylesheet" href="assets/css/estilos_carta_producto.css">

<div class="carta_producto">
    <div class="contenedor_imagen"><img src="<?php echo " siga_jpawaj/img_items/" . $tabla["img_it"];?>" /></div>
    <h3>
        <?php echo $nombre_producto;?>
    </h3>
    <div class="precios">
        <p class="precio_oferta">
            S/. <?php echo $precio;?>
        </p>
    </div>
    <a href="#">
        Ver producto
    </a>
</div>