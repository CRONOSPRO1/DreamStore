<!-- Grafico para usuarios desde dashborad Administrador-->
<?php
$data_usuarios_nuevos = array();
for ($mes = 0; $mes <= 12; $mes++) {
    foreach ($this->model_usuario->usuarios_nuevos_año($mes) as $row) {
        $data_usuarios_nuevos[] = $row['cantidad'];
    }
}
?>

<?php
$data_usuarios_eliminados = array();
for ($mes = 0; $mes <= 12; $mes++) {
    foreach ($this->model_usuario->usuarios_eliminados_año($mes) as $row) {
        $data_usuarios_eliminados[] = $row['cantidad'];
    }
}
?>


<script>
    (function() {



        'use strict'

        feather.replace()

        // Graphs
        var ctx = document.getElementById('GraficoUsuarios')
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
                            '<?= $data_usuarios_eliminados['1'] ?>',
                            '<?= $data_usuarios_eliminados['2'] ?>',
                            '<?= $data_usuarios_eliminados['3'] ?>',
                            '<?= $data_usuarios_eliminados['4'] ?>',
                            '<?= $data_usuarios_eliminados['5'] ?>',
                            '<?= $data_usuarios_eliminados['6'] ?>',
                            '<?= $data_usuarios_eliminados['7'] ?>',
                            '<?= $data_usuarios_eliminados['8'] ?>',
                            '<?= $data_usuarios_eliminados['9'] ?>',
                            '<?= $data_usuarios_eliminados['10'] ?>',
                            '<?= $data_usuarios_eliminados['11'] ?>',
                            '<?= $data_usuarios_eliminados['12'] ?>'

                        ],
                        label: "Usuarios eliminados",
                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: 'red',
                        borderWidth: 4,
                        pointBackgroundColor: 'red'
                    }, {
                        data: [
                            '<?= $data_usuarios_nuevos['1'] ?>',
                            '<?= $data_usuarios_nuevos['2'] ?>',
                            '<?= $data_usuarios_nuevos['3'] ?>',
                            '<?= $data_usuarios_nuevos['4'] ?>',
                            '<?= $data_usuarios_nuevos['5'] ?>',
                            '<?= $data_usuarios_nuevos['6'] ?>',
                            '<?= $data_usuarios_nuevos['7'] ?>',
                            '<?= $data_usuarios_nuevos['8'] ?>',
                            '<?= $data_usuarios_nuevos['9'] ?>',
                            '<?= $data_usuarios_nuevos['10'] ?>',
                            '<?= $data_usuarios_nuevos['11'] ?>',
                            '<?= $data_usuarios_nuevos['12'] ?>'
                        ],
                        label: "Usuarios registrados",
                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: '#007bff',
                        borderWidth: 4,
                        pointBackgroundColor: '#007bff'

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
</script>



<!-- Grafico para productos desde dashborad Administrador-->
<?php
$data_productos_registrados = array();
for ($mes = 0; $mes <= 12; $mes++) {
    foreach ($this->model_productos->productos_nuevos_año($mes) as $row) {
        $data_productos_registrados[] = $row['cantidad'];
    }
}
?>

<script>
    (function() {
        'use strict'

        feather.replace()

        // Graphs
        var ctx = document.getElementById('GraficoProductos')
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
                        '<?= $data_productos_registrados['1'] ?>',
                        '<?= $data_productos_registrados['2'] ?>',
                        '<?= $data_productos_registrados['3'] ?>',
                        '<?= $data_productos_registrados['4'] ?>',
                        '<?= $data_productos_registrados['4'] ?>',
                        '<?= $data_productos_registrados['5'] ?>',
                        '<?= $data_productos_registrados['6'] ?>',
                        '<?= $data_productos_registrados['7'] ?>',
                        '<?= $data_productos_registrados['8'] ?>',
                        '<?= $data_productos_registrados['9'] ?>',
                        '<?= $data_productos_registrados['10'] ?>',
                        '<?= $data_productos_registrados['11'] ?>',
                        '<?= $data_productos_registrados['12'] ?>',
                    ],
                    label: "Productos publicados",
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
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
</script>



<!-- Grafico para compras desde dashborad Administrador-->

<?php
$data_compras = array();
for ($mes = 0; $mes <= 12; $mes++) {
    foreach ($this->model_miscompras->compras_año($mes) as $row) {
        $data_compras[] = $row['cantidad'];
    }
}
?>
<script>
    (function() {
        'use strict'

        feather.replace()

        // Graphs
        var ctx = document.getElementById('GraficoCompras')
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
                        '<?= $data_compras['1'] ?>',
                        '<?= $data_compras['2'] ?>',
                        '<?= $data_compras['3'] ?>',
                        '<?= $data_compras['4'] ?>',
                        '<?= $data_compras['4'] ?>',
                        '<?= $data_compras['5'] ?>',
                        '<?= $data_compras['6'] ?>',
                        '<?= $data_compras['7'] ?>',
                        '<?= $data_compras['8'] ?>',
                        '<?= $data_compras['9'] ?>',
                        '<?= $data_compras['10'] ?>',
                        '<?= $data_compras['11'] ?>',
                        '<?= $data_compras['12'] ?>',
                    ],
                    label: "Compras",
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
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
</script>











<?php
$data_empresas = array();
for ($mes = 0; $mes <= 12; $mes++) {
    foreach ($this->model_empresa->empresas_nuevas_año($mes) as $row) {
        $data_empresas[] = $row['cantidad'];
    }
}
?>

//
<script>
    (function() {
        'use strict'

        feather.replace()

        // Graphs
        var ctx = document.getElementById('GraficoEmpresas')
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
                        '<?= $data_empresas['1'] ?>',
                        '<?= $data_empresas['2'] ?>',
                        '<?= $data_empresas['3'] ?>',
                        '<?= $data_empresas['4'] ?>',
                        '<?= $data_empresas['4'] ?>',
                        '<?= $data_empresas['5'] ?>',
                        '<?= $data_empresas['6'] ?>',
                        '<?= $data_empresas['7'] ?>',
                        '<?= $data_empresas['8'] ?>',
                        '<?= $data_empresas['9'] ?>',
                        '<?= $data_empresas['10'] ?>',
                        '<?= $data_empresas['11'] ?>',
                        '<?= $data_empresas['12'] ?>',
                    ],
                    label: "Nuevas",
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
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
</script>






<!--Mostrar las ventas realizadas por una empresa-->

<?php
$data_ventas = array();
for ($mes = 0; $mes <= 12; $mes++) {
    foreach ($this->model_ventas->ventas_empresa(1, $mes) as $row) {
        $data_ventas[] = $row['cantidad'];
        echo  $row['cantidad'];
    }
}
?>

<script>
    (function() {
        'use strict'

        feather.replace()

        // Graphs
        var ctx = document.getElementById('GraficoVentasEmpresa')
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
                        '<?= $data_ventas['1'] ?>',
                        '<?= $data_ventas['2'] ?>',
                        '<?= $data_ventas['3'] ?>',
                        '<?= $data_ventas['4'] ?>',
                        '<?= $data_ventas['4'] ?>',
                        '<?= $data_ventas['5'] ?>',
                        '<?= $data_ventas['6'] ?>',
                        '<?= $data_ventas['7'] ?>',
                        '<?= $data_ventas['8'] ?>',
                        '<?= $data_ventas['9'] ?>',
                        '<?= $data_ventas['10'] ?>',
                        '<?= $data_ventas['11'] ?>',
                        '<?= $data_ventas['12'] ?>',
                    ],
                    label: "Productos publicados",
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
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
</script>