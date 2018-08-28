<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>
            Exemplo de Formulário
        </title>
    </head>
    <body>
		<?php 
			include 'conecta.php';

			$nome = $_POST['nome'];
			$senha = $_POST['senha'];
			$email = $_POST['email'];

			$sql = "INSERT INTO usuario(nome, senha, email) VALUES ('$nome' , '$senha', '$email')";	
			mysqli_query($conexao, $sql);
		?>


		<fieldset>
			<legend>Resposta para o Cadastro</legend>
			<?php         
				echo "<p>Seja bem-vindo <strong>$nome</strong>. Em breve você receberá no seu e-mail <strong>$email</strong>, maiores informações sobre o nosso sistema.</p>";
			?>
			<div class="item link">
				<label>Click <a href="index.php">aqui</a> para voltar.</label>
			</div>
		</fieldset>

		<footer>
			<?php
				include 'php/footer.php';
			?>
		</footer>
    </body>
</html>

<?php
	mysqli_close($conexao);
?>


