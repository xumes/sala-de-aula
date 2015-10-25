<?php include '../../partials/top-admin.php'; ?>

    <?php include '../../partials/menu-admin.php'; ?>

    <div class="container" id="large">

      <div class="row">
        <div class="col-md-2">
          <?php include '../../partials/menu-left-admin.php'; ?>
        </div>
        <div class="col-md-10">
          <div class="pull-right"><a href="#" class="btn btn-success"><i class="fa fa-file-o"></i> Salvar Conteúdo</a></div>
          <h1>Criar/Editar Conteúdo</h1>

          <form>
            <div class="form-group">
                <label for="InputTitle">Título</label>
                <input type="text" class="form-control" id="InputTitle" placeholder="Digite o Titulo">
            </div>
            <div class="form-group">
                <label for="InputContent">Conteúdo</label>
                <textarea class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label class="radio-inline">
                  <input type="radio" name="statusContent" id="trueContent" value="1" checked="checked"> Liberado
                </label>
                <label class="radio-inline">
                  <input type="radio" name="statusContent" id="falseContent" value="0"> Bloqueado
                </label>
            </div>
          </form>

        </div>
      </div>
    </div>

    <?php include '../../partials/footer.php'; ?>

<?php include '../../partials/bottom.php'; ?>