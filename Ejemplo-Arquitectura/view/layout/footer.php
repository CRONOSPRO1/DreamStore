<footer style="background: rgb(0,0,0); color: #ffff;" style="background: rgb(0,0,0);">
        <div class="d-flex justify-content-center align-items-center flex-wrap">
            <h2 style="font-weight: 50;">Contacto</h2>
        </div>
            <div class="list-group list-group-horizontal-sm">
                <a class="list-group-item list-group-item-action list-group-item-dark">Telefono</a>
                <a href="#" class="list-group-item list-group-item-action">12345678</a>
                <a class="list-group-item list-group-item-action list-group-item-dark">Email corporativo</a>
                <a href="#" class="list-group-item list-group-item-action">contacto@ejemplo.com</a>
                <a class="list-group-item list-group-item-action list-group-item-dark">Ubicación</a>
                <a class="list-group-item list-group-item-action">Bogotá - Cundinamarca</a>
            </div>
    <div class="d-flex justify-content-center align-items-center flex-wrap">
      <span>&copy; Copyright Senasoft <?php echo say_year(); ?></span>
      <a>. Todos los derechos reservados</a>
    </div>
</footer>

<?php
function say_year()
{
  return date('Y');
}

?>

</html>