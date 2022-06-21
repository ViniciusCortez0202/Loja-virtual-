    <?php
    require('./header.php');

    if(!isset($_SESSION['produtos'])){
      include('servicoHome.php');
    }
    ?>

    <div class="site-blocks-cover" style="background-image: url(imagens/logo.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-center justify-content-end">
          <div class="col-md-2 mx-auto pt-5 pt-md-0">

            <p>
              <a href="loja.php" class="btn btn-sm btn-primary"> Veja a loja</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Frete Grátis</h2>
              <p>Nossa loja se dedica a entregar gratuitamente nossos produtos</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Aceitamos devoluções</h2>
              <p>Nossa loja aceita devoluções mediante as normas da lei</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Suporte personalizado</h2>
              <p>Nossa loja tem o melhor atendimento personalizado online</p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Produtos Variados</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <?php

              $produtos = $_SESSION['produtos'];

              foreach ($produtos as $produto) {

                ?>
                <div class="item">
                  <div class="block-4 text-center">
                    <figure class="block-4-ima ge">
                      <img width="320px" height="180px" src="<?php echo $produto['pro_imagem']; ?>" alt="" class="img-fl uid">
                    </figure>
                    <div class="block-4-text  p-4">
                      <h3><a href="#"><?php echo $produto['pro_nome']; ?></a>
                      </h3>
                      <p class="mb-0"><?php echo $produto['pro_descricao']; ?></p>
                      <p class="text-primary font-weigh t-bold">R$ <?php echo $produto['pro_preco']; ?></p>
                    </div>
                  </div>
                </div>
              <?php
            }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php require('footer.php') ?>