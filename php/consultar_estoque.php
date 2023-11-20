
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
		$sql = 'select * from tb_estoque';
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
									<th>Produto</th>
									<th>Descrição</th>
									<th>Composição</th>
									<th>Unidades</th>
									<th>Preço</th>
<th>Cor</th>
<th>Elasticidade</th>
<th>Largura</th>
<th>Padronagem</th>						
<th>Gramatura</th>			

								</tr>	
							</thead>
							<?php
								$contlin = 2;
								/*
								 mysqli_fetch_array - Retorna o campo, a posição do array
								*/
								while($reg_cadastro=mysqli_fetch_array($query))
								{
									$id = $reg_cadastro['id_estoque'];
									$produto = $reg_cadastro['nm_produto'];
                                    $desc = $reg_cadastro['ds_desc'];
                                    $composicao = $reg_cadastro['ds_composicao'];
                                    $unidades = $reg_cadastro['ds_unidades'];
                                    $preco = $reg_cadastro['ds_preco'];
									$cor = $reg_cadastro['nm_cor'];
									$elas = $reg_cadastro['nm_elasticidade'];
									$larg = $reg_cadastro['ds_largura'];
									$padro = $reg_cadastro['nm_padronagem'];
									$gram = $reg_cadastro['ds_gramatura'];
									
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
									<td><?php echo $produto?></td>									
									<td><?php echo $desc ?></td>
									<td><?php echo $composicao ?></td>
									<td><?php echo $unidades ?></td>
									<td><?php echo $preco ?></td>
									<td><?php echo $cor ?></td>
									<td><?php echo $elas ?></td>
									<td><?php echo $larg ?></td>
									<td><?php echo $padro ?></td>
									<td><?php echo $gram ?></td>






								

									
									<td align="center"><a href="../php/editar_estoque.php?id=<?php echo $reg_cadastro["id_estoque"]?>" class="btn btn-success">Alterar</a>
									<td align="center"><a href="#" class="btn btn-danger" onclick = "apagar('<?php echo $reg_cadastro["id_estoque"]?>');">Excluir</td>
								</tr>

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








