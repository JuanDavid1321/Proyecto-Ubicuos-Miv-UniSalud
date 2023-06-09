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

	$sql = "SELECT fecha,hum,hora as count 
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

    datosX=crearCadenaLineal('<?php echo $datosX ?>');
	datosY=crearCadenaLineal('<?php echo $datosY ?>');

    var trace1 = {
        x: datosX,
        y: datosY,
		mode: 'lines+markers',
        type: 'scatter',
        name: 'Tarde'
    };


    var layout = {
		title:{
			text: 'HUMEDAD - MAÑANA',
			font:{
				family: 'Muli',
				size: 25,
				color: '#af0b19',
				bold: true,
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
            zeroline: true,
            showgrid: true,
            showline: true
        },
        yaxis: {
            title:{
				text: 'HUMEDAD [ % ]',
				font:{
					family: 'Muli',	
					color: '#af0b19',
				}
			} 
        }

    }

    var data = [trace1];

	Plotly.newPlot('cargaLineal2', data,layout);
</script>
