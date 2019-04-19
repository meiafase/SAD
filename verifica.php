<?php
	$resp_cntd 	= $_GET['resp_cntd'];
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
	$sql = "SELECT resp_cntd FROM resultado_tb where resp_cntd=$resp_cntd";
	include "conexao.php";
    
    $sad = $fusca -> prepare($sql);
    $sad -> execute();
	$contar = $sad -> rowCount();



	if($contar > '1'){
		

		foreach($sad as $v){
			$modelo_cllr = $v['modelo_cllr'];
			$nome_cllr = $v['nome_cllr'];

		echo "Celular recomendado foi:";
		echo "<br>";
		echo "<h3> ".$modelo_cllr."<h3>";
		echo "<br>";
		echo "<h3> ".$nome_cllr."<h3>";

		echo"<h2>Gostou da sujestão?</h2>
		<button id='sim' onclick='btn(1)'>Gostei</button>
		<button id='nao'onclick='btn(2)'>Não gostei</button>
		<script>	
		function btn(a){
			if (a == 1){
				alert('Obrigado pela ajuda!');
				window.location.href = 'somar1.php?modelo_cllr=$modelo_cllr';
			}
			else if (a == 2){
				alert('Obrigado pela resposta!');
				window.location.href = 'somar2.php?modelo_cllr=$modelo_cllr';
			}
			
		}
		</script>";	
	}

	}else{
		echo "<h2>Desculpa, não encontramos uma sujestão. Gostaria de adicionar uma resposta?</h2>
		<button id='sim' onclick='adicionar()'>Gostaria</button>
		<button id='nao' onclick='cancela()'>Não, obrigado</button>
		<script>
		function adicionar(){
			window.location.href = 'adiciona.php?resp_cntd=$resp_cntd&resp1=$resp1&resp2=$resp2&resp3=$resp3&resp4=$resp4&resp5=$resp5&resp6=$resp6&resp7=$resp7&resp8=$resp8&resp9=$resp9&resp10=$resp10';
		}
		function cancela(){
			window.location.href = 'pgagradece.php';
		}
		</script>";
	 }
?>
