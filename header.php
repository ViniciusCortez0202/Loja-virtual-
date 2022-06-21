<?php

session_start();
?>

<html lang="pt-br">

<head>
  <title> Mangá Virtual - Home </title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/estilo.css">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>

<body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="servicoLoja.php" class="site-block-top-search" method="POST">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" name="texto" placeholder="Pesquisar">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Mangá Virtual</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="acaoPerfil.php"><span class="icon icon-person"></span></a></li>
                  <?php if (isset($_SESSION['dadosUsuario']['cli_id'])) { ?>
                    <li>
                      <a href="carrinho.php" class="site-cart">
                        <span class="icon icon-shopping_cart"></span>
                        <span class="count"><?php
                          if(isset($_SESSION['carrinho'])){
                           echo sizeof($_SESSION['carrinho']);
                          } else {
                            echo 0;
                          } 
                         ?></span>
                      </a>
                    </li>
                  <?php } ?>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active">
              <a href="servicoHome.php">Home</a>
            </li>

            <li>
              <a href="sobre.php">Sobre</a>
            </li>

            <li><a href="servicoLoja.php">Loja</a></li>
            <?php if (isset($_SESSION['dadosUsuario']['cli_id'])) { ?>
              <li><a href="contato.php">Contato</a></li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </header>

  </div>