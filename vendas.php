<?php
require('./header.php');
include('servicoVendas.php');
?>

<div class="content">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-header">
          <h4 class="text-primary text-center"> Lista de vendas</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">

                <th>
                  Cliente
                </th>
                <th>
                  Preço
                </th>

                <th>
                  Status
                </th>
              </thead>
              <tbody>
                <?php
                if ($pedidos != "") {
                  foreach ($pedidos as $pedido) {
                    ?>
                    <tr>

                      <td>
                        <?php echo $pedido['cli_nome'] ?>
                      </td>
                      <td>
                        R$ <?php echo $pedido['ped_valor_total'] ?>
                      </td>

                      <td>
                        <a href="confirmarPedido.php/?id=<?php echo $pedido['ped_id'] ?>"> <button type="link" class="btn btn-primary"> Confirmar compra</button> </a>
                      </td>

                    </tr>

                  <?php }
              } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  require('footer.php')
  ?>