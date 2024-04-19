document.addEventListener("DOMContentLoaded", function() {
    // Obtener el contenedor del slider
    var sliderTrack = document.querySelector(".contenedor_slider .slider-track");

    // Obtener las imágenes originales
    var originalSlides = sliderTrack.querySelectorAll(".slide");

    // Clonar y agregar los divs de imágenes originales al slider según sea necesario
    var totalSlides = originalSlides.length;
    for (var i = 0; i < totalSlides * 2; i++) {
        var originalSlide = originalSlides[i % totalSlides]; // Usamos el operador de módulo para ciclar los divs de imágenes
        var clonedSlide = originalSlide.cloneNode(true); // Clonar el div de la imagen
        sliderTrack.appendChild(clonedSlide); // Agregar el clon al slider
    }
});