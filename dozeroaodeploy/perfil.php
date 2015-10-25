<?php include 'partials/top.php'; ?>

    <div class="container">

        <?php include 'partials/logo-menu.php'; ?>

        <div class="row">
            <div class="col-md-3" id="menu-left">
                <?php include 'partials/menu-aluno.php'; ?>
            </div>
            <div class="col-md-9">
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
                        <label for="image">Selecione uma imagem:</label>
                        <input name="image" type="file" id="image" />
                    </div>
                    <div class="form-group">
                        <label for="InputSenha">Sua Senha</label>
                        <input type="password" class="form-control" id="InputSenha" placeholder="********">
                    </div>
                    <br>
                    <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/restrito.php"
                       class="btn btn-success btn-lg">Alterar Cadastro</a>
                </form>

            </div>
        </div>

        <?php include 'partials/footer.php'; ?>

    </div>

<?php include 'partials/bottom.php'; ?>