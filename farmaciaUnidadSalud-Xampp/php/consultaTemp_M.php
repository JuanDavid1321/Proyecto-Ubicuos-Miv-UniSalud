<!-- Función para pasar el formato json -->
<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<?php
	require 'dbConnection.php'; 

	$diaSeleccionado = (isset($_POST['dia'])) ? $_POST['dia'] : 10;

	$sql = "SELECT hora,temp,fecha 
			from registros WHERE DAY(fecha) = '$diaSeleccionado'
			ORDER BY hora"; 

	$result = mysqli_query($conn,$sql);


	$valoresY = array();//montos
	$valoresX = array();//fechas
	
	while ($ver = mysqli_fetch_row($result)) {
		$valoresY[] = $ver[1];
		$valoresX[] = $ver[0];
		
	}

	$datosX = json_encode($valoresX);
	$datosY = json_encode($valoresY);
?>

<script type="text/javascript">

	datosX = crearCadenaLineal('<?php echo $datosX ?>');
	datosY = crearCadenaLineal('<?php echo $datosY ?>');
 
	var textValues = [];

	for (var i = 0; i < datosX.length; i++) {
		textValues.push('x=' + datosX[i]);
	}

	var trace1 = {
		x: datosX,
		y: datosY,
	    mode: 'lines+markers',
	    name: 'Mañana',
		line: {
			width: 2
		},
	};
    

    var layout = {
        title:{
			text: 'TEMPERATURA',
			font:{
				family: 'Muli',
				size: 25,
				color: '#af0b19',
				weight: 'bold',
				
			}
		},
        xaxis: {
			// type: 'date',
			// tickmode: 'day',
			// dtick: 86400000, // Un día en milisegundos
            title: {
				text:'HORAS',
				font:{
					family: 'Muli',	
					color: '#af0b19',
				}
			},
			// ticktext: textValues,
            // showgrid: true,
            // showline: true
        },
        yaxis: {
            title:{
				text: 'TEMPERATURA [ °C ]',
				font:{
					family: 'Muli',	
					color: '#af0b19',
				}
			} 
        }
    }

    var data = [trace1];

	Plotly.newPlot('cargaLineal', data,layout);

</script>
