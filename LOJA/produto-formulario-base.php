      <tr>
				<td>Nome:</td>  
				<td><input class="form-control" type="text" name="nome" value = "<?= $produto['nome'] ?>" /></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco" value="<?= $produto['preco']?>" /></td>
			</tr>
			<tr>
				<td>Descrição</td>
            	<td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea>
			</tr>
			<tr>
        		<td>Categoria:</td>
        	 	<td>
					
					<select name="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria) : 
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>>
                                <?=$categoria['nome']?>
                        </option>
                    <?php endforeach ?>
                    </select>
				</td>  
       	<td>
					<input type="checkbox" name="usado" <?=$usado?> value="usado"> Usado
				</td>
      </tr>
