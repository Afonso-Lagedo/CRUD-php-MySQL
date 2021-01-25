<?php 

#mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	
if (mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO='FELIPE' WHERE ID_ALUNO =3 ")){
	echo'Sucesso';
}

?>

