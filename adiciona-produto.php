<?php require_once ("estetica/cabecalho.php");
require_once ("banco-produtos.php");
require_once ("logica-usuario.php");

usuarioFoiLogado();

$nome = $_POST["nome"];
$val = $_POST["preco"];
$des = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('usado', $_POST)){
    $usado = "true";
} else {
    $usado ="false";
}

if (RecebeProduto($conexao, $nome, $val, $des, $categoria_id, $usado)){ ?> 
    <p class="text-success"> parabens o produto <?= $nome;?>, foi adicionado no valor de $ <?=$val;?> reais</p>   
<?php } else{
    $msg = mysqli_error($conexao)?>
    
    <p class="text-danger">acho que você esqueceu de alguma coisa aí amigão<br>
    volta e tenta de novo por favor!!! <br> <?= $msg ?></p>
<?php } ?>


<?php include("estetica/rodapé.php");?>;