<?php
include('servicoCarrinho.php');
buscarPedidos();
?>
<tbody>



    <?php
    $valorTotal = 0;
    if (isset($_SESSION['carrinho']) && $_SESSION['carrinho']) {
        $produtos = $_SESSION['carrinho'];


        foreach ($produtos as $produto) {

            ?>
            <tr>
                <td class="product-thumbnail">
                    <img src="<?php echo $produto['pro_imagem']; ?>" alt="" class="img-fluid">
                </td>
                <td class="product-name">
                    <h2 class="h5 text-black"><?php echo $produto['pro_nome']; ?></h2>
                </td>
                <td>R$ <?php echo $produto['pro_preco']; ?></td>
                <td><?php echo $produto['cat_tipo']; ?></td>

                <td><a href="excluirProdutoCarrinho.php/?id=<?php echo $produto['pro_id']; ?>" class="btn btn-primary btn-sm">X</a></td>
            </tr>
            <?php $valorTotal = $produto['total'];
        }
    } ?>

</tbody>