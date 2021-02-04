<table style="border: 1px solid #000; width:100% ">
	<tr>
		<th>Nome curso</th>
		<th>Carga horária</th>
	</tr>

	<?php 
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo'<tr><td>'.$linha['nome_curso'].'</td>';
			echo'<td>'.$linha['carga_horaria'].'</td>
				</tr>';
		}

	?>
</table>