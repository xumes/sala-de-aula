<?php
require_once '..\..\vendor\autoload.php';
use App\Classes\Database\ConnectionDB;

$connect = new ConnectionDB("mysql:host=localhost;dbname=application", "root", "");
$instance = $connect->connect();

$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM usuarios ORDER BY id";
$stmt = $instance->query($sql);
$data = $stmt->fetchAll(\PDO::FETCH_ASSOC);

include '../../partials/top-admin.php';
include '../../partials/menu-admin.php';
?>

    <div class="container" id="large">

        <div class="row">
            <div class="col-md-2">
                <?php include '../../partials/menu-left-admin.php'; ?>
            </div>
            <div class="col-md-10">
                <div class="pull-right"><a
                        href="<?php echo 'http://' . $_SERVER['HTTP_HOST']; ?>/admin/users/create.php"
                        class="btn btn-success"><i class="fa fa-user-plus"></i> Adicionar Usuário</a></div>
                <h1>Lista de Usuários</h1>

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($data as $user) {
                        echo "<tr>";
                            echo "<td>{$user['id']}</td>";
                            echo "<td>{$user['nome']}</td>";
                            echo "<td>{$user['email']}</td>";
                            if($user['admin']){
                                echo '<td><span class="label label-info">Administrador</span></td>';
                            } else {
                                if(empty($user['ativo'])){
                                    echo '<td><span class="label label-danger">Bloqueado</span></td>';
                                }
                                else {
                                    echo '<td><span class="label label-success">Liberado</span></td>';
                                }
                            }
                            echo '<td><a href="#">Editar</a> | <a href="#">Excluir</a></td>';
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>

                <!--<nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>-->

            </div>
        </div>
    </div>

<?php include '../../partials/footer.php'; ?>

<?php include '../../partials/bottom.php'; ?>