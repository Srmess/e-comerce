<?php require_once("estetica/cabecalho.php");?>

<form action="envia-contato.php" method="POST">
    <table class="table">
        <tr>
            <td>nome:</td>
            <td><input type="text" name="nome" class="form-control"></td>
        </tr>
        <tr>
            <td>email:</td>
            <td><input type="text" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>mensagem:</td>
            <td><textarea class="form-control" name="menssagem" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </td>
        </tr>
    </table>
</form>

<?php require_once("estetica/rodapé.php");?>