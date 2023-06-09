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

	$mesSeleccionado = (isset($_POST['mes'])) ? $_POST['mes'] : 1;

	$sql = "SELECT fecha,temp,hora as count 
			from registros WHERE MONTH(fecha) = '$mesSeleccionado' AND hora between '09:00:00' and '10:59:59'
			GROUP BY DAY(fecha) ORDER BY fecha "; 

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
			text: 'TEMPERATURA - MAÑANA',
			font:{
				family: 'Muli',
				size: 25,
				color: '#af0b19',
				weight: 'bold',
				
			}
		},
        xaxis: {
			type: 'date',
			tickmode: 'day',
			dtick: 86400000, // Un día en milisegundos
            title: {
				text:'FECHAS',
				font:{
					family: 'Muli',	
					color: '#af0b19',
				}
			},
			ticktext: textValues,
            showgrid: true,
            showline: true
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
