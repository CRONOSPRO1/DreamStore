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
                        12,
                        57,
                        81,
                        302,
                        49,
                        22,
                        34,
                        11,
                        33,
                        23,
                        221,
                        111
                    ],
                    label: "Usuarios eliminados",
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#0050fd',
                    borderWidth: 4,
                    pointBackgroundColor: '#0050fd'
                }, {
                    data: [
                        222,
                        111,
                        812,
                        322,
                        492,
                        223,
                        412,
                        111,
                        331,
                        231,
                        223,
                        1232
                    ],
                    label: "Usuarios registrados",
                    lineTension: 0,
                    backgroundColor: 'rgba(252,72,7,0.84)',
                    borderColor: '#0050fd',
                    borderWidth: 4,
                    pointBackgroundColor: '#0050fd'

                }

            ]
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

function Eliminar_Usarios() {
    $("#E_usuario").modal('show');
}

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