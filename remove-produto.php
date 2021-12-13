<?php
require_once ("estetica/cabecalho.php");
include ("conexao.php");
require_once ("banco-produtos.php");
require_once ("logica-usuario.php");

$id = $_POST["id"];
DeletaProduto($conexao, $id);
$_SESSION["success"] ="Produto removido com sucesso" ;
header("location: liprodutos.php");
die();
?>