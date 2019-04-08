<!DOCTYPE html>
<html>
  <meta charset="UTF-8">

<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=int], select {
  width: 10%;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 10%;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 15%;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #0000ff;
  color: white;
  padding: 14px 20px;
  margin: 2px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]{
width: 15%;

  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Alteração de Cadastro de Integrantes</h3>
<?php
$id= $_POST["id"];

$cod = -1;
		
$obj_mysqli = new mysqli("localhost", "root", "antonio123*", "madrugada");
 
if ($obj_mysqli->connect_errno)
{
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}
 
mysqli_set_charset($obj_mysqli, 'utf8');

$stmt = $obj_mysqli->prepare('SELECT * FROM integrante where id=?');
			$stmt->bind_param('i', $id);
  $stmt->execute();
		
		$result = $stmt->get_result();
$aux_query = $result->fetch_assoc();
	
	$nome = $aux_query["nome"];
	$rg = $aux_query["rg"];
	$idade = $aux_query["idade"];
	$faixa = $aux_query["faixa"];
	$data_grad =$aux_query["data_grad"];
	$tel = $aux_query["telefone"];
	$email = $aux_query["email"];
	$responsavel = $aux_query["responsavel"];
	
	
	$stmt->close();

?>

<div>
  <form action="testebanco.php" method:GET>
    <div><label for="nome">Integrante</label></br></br>
    <input type="text" id="nome" name="nome"  value="<?=$nome?>" placeholder="<?=$nome?>">
</div>
    <div><label for="rg">RG</label></br></br>
    <input type="text" id="rg" name="rg" placeholder="<?=$rg?>" value ="<?=$rg?>">
</div>	
	<div><label for="idade">Idade</label></br></br>
    <input type="int" id="idade" name="idade" placeholder="<?=$idade?>" value ="<?=$idade?>" >
</div>	
	<div><label for="Faixa">Faixa</label></br></br>
    <select id="faixa" name="faixa" placeholder="<?=$faixa?>">
	 <option value ="<?=$faixa?>"><?=$faixa?></option>
      <option value="branca">Branca</option>
	  <option value="cinza">Cinza</option>
      <option value="amarela">Amarela</option>
      <option value="laranja">Laranja</option>
      <option value="verde">Verde</option>
      <option value="azul">Azul</option>
      <option value="roxa">Roxa</option>
      <option value="marrom">Marrom</option>
      <option value="preta">Preta</option>
      <option value="coral">Coral</option>
      <option value="vermelha">Vermelha</option>
    </select>
  </div>
  <?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('UTC');
//$date_day=strtotime('');
//echo $date_day;
?>
    <div><label for="data_grad">Data da última graduação</label></br></br>
    <input type="date" id="data_grad" name="data_grad" placeholder="<?=$data_grad?>" value="<?=$data_grad?>">
</div>	
	
    <div><label for="tel">Telefone</label></br></br>
    <input type="text" id="tel" name="tel" value="<?=$tel?>" placeholder="<?=$tel?>" value="<?=$tel?>">
	</div>
	<div><label for="email">E-mail</label></br></br>
    <input type="email" id="email" name="email" placeholder="<?=$email?>" value="<?=$email?>">
	</div>
	<div><label for="responsavel">Responsável</label></br></br>
    <input type="text" id="responsavel" name="responsavel" placeholder="<?=$responsavel?>" value="<?=$responsavel?>">
	</div>
  <input type="hidden" value="<?=$cod?>" name="cod" >
  <input type="hidden" value="<?=$id?>" name="id" >

    <input type="submit" value="Salvar">
  </form>
</div>

</body>
</html>
