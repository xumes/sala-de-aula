<?php
require_once '..\..\vendor\autoload.php';
use App\Classes\Session\Sessao;

$session = Sessao::instanciar();
if($session->existe('error')) {
    $error = $session->get('error');
}

if($session->existe('field')) {
    $field = $session->get('field');
}

include '../../partials/top-admin.php';
include '../../partials/menu-admin.php';

if(empty($_REQUEST)) {
    $session->destroy('error');
    $session->destroy('field');
}
?>

    <div class="container" id="large">

        <div class="row">
            <div class="col-md-2">
                <?php include '../../partials/menu-left-admin.php'; ?>
            </div>
            <div class="col-md-10">
                <div class="pull-right">
                    <button onclick="$('#create').submit();" class="btn btn-success"><i class="fa fa-user-plus"></i>
                        Salvar Usuário
                    </button></div>
                <h1>Criar/Editar Usuário</h1>

                <form action="../../app/Code/dataRecords.php?acao=profile" method="post" enctype="multipart/form-data" id="create">
                    <div class="form-group">
                        <label for="InputNome">Seu Nome</label>
                        <input type="text" class="form-control" name="nome"
                               id="InputNome" placeholder="Seu nome"
                            value="<?php if(!empty($field['nome'])){
                                echo $field['nome'];
                            } else {
                                echo null;} ?>">
                        <?php if (!empty($error['nome'])): ?>
                            <span class="text-danger"><?php echo $error['nome'];?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Seu E-mail</label>
                        <input type="email" class="form-control" name="email"
                               id="InputEmail" placeholder="exemplo@exemplo.com"
                           value="<?php if(!empty($field['email'])){
                               echo $field['email'];
                           } else {
                               echo null;} ?>
                        ">
                        <?php if (!empty($error['email'])): ?>
                            <span class="text-danger"><?php echo $error['email'];?></span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="image">Selecione uma imagem:</label>
                        <input name="image" type="file" id="image" />
                    </div>
                    <div class="form-group">
                        <label for="InputSenha">Sua Senha</label>
                        <input type="password" class="form-control" id="InputSenha" placeholder="********">
                    </div>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="statusUser" id="trueUser" value="1" checked="checked"> Liberado
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="statusUser" id="falseuser" value="0"> Bloqueado
                        </label>
                    </div>
                </form>

            </div>
        </div>
    </div>

<?php include '../../partials/footer.php'; ?>

<?php include '../../partials/bottom.php'; ?>