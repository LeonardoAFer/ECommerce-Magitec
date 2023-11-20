<?php
include 'conexao.php';

$id = $_POST['id_estoque'];
$produto = $_POST['nm_produto'];
$desc = $_POST['ds_desc'];
$composicao = $_POST['ds_composicao'];
$unidades = $_POST['ds_unidades'];
$preco = $_POST['ds_preco'];
$cor = $_POST['nm_cor'];
$elas = $_POST['nm_elasticidade'];
$larg = $_POST['ds_largura'];
$padro = $_POST['nm_padronagem'];
$gram = $_POST['ds_gramatura'];

if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $imagem_nome = $_FILES['imagem']['name'];
    $imagem_temp = $_FILES['imagem']['tmp_name'];
  
    $pasta_destino = '../uploads/';
  
    if (move_uploaded_file($imagem_temp, $pasta_destino . $imagem_nome)) {
  
      $sql = "INSERT INTO tb_estoque (nm_imagem) VALUES ('$imagem_nome')";
   
    $result = mysqli_query($con, "INSERT INTO tb_estoque (nm_produto, ds_desc, ds_composicao, ds_unidades, ds_preco, nm_imagem, nm_cor, nm_elasticidade, ds_largura, nm_padronagem, ds_gramatura)
                                   VALUES ('$produto', '$desc', '$composicao', '$unidades', '$preco' , '$imagem_nome' , '$cor' , '$elas' , '$larg' , '$padro' , '$gram')");

    if ($result) {
        echo "<script>alert('Cadastro realizado com sucesso');</script>";
        echo "<script>window.location = '../php/adm.php'</script>";
    } else {
        echo "<script>alert('Ocorreu um erro ao cadastrar. Por favor, tente novamente.');</script>";
        echo "<script>window.location = '../php/adm.php'</script>";
        exit;
    }

}

}

?>

