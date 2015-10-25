<?php include '../partials/top-admin.php'; ?>

    <?php include '../partials/menu-admin.php'; ?>

    <div class="container" id="large">

      <div class="row">
        <div class="col-md-2">
          <?php include '../partials/menu-left-admin.php'; ?>
        </div>
        <div class="col-md-10">
          <h1>Meu Perfil</h1>

          <form>
            <div class="form-group">
                <label for="InputNome">Seu Nome</label>
                <input type="text" class="form-control" id="InputNome" placeholder="André Andrade">
            </div>
            <div class="form-group">
                <label for="InputEmail">Seu E-mail</label>
                <input type="email" class="form-control" id="InputEmail" placeholder="andre@estudiosite.com.br">
            </div>
            <div class="form-group">
                <label for="InputSenha">Sua Senha</label>
                <input type="password" class="form-control" id="InputSenha" placeholder="********">
            </div>
            <br>
            <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/admin/" class="btn btn-success btn-lg">Alterar Cadastro</a>
          </form>

        </div>
      </div>
    </div>

    <?php include '../partials/footer.php'; ?>

<?php include '../partials/bottom.php'; ?>