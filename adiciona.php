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
				  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				include "conexao.php";
			$sistemas = $fusca -> prepare($sql);
			$sistemas -> execute(array($id, $resp1, $resp2, $resp3, $resp4, $resp5, $resp6, $resp7, $resp8, $resp9, $resp10, $sistema_operacional, $modelo_cllr, $resp_cntd));

			if($sql){			
				echo "<script> alert('Obrigado pela colaboração ;D'); </script>";
			}


	}


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title></title>
    <meta charset="utf-8">
  </head>
  <body>
  	<form action="#" method="POST">
  		<div id="">
		    <label>Digite o sistema operacional do celular:</label><br>
		    <input type="text" name="sistema_operacional" id="" ></input><br><br>

		    <label>Digite o modelo do celular:</label><br>
		    <input type="text" name="modelo_cllr" id="" ></input><br><br>
		    <input type="submit" name="enviar" id="" value="Enviar"></input>
		</div>
	</form>
  </body>
</html>