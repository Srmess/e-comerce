<?php 
require_once ("estetica/cabecalho.php");
require_once ("banco-produtos.php");
require_once ("mostra-alerta.php");
?>

<?php mostraAlerta("success");?>

<table class="table table-striped table-bordered">
    <?php
        $produtos = (ListaProduto($conexao));
        foreach ($produtos as $produto):
    ?>    
    <tr>
        <td> <?=$produto ['nome']?> </td>
        <td> <?=$produto ['preco']?> </td>
        <td> <?=substr($produto ['descricao'], 0, 40)?> </td>
        <td> <?=$produto['categorias_nome']?> </td>
        <td> <a class="btn btn-primary" href="formulario-alterar.php?id=<?=$produto['id']?>">ALTERAR</a></td>
        <td> 
            <form action="remove-produto.php" method="POST">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button class="btn btn-danger">DELETAR</button>
            </form> 
        </td>
    </tr>
    <?php endforeach ?>
</table>

<?php include("estetica/rodapé.php");?>