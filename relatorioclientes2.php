<?php

  //inicia uma sessão para ter acesso a todas as variáveis disponíveis da sessão
  session_start();

  /*if((!isset($_SESSION["nome"])==true) and (!isset($_SESSION["perfil"])==true))
  {
      //remove todas as variáveis da sessão
    session_unset();

    //destrói a sessão
    session_destroy();
    
    header("location:index.php");
  }*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Relatório de Clientes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
</head>
<body>

<div class="container" style="background: #FBEFFB">
	
	<?php 
		require_once("conexao/conexao.php");
	?>

	<div style="background: #FBEFFB">
      <br><ul class="nav flex-column">
      	<li class="nav-item text">
        <br><a class="nav-link" href="principal.php">Home</a>
      </li>
     </ul>
    </div>

	<!-- Início do Título -->
	<div class="jumbotron my-5" style="background: #F7819F">
	  <h1 class="display-1">Relatório de Clientes</h1>
	  <p>Registros gravados no banco.</p>
	</div>
	<!-- Final do Título -->


	<div class="form-group input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	<input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
	</div>


	<table class="table table-hover" style="background: #FBEFFB" id="tabela">
	    <thead>
	      <tr style="background-color: #bbb;">
	        <th width="40" style="background: #F7819F">Nome</th>
	        <th width="40" style="background: #F7819F">Celular</th>
	        <th width="10" style="background: #F7819F">Exc</th>
	        <th width="10" style="background: #F7819F">Atu</th>
	      </tr>
	    </thead>
	    <tbody>

	    	<?php

	    		$numLinhasPagina = 100;

	    		if(isset($_GET["pagina"]))
	    		{
	    			$pagina = $_GET["pagina"];
	    			$pagina *= $numLinhasPagina;
	    		}
	    		else
	    		{
	    			$pagina =0;
	    		}
	    		

	    		$comandoSQL = "SELECT * FROM clientes"; //traz todos os registros do banco de dados

	    		//Comando Cell pega valor quebrado e arredonda para cima
	    		$totalPaginas = ceil($con->query($comandoSQL)->rowCount()/$numLinhasPagina);

	    		$comandoSQL = "SELECT * FROM clientes LIMIT $pagina, $numLinhasPagina";

	    		$selecionados = $con->query($comandoSQL);

	    		$resultado = $selecionados->fetchAll();

	    		if($resultado)
	    		{

	    			foreach($resultado as $linha)
	    			{


	    	?>
				    <tr>
					    <td><?php echo $linha["NomeCliente"]; ?></td>
					    <td><?php echo $linha["CelularCliente"]; ?></td>
					    


					    <td><a href="excluir.php?id=<?php echo $linha["CodCliente"]; ?>"><i class="fas fa-trash text-danger"></i></a></td>
					    <td><a href="atualizar.php?id=<?php echo $linha["CodCliente"]; ?>"><i class="far fa-check-circle text-success"></i></a></td>
				    </tr>
		    <?php
		    		}
		    	}
		    	else
		    	{
		    		echo("<div class='alert alert-danger' role='alert'> Não há registros cadastrados. </div>");
		    	}
		    ?>


	    </tbody>
	</table>

	<ul class="pagination justify-content-center">
		
		<?php
			for ($i=0; $i < $totalPaginas; $i++){
		?>
				<li class="page-item"><a class="page-link" href="pesquisa.php?pagina=<?php echo $i;?>"><?php echo $i+1; ?></a></li>
		<?php
			}
		?>

	</ul>

</div>
<!-- final do Container -->


<script>
 	$('input#txt_consulta').quicksearch('table#tabela tbody tr');
</script>

</body>
</html>