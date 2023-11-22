<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="stylesheet" type="text/css" href="../css/footer.css">
  <link rel="shortcut icon" href="../imgs/logoo.jpg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Magitec</title>
</head>

<style>

  .hide {

    display: none;

  }

</style>


<body>
  <nav class="navbar" style="background-color: #152147;">
    <div class="container">
      <a class="navbar-brand" href="../php/index.php">
        <img src="../imgs/magitec3.png" alt="MAGITEC LOGO">
      </a>
      <div class="sair-icon">
        <a class="navbar-brand" href="../html/login.html">
          <img src="../imgs/logout-icon.png" alt="logout">
        </a>
      </div>
      <div class="container-fluid">
        <a style="right: 50%" class="nav-link active" aria-current="page" href="../html/login.html">Sair</a>
        <a class="nav-link active" aria-current="page" href="../html/sobre-nos.html">Sobre nós</a>
        <a class="nav-link active" aria-current="page" href="#compra-tecido">Tecidos</a>
        <a class="nav-link active" aria-current="page" href="../php/ofertas.html">Ofertas</a>
        <a class="nav-link active" aria-current="page" href="#">Novidades</a>
        <a class="navbar-brand"></a>
      </div>
    </div>
  </nav>

  <svg xmlns="http://www.w3.org/20 00/svg" viewBox="0 0 1440 320">
    <path fill="#152147" fill-opacity="1"
      d="M0,224L30,218.7C60,213,120,203,180,170.7C240,139,300,85,360,101.3C420,117,480,203,540,208C600,213,660,139,720,128C780,117,840,171,900,176C960,181,1020,139,1080,106.7C1140,75,1200,53,1260,64C1320,75,1380,117,1410,138.7L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
    </path>
  </svg>


  <section>
    <h1>Mais vendidos</h1>
    <div class="carousel-controls">
      <div class="botao-direita">
        <button id="esquerda" class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="wrapper">
        <div class="carrosel">
          <img src="../imgs/DESTAQUE TECIDO CETIM.png" alt="tecido cerim">
          <img src="../imgs/DESTAQUE TECIDO CREPE.png" alt="tecido crepe">
          <img src="../imgs/DESTAQUE TECIDO LAISE.png" alt="tecido laise">
          <img src="../imgs/DESTAQUE TECIDO LINHO.png" alt="tecido linho">
          <img src="../imgs/DESTAQUE TECIDO MUSSELINE.png" alt="tecido musseline">
          <img src="../imgs/DESTAQUE TECIDO VISCOSE.png" alt="tecido viscose">
          <img src="../imgs/DESTAQUE TECIDO RENDAS.png" alt="tecido rensa">
          <img src="../imgs/DESTAQUE TECIDO LUREX.png" alt="tecido rensa">
        </div>
      </div>
      <div class="botao-esquerda">
        <button id="direita" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
      </div>
    </div>
  </section>
  <script src="../JavaScript/carrosel.js"></script>

  <div class="container-banner-index">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="../imgs/banner-selecao-1691631863.jpg" class="d-block w-1500" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="../imgs/banner-italianos-1693945523.jpg " class="d-block w-1000" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="../imgs/fullbanner-linhobordado-1695033739.jpg" class="d-block w-1000" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

 

  <h1 style="color: #152147; text-align: center; top: 150px; position: relative;  font-size: 20px;">TECIDOS</h1>
   <ol data-type="nav-menu">
    <div id="compra-tecido" class="compra-tecido">
     <input type="text"  id="search" name="search" placeholder="Procurar tecido">
      <div class="container-lg"> 



 <?php



 include 'conexao.php';
 $sql_query = $con->query("SELECT nm_imagem , ds_desc , ds_preco , nm_produto , ds_composicao , ds_unidades , id_estoque , nm_cor , nm_elasticidade , ds_largura , nm_padronagem , ds_gramatura FROM tb_estoque");
 while($row = $sql_query->fetch_assoc()) {


 ?>
 
        <div class="area-tecido">
        <a href="../php/tecido-1.php?imagem=<?php echo urlencode($row['nm_imagem']); ?>&desc=<?php echo urlencode($row['ds_desc']); ?>&nome=<?php echo urlencode($row['nm_produto']); ?>&comp=<?php echo urlencode($row['ds_composicao']); ?>&unidades=<?php echo urlencode($row['ds_unidades']); ?>&ides=<?php echo urlencode($row['id_estoque']); ?>&preco=<?php echo urlencode($row['ds_preco']); ?>&cor=<?php echo urlencode($row['nm_cor']); ?>&elas=<?php echo urlencode($row['nm_elasticidade']); ?>&larg=<?php echo urlencode($row['ds_largura']); ?>&padro=<?php echo urlencode($row['nm_padronagem']); ?>&gram=<?php echo urlencode($row['ds_gramatura']); ?>">
    <img src="../uploads/<?php echo $row['nm_imagem']; ?>" alt="imagem">
    <h3><?php echo $row['ds_desc']; ?></h3>
    <h2><?php echo $row['ds_preco']; ?></h2>
</a>
      </div>


      
 <?php
 }

 ?>

    </div>
  </div>
 </ol>



  <div class="rodape">
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

    <div class="rodape-a">
      <a class="nav-link active" aria-current="page" href="../html/sobre-nos.html">Sobre nós</a>
      <a class="nav-link active" aria-current="page" href="#compra-tecido">Tecidos</a>
      <a class="nav-link active" aria-current="page" href="#">Ofertas</a>
      <a class="nav-link active" aria-current="page" href="#">Novidades</a>
      <a class="nav-link active" aria-current="page" href="../policy/policy.pdf" download="policy.pdf">Termos de serviços</a>
    <a class="nav-link active" aria-current="page" href="../policy/privacy.pdf" download="privacy.pdf">Politica de privacidade</a>
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

  <script src="../javaScript/filtro-pesquisa.js"></script>
  <script src="../javaScript/btn-zap.js"></script>



</body>
</html>