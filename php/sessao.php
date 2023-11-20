<?php
session_start();
$login = $_POST['nm_usuario'];
$senha = $_POST['ds_senha'] ;



include 'conexao.php';

$result = mysqli_query($con, "select nm_usuario, ds_senha from tb_usuario where nm_usuario = '$login' and ds_senha = '$senha'");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['nm_usuario'] === 'leo' && $row['ds_senha'] === '123') {
        header('Location: ../php/adm.php');
		exit;
	}

	
    $_SESSION['txtnome'] = $login ;
    $_SESSION['txtsenha'] = $senha;
    header('Location: ../php/index.php');
	exit;
} else {
    unset($_SESSION['txtnome']);
    unset($_SESSION['txtsenha']);
    echo "<script>
            window.location = '../html/login.html';
            alert('Usuário ou senha incorretos. Por favor, tente novamente.');
          </script>";
    exit;
}
?>	

