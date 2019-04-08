<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<head>
<script>
echo "console.log(\"".print_r($_GET, true)."\")";
</script>
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
</head>
<body>
<?php



$obj_mysqli = new mysqli("localhost", "root", "antonio123*", "madrugada");
 

 
mysqli_set_charset($obj_mysqli, 'utf8');

if(isset($_GET["nome"]) && isset($_GET["rg"]) && isset($_GET["idade"]) && isset($_GET["faixa"]))
{
	if(empty($_GET["nome"]))
		$erro = "Campo nome obrigatório";
	else if(empty($_GET["faixa"]))
		$erro = "Campo e-mail obrigatório";
	else if(empty($_GET["rg"]))
		$erro = "Campo e-mail obrigatório";
	else if(empty($_GET["idade"]))
		$erro = "Campo e-mail obrigatório";
	else
	{
		$nome= $_GET["nome"];
$rg= $_GET["rg"];
$idade= $_GET["idade"];
$faixa = $_GET["faixa"];
$data_grad = $_GET["data_grad"];
$tel = $_GET["tel"];
$email = $_GET["email"];
$responsavel = $_GET["responsavel"];
		}
	}

$cod=0;

?>

<h3>Cadastro de Integrantes</h3>

<div>
  <form action= "testebanco.php" method= "GET">
    <div><label for="nome">Integrante</label></br></br>
    <input type="text" id="nome" name="nome" placeholder="insira o nome">
</div>
    <div><label for="rg">RG</label></br></br>
    <input type="text" id="rg" name="rg" placeholder="RG">
</div>	
	<div><label for="idade">Idade</label></br></br>
    <input type="int" id="idade" name="idade" placeholder="Idade">
</div>	
	<div><label for="Faixa">Faixa</label></br></br>
    <select id="faixa" name="faixa">
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
    <div><label for="data_grad">Data da última graduação</label></br></br>
    <input type="date" id="data_grad" name="data_grad">
</div>	
	
    <div><label for="tel">Telefone</label></br></br>
    <input type="text" id="tel" name="tel">
	</div>
	<div><label for="email">E-mail</label></br></br>
    <input type="email" id="email" name="email">
	</div>
	<div><label for="responsavel">Responsável</label></br></br>
    <input type="text" id="responsavel" name="responsavel">
	</div>
		  <input type="hidden" value="<?=$cod?>" name="id" >

    <input type="submit" value="Salvar">
  </form>
</div>

</body>
</html>
