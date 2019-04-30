<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <style>
    	*{
    		padding: 20px;
    		margin: 0;
    	}
    	body{
    		background-color: #ff4444;
    		font-family: sans-serif;
    	}
    	#total{
    		width: 500px;
    		height: 400px;
    		margin: 0 auto;
    		background-color: #004749;
    		color: white;
    		margin-top: 30px;
    	}
    	#link{
    		text-decoration: none;
    		color: #f7dba7;
    		font-size: 20px;
    		margin-top: 10px;
    	}
    	#link:hover{
    		color: #df2935;
    		font-size: 22px;
    	}
    	#img{
    		width: 300px;
    		height: 200px;
    		margin-left: 15%;
    	}
    	.card-1 {
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            background-color: #004749;
            border-radius: 30px;
            border-style: solid;
            border-width: 5px;
            border-color: gray;
		}

		.card-1:hover {
		  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
		}
	</style>
  </head>
  <body>
  	<div id="total" class="card-1">
  		<h1>Obrigado pelas respostas !</h1>
  		<img src="imgs/thanks1.png" id="img">
  		<h3>Deseja responder novamente?<a href="index.php" id="link">click aqui!</a></h3>
  	</div>
   
  </body>
</html>