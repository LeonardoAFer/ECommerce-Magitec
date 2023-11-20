<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/compra.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="../imgs/logoo.jpg" type="image/x-icon">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <title>Compra magitec</title>
</head>

<nav class="navbar" style="background-color: #152147; z-index: 1;">
    <div class="container">
        <a class="navbar-brand" href="../php/index.php">
            <img src="../imgs/magitec3.png" alt="MAGITEC LOGO">
        </a>
        <a class="navbar-brand" href="../html/login.html">
            <img style="right: 85%; height: 23px;" src="../imgs/logout-icon.png" alt="logout">
        </a>
        <div class="container-fluid">
            <a style="right: 39%" class="nav-link active" aria-current="page" href="../html/login.html">Sair</a>
            <a class="nav-link active" aria-current="page" href="../html/sobre-nos.html">Sobre nós</a>
            <a class="nav-link active" aria-current="page" href="#">Tecidos</a>
            <a class="nav-link active" aria-current="page" href="#">Ofertas</a>
            <a class="nav-link active" aria-current="page" href="#">Novidades</a>
            <a class="navbar-brand"></a>
            <form class="d-flex" role="search">
                <input style="height: 30px;" class="form-control me-2" type="Procura-se" placeholder="Procura-se"
                    aria-label="Search">
                <button class="btn btn-sm btn-outline-secondary" type="button">Procurar</button>
            </form>
        </div>
    </div>
</nav>

<div class="banner-sobre-nos">
    <img style="box-shadow:
        0px 4.3px 10.6px -4px rgba(0, 0, 0, 0.162),
        0px 11.9px 21.8px -4px rgba(0, 0, 0, 0.254),
        0px 28.6px 35.5px -4px rgba(0, 0, 0, 0.296),
        0px 95px 74px -4px rgba(0, 0, 0, 0.25)
      ;" src="../imgs/banner-sobre-nos.png" alt="">
    <svg style="position: relative; bottom: 500px; z-index : 0;" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320">
        <path s fill="#152147" fill-opacity="1"
            d="M0,224L30,218.7C60,213,120,203,180,170.7C240,139,300,85,360,101.3C420,117,480,203,540,208C600,213,660,139,720,128C780,117,840,171,900,176C960,181,1020,139,1080,106.7C1140,75,1200,53,1260,64C1320,75,1380,117,1410,138.7L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>
    <h1>Compra</h1>
</div>



<div class="compra">
    <div class="compra-desc">

        <?php

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    echo '<h1>' . $nome . '</h1>'; 
} else {
    echo 'Nome não encontrado.';
}

?>
        <hr>

        <?php

if (isset($_GET['desc'])) {
    $descricao = $_GET['desc'];
    echo '<p>' . $descricao . '</p>'; 
} else {
    echo 'Descrição não encontrada.';
}


?>
        <hr>
        <h2>Composição</h2>

        <?php

if (isset($_GET['comp'])) {
    $composicao = $_GET['comp'];
    echo '<p>' . $composicao . '</p>'; 
} else {
    echo 'Composição não encontrada.';
}


?>

    </div>

    <div class="tecido-img">

        <?php
if (isset($_GET['imagem'])) {
    $imagem = $_GET['imagem'];
    echo '<img src="../uploads/' . $imagem . '" alt="Imagem da compra">';
} else {
    echo 'Imagem não encontrada.';
}

