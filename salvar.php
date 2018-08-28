<?php

    include 'conecta.php';
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];


    $sql = "UPDATE usuario SET nome = '$nome', email = '$email'  WHERE id = $id";
    $ok = mysqli_query($conexao, $sql);

    echo "Editado com sucesso <br>";
    echo "Click <a href='index.php'>aqui</a> para voltar.";

?>