<?php
include 'conexao.php';

$email = $_POST["ds_emailpag"];
$nome = $_POST["nm_nomepag"];
$ultimoNome = $_POST["nm_ulnomepag"];
$cpf = $_POST["ds_cpfpag"];
$numeroTelefone = $_POST["ds_numeropag"];

$nomeProduto = $_POST["nm_produtopag"];
$precoProduto = $_POST["ds_precopag"];

$result = mysqli_query($con, "INSERT INTO tb_compra (ds_emailpag, nm_nomepag, nm_ulnomepag, ds_cpfpag, ds_numeropag, nm_produtopag, ds_precopag) VALUES ('$email', '$nome', '$ultimoNome', '$cpf', '$numeroTelefone', '$nomeProduto', '$precoProduto')");
?>