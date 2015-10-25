<?php
require_once '\..\vendor\autoload.php';

use App\Classes\LoginController;
$ctrlLogin = new LoginController();
$usuario = $ctrlLogin->pegar_usuario();
?>

<div id="perfil">
	<img src="http://placehold.it/500x500" class="img-rounded img-responsive" alt="...">
	<h5 class="text-center" id="name-user"><?php echo $usuario->getNome(); ?></h5>
</div>
<ul class="nav nav-pills nav-stacked">
  <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/restrito.php">Dashboard</a></li>
  <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/perfil.php">Perfil</a></li>
  <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/conteudo.php">Conteúdo do Curso</a></li>
  <li><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/app/Code/controle.php?acao=logoff">Sair</a></li>
</ul>