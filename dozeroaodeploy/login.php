<?php
	session_start();
	session_destroy(); 
?>
<?php include 'partials/top.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<p style="margin: 30px 0px;"><img src="img/dozeroaodeploy.png"></p>
				<h3>Realize o Login</h3>

				<form style="margin-top: 20px;" method="POST" action="\app\Code\controle.php?acao=login">
					<div class="form-group">
					    <label for="InputEmail">Seu E-mail</label>
					    <input type="email" name="email" class="form-control" id="InputEmail" placeholder="E-mail">
					</div>
					<div class="form-group">
					    <label for="InputSenha">Sua Senha</label>
					    <input type="password" name="password" class="form-control" id="InputSenha" placeholder="Senha">
					</div>
					<br>
					<button type="submit" class="btn btn-primary btn-block">Entrar no Sistema</button>
				</form>

				<p style="margin-top: 80px;"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/index.php" class="btn btn-default">Voltar para Home</a></p>

			</div>
		</div>

		<?php include 'partials/footer.php'; ?>

	</div>
<?php include 'partials/bottom.php'; ?>