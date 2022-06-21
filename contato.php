  <?php
  require('./header.php')
  ?>

  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contato</strong></div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-5">

        <h1 class="display-5"> Contato </h1>

      </div>
    </div>

    <div class="row justify-content-center mb-5">
      <div class="col-sm-12 col-md-10 col-lg-8">
        <form action="" method="post" data-toggle="validator">
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label for="nome" class="font-weight-bold"> Nome completo</label>
              <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <label for="email" class="font-weight-bold"> Email: </label>
              <input type="email" class="form-control" name="email" placeholder="Email" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>



          <div class="form-row">

            <div class="form-group col-sm-6">
              <label for="assunto" class="font-weight-bold">Assunto:</label>
              <input type="text" class="form-control" name="assunto" required>
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">


              <label for="mensagem" class="font-weight-bold">Escreva sua mensagem:</label>
              <textarea class="form-control" rows="10" cols="100" name="mensagem" required></textarea>
              <div class="help-block with-errors"></div>
            </div>








            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary ml-1">Enviar </button>
              </div>





        </form>
      </div>
    </div>

  </div>

  </div>





  <?php require('footer.php') ?>