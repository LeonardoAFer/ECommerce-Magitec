
<html lang="pt-br">
	<head>		
		<meta charset="utf-8">
		<title>Consulta de estoque</title>	
		<link rel="shortcut icon" href="../imgs/logoo.jpg" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta charset="utf-8">
        
        <!-- adicionar CSS Bootstrap >-->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        
        <!-- css personalizado >-->
        <link href="../css/estilo.css" rel="stylesheet" media="screen">
		
		<script src="../javaScript/adm.js"></script>



</style>

		<script>
			function apagar(id){				
				if(window.confirm("Confirma a exclusão ? ")){
					window.location = "excluir_estoque.php?id=" + id;
				}				
			}		
		</script>		
	</head>
	<?php
		require 'conexao.php';	
		$sql = 'select * from tb_compra';
		/*
		  mysqli_query - É a função que irá retornar o resultado da script SQL por meio da variável.
		*/
		$query = mysqli_query($con,$sql);
	?>		
	<body>
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-condensed">
							<thead>
								<tr class="success">	
									<th>Id</th>
									<th>Email</th>
									<th>Nome</th>
									<th>Ultimo nome</th>
									<th>Cpf</th>
									<th>Telefone</th>
                                    <th>Nome Produto</th>
									<th>Preço</th>


								</tr>	
							</thead>
							<?php
								$contlin = 2;
								/*
								 mysqli_fetch_array - Retorna o campo, a posição do array
								*/
								while($reg_compra=mysqli_fetch_array($query))
								{
									$id = $reg_compra['id_compra'];
									$email = $reg_compra['ds_emailpag'];
                                    $nome = $reg_compra['nm_nomepag'];
                                    $ulnome = $reg_compra['nm_ulnomepag'];
                                    $cpf = $reg_compra['ds_cpfpag'];
                                    $telefone = $reg_compra['ds_numeropag'];
                                    $produto = $reg_compra['nm_produtopag'];
                                    $preco = $reg_compra['ds_precopag'];

									
									
								?>
								 <tr class="info">
									<?php
										if($contlin%2 == 0){
											?>
											<tr class="trpar">					
									<?php
										}
									?>	
								    <td><?php echo $id ?></td>
									<td><?php echo $email?></td>									
									<td><?php echo $nome ?></td>
									<td><?php echo $ulnome ?></td>
									<td><?php echo $cpf ?></td>
									<td><?php echo $telefone ?></td>
                                    <td><?php echo $produto ?></td>
									<td><?php echo $preco ?></td>

								</tr>
                                <tr class="cod-pix">	
                                <th>Codigo pix</th>

							<?php
								$contlin = $contlin + 1;
								}
							?>
						</table>
				</div>
			</div>
		</div>
	</div>			
	


	<!--<div class="col-xs-offset-4 col-xs-10">-->
	<div class='col-lg-offset-10'>
		<a href="../php/adm.php" class="btn btn-info">Voltar</a>
	</div>
  </body>
</html>








