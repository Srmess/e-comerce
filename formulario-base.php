    <table class="table">    
    <tr>    
        <td>Nome:</td>
        <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
    </tr>
    
    <tr>
        <td>preço:</td>
        <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"></td>
    </tr>
    
    <tr>
        <td>descrição:</td>
        <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="checkbox" name="usado" <?=$usado?> value="true">usado</td>
    </tr>

    <tr>
        <td>categoria:</td>
        <td> 
            <select name="categoria_id" class="form-control">    
                <?php foreach ($categorias as $categoria):
                    $cs = $produto['categorias_id'] == $categoria['id'];
                    $selecao = $cs ? "selected='selected'":"";    
                    ?>
                    <option value="<?=$categoria['id']?>"<?=$selecao?>>
                        <?=$categoria['nome']?><br/>
                <?php endforeach ?>
            </select>    
        </td>
    </tr>
