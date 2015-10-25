<?php
include 'partials/top.php';

require_once 'vendor\autoload.php';

use App\Classes\LoginController;

$ctrlLogin = new LoginController();
$logged = $ctrlLogin->esta_logado();

if($logged) {
    header('location:pagamento.php');
}

?>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<p style="margin: 30px 0px;"><img src="img/dozeroaodeploy.png"></p>
				<h3>Realize sua Inscrição</h3>

				<div id="box-inscricao">
					<h2>R$750,00</h2>
					<p>Ou 10 vezes de R$75,00</p>
					<hr>
					<form method="POST" action="/app/Code/dataRecords.php?acao=register">
						<div class="form-group" >
					    	<label for="InputNome">Seu Nome</label>
					    	<input type="text" name="nome" class="form-control" id="InputNome" placeholder="Nome">
						</div>
						<div class="form-group">
					    	<label for="InputEmail">Seu E-mail</label>
					    	<input type="email" name="email" class="form-control" id="InputEmail" placeholder="E-mail">
						</div>
						<div class="form-group">
					    	<label for="InputSenha">Sua Senha</label>
					    	<input type="password" name="senha" class="form-control" id="InputSenha" placeholder="Senha">
						</div>
						<br>
						<!--<a href="<?php /*echo 'http://'.$_SERVER['HTTP_HOST']; */?>/pagamento.php" class="btn btn-success btn-lg btn-block">Realizar Cadastro</a>-->
						<button type="submit" class="btn btn-default">Realizar Cadastro</button>
					</form>
				</div>

				<p style="margin-top: 80px;"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/index.php" class="btn btn-default">Voltar para Home</a></p>

			</div>
		</div>

		<?php include 'partials/footer.php'; ?>

	</div>


<?php include 'partials/bottom.php'; ?>