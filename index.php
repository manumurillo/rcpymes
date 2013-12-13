<?php
	include ("Util.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <title>AXA RC PyMEs</title>
    	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    	<script type="text/javascript" src="js/jquery.validate.js"></script>
    	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    	<script type="text/javascript" src="js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="content">
        	<div id="title">
        		Cotización para RC PyMEs
        	</div>
        	<div id="errors">
        		<ul></ul>
        	</div>
            <form method="post" name="formPaso1" id="formPaso1" action="cotiza.php">
                <input type="hidden" value="<?php echo generarNumSolicitud(6); ?>" name="id_transaccion" name="id_transaccion"/>
                
                <div class="section" id="datos_interesado">
                    <h2 class="section-title">Datos del interesado</h2>
                    
                    <label class="label">*Nombre:</label>
                    <input type="text" name="nombre" id="nombre" maxlength="120"/>
                    <div class="clear"></div>
                    
                    <label class="label">*Apellipo Paterno:</label>
                    <input type="text" name="apellidoP" id="apellidoP" maxlength="120"/>
                    <div class="clear"></div>
                    
                    <label class="label">*Correo electrónico:</label>
                    <input type="text" name="correo" id="correo" maxlength="120"/>
                    <div class="clear"></div>
                    
                    <label class="label">*Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" maxlength="14"/>
                    <div class="clear"></div>
                </div>
                
                <div class="section" id="ubicacion_contratante">
                    <h2 class="section-title">Ubicación del contratante</h2>
                    
                    <label class="label">*Código Postal:</label>
                    <input type="text" name="codigoPostal" id="codigoPostal" maxlength="5"/>
                    <div class="clear"></div>
                    
                    <label class="label">*Estado: </label>
                    <select id="estado" name="estado">
                        <option value="">-- Selecione --</option>
                        <option value="1">Aguascalientes</option>
                        <option value="2">Baja California</option>
                        <option value="3">Campeche</option>
                        <option value="4">Coahuila-Torreón</option>
                        <option value="5">Coahuila-Resto</option>
                        <option value="6">Colima</option>
                        <option value="7">Chiapas</option>
                        <option value="8">Chihuahua</option>
                        <option value="9">Distrito Federal</option>
                        <option value="10">Durango</option>
                        <option value="11">Guanajuato</option>
                        <option value="12">Guerrero</option>
                        <option value="13">Hidalgo</option>
                        <option value="14">Jalisco</option>
                        <option value="15">Edo México-Toluca</option>
                        <option value="16">Edo México-Resto</option>
                        <option value="17">Michoacan</option>
                        <option value="18">Morelos</option>
                        <option value="19">Nayarit</option>
                        <option value="20">Nuevo León</option>
                        <option value="21">Oaxaca</option>
                        <option value="22">Puebla</option>
                        <option value="23">Queretaro</option>
                        <option value="24">Quintana Roo</option>
                        <option value="25">San Luis Potosí</option>
                        <option value="26">Sinaloa-Culiacan</option>
                        <option value="27">Sinaloa-Resto</option>
                        <option value="28">Sonora</option>
                        <option value="29">Tabasco</option>
                        <option value="30">Tamaulipas</option>
                        <option value="31">Tlaxcala</option>
                        <option value="32">Veracruz</option>
                        <option value="33">Yucatan</option>
                        <option value="34">Zacatecas</option>
                        <option value="35">Baja California Sur</option>
                    </select>
                    <div class="clear"></div>
                    
                    <label class="label">*Municipio:</label>
                    <input type="text" name="municipio" id="municipio" maxlength="120"/><br/>

                </div>
                
                <div class="section" id="datos_negocio">
                    <h2 class="section-title">Giro del inmueble: <span id="giroI"></span> </h2>
                    <label class="label">*Categoría:</label>
                    <select name="categoria" id="categoria">
                        <option value="">-- Seleccione --</option>
                        <option value="salon_fiestas">Salón de fiestas</option>
                        <option value="restaurante">Restaurante</option>
                        <option value="hotel">Hotel</option>
                        <option value="escuela">Escuela</option>
                    </select>
                </div>
                <div class="clear"></div>
                <div class="section" id="datos_salon" style="display: none">
                    <label class="label">*Eres dueño de las instalaciones?:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="text"> Sí</label><input type="radio" name="tipoContratante" id="tipoContratante_1" value="1"/>
                    <label class="text"> No</label><input type="radio" name="tipoContratante" id="tipoContratante_0" value="0"/>
                    <div class="clear"></div>
                    
                    <label class="label">Número de empleados</label> 
                    <input type="text" name="numeroEmpleados" id="numeroEmpleados" size="5" maxlength="3"/><br/>
                 	<div class="clear"></div>
                 	  
                    <label class="label">Número de niveles de tu salón: </label> 
                    <select name="numeroNiveles" id="numeroNiveles">
                        <option value="">-- Seleccione --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                
                <div class="section" id="datos_escuela" style="display: none">
                    <label class="label">*Eres dueño de las instalaciones?:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="text"> Sí</label><input type="radio" name="tipoContratante" id="tipoContratante_1" value="1"/>
                    <label class="text"> No</label><input type="radio" name="tipoContratante" id="tipoContratante_0" value="0"/>
                    <div class="clear"></div>
                    
                    <label class="label">*Número de alumnos</label> 
                    <input type="text" name="numeroAlumnos" id="numeroAlumnos" size="5" maxlength="3"/><br/>
                    <div class="clear"></div>
                    
                    <label class="label">*Monto máximo a cubrir por alumno: </label> 
                    <select name="montoMaximoAlumno" id="montoMaximoAlumno">
                        <option value="">-- Seleccione --</option>
                        <option value="100000">$ 100,000</option>
                        <option value="150000">$ 150,000</option>
                        <option value="200000">$ 200,000</option>
                    </select>
                    <div class="clear"></div>
                    
                    <label class="label">Número de empleados</label> 
                    <input type="text" name="numeroEmpleados" id="numeroEmpleados" size="5" maxlength="3"/><br/>
                    <div class="clear"></div>
                    
                    <label class="label">Número de niveles de tu escuela: </label> 
                    <select name="numeroNiveles" id="numeroNiveles">
                        <option value="">-- Seleccione --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                
                <div class="section" id="datos_restaurante" style="display: none">
                    <label class="label">*Eres dueño de las instalaciones?:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="text"> Sí</label><input type="radio" name="tipoContratante" id="tipoContratante_1" value="1"/>
                    <label class="text"> No</label><input type="radio" name="tipoContratante" id="tipoContratante_0" value="0"/>
                    <div class="clear"></div>
                    
                    <label class="label">Número de empleados</label> 
                    <input type="text" name="numeroEmpleados" id="numeroEmpleados" size="5" maxlength="3"/><br/>
                    <div class="clear"></div>
                    
                    <label class="label">Número de niveles de tu restaurante: </label> 
                    <select name="numeroNiveles" id="numeroNiveles">
                        <option value="">-- Seleccione --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                
                <div class="section" id="datos_hotel" style="display: none">
                    <label class="label">*Eres dueño de las instalaciones?:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label class="text"> Sí</label><input type="radio" name="tipoContratante" id="tipoContratante_1" value="1"/>
                    <label class="text"> No</label><input type="radio" name="tipoContratante" id="tipoContratante_0" value="0"/>
                    <div class="clear"></div>
                    
                    <label class="label">*Número de habitaciones: </label> 
                    <input type="text" name="numeroHabitaciones" id="numeroHabitaciones" size="5" maxlength="3"/><br/>
                    <div class="clear"></div>
                    
                    <label class="label">Número de empleados</label> 
                    <input type="text" name="numeroEmpleados" id="numeroEmpleados" size="5" maxlength="3"/><br/>
                    <div class="clear"></div>
                    
                    <label class="label">Número de niveles de tu hotel: </label> 
                    <select name="numeroNiveles" id="numeroNiveles">
                        <option value="">-- Seleccione --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                        <option value="3">6</option>
                    </select>
                </div>
                
                <div class="clear"></div>
                
                <div class="section">
                    <input type="submit" value="Cotizar"/>
                </div>
            </form>
                        
        </div>
        	
    </body>
</html>