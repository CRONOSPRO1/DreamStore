<?php require_once("view/layout/barrausuario.php");?>
 <div class="container w-75">
    <form action="" method="POST">
      <div class="form-group w-100 ">
        <label for="exampleInputtext">Nombre Del Producto*</label>
        <input type="text" class="form-control text-white w-100" id="casilla">
      </div>
      <div class="form-group w-100 ">
        <label for="exampleInputtext">Descripcion*</label>
        <input type="text" class="form-control text-white" id="casilla">
      </div>
      <fieldset class="form-group w-100 ">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Cantidad*</legend>
          <div class="col-sm-5">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="opcion" id="opcion1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                1
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="opcion" id="opcion2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                2
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="opcion" id="opcion3" value="option3">
              <label class="form-check-label" for="gridRadios3">
                3
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <form action="" method="POST">
        <div class="form-group w-100 ">
          <label for="exampleInputtext">Ciudad*</label>
          <input type="text" class="form-control text-white" id="casilla">
        </div>
        <div class="form-group w-100 col-md-4 ">
          <label for="inputState">Categoria*</label>
          <select id="casilla" class="form-control text-white">
            <option selected></option>
            <option>Tecnologia</option>
            <option>Salud</option>
            <option>Moda y Accesorios</option>
            <option>Belleza y Cuidado de la piel</option>
            <option>Deportes</option>
            <option>Bebes y Juguetes</option>
            <option>Productos de Aseo</option>
            <option>Supermercado</option>
            <option>Carros y Motos</option>
            <option>Inmuebles</option>
            <option>Mascotas</option>
            <option>Hogar y Decoracion</option>
            <option>Libreria</option>
            <option>Epoca del Año</option>

          </select>
        </div>
        <div class="col">
          <label for="exampleInputtext">Precio*</label>
          <input type="text" class="form-control text-white" id="casilla" placeholder="ingrese el valor del producto">
        </div>
        <div class="col">
          <label for="exampleInputtext ">Situacion Del Producto*</label>
          <input type="text" class="form-control text-white" id="casilla" placeholder=" ingrese el estado en el que encuentra el producto">
        </div>
        <div class="col">
          <label for="exampleInputtext">Marca Del Producto*</label>
          <input type="text" class="form-control text-white" id="casilla" placeholder=" ingrese la marca del producto">
        </div>
        <div>
          <label for="exampleInputtext">Fecha</label>
          <input type="date" class="form-control text-white" id="casilla">
        </div>
        <form>
          <div class="form-group w-100">
            <label for="exampleFormControlFile1">Imagen Del Producto</label>
            <input type="file" class="form-control-file" id="exampleFormimagen1">
          </div>
        </form>
        <form>
          <div class="form-group w-100">
            <label for="exampleFormControlFile1">Imagen Del Producto</label>
            <input type="file" class="form-control-file" id="exampleFormimagen1">
          </div>
        </form>
        <form>
          <div class="form-group w-100">
            <label for="exampleFormControlFile1">Imagen Del Producto</label>
            <input type="file" class="form-control-file" id="exampleFormimagen1">
          </div>
        </form>

      </form>
      <button type="submit" class="btn btn-primary text-center">Publicar</button>





  </div>
  </div>


  <?php require_once("view/layout/footer.php") ?>