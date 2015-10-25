<?php
require_once 'vendor\autoload.php';

use App\Classes\LoginController;

$ctrlLogin = new LoginController();
$usuario = $ctrlLogin->pegar_usuario();

include 'partials/top.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <p style="margin: 30px 0px;"><img src="img/dozeroaodeploy.png"></p>

                <h3>Realize seu Pagamento</h3>

                <div id="box-inscricao">
                    <p>O valor da inscrição é R$750,00 ou 10 vezes de R$75,00</p>

                    <p>Seu nome é: <?php echo $usuario->getNome(); ?></p>

                    <p>Seu e-mail é: <?php echo $usuario->getEmail(); ?></p>
                    <hr>

                    <form method="POST" action="/app/Code/dataRecords.php?acao=payment">
                        <script type="text/javascript"
                                src="https://assets.pagar.me/checkout/checkout.js"
                                data-button-text="Realizar Pagamento"
                                data-button-class="btn btn-success btn-lg btn-block"
                                data-encryption-key="ek_test_dqofKUFt5RcHY3EBp7nn7cN35Bldka"
                                data-customer-data="false"
                                data-amount="75000">
                        </script>
                    </form>
                </div>

                <p style="margin-top: 80px;"><a href="<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/index.php"
                                                class="btn btn-default">Voltar para Home</a></p>

            </div>
        </div>

        <?php include 'partials/footer.php'; ?>

    </div>


<?php include 'partials/bottom.php'; ?>