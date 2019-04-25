<?php
		$resp1					= $_GET["resp1"];
		$resp2					= $_GET["resp2"];
		$resp3					= $_GET["resp3"];
		$resp4					= $_GET["resp4"];
		$resp5					= $_GET["resp5"];
		$resp6					= $_GET["resp6"];
		$resp7					= $_GET["resp7"];
		$resp8					= $_GET["resp8"];
		$resp9					= $_GET["resp9"];
		$resp10					= $_GET["resp10"];
		$resp_cntd 				= $_GET['resp_cntd'];

	if(ISSET($_POST['enviar'])){
		$id    		= "";
		$resp1					= $_GET["resp1"];
		$resp2					= $_GET["resp2"];
		$resp3					= $_GET["resp3"];
		$resp4					= $_GET["resp4"];
		$resp5					= $_GET["resp5"];
		$resp6					= $_GET["resp6"];
		$resp7					= $_GET["resp7"];
		$resp8					= $_GET["resp8"];
		$resp9					= $_GET["resp9"];
		$resp10					= $_GET["resp10"];
		$sistema_operacional	= $_POST["sistema_operacional"];
		$modelo_cllr			= $_POST["modelo_cllr"];
		$resp_cntd 				= $_GET['resp_cntd'];

	$sql =  "INSERT INTO 
			resultado_tb 
			VALUES
				  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				include "conexao.php";
			$sistemas = $fusca -> prepare($sql);
			$sistemas -> execute(array($id, $resp1, $resp2, $resp3, $resp4, $resp5, $resp6, $resp7, $resp8, $resp9, $resp10, $sistema_operacional, $modelo_cllr, $resp_cntd, null, null, null));

			if($sql){			
				echo "<script> alert('Obrigado pela colaboração ;D'); 
				window.location.href = 'pgagradece.php';
				</script>";


			}


	}


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    	*{
    		padding: 0;
    		margin: 0;
    	}
    	body{
    		background-color: #df2935;
    		font-family: sans-serif;
    	}
    	#dale{
    		width: 500px;
    		height: 300px;
    		background-color: #004749;
    		margin: 0 auto;
    		padding: 30px;
    		color: white;
    	}
	</style>
  </head>
  <body>
  	<form action="#" method="POST">
  		<div id="dale">
		    <label>Digite o sistema operacional do celular:</label><br>
		    <input type="text" name="sistema_operacional" id="" class="form-control" required></input><br><br>

		    <label>Digite o modelo do celular:</label><br>
		    <input type="text" name="modelo_cllr" id="" class="form-control" required></input><br>
		    <input type="submit" name="enviar" id="" value="Enviar" ></input>
		    <input type="button" name="" id="" value="Cancelar" onclick="cancela()"></input>
		</div>
	</form>
	<script>

		function cancela(){
			window.location.href = "pgagradece.php";
		}
	</script>
  </body>
</html>