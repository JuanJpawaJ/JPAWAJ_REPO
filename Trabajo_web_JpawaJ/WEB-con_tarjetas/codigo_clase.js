import { cursos } from "./base_de_datos_curso.js";

class Cartas_cursos {

    constructor(titulo_curso,imagen_curso,descripcion_curso,enlace_youtube,enlace_archivos,dia_semana){
        this.titulo = titulo_curso;
        this.imagen = imagen_curso;
        this.descripcion = descripcion_curso;
        this.enlace_youtube = enlace_youtube;
        this.enlace_archivos = enlace_archivos;
        this.dia_semana = dia_semana;
    }

    setTitulo(titulo){this.titulo = titulo;}
    setImagen(imagen){this.imagen = imagen;}
    setDescripcion(descripcion){this.descripcion = descripcion;}
    setEnlace_youtube(enlace_youtube){this.enlace_youtube = enlace_youtube;}
    setEnlace_archivos(enlace_archivos){this.enlace_archivos = enlace_archivos;}

    getTitulo(){return this.titulo}
    getImagen(){return this.imagen}
    getDescripcion(){return this.descripcion}
    getEnlace_youtube(){return this.enlace_youtube}
    getEnlace_archivos(){return this.enlace_archivos}

    renderizar_carta(cartas_tipo){
        var modelo_card_curso = document.querySelectorAll(".modelo_card_curso > #container")[0];

        if(cartas_tipo == "cartas_hoy"){
            var container_cards = document.querySelectorAll("#container_cards > .row")[0];
        }else if(cartas_tipo == "cartas_otras"){
            var container_cards = document.querySelectorAll("#container_cards > .accordion > div > div .row")[0];
        }

        var nueva_carta = modelo_card_curso.cloneNode(true);
        nueva_carta.classList.remove("d-none");
    
        nueva_carta.querySelector(".card > img").src = this.imagen;
        var dia_de_semana = nueva_carta.querySelector(".card > h5#dia_semana");
        
        dia_de_semana.innerHTML = this.dia_semana;
        if(this.hoy_toca()){
            dia_de_semana.classList.add("dia_true");
        }else{dia_de_semana.classList.add("dia_false")}

        nueva_carta.querySelector(".card > .card-body > .card-title").innerHTML = this.titulo;
        nueva_carta.querySelector(".card > .card-body > .card-text").innerHTML = this.descripcion;
        nueva_carta.querySelector(".card > .card-body > .btn-danger").href = this.enlace_youtube;
        nueva_carta.querySelector(".card > .card-body > .btn-warning").href = this.enlace_archivos;

        container_cards.appendChild(nueva_carta);
    }

    hoy_toca(){
        var dias_de_la_semana ={
            1:"Lunes",
            2:"Martes",
            3:"Miércoles",
            4:"Jueves",
            5:"Viernes",
            6:"Sábado",
            7:"Domingo"
        };

        var fecha = new Date();
        var dia_hoy = fecha.getDay()
        dia_hoy = dias_de_la_semana[dia_hoy]
        
        var toca_hoy = false;

        for (var i=0; i<this.dia_semana.length ; i++){
            if (this.dia_semana[i] == dia_hoy){
                toca_hoy = true;
            }
        }

        return toca_hoy;
    }

}
        
function renderizar_ordenado(base_datos){
    
    for(var i=0; i<base_datos.length; i++){
        
        var carta_datos = base_datos[i];
        var nueva_carta = new Cartas_cursos(
            carta_datos.titulo_curso,
            carta_datos.imagen_curso,
            carta_datos.descripcion_curso,
            carta_datos.enlace_youtube,
            carta_datos.enlace_archivos,
            carta_datos.dia_semana,
        )
        
        if(nueva_carta.hoy_toca()){
            nueva_carta.renderizar_carta("cartas_hoy");
        }else{
            nueva_carta.renderizar_carta("cartas_otras")
        }
    }
} 

renderizar_ordenado(cursos)