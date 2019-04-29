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
		$acrescenta = $agree + 1;
		
		$xesque = ($acrescenta + $disagree);

		$dale = 100 * $acrescenta / $xesque;	

	$sql = "UPDATE resultado_tb 
        SET
        agree = '$acrescenta', aceitacao = $dale
        WHERE 
        id_resultado = '$id_resultado'"; 
	$sad = $fusca -> prepare($sql);
	$sad -> execute();
	$fusca = NULL;

	header("location: pgagradece.php");
		
?>