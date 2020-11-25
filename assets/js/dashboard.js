/* globals Chart:false, feather:false */

(function() {
    'use strict'

    feather.replace()

    // Graphs
    var ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre'

            ],
            datasets: [{
                data: [
                    3,
                    5,
                    8,
                    3,
                    49,
                    22,
                    34,
                    11,
                    33,
                    23,
                    2,
                    1
                ],
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: '#0050fd',
                borderWidth: 4,
                pointBackgroundColor: '#0050fd'
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
            legend: {
                display: false
            }
        }
    })
})()

// Creamos la función para el uso de los Tooltpis (Mensajes flotantes)
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
$("#notificacionesclick").click(function() {
    var notiabiertas = document.getElementById("ventanaNotificaciones");
    if (notiabiertas.style.display != 'none') {
        notiabiertas.style.display = 'none';

    } else {
        notiabiertas.style.display = 'block'


    }
});


$("#perfil").click(function() {
    var notiabiertas = document.getElementById("ventanaperfil");
    if (notiabiertas.style.display != 'none') {
        notiabiertas.style.display = 'none';

    } else {
        notiabiertas.style.display = 'block'

    }
});


/*
$("#perfil").click(function() {
    var notiabiertas = document.getElementById("ventanaperfil");
    if (notiabiertas.style.display != 'none') {
        notiabiertas.style.display = 'none';
        document.getElementById("perfil").style.backgroundColor = 'transparent'
        document.getElementById("perfil").style.fontSize = '15px';
        document.getElementById("perfil").style.padding = '0'
        $("#span-margen").addClass("mr-4")

    } else {
        notiabiertas.style.display = 'block'
        document.getElementById("perfil").style.backgroundColor = '#ffffff28'
        document.getElementById("perfil").style.padding = '5px'
        $("#span-margen").removeClass("mr-4").addClass("mr-3")
    }
});*/


//Funcion que despliega la ventana modal de usuarios
function mostarDetalles_usuario(
    id_cli_pro, nombre, apellido, numero_identificacion, ciudad, email, telefono, productos_publicados, productos_vendidos, compras_realizadas, quejas) {
    $('#usuarios').modal('show');


    var nombre_apellido = nombre + " " + apellido;

    document.getElementById("id_cli_pro").innerHTML = id_cli_pro;
    document.getElementById("nombre_apellido").innerHTML = nombre_apellido;
    document.getElementById("numero_identificacion").innerHTML = numero_identificacion;
    document.getElementById("ciudad").innerHTML = ciudad;
    document.getElementById("email").innerHTML = email;
    document.getElementById("telefono").innerHTML = telefono;
    document.getElementById("productos_publicados").innerHTML = productos_publicados;
    document.getElementById("productos_vendidos").innerHTML = productos_vendidos;
    document.getElementById("compras_realizadas").innerHTML = compras_realizadas;
    document.getElementById("quejas").innerHTML = quejas;
}