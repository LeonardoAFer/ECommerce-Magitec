<?php
include 'conexao.php';

$usuario = $_POST['nm_usuario'];
$email = $_POST['ds_email'];
$senha = $_POST['ds_senha'];


if (empty($usuario) || empty($email) || empty($senha)) {
    echo "<script>
            window.location = '../html/login.html';
            alert('Por favor, preencha todos os campos.');
          </script>";

} else {
$constusu = mysqli_query($con, "select * from tb_usuario WHERE nm_usuario = '$usuario'");
$constemail = mysqli_query($con, "select * from tb_usuario WHERE ds_email = '$email'");

if (mysqli_num_rows($constemail) > 0 && mysqli_num_rows($constusu) > 0) {
	echo "<script>
			window.location = '../html/login.html';
			alert('Este email e usuário já está cadastrado.');
		  </script>";
}

}if (mysqli_num_rows($constusu) > 0) {
	echo "<script>
			window.location = '../html/login.html';
			alert('Este nome de usuário já está cadastrado. Por favor, escolha outro nome.');
		  </script>";

		}if (mysqli_num_rows($constemail) > 0) {
			echo "<script>
					window.location = '../html/login.html';
					alert('Este email já está cadastrado. Por favor, escolha outro email.');
				  </script>";

		
		

} else {
    $result = mysqli_query($con, "INSERT INTO tb_usuario (nm_usuario, ds_email, ds_senha)
                                   VALUES ('$usuario', '$email', '$senha')");

    if ($result) {
        echo "<script>alert('Usuário cadastrado com sucesso');</script>";
        echo "<script>window.location = '../html/login.html'</script>";
        exit;
    } else {
        echo "<script>
                window.location = '../html/login.html';
                alert('Ocorreu um erro ao cadastrar o usuário. Por favor, tente novamente.');
              </script>";
    }
}
?>