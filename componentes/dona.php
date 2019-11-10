<div id="canvas-holder">
	<canvas id="chart-area" style="height:50px;width:50px"></canvas>
</div>
<button class="activo" id="P1">P1</button>
<button class="inactivo" id="Pr2">P2</button>
<button class="inactivo" id="P3">P3</button>
<button class="inactivo" id="P4">P4</button>
<button class="inactivo" id="changeCircleSize">Circulo/semicirculo</button>


<script>
	var randomScalingFactor = function() {
		return Math.round(Math.random() * 100);
	}
	var config = {
		type: 'doughnut',
		data: {
			datasets: [{
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
				],
				backgroundColor: [
					window.chartColors.red,
					window.chartColors.orange,
					window.chartColors.yellow,
					window.chartColors.green,
					window.chartColors.blue,
				],
				label: 'Dataset 1'
			}],
			labels: [
				'Redes', 'Autómatas', 'UX', 'T. investigación', 'Gestión de proyectos', 'Ing. de software'
			]
		},
		options: {
			cutoutPercentage: 50,
			responsive: true,
			legend: {
				position: 'bottom',
				labels: {
					usePointStyle: true,


				}

			},
			title: {
				display: true,
				text: 'Calificaciones'
			},
			animation: {
				duration: 3000,
				animateScale: true,
				animateRotate: true
				
				
			}
		}
	};

	window.onload = function() {
		var ctx = document.getElementById('chart-area').getContext('2d');
		window.myDoughnut = new Chart(ctx, config);
	};


	var colorNames = Object.keys(window.chartColors);
	document.getElementById('P1').addEventListener('click', function() {
		$("#P1").removeClass("inactivo");
		$("#Pr2,#P3,#P4").addClass("inactivo");
		$("#P1").addClass("activo");
		config.data.datasets.splice(0, 1);


		var newDataset = {
			backgroundColor: [],


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




			],
			label: 'New dataset ' + config.data.datasets.length,
			title: 'asasasas',
		};

		for (var index = 0; index < config.data.labels.length; ++index) {
			newDataset.data.push(



			);

			var colorName = colorNames[index % colorNames.length];
			var newColor = window.chartColors[colorName];
			newDataset.backgroundColor.push(newColor);
		}

		config.data.datasets.push(newDataset);
		window.myDoughnut.update();
	});





	var colorNames = Object.keys(window.chartColors);
	document.getElementById('Pr2').addEventListener('click', function() {
		$("#Pr2").removeClass("inactivo");
		$("#P1,#P3,#P4").addClass("inactivo");
		$("#Pr2").addClass("activo");

		config.data.datasets.splice(0, 1);
		var newDataset = {
			backgroundColor: [],
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


			],
			label: 'New dataset ' + config.data.datasets.length,
		};

		for (var index = 0; index < config.data.labels.length; ++index) {
			newDataset.data.push(



			);

			var colorName = colorNames[index % colorNames.length];
			var newColor = window.chartColors[colorName];
			newDataset.backgroundColor.push(newColor);
		}

		config.data.datasets.push(newDataset);
		window.myDoughnut.update();
	});

	var colorNames = Object.keys(window.chartColors);
	document.getElementById('P3').addEventListener('click', function() {
		$("#P3").removeClass("inactivo");
		$("#P1,#Pr2,#P4").addClass("inactivo");
		$("#P3").addClass("activo");

		config.data.datasets.splice(0, 1);
		var newDataset = {
			backgroundColor: [],
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
			],
			label: 'New dataset ' + config.data.datasets.length,
		};

		for (var index = 0; index < config.data.labels.length; ++index) {
			newDataset.data.push(



			);

			var colorName = colorNames[index % colorNames.length];
			var newColor = window.chartColors[colorName];
			newDataset.backgroundColor.push(newColor);
		}

		config.data.datasets.push(newDataset);
		window.myDoughnut.update();
	});

	var colorNames = Object.keys(window.chartColors);
	document.getElementById('P4').addEventListener('click', function() {
		$("#P4").removeClass("inactivo");
		$("#P1,#P3,#Pr2").addClass("inactivo");
		$("#P4").addClass("activo");
		config.data.datasets.splice(0, 1);
		var newDataset = {
			backgroundColor: [],
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

			],
			label: 'New dataset ' + config.data.datasets.length,
		};
		for (var index = 0; index < config.data.labels.length; ++index) {
			newDataset.data.push();
			var colorName = colorNames[index % colorNames.length];
			var newColor = window.chartColors[colorName];
			newDataset.backgroundColor.push(newColor);
		}
		config.data.datasets.push(newDataset);
		window.myDoughnut.update();
	});
	document.getElementById('changeCircleSize').addEventListener('click', function() {
		if (window.myDoughnut.options.circumference === Math.PI) {
			window.myDoughnut.options.circumference = 2 * Math.PI;
			window.myDoughnut.options.rotation = -Math.PI / 2;
		} else {
			window.myDoughnut.options.circumference = Math.PI;
			window.myDoughnut.options.rotation = -Math.PI;
		}
		window.myDoughnut.update();
	});
</script>