?>

    </div>
    <div class="tecido-comprar">
    <div class="texto-tecido-comprar">
        <?php
        if (isset($_GET['unidades'])) {
            $unidades = $_GET['unidades'];
            echo '<div class="unidades">' . $unidades .  ' Unidades</div>'; 
        } else {
            echo 'Unidades não encontrada.';
        }
        ?>
        <div class="novidade"> Novidade </div>
        <h1>Numero de refêrencia</h1>
        <?php
        if (isset($_GET['ides'])) {
            $ides = $_GET['ides'];
            echo '<p>' . $ides .  '</p>'; 
        } else {
            echo 'Id não encontrado.';
        }
        ?>
        <?php
        if (isset($_GET['preco'])) {
            $preco = $_GET['preco'];
            echo '<h2> Por ' . $preco .  '</h2>'; 
        } else {
            echo 'Preço não encontrado.';
        }
        ?>
        <p>(Até 3x no cartão sem juros)</p>
        <h3>5% de desconto no pagamento a vista</h3>
        <a href="#">ver formas de pagamento</a>
        <hr>
    </div>


    <a href="../php/compra.php?imagem=<?php echo urlencode($_GET['imagem']); ?>&desc=<?php echo urlencode($_GET['desc']); ?>&nome=<?php echo urlencode($_GET['nome']); ?>&comp=<?php echo urlencode($_GET['comp']); ?>&unidades=<?php echo urlencode($_GET['unidades']); ?>&ides=<?php echo urlencode($_GET['ides']); ?>&preco=<?php echo urlencode($_GET['preco']); ?>&cor=<?php echo urlencode($_GET['cor']); ?>&elas=<?php echo urlencode($_GET['elas']); ?>&larg=<?php echo urlencode($_GET['larg']); ?>&padro=<?php echo urlencode($_GET['padro']); ?>&gram=<?php echo urlencode($_GET['gram']); ?>">
        <button type="button" class="btn btn-primary">Comprar</button>
    </a>
</div>
</div>

<div class="dados-tecnicos">
    <h1>Dados Técnicos</h1>
    <div class="dados-inf">
        <table class="table table-striped-columns">
            <tbody>
                <tr>
                    <th scope="row">Composição</th>
                    <?php

if (isset($_GET['comp'])) {
    $comp = $_GET['comp'];
    echo '<td>' . $comp . '</td>'; 
} else {
    echo 'Composição não encontrada.';
}


?>                  
                </tr>
                <tr>
                    <th scope="row">Cor predominante</th>
                    <?php
if (isset($_GET['cor'])) {
    $cor = $_GET['cor'];
    echo '<td> ' . $cor .  '</td>'; 
} else {
    echo 'Cor não encontrada.';
}

?>
                </tr>
                <tr>
                    <th scope="row">Elasticidade</th>
                    <?php
if (isset($_GET['elas'])) {
    $elas = $_GET['elas'];
    echo '<td> ' . $elas .  '</td>'; 
} else {
    echo 'Elastiidade não encontrada.';
}

?>
                </tr>
                <tr>
                    <th scope="row">Largura</th>
                    <?php
if (isset($_GET['larg'])) {
    $larg = $_GET['larg'];
    echo '<td> ' . $larg .  '</td>'; 
} else {
    echo 'Largura não encontrada.';
}

?>
                </tr>
                <tr>
                    <th scope="row">Padronagem</th>
                    <?php
if (isset($_GET['padro'])) {
    $padro = $_GET['padro'];
    echo '<td> ' . $padro .  '</td>'; 
} else {
    echo 'Padronagem não encontrada.';
}

?>
                </tr>
                <tr>
                    <th scope="row">Gramatura</th>
                    <?php
if (isset($_GET['gram'])) {
    $gram = $_GET['gram'];
    echo '<td> ' . $gram .  '</td>'; 
} else {
    echo 'Gramatura não encontrada.';
}

?>
                </tr>
            </tbody>
        </table>
        <div class="ofertas-email">
            <h2>Receba ofertas no seu email</h2>
            <input class="oferta" type="oferta" name="ds_email-oferta" id="ds_email-oferta">
        </div>
    </div>
</div>


<div class="banner-icons">
    <img src="../imgs/compra-footer.png" alt="">
</div>

<div class="rodape">
    <button style="background-color: #25D366; border:none; border-radius: 4px; margin-left : 81%; display : flex; position : relative; top : 60px; z-index : 3;" type="button" class="btn btn-primary" id="liveToastBtn">Com duvida?</button>
   <div class="toast-container position-fixed bottom-0 end-0 p-3">
     <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
       <div style="background-color : #25D366; " class="toast-header">
         <img style="width : 50px" src="../imgs/zap.png" class="rounded me-2" alt="...">
         <strong style="font-size : 18px" class="me-auto">Contate-nos</strong>
         <small>11 mins ago</small>
         <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
       </div>
       <div style="background-color : #075E54;" class="toast-body">
       <a style="text-decoration : none; font-size : 15px; color : #fff;" href="https://api.whatsapp.com/send?phone=5547991601046&text=Suporte%20magitec">Entre em contato com nós, via whatsapp</a> 
       </div>
     </div>
   </div>
   
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

     <script src="../javaScript/btn-zap.js"></script>



<body>