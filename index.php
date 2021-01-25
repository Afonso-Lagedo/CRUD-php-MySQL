<?php 

#mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	
if (mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID_ALUNO>4")){
	echo 'apagado com sucesso';
}
else {
	'falha ao apagar';
}
?>

