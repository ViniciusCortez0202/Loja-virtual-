<?php
require('./header.php')

?>

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
                  <th class="product-quantity">Quantidade</th>
                  <th class="product-name">Categoria</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Remover</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-thumbnail">
                    <img src="imagens/cloth_1.jpg" alt="" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">Regata </h2>
                  </td>
                  <td>R$ 24,00</td>
                  <td>
                    <div class="input-group mb-3" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td>Coisa </td>
                  <td>R$ 24,00</td>

                  <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                </tr>

                <tr>
                  <td class="product-thumbnail">
                    <img src="imagens/cloth_2.jpg" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">Camiseta</h2>
                  </td>
                  <td>R$ 24,00</td>
                  <td>
                    <div class="input-group mb-3" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td> Coisa </td>
                  <td>R$ 24,00</td>
                  <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                </tr>

                <tr>
                  <td class="product-thumbnail">
                    <img src="imagens/cloth_2.jpg" alt="Image" class="img-fluid">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">Camiseta </h2>
                  </td>
                  <td>R$ 24,00</td>
                  <td>
                    <div class="input-group mb-3" style="max-width: 120px;">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                      </div>
                      <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                      </div>
                    </div>

                  </td>
                  <td>Coisa de </td>
                  <td>R$ 24,00</td>
                  <td><a href="#" class="btn btn-primary btn-sm">X</a></td>
                </tr>



              </tbody>
            </table>
          </div>
        </form>
      </div>


<?php 
require('footer.php') 
?>