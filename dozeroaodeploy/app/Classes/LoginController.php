<?php namespace App\Classes;

use App\Classes\Database\ConnectionDB;
use App\Classes\Entities\Usuario;
use App\Classes\Session\Sessao;

class LoginController
{
    public function esta_logado() {
        $sess = Sessao::instanciar();
        return $sess->existe('usuario');
    }
 
    public function logar($email, $senha) {
        $sess = Sessao::instanciar();
 
        $connect = new ConnectionDB("mysql:host=localhost;dbname=application", "root", "");
        $instance = $connect->connect();

        $instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$email, $senha]);
        $data = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        if($data) {
            $usuario = new Usuario();
            $usuario->setEmail($email);
            $usuario->setId($data['id']);
            $usuario->setNome($data['nome']);
            $usuario->setSenha($senha);
            $usuario->setAdmin($data['admin']);
            $usuario->setAtivo($data['ativo']);
            $usuario->setCreatedAt($data['created_at']);
            $usuario->setUpdatedAt($data['updated_at']);

            $sess->set('usuario', $usuario);
            return true; 
        } else {
            return false; 
        }
    }
 
    public function pegar_usuario() {
        $sess = Sessao::instanciar();
 
        if ($this->esta_logado()) {
            $usuario = $sess->get('usuario');
            return $usuario;
        }
        else {
            header('location: \..\index.php');
        }
    }

    public function logoff() {
        $sess = Sessao::instanciar();
        $sess->destroy('usuario');
        header('location: controle.php?acao=sair');
    }
}
