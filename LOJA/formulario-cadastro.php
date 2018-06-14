<?php 	
	include("cabecalho.php"); 
	include("conecta.php");
	include("banco-categoria.php");
	include("logica-usuario.php");
	$categorias = listaCategorias($conexao);

	verificaUsuario();
?>



	<h1>Formulario de Cadastro</h1>
	<form action ="adicionar-produto.php" method="POST">
		<table class="table">
			<tr>
				<td>Nome:</td>  
				<td><input class="form-control" type="text" name="nome" /></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="preco" /></td>
			</tr>
			<tr>
				<td>Descrição</td>
            	<td><textarea name="descricao" class="form-control"></textarea>
			</tr>
			
        	<tr>
        		<td>Categoria:</td>
        	 	<td>
	        		<select name="categoria_id" >
	        				<option value="select">selecione</option>
			        	<?php foreach ($categorias as $categoria): ?>
			        		<option value="<?= $categoria['id']?>"><?= $categoria['nome']?></option> 
			        	<?php endforeach ?>
				</td>
				<td>
					<input type="checkbox" name="usado" value="usado"> Usado
				</td>
			</tr>
			<tr>
            	<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        	</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>