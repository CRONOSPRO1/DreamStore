<form action="crud.php" method="GET">
    <input type="text" name="tipo">
    <input type="submit" value="Enviar">
</form>



<?php
if ($_GET) {
    //Este tipo es igual al que viene por get para tomar el tipo de accion necesaria
    $tipo = $_GET['tipo'];
    echo $tipo;
    switch ($tipo) {
            //Asi se evalua si el tipo que viene por url es igual a alguno de los datos
        case "delete":
        case "Delete":
            echo 'Eliminar archivos';
            break;
        case "save":
        case "Save":
            echo 'Guardar archivos';
            break;

        case "Update":
        case "update":
            echo 'Actualizar archivos';
            break;
        default:

            break;
    }
}
