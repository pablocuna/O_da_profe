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
        
    	<fieldset>
			<legend>Cadastro de Usuário</legend>       
			<form role="form" action="usuario-cadastra-ok.php" method="POST">
				<div class="item">
					<label>Nome</label>
					<input class="form-control" placeholder="Nome" name="nome" >
				</div>
				<div class="item">
					<label>Senha</label>
					<input type="password" class="form-control" placeholder="Senha" name="senha" >
				</div>
				<div class="item">
					<label>E-mail(Login)</label>
					<input type="email" class="form-control" placeholder="E-mail" name="email">
				</div>
				<div class="item button">
					<button type="reset" value="Limpar">Limpar
				</div>
				<div class="item button">
					<input type="submit" value="Cadastra">
				</div>
					</form>
		</fieldset>
		<footer>
            <?php
                include 'php/footer.php';
            ?>
        </footer>                                  
    </body>
</html>

        
	