<html>
<pre>
<?print_r($_GET)?>
</pre>
</html>
<?php


		
$obj_mysqli = new mysqli("localhost", "root", "antonio123*", "madrugada");
 
if ($obj_mysqli->connect_errno)
{
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}
 
mysqli_set_charset($obj_mysqli, 'utf8');

		//Vamos realizar o cadastro ou alteração dos dados enviados.
$nome= $_GET["nome"];
$rg= $_GET["rg"];
$idade= $_GET["idade"];
$faixa = $_GET["faixa"];
$id = $_GET["id"];
$data_grad = $_GET["data_grad"];
$data_grad = date("Y-m-d",strtotime(str_replace('/','-',$data_grad))); 
$tel = $_GET["tel"];
$email = $_GET["email"];
$responsavel = $_GET["responsavel"];
$cod =$_GET["cod"];
	if($cod == 0)
		{	
		
		$stmt = $obj_mysqli->prepare("INSERT INTO `integrante` (`nome`,`rg`,`idade`,`faixa`,`data_grad`, `telefone`, `email`, `responsavel`) VALUES (?,?,?,?,?,?,?,?)");
		$stmt->bind_param('ssisssss', $nome, $rg, $idade, $faixa, $data_grad, $tel, $email, $responsavel);
		if(!$stmt->execute())
		{
			echo "erro";

			$erro = $stmt->error;
			die($erro);
		}
		else
		{
			echo "Dados cadastrados com sucesso!";
			sleep(2);
			header("location: index.php");
		}
		}
		
		else if($cod ==-1){
			$stmt = $obj_mysqli->prepare("UPDATE `integrante` SET `nome`=?,`rg`=?,`idade`=?,`faixa`=?,`data_grad`=?, `telefone`=?, `email`=?, `responsavel`=? WHERE `id`=?");
			$id = $_GET["id"];
			echo "aqui id:" . $id;
			
			$stmt->bind_param('ssisssssi', $nome, $rg, $idade, $faixa, $data_grad, $tel, $email, $responsavel, $id);
			echo "aqui2";
			if(!$stmt->execute())
			{
				echo "erro";

				$erro = $stmt->error;
				die($erro);
			}
		else
		{
			echo "Dados cadastrados com sucesso!";
			sleep(2);
			//header("location: index.php");
		}
			
		}

?>