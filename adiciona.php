<?php
		$resp_cntd 				= $_GET['resp_cntd'];

	if(ISSET($_POST['enviar'])){
		$id    		= "";
		$sistema_operacional	= $_POST["sistema_operacional"];
		$modelo_cllr			= $_POST["modelo_cllr"];
		$resp_cntd 				= $_GET['resp_cntd'];
        $novo_nome				= $_GET["arquivo"];
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $blx = $_FILES["arquivo"];
        $tmp_doc = $blx['tmp_name'];
        move_uploaded_file($tmp_doc,'upload/'.$novo_nome);

	$sql =  "INSERT INTO 
			resultado_tb 
			VALUES
				  (?, ?, ?, ?, ?, ?, ?, ?)";
				include "conexao.php";
			$sistemas = $fusca -> prepare($sql);
			$sistemas -> execute(array($id, $sistema_operacional, $modelo_cllr, $resp_cntd, 1, null, 100, $novo_nome));

			if($sql){			
				echo "<script>
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
  	<form action="#" method="POST" enctype="multipart/form-data">
  		<div id="dale">
		    <label>Digite o sistema operacional do celular:</label><br>
		    <input type="text" name="sistema_operacional" id="" class="form-control" required></input><br><br>

		    <label>Digite o modelo do celular:</label><br>
		    <input type="text" name="modelo_cllr" id="" class="form-control" required></input><br>
      
            <label for="imagem">Imagem:</label><br><br>
            Arquivo: <input type="file" required name="arquivo"><br><br>
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