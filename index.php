<?php 

#mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	
mysqli_query($conexao, "ALTER TABLE CURSOS CHANGE id id_curso INT NOT NULL AUTO_INCREMENT");
?>

