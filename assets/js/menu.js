$(document).ready(function() {
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
});

//Usamos funciones especificas de jQuery para remover ciertos estilos y atributos
//cuando el documento se cargue y pasen 500 ms para fijar estilos y la interfaz se visualice correctamente
$(function() {
    var contenedor = $("div").hasClass("container");
    if (contenedor) {
        setTimeout(function() {
            $('#barra').removeAttr("style");
        }, 500);

        setTimeout(function() {
            $(".container").css("transition", "none");
        }, 500);
    }
});

//Creamos la función click para abirar la venta de notificaciones y aplicamos estilos
$("#usuarioclick").click(function() {
    var notiabiertas = document.getElementById("menuusuario");
    if (notiabiertas.style.display != 'none') {
        notiabiertas.style.display = 'none';

    } else {
        notiabiertas.style.display = 'block'


    }
});