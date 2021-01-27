<?php 

#mysqli
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "teste1";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
	
$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");
// PARA IMPRIMIR MYSQLI RESULT print_r($consulta);

echo'
	<table border=1>
		<tr>
			<th>id</th>
			<th>Nome</th>
			<th>Data de nascimento</th>
		</tr>
';

while($linha = mysqli_fetch_array($consulta)){
	echo '<tr>';

	echo '<td>';
	echo $linha['id_aluno'];
	echo '</td>';

	echo '<td>';
	echo $linha['nome_aluno'];
	echo '</td>';

	echo '<td>';
	echo $linha['data_nascimento'];
	echo '</td>';

	echo '</tr>';
}

echo '</table>';

?>

