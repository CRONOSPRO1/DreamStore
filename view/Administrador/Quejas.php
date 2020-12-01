<?php require_once 'view/layout/dashboard.php'; ?>
<main role="main" class="col-md-9 ml-sm-auto  col-lg-10 px-md-4">
    <div class="d-flex justify-content-between mr-1 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h2 class="h2">Quejas</h2>
       
    </div>

    <br>


    <div class="table-responsive ">
        <table class="table table-striped table-sm text-center ">
            <thead class="bg-dark text-white h6">
                <tr>
                    <th>Usuario</th>
                    <th>Queja</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <td>Accion</td>

                </tr>
            </thead>

            <tr>
                <?php foreach ($this->model_quejas->listar_quejas() as $row) : ?>

                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['queja'] ?></td>
                    <td><?= $row['fecha'] ?></td>
                    <td><?= $row['hora'] ?></td>

                    <td>
                        <?php if ($row['estado'] == 1) : ?>
                            <a class="btn" data-toggle="tooltip" data-placement="top" title="Ver" href="javascript:void(0)" onclick="queja_respondida(
                                '<?= $row['queja'] ?>',
                                '<?= $row['respuesta'] ?>'
                            )" >
                                <span class="text-info">
                                    <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-envelope-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
                                    </svg>
                                </span>
                            </a>
                        <?php endif; ?>
                        <?php if ($row['estado'] == 0) : ?>
                            <a class="btn" href="javascript:void(0)" onclick="responder_queja('<?=$row['nombre']?>','<?= utf8_decode($row['queja'])?>','<?= $row['id_queja'] ?>')" data-toggle="tooltip" data-placement="top" title="Responder">
                                <span class="text-dark">
                                    <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                                    </svg>
                                </span>
                            </a>
                        <?php endif; ?>

                        <!--Eliminar-->
                        <a class="btn " data-toggle="tooltip" data-placement="top" title="Eliminar"  href="javascript:void(0)" onclick="confirmar()">
                            <span class="text-danger">
                                <svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                </svg>
                            </span>
                        </a>
                    </td>
            </tr>
        <?php endforeach; ?>

        </table>
    </div>



    <!--Modal para responder quejas-->
    <div class="modal" id="responder_queja" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Responder a <span id="nombre" ></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Queja</h6>
                    <form action="<?= base_url ?>Administrador/Responder" method="POST">
                    <span class="text-danger">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z" />
                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                        </svg>
                    </span>
                    <span id="queja"></span>
                    <br>
                    <hr>
                    <h6>Responder:</h6>
                   
                        <textarea name="respuesta" class="p-2" id="" placeholder="Escriba aqui su respuesta" cols="71,9" rows="4"  required=""></textarea>
                        <input type="hidden" name="id_queja" id="id_queja">
                        <input class="btn btn-info form-control" value="Responder" type="submit">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>





    <!--Modal para quejas respondidas-->
    <div class="modal" id="queja_respondida" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Esta queja ya fue respondida
                        <span class="text-success">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                            </svg>
                        </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Queja</h6>
                    <span class="text-danger">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z" />
                            <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
                        </svg>
                    </span>
                    <span id="queja_respuesta"></span>
                    <br>
                    <hr>
                    <h6>Respuesta</h6>
                    <span class="text-primary">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check2-all" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.354 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            <path d="M6.25 8.043l-.896-.897a.5.5 0 1 0-.708.708l.897.896.707-.707zm1 2.414l.896.897a.5.5 0 0 0 .708 0l7-7a.5.5 0 0 0-.708-.708L8.5 10.293l-.543-.543-.707.707z" />
                        </svg>
                    </span>
                    <span id="respuesta"></span>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


<!--Confirmar para eliminar una queja-->
<div class="modal fade" id="confirmar"  tabindex="-1" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Seguro que desea eliminar esta queja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer">
      <a class="btn btn-danger"  href="<?=base_url?>Administrador/EliminarQueja&id=<?=$row['id_queja']?>">Eliminar</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>



    <?php require_once 'view/layout/footer.php'; ?>