<div id="graficaLineal3"></div>

<?php
	require 'dbConnection.php'; 

	$sql = "SELECT hora,temp as count from registrosesp"; 

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
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">

	datosX = crearCadenaLineal('<?php echo $datosX ?>');
	datosY = crearCadenaLineal('<?php echo $datosY ?>');
 
	var trace1 = {
		x: datosX,
		y: datosY,
	    mode: 'lines+markers',
	    name: 'Tarde',
		line: {
			// color: 'ff0000',
			width: 2
		}
	};

    var layout = {
        title:{
			text: 'TEMPERATURA - TARDE',
			font:{
				family: 'Muli',
				size: 25,
				color: '#af0b19',
				bold: true,
			}
		},
        xaxis: {
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
				text: 'TEMPERATURA [ °C ]',
				font:{
					family: 'Muli',	
					color: '#af0b19',
				}
			} 
        }
    }

    var data = [trace1];

    Plotly.newPlot('graficaLineal3', data, layout);

</script>