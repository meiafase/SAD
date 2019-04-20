<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Celular</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<meta charset="utf-8">
	<?php
			   if(ISSET($_POST['enviarandroid'])){
				///capturando os valores 
				$id    		= "";
				$sistema	= $_POST["sistema"];
				$resp1		= $_POST["perq1"];
				$resp2		= $_POST["perq2"];
				$resp3		= $_POST["perq3"];
				$resp4		= $_POST["perq4"];
				$resp5		= $_POST["perq5"];
				$resp6		= $_POST["perq6"];
				$resp7		= $_POST["perq7"];
				$resp8		= $_POST["perq8"];
				$resp9		= $_POST["perq9"];
				$resp10		= $_POST["perq10"];

				$resp_cntd =  $resp1 . $resp2 . $resp3 . $resp4 . $resp5 . $resp6 . $resp7 . $resp8 . $resp9 . $resp10;

			$sql =  "INSERT INTO 
					cell_tb 
					VALUES
						  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
				include "conexao.php";
				$sistemas = $fusca -> prepare($sql);
				$sistemas -> execute(array($id, $sistema, $resp1, $resp2, $resp3, $resp4, $resp5, $resp6, $resp7, $resp8, $resp9, $resp10, $resp_cntd));

				header("location: verifica.php?id=$id&resp_cntd=$resp_cntd&resp1=$resp1&resp2=$resp2&resp3=$resp3&resp4=$resp4&resp5=$resp5&resp6=$resp6&resp7=$resp7&resp8=$resp8&resp9=$resp9&resp10=$resp10");

		   }

	?>
	<style>
		*{
			padding: 10px;
			margin: 0;
		}
		body{
			background-color: #eee;
			font-family: sans-serif;
		}
		.divs label{
			padding: 10px;
			margin-bottom: 20px;
		}
		.far{
		}
		.card {
		  border-radius: 2px;
		  height: 750px;
		}
		.card-1 {
		  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
		}

		.card-1:hover {
		  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
		}
		.input-dominio{
			width: 20px;
			height: 25px;
			cursor: pointer;
			margin-bottom: 30px;
			margin-left: 3%;
		}
		#globa{
			background-color: #5DB7DE;
			font-size: 30px;
			padding: 30px;
		}
		#img1{
			height: 130px;
		}
		#img2{
			height: 150px;
		}
		#img3{
			height: 200px;
		}
		#img4{
			height: 250px;
		}
		#img5{
			height: 300px;
		}
		.pol{
			margin-left: 6%;
		}
		#polega a :hover{
			box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
			cursor: pointer;
		}
		#btn{
			width: 150px;
			margin-top: 10px;
		}
		#div1{
			display: none;
		}
		#div2{
			display: none;
		}
		#div3{
			display: none;
		}
		#div4{
			display: none;
		}		
		#div5{
			display: none;
		}		
		#div6{
			display: none;
		}		
		#div7{
			display: none;
		}
		#div8{
			display: none;
		}
		#div9{
			display: none;
		}
		#div10{
			display: none;
		}
		#enviarios{
			display: none;
		}
		#enviarandroid{
			display: none;
		}
	</style>
	<script>
		function inicio(){
			document.getElementById('div1').style.display = "none";
		}
		
		function prox1(){
			
			var teste = document.getElementById('perq1').value;
				
				if(teste == null){
					alert("Responda todas as questões");
				}else{
					document.getElementById('div1').style.display = "none";
					document.getElementById('div2').style.display = "block";
				}
			
			
		}
		function ios(){
			document.getElementById('div1').style.display = "block";
			document.getElementById('div').style.display = "none";

		}
		function android(){
			document.getElementById('div1').style.display = "block";
			document.getElementById('div').style.display = "none";

		}

		
		function prox2(){
			document.getElementById('div1').style.display = "none";
			document.getElementById('div2').style.display = "none";
			document.getElementById('div3').style.display = "block";
		}
		
		function prox3(){
			document.getElementById('div1').style.display = "none";
			document.getElementById('div2').style.display = "none";
			document.getElementById('div3').style.display = "none";
			document.getElementById('div4').style.display = "block";
		}
		
		function prox4(){
			document.getElementById('div1').style.display = "none";
			document.getElementById('div2').style.display = "none";
			document.getElementById('div3').style.display = "none";
			document.getElementById('div4').style.display = "none";
			document.getElementById('div5').style.display = "block";
		}
		
		function prox5(){
			document.getElementById('div1').style.display = "none";
			document.getElementById('div2').style.display = "none";
			document.getElementById('div3').style.display = "none";
			document.getElementById('div4').style.display = "none";
			document.getElementById('div5').style.display = "none";
			document.getElementById('div6').style.display = "block";

		}
		function prox6(){
			document.getElementById('div1').style.display = "none";
			document.getElementById('div2').style.display = "none";
			document.getElementById('div3').style.display = "none";
			document.getElementById('div4').style.display = "none";
			document.getElementById('div5').style.display = "none";
			document.getElementById('div6').style.display = "none";
			document.getElementById('div7').style.display = "block";
		
		}
		function prox7(){
			document.getElementById('div1').style.display = "none";
			document.getElementById('div2').style.display = "none";
			document.getElementById('div3').style.display = "none";
			document.getElementById('div4').style.display = "none";
			document.getElementById('div5').style.display = "none";
			document.getElementById('div6').style.display = "none";
			document.getElementById('div7').style.display = "none";
			document.getElementById('div8').style.display = "block";
		
		}
		function prox8(){
			document.getElementById('div1').style.display = "none";
			document.getElementById('div2').style.display = "none";
			document.getElementById('div3').style.display = "none";
			document.getElementById('div4').style.display = "none";
			document.getElementById('div5').style.display = "none";
			document.getElementById('div6').style.display = "none";
			document.getElementById('div7').style.display = "none";
			document.getElementById('div8').style.display = "none";
			document.getElementById('div9').style.display = "block";
		
		}
		function prox9(){
			document.getElementById('div1').style.display = "none";
			document.getElementById('div2').style.display = "none";
			document.getElementById('div3').style.display = "none";
			document.getElementById('div4').style.display = "none";
			document.getElementById('div5').style.display = "none";
			document.getElementById('div6').style.display = "none";
			document.getElementById('div7').style.display = "none";
			document.getElementById('div8').style.display = "none";
			document.getElementById('div9').style.display = "none";
			document.getElementById('div10').style.display = "block";
			document.getElementById('enviarandroid').style.display = "block";
		
		}
		
	</script>
	</head>
	<body onload="inicio()"><br>
		<form action="" method="POST">
		<div id="globa"  class="card card-1">
			<div id="div" class="divs">
				<label>1) Você prefere Android ou IOS?</label><br>
				<input type="radio" id="sistema" name="sistema" value="10" onclick="android()"required>Android</input><br>
				<input type="radio" id="sistema" name="sistema" value="100" onclick="ios()" required>IOS</input><br>
				
			</div>
			
			<div id="div1" class="divs">
				<label>1) Quanto você está disposto a gastar?</label><br>
				<input type="radio" id="perq1" name="perq1" value="1" class="input-dominio" required> Até R$ 800,00</input><br>
				<input type="radio" id="perq1" name="perq1" value="2" class="input-dominio" required> Entre R$ 800,00 e R$ 1000,00</input><br>
				<input type="radio" id="perq1" name="perq1" value="3" class="input-dominio" required> Entre R$ 1000,00 e R$ 1800,00</input><br>
				<input type="radio" id="perq1" name="perq1" value="4" class="input-dominio" required> Entre R$ 1800,00 e R$ 3000,00</input><br>
				<input type="radio" id="perq1" name="perq1" value="5" class="input-dominio" required> Mais que R$ 3000,00</input><br><br>
				
				<input type="button" onclick="prox1()" value="Próximo->" id="" class="btn btn-info">
			</div>
			
			<div id="div2" class="divs">
				<label>2) Oque você mais usaria no celular?</label><br>
				<input type="radio" name="perq2" value="1" class="input-dominio"> Ligações e mensagens</input><br>
				<input type="radio" name="perq2" value="3" class="input-dominio"> Redes sociais</input><br>
				<input type="radio" name="perq2" value="5" class="input-dominio"> Jogos</input><br>
				
				<input type="button" value="Próximo->" id="" onclick="prox2()" class="btn btn-info">
			</div>
			
			<div id="div3" class="divs">
				<label>3) Você costuma tirar muitas fotos?</label><br>
				<input type="radio" name="perq3" value="1" class="input-dominio"> Não sei</input><br>
				<input type="radio" name="perq3" value="2" class="input-dominio"> Não</input><br>
				<input type="radio" name="perq3" value="3" class="input-dominio"> Talvez</input><br>
				<input type="radio" name="perq3" value="4" class="input-dominio"> Sim</input><br>
				<input type="radio" name="perq3" value="5" class="input-dominio"> Muitooooooooo!!!!!!!!!!!</input><br><br>
				
				<input type="button" value="Próximo->" id="" onclick="prox3()" class="btn btn-info">
			</div>
			
			<div id="div4" class="divs">
				<label>4) Escolha a quantidade de armazenamento ideal para você!</label><br>
				<input type="radio" name="perq4" value="1" class="input-dominio"> 8GB</input><br>
				<input type="radio" name="perq4" value="2" class="input-dominio"> 16GB</input><br>
				<input type="radio" name="perq4" value="3" class="input-dominio"> 32GB</input><br>
				<input type="radio" name="perq4" value="4" class="input-dominio"> 64GB</input><br>
				<input type="radio" name="perq4" value="5" class="input-dominio"> 128GB</input><br><br>
				
				<input type="button" value="Próximo->" id="" onclick="prox4()" class="btn btn-info">
			</div>
			
			<div id="div5" class="divs">
				<label>5) Qual a melhor opção do tamanho da tela para você?</label><br>
				<input type="radio" name="perq5" value="1" class="input-dominio"> 4.5 Polegadas</input>
				<input type="radio" name="perq5" value="2" class="input-dominio"> 4.7 Polegadas</input>
				<input type="radio" name="perq5" value="3" class="input-dominio"> 5.0 Polegadas</input>
				<input type="radio" name="perq5" value="4" class="input-dominio"> 5.5 Polegadas</input>
				<input type="radio" name="perq5" value="5" class="input-dominio"> 6.2 Polegadas</input><br><br>
				
				<div id="polega">
					<div id="1">
					<a><img src="imgs/4pol.png" id="img1" class="pol"></img></a>
					<a><img src="imgs/4.7pol.png" id="img2" class="pol"></img></a>
					<a><img src="imgs/5.5pol.png" id="img3" class="pol"></img></a>
					<a><img src="imgs/6.1pol.JPG" id="img4" class="pol"></img></a>
					<a><img src="imgs/6.5pol.JPG" id="img5" class="pol"></img></a>
				</div>
			</div>
				<input type="button" value="Próximo->" id="" onclick="prox5()" class="btn btn-info">
			</div>


			<div id="div6" class="divs">
				<label>6) Você se importa com a duração da bateria do seu celular?</label><br>
				<input type="radio" name="perq6" value="1" class="input-dominio"> Não</input><br>
				<input type="radio" name="perq6" value="2" class="input-dominio"> Tanto faz</input><br>
				<input type="radio" name="perq6" value="3" class="input-dominio"> Sim</input><br><br>
				
				<input type="button" value="Próximo->" id="" onclick="prox6()" class="btn btn-info">
			</div>

			<div id="div7" class="divs">
				<label>7) Você se importa com a resolução de suas fotos?</label><br>
				<input type="radio" name="perq7" value="1" class="input-dominio"> Sim</input><br>
				<input type="radio" name="perq7" value="2" class="input-dominio"> Não</input><br><br>
				
				<input type="button" value="Próximo->" id="" onclick="prox7()" class="btn btn-info">
			</div>

			<div id="div8" class="divs">
				<label>8) Você gostaria de um celular mais atual?</label><br>
				<input type="radio" name="perq8" value="1" class="input-dominio"> Não</input><br>
				<input type="radio" name="perq8" value="2" class="input-dominio"> Sim</input><br><br>
				
				<input type="button" value="Próximo->" id="" onclick="prox8()" class="btn btn-info">
			</div>

			<div id="div9" class="divs">
				<label>9) Você se importa com o design do celular?</label><br>
				<input type="radio" name="perq9" value="1" class="input-dominio"> Não</input><br>
				<input type="radio" name="perq9" value="2" class="input-dominio"> Tanto faz</input><br>
				<input type="radio" name="perq9" value="3" class="input-dominio"> Sim</input><br><br><br>
				
				<input type="button" value="Próximo->" id="" onclick="prox9()" class="btn btn-info">
			</div>

			<div id="div10" class="divs">
				<label>10) Você usa mais de um chip?</label><br>
				<input type="radio" name="perq10" value="1" class="input-dominio"> Não</input><br>
				<input type="radio" name="perq10" value="2" class="input-dominio"> Sim</input><br><br>
			
			</div>
				
				<input type="submit" value="Enviar" id="enviarandroid" name="enviarandroid" class="btn btn-success">
			</div>
		</form>
	
	</body>
</html>