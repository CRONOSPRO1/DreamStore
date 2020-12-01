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
function responder_queja(nombre, queja, id_queja) {
    $('#responder_queja').modal('show');
    document.getElementById("nombre").innerHTML = nombre;
    document.getElementById("queja").innerHTML = queja;
    document.getElementById("id_queja").value = id_queja;
}

function confirmacion() {
    $('#confirmacion').modal('show');
}

function queja_respondida(queja_respuesta, respuesta) {
    $('#queja_respondida').modal('show');
    document.getElementById("queja_respuesta").innerHTML = queja_respuesta;
    document.getElementById("respuesta").innerHTML = respuesta;
}


//Funcion que despliega la ventana modal de usuarios
function mostrarDetalles_usuario(
    nombre, apellido, numero_identificacion, ciudad, email, telefono, productos_publicados, productos_vendidos, compras_realizadas, quejas) {
    $('#usuarios').modal('show');


    var nombre_apellido = nombre + " " + apellido;

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

function mostrarDetalles_empresa() {
    $('#empresas').modal('show');


    document.getElementById("nombre").innerHTML = nombre;
    document.getElementById("numero_identificacion").innerHTML = numero_identificacion;
    document.getElementById("ciudad").innerHTML = ciudad;
    document.getElementById("email").innerHTML = email;
    document.getElementById("telefono").innerHTML = telefono;
    document.getElementById("productos_publicados").innerHTML = productos_publicados;
    document.getElementById("productos_vendidos").innerHTML = productos_vendidos;


}

function mostrarDetalles_productos(
    id_producto, nombre_producto, cantidad, ciudad, categoria,
    precio, id_vendedor, estado, marca, descripcion, imagen1, imagen2, imagen3
) {
    $('#productos').modal('show');

    var input = " <img ";
    var input2 = " style='max-height:19rem;min-width:70%' class='d-block' alt='Imagen no encontrada'>";
    var imagen1 = input + "src='" + imagen1 + "'" + input2;
    var imagen2 = input + "src='" + imagen2 + "'" + input2;
    var imagen3 = input + "src='" + imagen3 + "'" + input2;



    document.getElementById("id_producto").innerHTML = id_producto;
    document.getElementById("nombre_producto").innerHTML = nombre_producto;
    document.getElementById("cantidad").innerHTML = cantidad;
    document.getElementById("ciudad").innerHTML = ciudad;
    document.getElementById("categoria").innerHTML = categoria;
    document.getElementById("precio").innerHTML = precio;
    document.getElementById("id_vendedor").innerHTML = id_vendedor;
    document.getElementById("estado").innerHTML = estado;
    document.getElementById("marca").innerHTML = marca;
    document.getElementById("descripcion").innerHTML = descripcion;
    document.getElementById("imagen1").innerHTML = imagen1;
    document.getElementById("imagen2").innerHTML = imagen2;
    document.getElementById("imagen3").innerHTML = imagen3;





}

function mostrarDetalles_compras(
    id_compra, fecha_compra, nombre_producto, precio, nombre_vendedor, nombre_comprador, direccion, imagen, compra, id_comprador
) {
    $('#compras').modal('show');

    var input = " <img ";
    var input2 = " width='30em' height='30em' alt='Imagen no encontrada'>";
    var imagen = input + "src='" + imagen + "'" + input2;

    document.getElementById("id_compra").innerHTML = id_compra;
    document.getElementById("fecha_compra").innerHTML = fecha_compra;
    document.getElementById("nombre_producto").innerHTML = nombre_producto;
    document.getElementById("precio").innerHTML = precio;
    document.getElementById("nombre_vendedor").innerHTML = nombre_vendedor;
    document.getElementById("nombre_comprador").innerHTML = nombre_comprador;
    document.getElementById("direccion").innerHTML = direccion;
    document.getElementById("imagen").innerHTML = imagen;
    document.getElementById("compra").value = compra;
    document.getElementById("id_comprador").value = id_comprador;

}