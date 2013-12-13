<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Inmuebles</title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<?php
	function calcularGastosExpedicion($primaNeta){
		$gastosExpedicion = 0;
		
		if($primaNeta >= 0 && $primaNeta <= 500){
			$gastosExpedicion = 105;
			return $gastosExpedicion;
		} elseif($primaNeta >= 501 && $primaNeta <= 2500){
			$gastosExpedicion = 160;
			return $gastosExpedicion;
		} elseif($primaNeta >= 2501 && $primaNeta <= 10000){
			$gastosExpedicion = 315;
			return $gastosExpedicion;
		} elseif($primaNeta >= 10001 && $primaNeta <= 20000){
			$gastosExpedicion = 790;
			return $gastosExpedicion;
		} elseif($primaNeta >= 20001 && $primaNeta <= 100000){
			$gastosExpedicion = 1050;
			return $gastosExpedicion;
		} elseif($primaNeta >= 100001 && $primaNeta <= 500000){
			$gastosExpedicion = 1575;
			return $gastosExpedicion;
		} elseif($primaNeta >= 500001 && $primaNeta <= 1000000){
			$gastosExpedicion = 3150;
			return $gastosExpedicion;
		} elseif($primaNeta >= 1000001){
			$gastosExpedicion = 5250;
			return $gastosExpedicion;
		}
	}
	$lugar = $_POST['lugar'];
	$codigoPostal = $_POST['codigoPostal'];
	$tipoContratante = $_POST['tipoContratante'];
	$miJson = file_get_contents("tablaGiros.json");
	$datosTabla = json_decode($miJson,true);
	$iva = $datosTabla['codigo_postal'][$codigoPostal];
	?>
