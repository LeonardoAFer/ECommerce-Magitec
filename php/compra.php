<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/compra-main.css">
  <link rel="stylesheet" type="text/css" href="../css/footer.css">

  <title>Compra</title>
</head>

<body>

  <div class="nav-compra">
    <nav class="navbar bg-body-tertiary">
    </nav>
  </div>

  <div class="container-compra1">
    <h1>Minhas Compras</h1>
  </div>
  <hr>

  <div class="voltar">
    <a class="nav-link active" aria-current="page" href="../php/index.php">Voltar para pagina principal</a>
  </div>

<div class="container-compra2">
  <div class="dados-pessoa">
    <h1>Dados pessoais</h1>
    <p>Solicitamos apenas as informações essenciais para a realização da compra.</p>
    
<form class="container">
<label for="ds_emailpag">Email</label>
<input type="text" name="ds_emailpag" id="ds_emailpag" onchange="toggleButton()">
<label for="nm_nomepag">Nome</label>
<input type="text" name="nm_nomepag" id="nm_nomepag" onchange="toggleButton()">
<label for="nm_ulnomepag">Ultimo Nome</label>
<input type="text" name="nm_ulnomepag" id="nm_ulnomepag" onchange="toggleButton()">
<label for="ds_cpfpag">Cpf</label>
<input type="number" name="ds_cpfpag" id="ds_cpfpag" onchange="toggleButton()">
<label for="ds_numeropag">Numero de telefone"</label>
<input type="text" name="ds_numeropag" id="ds_numeropag" onchange="toggleButton()">


</form>

  </div>
  <div class="dados-pagamento">
    <h1>Pagamento</h1>
    <p>Escolha a forma de pagamento</p>
    <button onclick="carPix(); marcarPixClicado();" type="button" class="btn btn-secondary">Pix</button>
    <div class="botao-area">
      <span style="width: 20px;" id="imagem-pix"></span>
      <script src="../JavaScript/btn-pagamento.js"></script>
    </div>
  </div>
  <div class="resumo-pedido">
    <h1>Resumo do pedido</h1>
    <hr>
    <div class="imagem">
    <?php
if (isset($_GET['imagem'])) {
    $imagem = $_GET['imagem'];
    echo '<img src="../uploads/' . $imagem . '" alt="Imagem da compra">';
} else {
    echo 'Imagem não encontrada.';
}

?>
      
<div class="nome-preco">

      <?php
if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    echo "$nome";
} else {
    echo "Nome não encontrado na URL.";
}
?>

 
 
    <?php

if (isset($_GET['preco'])) {
    $preco = $_GET['preco'];
    echo '<h2> Total R$ ' .$preco .  '</h2>'; 
} else {
    echo 'Preço não encontrado.';
}

?>

</div>
   </div>
    <hr>
    <div class="total">

    <p>Descontos : 5% pagamento Pix</p>


    <?php

if (isset($_GET['preco'])) {
  $precoa = floatval($_GET['preco']);
    echo '<p> Subtotal : R$ ' .$precoa .  '</p>'; 
} else {
    echo 'Preço não encontrado.';
}

?>

<?php

if (isset($_GET['preco'])) {
  $preco = floatval($_GET['preco']);
  $preco1 = $preco * 0.05;
    echo '<p> Descontos : R$ ' .$preco1 .  '</p>'; 
} else {
    echo 'Preço não encontrado.';
}

?>


  
      <hr>
    
      <?php

if (isset($_GET['preco'])) {
  $preco = floatval($_GET['preco']);
  $preco1 = $preco * 0.05;
  $preco = $preco - $preco1;
    echo '<h3> Total : R$ ' .($preco) .  '</h3>'; 
} else {
    echo 'Preço não encontrado.';
}

?>

    </div>
    <div class="btn-compra">
  <button id="fim-compra" type="submit" class="btn btn-primary" data-nome="<?php echo $nome; ?> "data-preco=<?php echo $preco; ?>>Finalizar compra</button>
</div>

  </div>
</div>

<div style="background-color: black;" class="rodape">
  <button
    style="background-color: #25D366; border:none; border-radius: 4px; margin-left : 81%; display : flex; position : relative; top : 60px; z-index : 3;"
    type="button" class="btn btn-primary" id="liveToastBtn">Com duvida?</button>
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div style="background-color : #25D366; " class="toast-header">
        <img style="width : 50px" src="../imgs/zap.png" class="rounded me-2" alt="...">
        <strong style="font-size : 18px" class="me-auto">Contate-nos</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div style="background-color : #075E54;" class="toast-body">
        <a style="text-decoration : none; font-size : 15px; color : #fff;"
          href="https://api.whatsapp.com/send?phone=5547991601046&text=Suporte%20magitec">Entre em contato com nós,
          via whatsapp</a>
      </div>
    </div>
  </div>

  <script>

    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')

    if (toastTrigger) {
      const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
      toastTrigger.addEventListener('click', () => {
        toastBootstrap.show()
      })
    }

  </script>

  <div class="rodape-a">
    <a class="nav-link active" aria-current="page" href="../html/sobre-nos.html">Sobre nós</a>
    <a class="nav-link active" aria-current="page" href="#">Tecidos</a>
    <a class="nav-link active" aria-current="page" href="#">Ofertas</a>
    <a class="nav-link active" aria-current="page" href="#">Novidades</a>
    <a class="nav-link active" aria-current="page" href="#">Termos de serviços</a>
    <a class="nav-link active" aria-current="page" href="#">Politica de privacidade</a>
  </div>
  <div class="inf">
    <div class="inf-magitec">
      <img src="../imgs/magitec3.png" alt="MAGITEC LOGO">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime ipsam illum eligendi aperiam, dolor
        accusantium asperiores non rerum nulla officiis, porro explicabo? Explicabo accusamus ut dolor laudantium
        reprehenderit at alias!</p>
    </div>
    <div style="padding-inline: 20px;" class="localizacao">
      <h2>Localização</h2>
      <p>Endereço</p>
      <p>Rua 108, 64</p>
      <p>Centro - Itapema - SC</p>
      <p>88220-000-Itapema/SC-Brasil</p>
    </div>
    <div style="padding-inline: 20px;" class="atendimento">
      <h2>Atendimento</h2>
      <p>Segunda-ferira à Sexta-feira</p>
      <p>9:00-12:00, 14:30-17:30</p>
    </div>
    <div style="padding-inline: 20px;" class="gmail">
      <h2>Gmail</h2>
      <p>magi.tec@gmail.com</p>
    </div>
    <div style="padding-inline: 20px;" class="telefone">
      <h2>Telefone</h2>
      <p>(47) 99269-2325</p>
    </div>
  </div>
</div>
<footer>
  <div class="container-footer">
    <img src="../imgs/BR-Brazil-Flag-icon.png" alt="brasil-bandeira">
    <p>Desenvolvido por LeonardoAF | 2023</p>
</footer>

<script src="../javaScript/btn-compra-pix.js"></script>


</body>
</html>