<?php
include ("Util.php");

	if(isset($_POST['id_transaccion'])){
		$id_trans = $_POST['id_transaccion'];
		$nombre = $_POST['nombre'];
		$apellidoP = $_POST['apellidoP'];
		$correo = $_POST['correo'];
		$teleono = $_POST['telefono'];
		
		$codigoPostal = $_POST['codigoPostal'];
		$estado = $_POST['estado'];
		$municipio = $_POST['municipio'];
		
		$categoria = $_POST['categoria'];
	?>
	<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <title>AXA RC PyMEs</title>
    	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
    	<div id="content">
    		<div id="title">
        		Cotización para RC PyMEs
        	</div>
	<?php
		if($categoria == "salon_fiestas"){
			$tipoContratante = ($_POST['tipoContratante']==1) ? 'propietario' : 'arrendatario';
			$numeroEmpleados = $_POST['numeroEmpleados'];
			$numeroNiveles = $_POST['numeroNiveles'];
			
			$jsonFile = file_get_contents("tablaGiros.json");
			$extractData = json_decode($jsonFile,true);
			
			$primaNeta = $extractData[$categoria][$tipoContratante];
			$gastosExpedicion = calcularGastosExpedicion($primaNeta);
			$iva = calcularIVA($primaNeta+$gastosExpedicion, .16);
			$primaTotal= calculaPrimaAnual($extractData[$categoria][$tipoContratante]);
		?>
			<div class="section">
				<div class="data"><?php echo "Solicitud: ".$id_trans;?></div>
				<div class="clear"></div><br/>
				Giro del inmueble: <b>Salón de fiestas</b><br/>
				Tipo de contratante: <b><?php echo $tipoContratante; ?></b><br/><br/>
				
				<table>
					<tr>
						<th colspan="2" align="center">Paquete óptimo</th>
					</tr>
					<tr>
						<td>
							Prima Neta: 
						</td>
						<td align="right">
							<?php echo number_format($primaNeta,2); ?>
						</td>
					</tr>
					<tr>
						<td>
							Gastos de expedición: 
						</td>
						<td align="right">
							<?php echo $gastosExpedicion; ?>
						</td>
					</tr>
					<tr>
						<td>
							IVA (16%):
						</td>
						<td align="right">
							<?php echo $iva; ?>
						</td> 
					</tr>
					<tr>
						<td>
							<strong>Costo anual:</strong>
						</td>
						<td align="right">
							<strong>$ <?php echo $primaTotal; ?></strong>
						</td>
					</tr>
				</table>
				<br/><br/>
				<a href="index.php" >Hacer otra cotización</a>
				
			</div>
			
		
		
		<?php
	
		}
		
		else if($categoria == "restaurante"){
			$tipoContratante = ($_POST['tipoContratante']==1) ? 'propietario' : 'arrendatario';
			$numeroEmpleados = $_POST['numeroEmpleados'];
			$numeroNiveles = $_POST['numeroNiveles'];
			
			$jsonFile = file_get_contents("tablaGiros.json");
			$extractData = json_decode($jsonFile,true);
			
			$primaNeta = $extractData[$categoria][$tipoContratante];
			$gastosExpedicion = calcularGastosExpedicion($primaNeta);
			$iva = calcularIVA($primaNeta+$gastosExpedicion, .16);
			$primaTotal= calculaPrimaAnual($extractData[$categoria][$tipoContratante]);
		?>
			<div class="section">
				<div class="data"><?php echo "Solicitud: ".$id_trans;?></div>
				<div class="clear"></div><br/>
				Giro del inmueble: <b>Salón de fiestas</b><br/>
				Tipo de contratante: <b><?php echo $tipoContratante; ?></b><br/><br/>
				
				<table>
					<tr>
						<th colspan="2" align="center">Paquete óptimo</th>
					</tr>
					<tr>
						<td>
							Prima Neta: 
						</td>
						<td align="right">
							<?php echo number_format($primaNeta,2); ?>
						</td>
					</tr>
					<tr>
						<td>
							Gastos de expedición: 
						</td>
						<td align="right">
							<?php echo $gastosExpedicion; ?>
						</td>
					</tr>
					<tr>
						<td>
							IVA (16%):
						</td>
						<td align="right">
							<?php echo $iva; ?>
						</td> 
					</tr>
					<tr>
						<td>
							<strong>Costo anual:</strong>
						</td>
						<td align="right">
							<strong>$ <?php echo $primaTotal; ?></strong>
						</td>
					</tr>
				</table>
				<br/><br/>
				<a href="index.php" >Hacer otra cotización</a>
				
			</div>
		<?php
		}
		
		else if($categoria == "hotel"){
			$tipoContratante = ($_POST['tipoContratante']==1) ? 'propietario' : 'arrendatario';
			$numeroEmpleados = $_POST['numeroEmpleados'];
			$numeroNiveles = $_POST['numeroNiveles'];
			$numeroHabitaciones = $_POST['numeroHabitaciones'];
			
			$jsonFile = file_get_contents("tablaGiros.json");
			$extractData = json_decode($jsonFile,true);
			
			$primaNeta1 = $extractData[$categoria]['un_millon'][$tipoContratante][$numeroHabitaciones];
			$primaNeta2 = $extractData[$categoria]['tres_millones'][$tipoContratante][$numeroHabitaciones];
			$primaNeta3 = $extractData[$categoria]['cinco_millones'][$tipoContratante][$numeroHabitaciones];
			
			$gastosExpedicion1 = calcularGastosExpedicion($primaNeta1);
			$gastosExpedicion2 = calcularGastosExpedicion($primaNeta2);
			$gastosExpedicion3 = calcularGastosExpedicion($primaNeta3);
			
			$iva1 = calcularIVA($primaNeta1+$gastosExpedicion1, .16);
			$iva2 = calcularIVA($primaNeta2+$gastosExpedicion2, .16);
			$iva3 = calcularIVA($primaNeta3+$gastosExpedicion3, .16);
			
			$primaAnual1 = calculaPrimaAnual($extractData[$categoria]['un_millon'][$tipoContratante][$numeroHabitaciones]);
			$primaAnual2 = calculaPrimaAnual($extractData[$categoria]['tres_millones'][$tipoContratante][$numeroHabitaciones]);
			$primaAnual3 = calculaPrimaAnual($extractData[$categoria]['cinco_millones'][$tipoContratante][$numeroHabitaciones]);
			
		?>
			<div class="section">
				<div class="data"><?php echo "Solicitud: ".$id_trans;?></div>
				<div class="clear"></div><br/>
				
				Giro del inmueble: <b>Hotel</b><br/>
				Tipo de contratante: <?php echo $tipoContratante; ?><br/>
				Número de habitaciones: <?php echo $numeroHabitaciones; ?><br/><br/>
				
				<table>
					<tr><th colspan="2" align="center">Paquete óptimo<br/><i>Suma asegurada: ($5,000,000)</i></th></tr>
					<tr>
						<td>Prima neta: </td>
						<td align="right"><?php echo $primaNeta3; ?></td>
					</tr>
					<tr>
						<td>Gastos de expedición: </td>
						<td align="right"><?php echo $gastosExpedicion3; ?></td>
					</tr>
					<tr>
						<td>IVA (16%): </td>
						<td align="right"><?php echo $iva3; ?></td>
					</tr>
					<tr>
						<td><strong>Costo anual:</strong></td>
						<td align="right"><strong>$ <?php echo $primaAnual3; ?></strong></td>
					</tr>
						
				</table>
				<br/><br/>
				
				<table>
					<tr><th colspan="2" align="center">Paquete esencial<br/><i>Suma asegurada: ($3,000,000)</i></th></tr>
					<tr>
						<td>Prima neta: </td>
						<td align="right"><?php echo $primaNeta2; ?></td>
					</tr>
					<tr>
						<td>Gastos de expedición: </td>
						<td align="right"><?php echo $gastosExpedicion2; ?></td>
					</tr>
					<tr>
						<td>IVA (16%): </td>
						<td align="right"><?php echo $iva2; ?></td>
					</tr>
					<tr>
						<td><strong>Costo anual:</strong></td>
						<td align="right"><strong>$ <?php echo $primaAnual2; ?></strong></td>
					</tr>
						
				</table>
				<br/><br/>
				
				<table>
					<tr><th colspan="2" align="center">Paquete básico<br/><i>Suma asegurada: ($1,000,000)</i></th></tr>
					<tr>
						<td>Prima neta: </td>
						<td align="right"><?php echo $primaNeta1; ?></td>
					</tr>
					<tr>
						<td>Gastos de expedición: </td>
						<td align="right"><?php echo $gastosExpedicion1; ?></td>
					</tr>
					<tr>
						<td>IVA (16%): </td>
						<td align="right"><?php echo $iva1; ?></td>
					</tr>
					<tr>
						<td><strong>Costo anual:</strong></td>
						<td align="right"><strong>$ <?php echo $primaAnual1; ?></strong></td>
					</tr>
						
				</table>
				<br/><br/>
				<a href="index.php" >Hacer otra cotización</a>
			</div>

		
		<?php
		}
		
		else if($categoria == "escuela"){
			$tipoContratante = ($_POST['tipoContratante']==1) ? 'propietario' : 'arrendatario';
			$numeroEmpleados = $_POST['numeroEmpleados'];
			$numeroNiveles = $_POST['numeroNiveles'];
			$numeroAlumnos = $_POST['numeroAlumnos'];
			$montoMaximoAlumno = $_POST['montoMaximoAlumno'];

			if($montoMaximoAlumno==100000)
				$monto = "monto_1";
			if($montoMaximoAlumno==150000)
				$monto = "monto_2";
			if($montoMaximoAlumno==200000)
				$monto = "monto_3";
				
			$jsonFile = file_get_contents("tablaGiros.json");
			$extractData = json_decode($jsonFile,true);
			
			
			
			$primaNeta1 = $extractData[$categoria]['un_millon'][$monto][$tipoContratante][$numeroAlumnos];
			$primaNeta2 = $extractData[$categoria]['tres_millones'][$monto][$tipoContratante][$numeroAlumnos];
			$primaNeta3 = $extractData[$categoria]['cinco_millones'][$monto][$tipoContratante][$numeroAlumnos];
			
			$gastosExpedicion1 = calcularGastosExpedicion($primaNeta1);
			$gastosExpedicion2 = calcularGastosExpedicion($primaNeta2);
			$gastosExpedicion3 = calcularGastosExpedicion($primaNeta3);
			
			$iva1 = calcularIVA($primaNeta1+$gastosExpedicion1, .16);
			$iva2 = calcularIVA($primaNeta2+$gastosExpedicion2, .16);
			$iva3 = calcularIVA($primaNeta3+$gastosExpedicion3, .16);
			
			$primaAnual1 = calculaPrimaAnual($extractData[$categoria]['un_millon'][$monto][$tipoContratante][$numeroAlumnos]);
			$primaAnual2 = calculaPrimaAnual($extractData[$categoria]['tres_millones'][$monto][$tipoContratante][$numeroAlumnos]);
			$primaAnual3 = calculaPrimaAnual($extractData[$categoria]['cinco_millones'][$monto][$tipoContratante][$numeroAlumnos]);
			
		?>
			<div class="section">
				<div class="data"><?php echo "Solicitud: ".$id_trans;?></div>
				<div class="clear"></div><br/>
				
				Giro del inmueble: <b>Escuela</b><br/>
				Tipo de contratante: <?php echo $tipoContratante; ?><br/><br/>
				Monto total a cubrir por alumno: <?php echo "$ ".number_format($montoMaximoAlumno,2); ?><br/>
				Total de alumnos: <?php echo $numeroAlumnos; ?><br/><br/>
				
				<table>
					<tr><th colspan="2" align="center">Paquete óptimo<br/><i>Suma asegurada: ($5,000,000)</i></th></tr>
					<tr>
						<td>Prima neta: </td>
						<td align="right"><?php echo $primaNeta3; ?></td>
					</tr>
					<tr>
						<td>Gastos de expedición: </td>
						<td align="right"><?php echo $gastosExpedicion3; ?></td>
					</tr>
					<tr>
						<td>IVA (16%): </td>
						<td align="right"><?php echo $iva3; ?></td>
					</tr>
					<tr>
						<td><strong>Costo anual:</strong></td>
						<td align="right"><strong>$ <?php echo $primaAnual3; ?></strong></td>
					</tr>
						
				</table>
				<br/><br/>
				
				<table>
					<tr><th colspan="2" align="center">Paquete esencial<br/><i>Suma asegurada: ($3,000,000)</i></th></tr>
					<tr>
						<td>Prima neta: </td>
						<td align="right"><?php echo $primaNeta2; ?></td>
					</tr>
					<tr>
						<td>Gastos de expedición: </td>
						<td align="right"><?php echo $gastosExpedicion2; ?></td>
					</tr>
					<tr>
						<td>IVA (16%): </td>
						<td align="right"><?php echo $iva2; ?></td>
					</tr>
					<tr>
						<td><strong>Costo anual:</strong></td>
						<td align="right"><strong>$ <?php echo $primaAnual2; ?></strong></td>
					</tr>
						
				</table>
				<br/><br/>
				
				<table>
					<tr><th colspan="2" align="center">Paquete básico<br/><i>Suma asegurada: ($1,000,000)</i></th></tr>
					<tr>
						<td>Prima neta: </td>
						<td align="right"><?php echo $primaNeta1; ?></td>
					</tr>
					<tr>
						<td>Gastos de expedición: </td>
						<td align="right"><?php echo $gastosExpedicion1; ?></td>
					</tr>
					<tr>
						<td>IVA (16%): </td>
						<td align="right"><?php echo $iva1; ?></td>
					</tr>
					<tr>
						<td><strong>Costo anual:</strong></td>
						<td align="right"><strong>$ <?php echo $primaAnual1; ?></strong></td>
					</tr>
						
				</table>
				<br/><br/>
				<a href="index.php" >Hacer otra cotización</a>
			</div>
		
		<?php
		}
	}
else{
	header("Location:index.php");
}

?>
		</div>
    </body>
</html>