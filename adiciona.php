<?php
		$resp_cntd 				= $_GET['resp_cntd'];

	if(ISSET($_POST['enviar'])){
		$id    		= "";
		$sistema_operacional	= $_POST["sistema_operacional"];
		$modelo_cllr			= $_POST["modelo_cllr"];
		$resp_cntd 				= $_GET['resp_cntd'];
		$desc_cllr				= $_POST['desc_cllr'];
        $novo_nome				= $_GET["arquivo"];
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $blx = $_FILES["arquivo"];
        $tmp_doc = $blx['tmp_name'];
        move_uploaded_file($tmp_doc,'upload/'.$novo_nome);

	$sql =  "INSERT INTO 
			resultado_tb 
			VALUES
				  (?, ?, ?, ?, ?, ?, ?, ?, ?)";
				include "conexao.php";
			$sistemas = $fusca -> prepare($sql);
			$sistemas -> execute(array($id, $sistema_operacional, $modelo_cllr, $resp_cntd, $desc_cllr, 1, 0, 100, $novo_nome));

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
      <script>

		function cancela(){
			window.location.href = "pgagradece.php";
		}
        
        function sube(){
			alert ("Celular cadastrado com sucesso");
		}
	</script>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    	*{
    		padding: 0;
    		margin: 0;
    	}
    	body{
    		background-color: #ff4444;
    		font-family: sans-serif;
    	}
    	#dale{
    		width: 500px;
    		background-color: #004749;
    		margin: 0 auto;
    		padding: 30px;
    		color: white;
            border-radius: 30px;
            border-style: solid;
            border-width: 5px;
            border-color: gray;
    	}
	</style>
  </head>
  <body>
      <br>
      <br>
      <br>
  	<form action="#" method="POST" enctype="multipart/form-data">
  		<div id="dale">
		    <label>Digite o sistema operacional do celular:</label><br>
		    <input type="text" name="sistema_operacional" id="" class="form-control" required></input><br>

		    <label>Digite o modelo do celular:</label><br>
		    <input type="text" name="modelo_cllr" id="" class="form-control" required></input><br>
			
			<label>Nos diga o porque você escolheu esse celular!</label><br>
		    <input type="text" name="desc_cllr" id="" class="form-control" required></input><br>
      
            <label for="imagem">selecione a imagem que condiz com o aparelho:</label><br>
            <input type="file" required name="arquivo"><br><br>
		    <input type="submit" class="btn btn-success" name="enviar" id="" value="Enviar" onclick="sube()"></input>
		    <input type="button" class="btn btn-danger" name="" id="" value="Cancelar" onclick="cancela()"></input>
		</div>
	</form>
  </body>
</html>