<?php require_once 'view/layout/empresa.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto  col-lg-10 px-md-4">
    <div class="d-flex justify-content-between mr-1 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h2 class="h2">Ventas</h2>
        
    </div>

    <br>


    <div class="container-sm w-25">

        <table class="table table-sm table-borderless w-100  bg-white shadow">
            <tr class="text-center">
                <td rowspan="2" class="align-middle w-25  bg-success  text-white">
                    <span class="btn bg-success text-white w-100 ">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </td>
                <td ><span class="h6">Ventas totales realizadas</span></td>
            </tr>
            <tr class=" border-top   text-center">
                
                <td class="w-75"><span class="h5  text-success "><?php foreach ($this->model_ventas->ventas_totales() as $row){ echo $row['resultado']; } ?></span> </td>
            </tr>

        </table>


    </div>






    <canvas class="my-4 w-100" id="myChart" width="300" height="115"></canvas>

    <hr>


    <?php require_once 'view/layout/footer.php'; ?>