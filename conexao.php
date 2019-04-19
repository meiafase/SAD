<?php 
	try{//tente
		$fusca = new PDO("mysql:host=localhost;dbname=sabru_bd","root","");
	}
	catch(PDOException $e){//bloco correspondente ao try;
		//testar var_dump($e);
		//teste método echo $e->getcode();
		echo $e->getMessage(); //metodo amplamente utilizado;
	}
?>