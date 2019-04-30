<?php

	$resp1		= $_GET["resp1"];
	$resp2		= $_GET["resp2"];
	$resp3		= $_GET["resp3"];
	$resp4		= $_GET["resp4"];
	$resp5		= $_GET["resp5"];
	$resp6		= $_GET["resp6"];
	$resp7		= $_GET["resp7"];
	$resp8		= $_GET["resp8"];
	$resp9		= $_GET["resp9"];
	$resp10		= $_GET["resp10"];
	$resp_cntd 	= $_GET['resp_cntd'];
	
	
	

	$sql = "SELECT * FROM resultado_tb where resp_cntd='$resp_cntd'";
	include "conexao.php";
    
    $sad = $fusca -> prepare($sql);
    $sad -> execute();
	$contar = $sad -> rowCount();



	if($contar >= '1'){
		?><div id="pegageral">
		<div id="titulo">
		<?php

		echo "<h2>Celulares recomendados para você</h2>";
		echo "<br>";
		echo "<br>";

		echo "<h3>Agora nos diga qual sujestão você mais gostou.</h3>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "--------------------------------------------------------------------------------------------------------";

		?></div><?php
		?><div id="resp"><?php
		foreach($sad as $v){
			$id_resultado		= $v ['id_resultado'];
			$desc 				= $v['desc'];
			$modelo_cllr =$v['modelo_cllr'];
			$nome_cllr = $v['nome_cllr'];
			$novo_nome = $v['arquivo'];
			$agree  =$v['agree'];
			$disagree  =$v['disagree'];
			
		echo "<h2>Oque achou desse?</h2>";
		echo "<br>";
		echo "<h3> Modelo: ".$modelo_cllr."<h3>";
		echo "<br>";
		echo "<h3> Nome do celular: ".$nome_cllr."<h3>";
		echo "<br>";
		?><span id="cllr"><?php
        echo "<img src='upload/$novo_nome' id='img'>";
        ?></span><?php
        ?><span id="desc" style="float: right; width: 60%;"><?php
        	echo "<p><h5> $desc<h5></p>";
        ?></span><?php

		echo "<br>";

	 
	 echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
		<script type='text/javascript'>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
		  ['Task', 'Hours per Day'],
          ['Agree',     ".$agree."],
          ['Disagree',     ".$disagree."]

        ]);

        var options = {
          title: 'Porcentagens de aceitação',
		  backgroundColor: 'white',
		  colors: ['green', '#f00']
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>";
		
	  ?>
		</div>
		<center>
		    <div id="piechart" style="width: 700px; height: 400px;"></div>
		</center>
<?php





		echo"<h2>Gostou da sujestão?</h2><br>
		<button id='sim' onclick='sim()' class='btn btn-success'>Gostei</button>
		<button id='nao'onclick='nao()' class='btn btn-danger'>Não gostei</button>
		<button id='nao'onclick='addotro()' class='btn btn-waring'>Não gostei</button>
		<script>	
		function sim(){
				window.location.href = 'somar1.php?id_resultado=$id_resultado';
			}
        function nao(){
				window.location.href = 'soma2.php?id_resultado=$id_resultado';
			}
        function addotro(){
				window.location.href = 'adiciona.php?resp_cntd=$resp_cntd';
			}
			
		</script>";	
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "--------------------------------------------------------------------------------------------------------------------";
		echo "<br>";
		echo "<br>";
		echo "<br>";
	}
?></div><?php
?></div><?php

	

	}else{
		?><div id="pegageral"><?php

		echo "<h2>Desculpa, não encontramos uma sujestão. Gostaria de adicionar uma resposta?</h2><br>
		<button id='sim' onclick='adicionar()' class='btn btn-success'>Gostaria</button>
		<button id='nao' onclick='cancela()' class='btn btn-danger'>Não, obrigado</button>
		<script>
		function adicionar(){
			window.location.href = 'adiciona.php?resp_cntd=$resp_cntd&resp1=$resp1&resp2=$resp2&resp3=$resp3&resp4=$resp4&resp5=$resp5&resp6=$resp6&resp7=$resp7&resp8=$resp8&resp9=$resp9&resp10=$resp10';
		}
		function cancela(){
			window.location.href = 'pgagradece.php';
		}
		</script>";
	 }
	 ?></div>
    <!DOCTYPE html>
    <html lang="pt-br">
      <head>
      	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Título da página</title>
        <meta charset="utf-8">
        <style>
        	*{
        		padding: 0px;
        		margin: 0px;
        	}
        	body{
	    		background-color: #df2935;
	    		font-family: sans-serif;
    		}
        	#pegageral{
	    		width: 60%;
	    		margin: 0 auto;
	    		background-color: #004749;
	    		color: white;
	    		margin-top: 30px;
	    		padding: 20px;
    		}
    		#resp{
    			margin: 50px;
    		}
        	#resp h3{
    			color: #f7dba7;
    		}
    		#img{
    			width: 300px;
    		}
    		#titulo{
    			margin-left: 6%;
    			padding: 30px;
    		}
    	</style>
      </head>

    </html>