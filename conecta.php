<?php 
    //Conectar no banco
		$databaseHost = 'localhost';
		$databaseNome = 'lpw';
		$databaseUsuario = 'root';
		$databaseSenha = '';
 
		$conexao = mysqli_connect($databaseHost, $databaseUsuario, 
		$databaseSenha, $databaseNome);
?>