<?php 
require_once ("estetica/cabecalho.php");
require_once ("banco-categorias.php");
require_once ("logica-usuario.php");

usuarioFoiLogado();

$produto = array("nome"=>"", "preco"=>"", "descricao"=>"", "categorias_id"=>"1");
$usado = "";
$categorias = ListaCategorias($conexao);
?>

    <h1>FORMULÁRIO PARA ADIÇÃO DE PRODUTO</h1>
    
<form action="adiciona-produto.php" method="POST">
    
    <?php include ("formulario-base.php");?>    

    <tr>
        <td><button class="btn btn-primary" type="submit">Cadastrar</td>
    </tr>
</table>        
</form>


<?php include("estetica/rodapé.php");?>