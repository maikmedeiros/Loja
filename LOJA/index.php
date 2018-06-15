<?php 
	include("cabecalho.php"); 
	include("logica-usuario.php");	
?>
			<h1>Bem vindo!</h1> 
			<?php
				if(usuarioEstaLogado()){
			?>
				<a href="logout.php">Deslogar</a></p>	
			<?php } ?>
			
			<?php 
				if(isset($_SESSION["success"])){
			?>
				<p class="alert-success"><?= $_SESSION["success"] ?></p>
			<?php
				unset($_SESSION["success"]); 
			     } 
			     
		     ?>
			<?php
				if (isset($_SESSION["danger"])){
			?>
				<p class="alert-danger"><?= $_SESSION["danger"] ?></p>
			<?php		
       			unset($_SESSION["danger"]);
				}
			?>
			
			<?php if(usuarioEstaLogado()){ ?>
				<p class="alert-success">Você esta logado como <?= $_SESSION["usuario_logado"]?></p>
			<?php } else { ?>
				<h3>FAÇA AQUI SEU LOGIN</h3>
	            <form action="login.php" method="post">
					<table class="table">
	            		<tr>
	            			<td>E-mail:</td>
	            			<td><input class="form-control" type="text" name="email"></td>
	            		</tr>
	            		<tr>
	            			<td>Senha:</td>
	            			<td><input class="form-control" type="password" name="senha"></td>
	            		</tr>
	            		<tr>
	            			<td><button class="btn btn-primary" type="submit">LOGAR</button></td>
	            		</tr>
	            	</table>
	            </form>
			<?php
			}
			?>

           
<?php include("rodape.php"); ?>