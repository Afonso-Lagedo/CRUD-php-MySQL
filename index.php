<?php 

#mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	//or die("erro de conexão");

if($conexao){
	echo "Conectado com sucesso";
}
else{
	echo "ERRO DE CONEXÃO";	
}

?>

