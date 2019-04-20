<?php

	$modelo_cllr = $_GET['modelo_cllr'];
	$sql = "SELECT * FROM resultado_tb where modelo_cllr=$modelo_cllr";
	include "conexao.php";
    $sad = $fusca -> prepare($sql);
    $sad -> execute();
	
		foreach($sad as $v){
			$id = $v['id'];
			$agree = $v['agree'];
			$disagree = $v['disagree'];
		}
		$acrescenta = $agree + 1;

	$sql = "UPDATE resultado_tb 
        SET
        agree = '$acrescenta'
        WHERE 
        modelo_cllr = '$modelo_cllr'"; 
	$sad = $fusca -> prepare($sql);
	$sad -> execute();
	$fusca = NULL;
		
		header("location: pgagradece.php");
?>