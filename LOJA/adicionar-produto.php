		<?php require_once("cabecalho.php"); ?>
		<?php require_once("banco-produto.php");?>
		<?php require_once("logica-usuario.php");?>
   		<?php require_once("class/Produto.php"); ?>
		
   <?php
			
			verificaUsuario();

			$categoria = new Categoria(); 
			$categoria->setId($_POST["categoria_id"]);

			$produto = new Produto();

			$produto->setNome($_POST["nome"]);
			$produto->setPreco($_POST["preco"]);
			$produto->setDescricao($_POST["descricao"]);
			$produto->setCategoria($categoria);
			if(array_key_exists('usado', $_POST)) {
	   			 $produto->setUsado("true");
			} else {
	  			 $produto->setUsado("false");
			}
		  
			if (insereProduto($conexao, $produto)){ ?>
				<p class="text-sucess">O produto <?= $produto->getNome()?> foi adicionado com sucesso e seu preço é <?= $produto->getPreco()?>!!!</p>

				<?php } else { 
						$msg = mysqli_error($conexao);?>
						<p class="text-danger"> O produto <?= $produto->getNome()?> não foi adicionado: <?=$msg?></p>
				<?php
				}
		?>
	<?php include("rodape.php"); ?>
