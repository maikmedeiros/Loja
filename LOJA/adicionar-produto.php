		<?php require_once("cabecalho.php"); ?>
		<?php require_once("banco-produto.php");?>
		<?php require_once("logica-usuario.php");?>
    <?php require_once("class/produto.php"); ?>
		<?php
			
			verificaUsuario();
			
			$produto = new Produto();
			$produto->nome = $_POST["nome"];
			$produto->preco = $_POST["preco"];
			$produto->descricao = $_POST["descricao"];
			$produto->categoria_id = $_POST["categoria_id"];
			if(array_key_exists('usado', $_POST)) {
	   			 $produto->usado = "true";
			} else {
	  			 $produto->usado = "false";
			}
						
			if (insereProduto($conexao, $produto)){ ?>
				<p class="text-sucess">O produto <?= $produto->nome?> foi adicionado com sucesso e seu preço é <?= $preco?>!!!</p>

				<?php } else { 
						$msg = mysqli_error($conexao);?>
						<p class="text-danger"> O produto <?= $produto->nome?> não foi adicionado: <?=$msg?></p>
				<?php
				}
		?>
	<?php include("rodape.php"); ?>
