<?php 
require_once ("estetica/cabecalho.php");
require_once ("banco-categorias.php");
require_once ("banco-produtos.php");

$id = $_GET['id'];
$produto = BuscaProduto($conexao, $id);
$categorias = ListaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'":"";
?>

    <h1>FORMULÁRIO PARA ALTERAÇÃO DE PRODUTO</h1>
    
  
<form action="altera-produto.php" method="POST">
    <input type="hidden" name="id" value="<?=$produto['id']?>">

    <?php include("formulario-base.php")?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</td>
        </tr>
</form>
</table>


<?php include("estetica/rodapé.php");?>