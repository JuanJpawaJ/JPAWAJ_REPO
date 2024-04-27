<!-- <link rel="stylesheet" href="../assets/css/estilos_carta_producto.css"> -->

<div class="carta_producto">
    <div class="contenedor_imagen"><img src="<?php echo $imagen;?>" /></div>
    <h3>
        <?php echo $nombre_producto;?>
    </h3>
    <div class="precios">
        <p class="precio_oferta">
            <?php echo $precio;?>
        </p>
    </div>
    <a href="<?php echo $enlace;?>">
        Ver producto
    </a>
</div>