# Evitar los siguientes errores

1. Llamar a las primeras filas (registros) de una tabla. 

``` php
//PRIMER BLOQUE
<? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"]; ?>

<img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />

<? echo ($simbolo_mone . ($tabla["pv01_it"])) ?>
<? echo ($simbolo_mone . ($tabla["pv03_it"])) ?>


//SEGUNDO BLOQUE
<? $tabla = mysqli_fetch_array($result);
    $producto_it = $tabla["producto_it"]; ?>

<img src="<? echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />

<? echo ($simbolo_mone . ($tabla["pv01_it"])) ?>
<? echo ($simbolo_mone . ($tabla["pv03_it"])) ?>
```

- En este caso se pueden ver 2 bloques de codigo exactamente iguales, sin embargo no van a mostrar lo mismo. Ya que al llamar a `mysql_fetch_array()`, la primera vez mostrará le primer registro, si lo volvemos a llmar ya no mostrará el primer registro, sino el segundo registro y así sucesivamente. Sin embargo no es una buena practica recomendada

Lo correcto sería usar un bucle para mostrar estos registros

```php
while ($tabla = mysqli_fetch_array($result)) {
        $producto_it = $tabla["producto_it"];
        echo $producto_it;
?>
        <img src="<?php echo "siga_jpawaj/img_items/" . $tabla["img_it"]; ?>" width="130" height="%" />
        <?php echo ($simbolo_mone . ($tabla["pv01_it"])) ?>
        <?php echo ($simbolo_mone . ($tabla["pv03_it"])) ?>
        <br>
<?php
```


# Correcciones a hacer

- ~~Hacer que el texto de las cartas del producto se reduzca para que tengan un limite.~~
- ~~Las imagenes del slider de entrada, son backgrounds, y por eso no se puede adaptar a un formato correspondiente. Modificar los backgrounds a imagenes img.~~



# Observaciones

- El archivo `a_lisgeneral.php` y `a_lisimagenes.php` parecen ser lo mismo, la diferencia sería que uno tiene el tamaño de las imagenes más grandes
