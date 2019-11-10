<!-------------------------------------------------- Tabla     ------------------------------------------------------------------------------- -->
<table class=" table is-bordered  " border="1">

	<tr>
		<td>Materia</td>
		<td>Docente</td>
		<td>Parcial 1</td>
		<td>Parcial 2</td>
		<td>Parcial 3</td>
		<td>Parcial 4</td>
	</tr>
	<?php
	$result = mysqli_query($conexion, $topmaterias);
	while ($mostrar = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['Docente'] ?></td>
			<td><?php echo $mostrar['P1'] ?></td>
			<td><?php echo $mostrar['P2'] ?></td>
			<td><?php echo $mostrar['P3'] ?></td>
			<td id="PP4" name="ppp4"><?php echo $mostrar['P4'] ?></td>
		</tr>
	<?php
	}

	?>



</table>