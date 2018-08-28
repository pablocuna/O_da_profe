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
            <legend>Opções para de Navegação para o Usuário</legend>
            <div class="item">
                <a href="usuario-cadastra.php"> <input type="submit" value="Cadastrar"></a>
            </div>
            <div class="item">
                <a href="listar.php"> <input type="submit" value="Listar"> </a>
            </div>
        </fieldset>

        <footer>
            <?php
                include 'php/footer.php';
            ?>
        </footer>
    </body>
</html>