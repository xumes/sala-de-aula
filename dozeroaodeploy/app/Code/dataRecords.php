<?php
require_once '..\..\vendor\autoload.php';

use App\Classes\Database\ConnectionDB;
use App\Classes\Entities\Usuario;
use App\Classes\Configurations;
Use App\Classes\LoginController;
use App\Classes\Session\Sessao;

if (!empty($_REQUEST)) {
    $config = new Configurations;
    $dataConf = $config->dataBaseConfiguration();

    $connect = new ConnectionDB($dataConf['DSN'], $dataConf['user'], $dataConf['pwd']);
    $instance = $connect->connect();

    $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    switch ($_REQUEST['acao']) {
        case 'register':
            $user = new Usuario();
            $user->setNome($_REQUEST['nome']);
            $user->setEmail($_REQUEST['email']);
            $user->setSenha($_REQUEST['senha']);

            $sql = 'INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, ?)';
            $stmt = $instance->prepare($sql);
            $newUser = $stmt->execute($user->register());

            if ($newUser) {
                $login = new LoginController();
                $login->logar($user->getEmail(), $user->getSenha());
                header('location:/../../pagamento.php');
            } else {
                die($newUser);
            }
            break;
        case 'profile':
            $session = Sessao::instanciar();
            $session->destroy('error');
            $session->destroy('field');
            $error = [];
            $field = [];

            /*$imagem = $_FILES['image'];
            echo '<pre>'.var_dump($imagem).'</pre>';
            die();*/

            if (isset($_FILES['image']['name']) && $_FILES["image"]["error"] == 0) {
                $arquivo_tmp = $_FILES['image']['tmp_name'];
                $nome = $_FILES['image']['name'];

                /*
                 * Pega a extensao
                 */
                $extensao = strrchr($nome, '.');

                /*
                 * Converte a extensao para mimusculo
                 */
                $extensao = strtolower($extensao);

                /*
                 * Somente imagens, .jpg;.jpeg;.gif;.png
                 * Aqui eu enfilero as extesões permitidas e separo por ';'
                 * Isso serve apenas para eu poder pesquisar dentro desta String
                 */
                if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                    /*
                     * Cria um nome único para esta imagem
                     * Evita que duplique as imagens no servidor.
                     */
                    $novoNome = md5(microtime()).$extensao;
                    // microtime() -> Retorna o timestamp em formato unix com microsegundos (0.52050300)
                    // md5() -> Calcula o hash md5 de uma string (1f3870be274f6c49b3e31a0c6728957f)
                    // retorna um hexadecimal com 32 caracteres

                    /*
                     * Concatena a pasta com o nome
                     */
                    $destino = 'imagens/'.$novoNome;

                    /*
                     * tenta mover o arquivo para o destino
                     */
                    if (!@move_uploaded_file($arquivo_tmp, $destino)) {
                        /*
                         * Passar nome da imagem como nulo, caso não consiga gravar
                         */
                    } else {
                        /*
                         * Pegar o nome da imagem para salvar no banco de dados
                         */
                    }
                } else {
                    $error['image_type'] = 'O tipo de imagem enviado é inválido. *.jpg;*.jpeg;*.gif;*.png';
                }
            }

            if(empty($_REQUEST['nome'])) {
                $error['nome'] = 'Campo nome obrigatório';
            } else {
                $field['nome'] = $_REQUEST['nome'];
            }

            if(empty($_REQUEST['email'])) {
                $error['email'] = 'Campo E-Mail obrigatório';
            } else {
                $field['email'] = $_REQUEST['email'];
            }

            if(count($field)) {
                $session->set('field', $field);
            }

            if (count($error)) {
                $session->set('error', $error);
                header('location: /../../admin/users/create.php');
            } else {
                // Gravação dos dados do form
                header('location: /../../admin/users/create.php');
            }
            break;
        case 'payment':
            $token = $_REQUEST['token'];
            \PagarMe::setApiKey("ak_test_gxdZQnY40daggFTyF2UA6dA6HgpyBR");
            $transaction = \PagarMe_Transaction::findById("{$token}");
            $transaction->capture(75000);
            var_dump($transaction);
            break;
        default:
            echo $_REQUEST['acao'];
            die('default');
            break;
    }
} else {
    die('Request Vazio');
}