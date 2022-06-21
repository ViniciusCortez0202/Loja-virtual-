<?php
require('./header.php');

if (!isset($_SESSION['produtos']) || !isset($_SESSION['categorias'])) {
  include('servicoLoja.php');
}

?>

<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Loja</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">

    <div class="row mb-5">
      <div class="col-md-9 order-2">

        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="float-md-left mb-4">
              <h2 class="text-black h5">Toda Loja</h2>
            </div>
            <div class="d-flex">
              <div class="dropdown mr-1 ml-md-auto">

              </div>
              <div class="btn-group">

              </div>
            </div>
          </div>
        </div>

        <div class="row mb-5">

          <?php

          if (isset($_SESSION['produtos']) && $_SESSION['produtos'] != false) {
            $produtos = $_SESSION['produtos'];

            foreach ($produtos as $produto) {
              ?>

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="shop-single.php"><img width="320px" height="180px" src="<?php echo $produto["pro_imagem"]; ?>" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.php"><?php echo $produto["pro_nome"]; ?></a></h3>
                    <p class="mb-0"><?php echo $produto["pro_descricao"]; ?></p>
                    <p class="text-primary font-weight-bold">R$ <?php echo $produto["pro_preco"]; ?></p>
                    <?php if (isset($_SESSION['dadosUsuario']['cli_id'])) { ?>
                      <a href="adicionarCarrinho.php/?id=<?php echo $produto['pro_id']; ?>"><button type="link" class="btn-primary">Adicionar ao carrinho</button></a>
                    <?php } ?>
                  </div>
                </div>
              </div>

            <?php }
        } else {
          ?>
            <p style="text-aling:ceter;"> <?php echo "PRODUTOS NÃO ENCONTRADOS"; ?> </p>
          <?php
        }
        ?>

        </div>
        
      </div>

      <div class="col-md-3 order-1 mb-5 mb-md-0">
        <div class="border p-4 rounded mb-4">
          <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
          <ul class="list-unstyled mb-0">
            <form action="servicoLoja.php" method="POST">

              <?php
              $categorias = $_SESSION['categorias'];

              foreach ($categorias as $categoria) {
                ?>

                <li class="mb-1"><a class="d-flex"><span><input value="<?php echo strtoupper($categoria['cat_tipo']) ?>" type="checkbox" name="categoria[]"> <?php echo strtoupper($categoria['cat_tipo']); ?></span></a></li>

              <?php } ?>
              <button type="submit" class="btn-primary"> Pesquisar </button>
            </form>
        </div>

        <div class="border p-4 rounded mb-4">
          <div class="mb-4">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filtrar pelo preço</h3>
            <div id="slider-range" class="border-primary"></div>
            <form action="servicoLoja.php" method="POST">
              <input type="text" name="valor" id="amount" class="form-control border-0 pl-0 bg-white" readonly />
              <button type="submit" class="btn-primary"> Pesquisar </button>
            </form>
          </div>





        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="site-section site-blocks-2">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7 site-section-heading pt-4">
              <h2>Categorias</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="imagens/shonen.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">Coleções</span>
                  <h3>Shonen</h3>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="imagens/shojo.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">Coleções</span>
                  <h3>Shoujo</h3>
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<?php require('footer.php') ?>