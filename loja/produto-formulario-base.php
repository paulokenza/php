
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="usado" value="true"> Usado
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select class="form-control" name="categoria_id">
                    <?php foreach($categorias as $categoria) : ?>
    <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
<?php endforeach ?>
</select>
</td>
</tr>

