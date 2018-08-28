<?php

    include 'conecta.php';
    
    $id = $_GET['id'];

    $sql = "DELETE FROM usuario WHERE id = '$id'";
    $ok = mysqli_query($conexao, $sql);

    echo "Dado excluido com sucesso. <br>";
    
    echo "Click <a href='index.php'>aqui</a> para voltar.";

?>