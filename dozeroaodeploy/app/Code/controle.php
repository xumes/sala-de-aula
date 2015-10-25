<?php 
require_once '..\..\vendor\autoload.php';

use App\Classes\LoginController;

if(!empty($_REQUEST)) {
	$login = new LoginController();
	switch ($_REQUEST['acao']) {
		case 'login':
			$email = $_REQUEST['email'];
			$pwd = $_REQUEST['password'];

			if($login->logar($email, $pwd)) {
                $usuario = $login->pegar_usuario();
                if($usuario->getAdmin()) {
                    header('location:/../../admin/index.php');
                } else {
                    header('location:/../../index.php');
                }
			} else {
				echo 'Deu algum erro';
			}
			break;
		case 'logoff':
			$login->logoff();
			header('location:/../../index.php');
			break;
	}

}
?>