<?php include '../../partials/top-admin.php'; ?>

    <?php include '../../partials/menu-admin.php'; ?>

    <div class="container" id="large">

      <div class="row">
        <div class="col-md-2">
          <?php include '../../partials/menu-left-admin.php'; ?>
        </div>
        <div class="col-md-10">
          <div class="pull-right"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/admin/content/create.php" class="btn btn-success"><i class="fa fa-file-o"></i> Adicionar Conteúdo</a></div>
          <h1>Lista de Conteúdos Restritos</h1>

          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>#ID</th>
                <th>Título</th>
                <th>Status</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><span class="label label-success">Liberado</span></td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
              </tr>
            </tbody>
          </table>

          <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>

        </div>
      </div>
    </div>

    <?php include '../../partials/footer.php'; ?>

<?php include '../../partials/bottom.php'; ?>