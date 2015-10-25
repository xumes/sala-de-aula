<?php include 'partials/top.php'; ?>

    <div class="container">

      <?php include 'partials/logo-menu.php'; ?>

      <div class="row">
        <div class="col-md-3" id="menu-left">
          <?php include 'partials/menu-aluno.php'; ?> 
        </div>
        <div class="col-md-9">
          <h1>Conteúdo do Curso</h1>

          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>#ID</th>
                <th>Título</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/conteudo1.php">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>Titulo do Conteúdo Restrito</td>
                <td><a href="#">Visualizar</a></td>
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

      <?php include 'partials/footer.php'; ?>

    </div>

<?php include 'partials/bottom.php'; ?>