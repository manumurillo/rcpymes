<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Inmuebles</title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<?php
	$giro = $_POST["lugar"];
	?>
</head>
<body>
	<?php if($giro === "restaurante"){?>
		<form method="post" id="segundoFormulario" action="pasoTres.php">
			<h1>datos del interesado</h1>
			<input name="lugar" value="<?php echo $giro;?>" type="hidden">
			nombre :<input name="nombre" type="text"><br>
			apellidoP :<input name="apellidoP" type="text"><br>
			correo :<input name="correo" type="mail"><br>
			telefono :<input name="telefono" type="text"><br>
			<h1>ubicacion del contrate</h1>
			CP :<input name="codigoPostal" type="text"><br>
			edo :<input name="estado" type="text"><br>
			municipio :<input name="municipio" type="text"><br>
			<h1>datos de tu negocio</h1>
			no. de empleados :<input name="numeroEmpleados" type="text"><br>
			no. de niveles de restaurante :<input name="numeroNivelesRestaurante" type="text"><br>
			tipo de contratante :<input type="radio" name="tipoContratante" value="propietario"> propietario <input type="radio" name="tipoContratante" value="arrendatario"> arrendatario<br>
			<input type="checkbox" name="autorizo">autorizo<br>
			<input type="checkbox" name="declaro">declaro<br>
			<button name="cotizar" type="submit">cotizar</button>
		</form>
		
		
	<?php } elseif($giro === "salon_fiestas"){?>
		<form method="post" id="segundoFormulario" action="pasoTres.php">
			<h1>datos del interesado</h1>
			<input name="lugar" value="<?php echo $giro;?>" type="hidden">
			nombre :<input name="nombre" type="text"><br>
			apellidoP :<input name="apellidoP" type="text"><br>
			correo :<input name="correo" type="mail"><br>
			telefono :<input name="telefono" type="text"><br>
			<h1>ubicacion del contratante</h1>
			CP :<input name="codigoPostal" type="text"><br>
			edo :<input name="estado" type="text"><br>
			municipio :<input name="municipio" type="text"><br>
			<h1>datos de tu negocio</h1>
			no. de empleados :<input name="numeroEmpleados" type="text"><br>
			no. de niveles de salon de fiestas :<input name="numeroNivelesSalonFiestas" type="text"><br>
			tipo de contratante :<input type="radio" name="tipoContratante" value="propietario"> propietario <input type="radio" name="tipoContratante" value="arrendatario"> arrendatario<br>
			<input type="checkbox" name="autorizo">autorizo<br>
			<input type="checkbox" name="declaro">declaro<br>
			<button name="cotizar" type="submit">cotizar</button>
		</form>
	<?php } elseif($giro === "hoteles_moteles"){?>
		<form method="post" id="segundoFormulario" action="pasoTres.php">
			<h1>datos del interesado</h1>
			<input name="lugar" value="<?php echo $giro;?>" type="hidden">
			nombre :<input name="nombre" type="text"><br>
			apellidoP :<input name="apellidoP" type="text"><br>
			correo :<input name="correo" type="mail"><br>
			telefono :<input name="telefono" type="text"><br>
			<h1>ubicacion del contratante</h1>
			CP :<input name="codigoPostal" type="text"><br>
			edo :<input name="estado" type="text"><br>
			municipio :<input name="municipio" type="text"><br>
			<h1>datos de tu negocio</h1>
			no. de habitaciones :<input name="numeroHabitaciones" type="text"><br>
			no. de empleados :<input name="numeroEmpleados" type="text"><br>
			Giro de tu hotel :<input name="giroHotel" type="text"><br>
			no. de niveles de tu hotel :<input name="numeroNivelesHotel" type="text"><br>
			tipo de contratante :<input type="radio" name="tipoContratante" value="propietario"> propietario <input type="radio" name="tipoContratante" value="arrendatario"> arrendatario<br>
			<input type="checkbox" name="autorizo">autorizo<br>
			<input type="checkbox" name="declaro">declaro<br>
			<button name="cotizar" type="submit">cotizar</button>
		</form>
	<?php } elseif($giro === "campamentos_albergues"){?>
		<form method="post" id="segundoFormulario" action="pasoTres.php">
			<h1>datos del interesado</h1>
			<input name="lugar" value="<?php echo $giro;?>" type="hidden">
			nombre :<input name="nombre" type="text"><br>
			apellidoP :<input name="apellidoP" type="text"><br>
			correo :<input name="correo" type="mail"><br>
			telefono :<input name="telefono" type="text"><br>
			<h1>ubicacion del contratante</h1>
			CP :<input name="codigoPostal" type="text"><br>
			edo :<input name="estado" type="text"><br>
			municipio :<input name="municipio" type="text"><br>
			<h1>datos de tu negocio</h1>
			no. de habitaciones :<input name="numeroHabitaciones" type="text"><br>
			no. de empleados :<input name="numeroEmpleados" type="text"><br>
			Giro de tu campamento :<input name="giroHotel" type="text"><br>
			no. de niveles de tu campamento :<input name="numeroNivelesHotel" type="text"><br>
			tipo de contratante :<input type="radio" name="tipoContratante" value="propietario"> propietario <input type="radio" name="tipoContratante" value="arrendatario"> arrendatario<br>
			<input type="checkbox" name="autorizo">autorizo<br>
			<input type="checkbox" name="declaro">declaro<br>
			<button name="cotizar" type="submit">cotizar</button>
		</form>
	<?php } elseif($giro === "escuelas"){?>
		<form method="post" id="segundoFormulario" action="pasoTres.php">
			<h1>datos del interesado</h1>
			<input name="lugar" value="<?php echo $giro;?>" type="hidden">
			nombre :<input name="nombre" type="text"><br>
			apellidoP :<input name="apellidoP" type="text"><br>
			correo :<input name="correo" type="mail"><br>
			telefono :<input name="telefono" type="text"><br>
			<h1>ubicacion del contratante</h1>
			CP :<input name="codigoPostal" type="text"><br>
			edo :<input name="estado" type="text"><br>
			municipio :<input name="municipio" type="text"><br>
			<h1>datos de tu negocio</h1>
			no. de alumnos :<input name="numeroAlumnos" type="text"><br>
			monto maximo por alumno :<select name="montoMaximoAlumno">
				<option value="sublimite_alumno1">$100,000</option>
				<option value="sublimite_alumno1">$150,000</option>
				<option value="sublimite_alumno2">$200,000</option>
			</select><br>
			no. de empleados :<input name="numeroEmpleados" type="text"><br>
			no. de niveles de tu escuela :<input name="numeroNivelesEscuela" type="text"><br>
			tipo de contratante :<input type="radio" name="tipoContratante" value="propietario"> propietario <input type="radio" name="tipoContratante" value="arrendatario"> arrendatario<br>
			<input type="checkbox" name="autorizo">autorizo<br>
			<input type="checkbox" name="declaro">declaro<br>
			<button name="cotizar" type="submit">cotizar</button>
		</form>
	<?php } ?>
</body>
</html>