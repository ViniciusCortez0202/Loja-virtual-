<?php
require('./header.php')

?>

<div class="container">
    <div class="row">
      <div class="col-12 text-center my-5">

        <h1 class="display-5"> Cadastro de Produtos </h1>

      </div>
    </div>

    <div class="row justify-content-center mb-5">
      <div class="col-sm-12 col-md-10 col-lg-8">
        <form action="servicoCadastrarProdutos.php" method="post" data-toggle="validator"  enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label for="nome" class="font-weight-bold"> Produto</label>
              <input type="text" class="form-control" name="nome" placeholder="Nome do produto" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <label for="imagem" class="font-weight-bold"> Imagem: </label>
              <input type="file" class="form-control btn" name="arquivo" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>



          <div class="form-row">

            <div class="form-group col-sm-4">
              <label for="categoria" class="font-weight-bold"> Categoria:</label>
              <select class="form-control" name="categoria" required>
                <?php 
                  include('bdCategorias.php');
                  $categorias = buscarCategorias();
                  foreach($categorias as $categoria){
                ?>
                  <option value="<?php echo $categoria['cat_id']; ?>"><?php echo $categoria['cat_tipo']; ?></option>
                  <?php } ?>
              </select>
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-4">
              <label for="preco" class="font-weight-bold"> Preço:</label>
              <input type="text" class="form-control" name="preco" placeholder="R$ 40,00 (somente números)" required>
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-4">
              <label for="assunto" class="font-weight-bold"> Quantidade em estoque:</label>
              <input type="number" class="form-control" name="estoque" required>
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">


              <label for="descricao" class="font-weight-bold">Descrição do produto:</label>
              <textarea class="form-control" rows="4" cols="100" name="descricao" required></textarea>
              <div class="help-block with-errors"></div>
            </div>








            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary ml-1">Enviar </button>
              </div>





        </form>
      </div>
    </div>






<?php 
require('footer.php') 
?>