</head>
<body>
	<?php if($lugar === "restaurante"){
		$primaNeta = $datosTabla[$lugar][$tipoContratante];
		$anualidad = number_format($primaNeta+calcularGastosExpedicion($primaNeta)*$iva,2);
	?>
		<form method="post" id="tercerFormulario" action="pasoCuatro.php">
			<h1>optimo</h1>
			<h2>suma asegurad</h2>
			<h3>$4,0000.00</h3>
			<ul>
				<li>actividades inmuebles</li>
				<li>Cargas y dercargas</li>
				<li>Primeros auxilios</li>
				<li>productos y trabajos terminados</li>
				<li>daño material externo</li>
				<li><?php echo $tipoContratante; ?></li>
			</ul>
			<input type="radio"> anualidad: $ <?php echo $anualidad ?><br>
			tipo de persona :<input type="radio" name="tipoPersona" value="personaFisica"> fisica <input type="radio" name="tipoPersona" value="personaMoral"> moral<br>
			<button name="cotizar" type="submit">comprar
		</form>
	<?php } elseif($lugar === "salon_fiestas"){
		$primaNeta = $datosTabla[$lugar][$tipoContratante];
		$anualidad = number_format($primaNeta+calcularGastosExpedicion($primaNeta)*$iva,2);
	?>
		<form method="post" id="tercerFormulario" action="pasoCuatro.php">
			<h1>optimo</h1>
			<h2>suma asegurad</h2>
			<h3>$4,0000.00</h3>
			<ul>
				<li>actividades inmuebles</li>
				<li>Cargas y dercargas</li>
				<li>Primeros auxilios</li>
				<li>productos y trabajos terminados</li>
				<li>daño material externo</li>
				<li><?php echo $tipoContratante; ?></li>
			</ul>
			<input type="radio"> anualidad: $<?php echo $anualidad ?><br>
			tipo de persona :<input type="radio" name="tipoPersona" value="personaFisica"> fisica <input type="radio" name="tipoPersona" value="personaMoral"> moral<br>
			<button name="cotizar" type="submit">comprar
		</form>
	<?php } elseif($lugar === "hoteles_moteles"){
		$numeroHabitaciones = $_POST['numeroHabitaciones'];
		
		$primaNeta1 = $datosTabla[$lugar]['cincuenta_millon'][$tipoContratante][$numeroHabitaciones];
		$primaNeta2 = $datosTabla[$lugar]['cincuenta_tresMillones'][$tipoContratante][$numeroHabitaciones];
		$primaNeta3 = $datosTabla[$lugar]['cincuenta_cincoMillones'][$tipoContratante][$numeroHabitaciones];
		
		$anualidad1 = number_format($primaNeta1+calcularGastosExpedicion($primaNeta1)*$iva,2);
		$anualidad2 = number_format($primaNeta2+calcularGastosExpedicion($primaNeta2)*$iva,2);
		$anualidad3 = number_format($primaNeta3+calcularGastosExpedicion($primaNeta3)*$iva,2);
	?>
		<form method="post" id="tercerFormulario" action="pasoCuatro.php">
			<h1>optimo</h1>
			<h2>suma asegurad</h2>
			<h3>$1,0000.00</h3>
			<ul>
				<li>actividades inmuebles</li>
				<li>Cargas y dercargas</li>
				<li>Primeros auxilios</li>
				<li>productos y trabajos terminados</li>
				<li>daño material externo</li>
				<li><?php echo $tipoContratante; ?></li>
			</ul>
			<input type="radio"> anualidad: $<?php echo $anualidad1 ?><br>
			tipo de persona :<input type="radio" name="tipoPersona" value="personaFisica"> fisica <input type="radio" name="tipoPersona" value="personaMoral"> moral<br>
			<button name="cotizar" type="submit">comprar</button><br>
			<h1>optimo</h1>
			<h2>suma asegurad</h2>
			<h3>$3,0000.00</h3>
			<ul>
				<li>actividades inmuebles</li>
				<li>Cargas y dercargas</li>
				<li>Primeros auxilios</li>
				<li>productos y trabajos terminados</li>
				<li>daño material externo</li>
				<li><?php echo $tipoContratante; ?></li>
			</ul>
			<input type="radio"> anualidad: $<?php echo $anualidad2 ?><br>
			tipo de persona :<input type="radio" name="tipoPersona" value="personaFisica"> fisica <input type="radio" name="tipoPersona" value="personaMoral"> moral<br>
			<button name="cotizar" type="submit">comprar</button><br>
			<h1>optimo</h1>
			<h2>suma asegurad</h2>
			<h3>$5,0000.00</h3>
			<ul>
				<li>actividades inmuebles</li>
				<li>Cargas y dercargas</li>
				<li>Primeros auxilios</li>
				<li>productos y trabajos terminados</li>
				<li>daño material externo</li>
				<li><?php echo $tipoContratante; ?></li>
			</ul>
			<input type="radio"> anualidad: $<?php echo $anualidad3 ?><br>
			tipo de persona :<input type="radio" name="tipoPersona" value="personaFisica"> fisica <input type="radio" name="tipoPersona" value="personaMoral"> moral<br>
			<button name="cotizar" type="submit">comprar</button>
		</form>
	<?php } elseif($lugar === "escuelas"){
		$numeroAlumnos = $_POST['numeroAlumnos'];
		$montoMaximoAlumno = $_POST['montoMaximoAlumno'];
		$primaNeta1 = $datosTabla[$lugar]['cincuenta_millon'][$montoMaximoAlumno][$tipoContratante][$numeroAlumnos];
		$primaNeta2 = $datosTabla[$lugar]['cincuenta_tresMillones'][$montoMaximoAlumno][$tipoContratante][$numeroAlumnos];
		$primaNeta3 = $datosTabla[$lugar]['cincuenta_cincoMillones'][$montoMaximoAlumno][$tipoContratante][$numeroAlumnos];
		$anualidad1 = number_format($primaNeta1+calcularGastosExpedicion($primaNeta1)*$iva,2);
		$anualidad2 = number_format($primaNeta2+calcularGastosExpedicion($primaNeta2)*$iva,2);
		$anualidad3 = number_format($primaNeta3+calcularGastosExpedicion($primaNeta3)*$iva,2);
	?>
		<form method="post" id="tercerFormulario" action="pasoCuatro.php">
			<h1>optimo</h1>
			<h2>suma asegurad</h2>
			<h3>$1,0000.00</h3>
			<ul>
				<li>actividades inmuebles</li>
				<li>Cargas y dercargas</li>
				<li>Primeros auxilios</li>
				<li>productos y trabajos terminados</li>
				<li>daño material externo</li>
				<li><?php echo $tipoContratante; ?></li>
			</ul>
			<input type="radio"> anualidad: $<?php echo $anualidad1 ?><br>
			tipo de persona :<input type="radio" name="tipoPersona" value="personaFisica"> fisica <input type="radio" name="tipoPersona" value="personaMoral"> moral<br>
			<button name="cotizar" type="submit">comprar</button><br>
			<h1>optimo</h1>
			<h2>suma asegurad</h2>
			<h3>$3,0000.00</h3>
			<ul>
				<li>actividades inmuebles</li>
				<li>Cargas y dercargas</li>
				<li>Primeros auxilios</li>
				<li>productos y trabajos terminados</li>
				<li>daño material externo</li>
				<li><?php echo $tipoContratante; ?></li>
			</ul>
			<input type="radio"> anualidad: $<?php echo $anualidad2 ?><br>
			tipo de persona :<input type="radio" name="tipoPersona" value="personaFisica"> fisica <input type="radio" name="tipoPersona" value="personaMoral"> moral<br>
			<button name="cotizar" type="submit">comprar</button><br>
			<h1>optimo</h1>
			<h2>suma asegurad</h2>
			<h3>$5,0000.00</h3>
			<ul>
				<li>actividades inmuebles</li>
				<li>Cargas y dercargas</li>
				<li>Primeros auxilios</li>
				<li>productos y trabajos terminados</li>
				<li>daño material externo</li>
				<li><?php echo $tipoContratante; ?></li>
			</ul>
			<input type="radio"> anualidad: $<?php echo $anualidad3 ?><br>
			tipo de persona :<input type="radio" name="tipoPersona" value="personaFisica"> fisica <input type="radio" name="tipoPersona" value="personaMoral"> moral<br>
			<button name="cotizar" type="submit">comprar</button>
		</form>
	<?php } ?>
</body>
</html>