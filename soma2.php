<?php

	$id_resultado = $_GET['id_resultado'];
	$sql = "SELECT * FROM resultado_tb WHERE id_resultado=$id_resultado";
	include "conexao.php";
    $sad = $fusca -> prepare($sql);
    $sad -> execute();
	
		foreach($sad as $v){
			$agree = $v['agree'];
			$disagree = $v['disagree'];
		}
		echo $agree;
		echo "<br>";
		echo $disagree;
		echo "<br>";
		
		$acrescenta2 = $disagree + 1;
		
		$xesque = ($acrescenta2 + $agree);

		$dale = 100 * $acrescenta2 / $xesque;

	$sql = "UPDATE resultado_tb 
        SET
        disagree = '$acrescenta2', aceitacao = $dale
        WHERE 
        id_resultado = '$id_resultado'"; 
	$sad = $fusca -> prepare($sql);
	$sad -> execute();
	$fusca = NULL;
		
?>