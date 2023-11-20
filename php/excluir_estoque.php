<?php
	include 'conexao.php';
	if(is_numeric($_GET["id"])){
		$sql = "DELETE FROM tb_estoque WHERE id_estoque = ".$_GET["id"];
		mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) >=0){
			echo"<script>alert('Registro apagado com sucesso');</script>";
			echo"<script>window.location='../php/adm.php'</script>";
			}
	}