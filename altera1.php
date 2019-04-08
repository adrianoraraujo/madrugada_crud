<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <body>

<h3>Alteração de Cadastro de Integrantes</h3>
<h5> Selecione o integrante a ser modificado </h5>
<div>
<?php

		
$obj_mysqli = new mysqli("localhost", "root", "antonio123*", "madrugada");
 
if ($obj_mysqli->connect_errno)
{
	echo "Ocorreu um erro na conexão com o banco de dados.";
	exit;
}
 
mysqli_set_charset($obj_mysqli, 'utf8');

//$sql = 'SELECT * FROM integrante';
                      // $result = $obj_mysqli->query($sql);
?>
<?php
	 /**$sql = $obj_mysqli->query("SELECT * FROM integrante");                      

	while ($aux_query = $sql->fetch_assoc()){ 
	$tete=$aux_query['nome'];
	//echo '<option value='.$aux_query['nome'].'></option>';
	echo $aux_query['nome'];
     } */
	  
					   /**while ($aux_query = $result->fetch_assoc()) 
                        {
                         
						echo $aux_query['nome'];}*/
	 ?>
  
<form  method="POST" action="altera_integrantes.php">
 <label >Selecione um </label>
 <select name="id" id ="id" >
 <option>Selecione...</option>
 
 <?php

 $stmt = $obj_mysqli->prepare('SELECT * FROM integrante ');
 $stmt->execute();
		
		$result = $stmt->get_result();
		
                     
 
 while ($aux_query = $result->fetch_assoc()) 
                        { 
 echo '<option value='.$aux_query['id'].'>'.$aux_query['nome'].'</option>';
  } ?>
 </select><input type="submit" value="Salvar"></input>
</form>
</body>
</html>