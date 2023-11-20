<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro estoque</title>
        <meta name="description" content="">
        <link rel="shortcut icon" href="../imgs/logoo.jpg" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/addestoque.css">

    </head>
    </style>
    
    <body>
        <h1>Cadastro de estoque</h1>
        <main class="container mt-5">
        <form enctype="multipart/form-data" action ="inclusaoestoque.php" method="post" onSubmit="return validaCampo();">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nm_produto">Nome</label>
                <input type="text"  class="form-control" id="nm_produto" name="nm_produto" placeholder="Nome" onkeypress="limpa();">
              </div>

              <div class="form-group col-md-6">
                <label for="ds_desc">Descrição</label>
                <input type="text"  class="form-control" id="ds_desc" name="ds_desc" placeholder="Descrição" onkeypress="limpa();">
              </div>
              
              <div class="form-group col-md-6">
                <label for="ds_composicao">Composição do material</label>
                <input type="text"  class="form-control" id="ds_composicao" name="ds_composicao" placeholder="Composição" onkeypress="limpa();">
              </div>     
              
              <div class="form-group col-md-6">
                <label for="nm_cor">Cor</label>
                <input type="text"  class="form-control" id="nm_cor" name="nm_cor" placeholder="Cor" onkeypress="limpa();">
              </div> 

              <div class="form-group col-md-6">
                <label for="nm_elasticidade">Elasticidade</label>
                <input type="text"  class="form-control" id="nm_elasticidade" name="nm_elasticidade" placeholder="Elasticidade" onkeypress="limpa();">
              </div> 

              <div class="form-group col-md-6">
                <label for="ds_largura">Largura</label>
                <input type="text"  class="form-control" id="ds_largura" name="ds_largura" placeholder="Largura" onkeypress="limpa();">
              </div> 

              <div class="form-group col-md-6">
                <label for="nm_padronagem">Padronagem</label>
                <input type="text"  class="form-control" id="nm_padronagem" name="nm_padronagem" placeholder="Padronagem" onkeypress="limpa();">
              </div> 

              <div class="form-group col-md-6">
                <label for="ds_gramatura">Gramatura</label>
                <input type="text"  class="form-control" id="ds_gramatura" name="ds_gramatura" placeholder="Gramatura" onkeypress="limpa();">
              </div> 

              <div class="form-group col-md-6">
                <label for="ds_preco">Preço</label>
                <input type="text"  class="form-control" id="ds_preco" name="ds_preco" placeholder="Preço" onkeypress="limpa();">
              </div>    

              <div class="form-group col-md-2">
                <label for="ds_unidades">Numero de unidades</label>
                <input type="number" class="form-control" id="ds_unidades" name="ds_unidades"  min="0" onkeypress="limpa();">
              </div>

              <div class="imagens">
                <p><label for="imagem">Selecione uma imagem</label>
                <input type="file" name="imagem" id="imagem"></p>
              </div>

              <div class="btn">
              <button type="submit" class="btn btn-primary">Enviar</button>
           </div>
          </form>
          <div id="erro">

          </div>	
          </main>
        
        
    </body>
</html>