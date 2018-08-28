
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>
            Exemplo de Formulário
        </title>
    </head>
    <body>
        <fieldset>
            <legend>Resposta para o Cadastro</legend>
            <?php
            
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
            
                echo "<p>Seja bem-vindo <strong>$nome</strong>. Em breve você receberá no seu e-mail <strong>$email</strong>, maiores informações sobre o nosso sistema.</p>";
            ?>
            <div class="item link">
                <label>Click <a href="../index.php">aqui</a> para voltar.</label>
            </div>
        </fieldset>

        <footer>
            <?php
                include 'footer.php';
            ?>
        </footer>
    </body>
</html>