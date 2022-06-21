  <?php
  require('./header.php')
  ?>

  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Carrinho</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Imagem</th>
                  <th class="product-name">Produto</th>
                  <th class="product-price">Preço</th>
                  <th class="product-name">Categoria</th>
                  <th class="product-remove">Remover</th>
                </tr>
              </thead>
              <?php
              include('produtoCarinho.php');
              ?>
            </table>
          </div>
        </form>
      </div>


      <div class="col-md-6">
        <div class="row justify-content-end">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-12 text-right border-bottom mb-5">
                <h3 class="text-black h4 text-uppercase">Total do Carrinho</h3>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6">
                <span class="text-black">Total</span>
              </div>
              <div class="col-md-6 text-right">
                <strong class="text-black">R$ <?php echo $valorTotal; ?></strong>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <?php if ($valorTotal != 0) { ?>
                  <a href="finalizarPedido.php"> <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Finalizar</button> </a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php require('footer.php') ?>