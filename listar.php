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
        <fieldset style="width: 50%">
            <legend>Lista de Usuário</legend>

            <?php
                include 'conecta.php';
                
                $sql = "SELECT * FROM usuario";
                $ok = mysqli_query($conexao, $sql);
                foreach ($ok as $usuario){
                        echo "<div class='item'>";
                            echo "Nome: " .$usuario['nome']. "<br>";
                            echo "Email: " . $usuario['email']. "<br>";
                            echo "<div class='function'>";
                                echo "<a href='editar.php?id=" .$usuario['id']. "'> Editar </a>";
                                echo "<a href='excluir.php?id=" .$usuario['id']. "'> Excluir </a>";
                            echo "</div>";
                        echo "</div>";

                }

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
        