
  document.addEventListener('DOMContentLoaded', function() {
    // Selecciona todos los botones y elementos de imagen
    var botonesCopiarEnlace = document.querySelectorAll('.copiarEnlace');
    var botonesDescargarImagen = document.querySelectorAll('.descargarImagen');
    var imagenes = document.querySelectorAll('.imagen');
  
    // Itera sobre cada botón y agrega event listeners
    botonesCopiarEnlace.forEach(function(boton, index) {
      boton.addEventListener('click', function() {
        var enlaceImagen = imagenes[index].src;
  
        var elementoTemporal = document.createElement('textarea');
        elementoTemporal.value = enlaceImagen;
        document.body.appendChild(elementoTemporal);
        elementoTemporal.select();
        document.execCommand('copy');
        document.body.removeChild(elementoTemporal);
  
        alert('¡Enlace copiado!');
      });
    });
  
    botonesDescargarImagen.forEach(function(boton, index) {
      boton.addEventListener('click', function() {
        var enlaceImagen = imagenes[index].src;
  
        var enlaceDescarga = document.createElement('a');
        enlaceDescarga.href = enlaceImagen;
        enlaceDescarga.download = 'imagen_' + index + '.jpg';
        document.body.appendChild(enlaceDescarga);
        enlaceDescarga.click();
        document.body.removeChild(enlaceDescarga);
  
        alert('¡Imagen descargada!');
      });
    });
  });
  
  