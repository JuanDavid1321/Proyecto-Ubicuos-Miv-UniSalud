<div id="graficaLineal4"></div>

<?php
    require 'dbConnection.php'; 

    $sql = "SELECT hora,hum as count from registrosesp"; 

    $result=mysqli_query($conn,$sql);
    $valoresY=array();//montos
    $valoresX=array();//fechas
        

    while ($ver=mysqli_fetch_row($result)) {
        $valoresY[]=$ver[1];
        $valoresX[]=$ver[0];
        
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);

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
			text: 'HUMEDAD - TARDE',
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
				text: 'HUMEDAD [ % ]',
				font:{
					family: 'Muli',
                    weight: 'bold',	
					color: '#af0b19',
				}
			} 
        }
    }

    var data = [trace1];

    Plotly.newPlot('graficaLineal4', data, layout);

</script>