<a href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table style="border: 1px solid #000; width:100% ">
	<tr>
		<th>Nome Aluno</th>
		<th>Data nascimento</th>
	</tr>

	<?php 
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo'<tr><td>'.$linha['nome_aluno'].'</td>';
			echo'<td>'.$linha['data_nascimento'].'</td>
				</tr>';
		}

	?>
</table>