<?php
require_once '\..\vendor\autoload.php';

use App\Classes\LoginController;

$ctrlLogin = new LoginController();
$logged = $ctrlLogin->esta_logado();

?>

<div class="row">
    <div class="col-md-5" id="logo">
        <h1><img src="img/dozeroaodeploy.png"></h1>
    </div>
    <div class="col-md-7 text-right">
        <?php if (!$logged) { ?>
            <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/login.php" class="btn btn-default" id="btn-login"><i
                    class="fa fa-lock"></i> Realizar Login</a>
        <?php } else { ?>
            <!-- Após logar exibe-se este link -->
            <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/restrito.php" class="btn btn-default"
               id="btn-login"><i class="fa fa-tachometer"></i> Meu Ambiente</a>
        <?php } ?>
    </div>
</div>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Empresa</a></li>
                <li><a href="#">Vantagens</a></li>
                <li><a href="#">Conteúdo Programático</a></li>
                <li><a href="<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/inscricao.php">Inscrição</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>