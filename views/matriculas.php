<a href="?pagina=inserir_matricula">Inserir matricula</a>
<table style="border: 1px solid #000; width:100% ">
	<tr>
		<th>Nome Aluno</th>
		<th>Nome Curso</th>
	</tr>

	<?php 
		while($linha = mysqli_fetch_array($consulta_matriculas)){
			echo'<tr><td>'.$linha['nome_aluno'].'</td>';
			echo'<td>'.$linha['nome_curso'].'</td>
				';
		?>
	<td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso'];?>">Deletar</a></td></tr>	
	<?php
		}

	?>
</table>