<?php
require_once ("conexao.php");
function ListaProduto($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,c.nome as categorias_nome from 
    produtos as p join categorias as c on c.id=p.categorias_id");
    while ($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
};

function RecebeProduto($conexao, $nome, $val, $des, $categoria_id, $usado){
    $query = "INSERT INTO produtos(nome, preco, descricao, categorias_id, usado) VALUE('{$nome}', {$val}, '{$des}', {$categoria_id}, {$usado})";
    return mysqli_query($conexao, $query);
};

function DeletaProduto($conexao, $id){
    $query = "DELETE FROM PRODUTOS WHERE id = {$id}";
    return mysqli_query($conexao, $query);
};

function BuscaProduto($conexao, $id){
    $query = "select * from produtos where id = {$id}" ;
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
};

function AlteraProduto($conexao, $id, $nome, $val, $des, $categoria_id, $usado){
    $query = "update produtos set nome='{$nome}', preco={$val}, descricao='{$des}', categorias_id={$categoria_id}, usado={$usado} where id='{$id}'";
    return mysqli_query($conexao, $query);
};

?>