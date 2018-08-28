<?php
    $id = $_GET['id'];

    include 'conecta.php';

    $sql = "SELECT * FROM usuario WHERE id = $id";
    $ok = mysqli_query($conexao, $sql);
    // $row = mysql_fetch_arrow($sql);

    foreach ($ok as $usuario){ 

        echo "<form method='POST' action='salvar.php'>
            <label>Nome</label>
            <input type='text' value='" .$usuario['nome']. "' name='nome' />
            <label> Email</label>
            <input type='text' value='" .$usuario['email']. "' name='email' />
            <input type='hidden' value='" .$id. "' name='id' />
        
            <input type='submit' value='Editar' />
    
        </form>";
    }
?>