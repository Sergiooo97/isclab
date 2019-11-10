<!-------------------------------------------------- Grafica     ------------------------------------------------------------------------------- -->

<div style="margin-left:7%;" id="container" style="width: 75%;">
	<canvas id="canvas"></canvas>
</div>

<script>
	var color = Chart.helpers.color;
	var barChartData = {
		labels: ['Redes', 'Autómatas', 'UX', 'T. investigación', 'Gestión de proyectos', 'Ing. de software'],
		datasets: [{
				label: 'Parcial 1',

				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [

					<?php
					$result = mysqli_query($conexion, $Redes); //consultas_index.php 
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P1'] ?>

					<?php
					}
					?>,

					<?php
					$result = mysqli_query($conexion, $Automatas);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P1'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $UX);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P1'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $Tinvestigacion);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P1'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $GestionP);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P1'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $IngSoft);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P1'] ?>
					<?php
					}
					?>


				]
			}, {
				label: 'Parcial2',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					<?php
					$result = mysqli_query($conexion, $Redes);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P2'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $Automatas);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P2'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $UX);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P2'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $Tinvestigacion);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P2'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $GestionP);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P2'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $IngSoft);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P2'] ?>
					<?php
					}
					?>

				]
			}, {
				label: 'Parcial 3',
				backgroundColor: color(window.chartColors.orange).alpha(0.5).rgbString(),
				borderColor: window.chartColors.orange,
				borderWidth: 1,
				data: [

					<?php
					$result = mysqli_query($conexion, $Redes);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P3'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $Automatas);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P3'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $UX);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P3'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $Tinvestigacion);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P3'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $GestionP);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P3'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $IngSoft);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P3'] ?>
					<?php
					}
					?>

				]
			}, {
				label: 'Parcial 4',
				backgroundColor: color(window.chartColors.yellow).alpha(0.5).rgbString(),
				borderColor: window.chartColors.yellow,
				borderWidth: 1,
				data: [

					<?php
					$result = mysqli_query($conexion, $Redes);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P4'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $Automatas);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P4'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $UX);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P4'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $Tinvestigacion);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P4'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $GestionP);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P4'] ?>
					<?php
					}
					?>,
					<?php
					$result = mysqli_query($conexion, $IngSoft);
					while ($registros = mysqli_fetch_array($result)) {
						?>
						<?php echo $registros['P4'] ?>
					<?php
					}
					?>


				]
			},

		]

	};

	window.onload = function() {
		var ctx = document.getElementById('canvas').getContext('2d');
		window.myBar = new Chart(ctx, {
			type: 'bar',
			data: barChartData,
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Chart.js Bar Chart'
				}
			}
		});

	};

	document.getElementById('randomizeData').addEventListener('click', function() {
		var zero = Math.random() < 0.2 ? true : false;
		barChartData.datasets.forEach(function(dataset) {
			dataset.data = dataset.data.map(function() {
				return zero ? 0.0 : randomScalingFactor();
			});

		});
		window.myBar.update();
	});

	var colorNames = Object.keys(window.chartColors);
	document.getElementById('addDataset').addEventListener('click', function() {
		var colorName = colorNames[barChartData.datasets.length % colorNames.length];
		var dsColor = window.chartColors[colorName];
		var newDataset = {
			label: 'Dataset ' + (barChartData.datasets.length + 1),
			backgroundColor: color(dsColor).alpha(0.5).rgbString(),
			borderColor: dsColor,
			borderWidth: 1,
			data: []
		};

		for (var index = 0; index < barChartData.labels.length; ++index) {
			newDataset.data.push(randomScalingFactor());
		}

		barChartData.datasets.push(newDataset);
		window.myBar.update();
	});
	document.getElementById('addData').addEventListener('click', function() {
		if (barChartData.datasets.length > 0) {
			var month = MONTHS[barChartData.labels.length % MONTHS.length];
			barChartData.labels.push(month);

			for (var index = 0; index < barChartData.datasets.length; ++index) {
				// window.myBar.addData(randomScalingFactor(), index);
				barChartData.datasets[index].data.push(randomScalingFactor());
			}
			window.myBar.update();
		}
	});
	document.getElementById('removeDataset').addEventListener('click', function() {
		barChartData.datasets.pop();
		window.myBar.update();
	});
	document.getElementById('removeData').addEventListener('click', function() {
		barChartData.labels.splice(-1, 1); // remove the label first
		barChartData.datasets.forEach(function(dataset) {
			dataset.data.pop();
		});
		window.myBar.update();
	});
</script>



<!-------------------------------------------------- Grafica     ------------------------------------------------------------------------------- -->