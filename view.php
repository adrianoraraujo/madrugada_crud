<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Página Inicial</title>
</head>

<body>
        <div class="container">
          <div class="jumbotron">
            <div class="row">
                <h2>CRUD em PHP <span class="badge badge-secondary"></span></h2>
            </div>
          </div>
            </br>
            <div class="row">
                <p>
                    <a href="create.php" class="btn btn-success">Adicionar</a>
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Idade</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						 $obj_mysqli = new mysqli("localhost", "root", "antonio123*", "madrugada");
 
if ($obj_mysqli->connect_errno)
{
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}
 
mysqli_set_charset($obj_mysqli, 'utf8');

                      
                    
                        $sql = 'SELECT * FROM integrante ORDER BY id DESC';
                       $result = $obj_mysqli->query($sql);
					   while ($aux_query = $result->fetch_assoc()) 
                        {
                            echo '<tr>';
			                      echo '<th scope="row">'. $aux_query['id'] . '</th>';
                            echo '<td>'. $aux_query['nome'] . '</td>';
                            echo '<td>'. $aux_query['idade'] . '</td>';
                           /** echo '<td>'. $aux_query['faixa'] . '</td>';
                            echo '<td>'. $aux_query['telefone'] . '</td>';
                            echo '<td>'. $aux_query['email'] . '</td>';
							echo '<td>'. $aux_query['responsavel'] . '</td>';*/
                            echo '<td width=250>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        $obj_mysqli->disconnect;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    
</body>

</html>