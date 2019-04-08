<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Menu Madrugada</title>
     <!-- chama o arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
   <nav>
  <ul class="menu">
        <li><a href="restrict.php">Home</a></li>
        <li><a href="#">Integrantes</a>
		<ul>
                      <li><a href="view.php">Visualizar</a></li>
					  <li><a href="insere_integrante.php">Cadastrar</a></li>
                      <li><a href="altera1.php">Alterar</a></li>
                      <li><a href="exclui_integrante.php">Excluir</a></li>                    
                </ul>
		</li>
		
            <li><a href="#">Pagamentos</a>
                <ul>
                      <li><a href="#">Visualizar</a></li>
					  <li><a href="#">Cadastrar</a></li>
                      <li><a href="#">Alterar</a></li>
                      <li><a href="#">Excluir</a></li>                    
                </ul>
            </li>
        
        <li><a href="logout.php">Sair</a></li> 
		<li><a href="#">Help</a></li>
</ul>
</nav>
</head>
<body>
<br><br\>
<br><br\>
<br><br\>
<h1> Bem Vindo ao Madrugada Gestor</h1>
</body>
</html>
<?php
    
  // A sessão precisa ser iniciada em cada página diferente
 // if (!isset($_SESSION)) session_start();
    
  //$nivel_necessario = 2;
    
  // Verifica se não há a variável da sessão que identifica o usuário
 // if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] <$nivel_necessario)) {
      // Destrói a sessão por segurança
   //   session_destroy();
     // Redireciona o visitante de volta pro login
    //  header("Location: restrict2.php"); exit;
  //}
    
  ?>

    
  <h1>Página restrita</h1>
  <p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>

</body>