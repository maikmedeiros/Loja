	<?php
   require_once("cabecalho.php");

  	$produtoDAO = new ProdutoDAO($conexao);
	$produtos = $produtoDAO->listaProduto();
 	?>
	<table class="table table-striped table-bordered">
		<tr>
				<td>ID</td>
				<td>Produto</td>
				<td>Preço</td>
				<td>Desconto</td>
				<td>Descrição</td>
				<td>Categoria</td>
		</tr>
	<?php foreach($produtos as $produto) : ?>
		<tr>
			<td><?= $produto->getId() ?></td>
	        <td><?= $produto->getNome() ?></td>
	        <td><?= $produto->getPreco() ?></td>
	        <td><?= $produto->desconto(0.6)?></td>
	        <td><?= substr($produto->getDescricao(), 0,40	) ?></td>
	        <td><?= $produto->getCategoria()->getNome() ?></td>
	        <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto->getId()?>">Alterar</a></td>
	        <td>
	        	<form action="remove-produto.php" method="post">
	        		<input type="hidden" name="id" value="<?= $produto->getId?>"/>
	        		<button class="btn btn-danger">Remover</button>
	        	</form>
	        </td>
	    </tr>
	<?php endforeach?>
	</table>
  <?php include("rodape.php");?>

	