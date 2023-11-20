<!DOCTYPE html>
<html lang="pt-br">

<head>
	
<meta charset="UTF-8">
	<title>Administrador</title>

	<!-- estilos -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
		integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="shortcut icon" href="../imgs/logoo.jpg" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="../css/stylemain.css">

	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>

	<script src="../JavaScript/adm.js"></script>

</head>

<body>



	<!-- menu -->
	<div class="nav-side-menu">
		<div class="brand" href="../php/adm.php">
			<img src="../imgs/magitec3.png" alt="MAGITEC LOGO">
		</div>
		<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
		<div class="menu-list">

			<ul id="menu-content" class="menu-content collapse out">

				<li data-toggle="collapse" data-target="#cadastro" class="collapsed">

					<a href="#"><i class="fa fa-id-card" aria-hidden="true"></i> Cadastro <span class="arrow"><i
								class="fa fa-angle-down"></i></spam></a>
				</li>

				<ul class="sub-menu collapse" id="cadastro">

					<li><a href="#" id="estoque"><i class="fa fa-angle-right"></i>Estoque</a></li>
				</ul>

				<ul class="sub-menu collapse" id="cadastro">

					<li><a href="#" id="estoque"><i class="fa fa-angle-right"></i>Mais vendidos</a></li>
				</ul>



				<!--Menu relatórios-->

				<li data-toggle="collapse" data-target="#relatorio" class="collapsed">
					<a href="#"><i class="fa fa-print" aria-hidden="true"></i>Relatórios <span class="arrow"><i
								class="fa fa-angle-down"></i></spam></a>
				</li>

				<ul class="sub-menu collapse" id="relatorio">

					<li><a href="#" id="relestoque"><i class="fa fa-angle-right"></i>Estoque</a></li>
				</ul>

				<!--Fim do menu relatórios-->
				<div class="sair-adm">
					<a href="../html/login.html">Sair</a>
				</div>

			</ul>
		</div>
	</div>




	<!-- paginas -->
	<div class="main" id="pagina">



		<video id="video-fundo" autoplay muted loop>
			<source src="../imgs/waves.mp4" type="video/mp4">
		</video>

	</div>


</body>

</html>