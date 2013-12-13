<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Inmuebles</title>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <?php
        $tipoPersona = $_POST["tipoPersona"];
    ?>
    </head>
    <body>
        <?php if($tipoPersona === "personaFisica"){?>
        <form method="post" id="cuartoFormulario" action="gracias.php">
            <h1>datos del contratante</h1>
            tipo de persona: Fisica
            <br>
            nombre(s) :
            <input name="nombre" type="text">
            <br>
            apellido paterno :
            <input name="apellidoP" type="text">
            <br>
            apellido materno :
            <input name="apellidoM" type="text">
            <br>
            fecha de nacimiento :
            <input name="fechaNacimiento" type="text">
            <br>
            sexo :
            <input name="sexo" type="text">
            <br>
            RFC :
            <input name="rfc" type="text">
            <br>
            ocupacion :
            <input name="ocupacion" type="text">
            <br>
            correo :
            <input name="correo" type="mail">
            <br>
            telefono :
            <input name="telefono" type="text">
            <br>
            CP :
            <input name="codigoPostal" type="text">
            <br>
            edo :
            <input name="estado" type="text">
            <br>
            municipio :
            <input name="municipio" type="text">
            <br>
            colonia :
            <input name="colonia" type="text">
            <br>
            giro del negocio :
            <input name="giroNegocio" type="text">
            <br>
            calle :
            <input name="calle" type="text">
            <br>
            numero exterior :
            <input name="numeExterior" type="text">
            <br>
            numero interior :
            <input name="numIterior" type="text">
            <br>
            ¿los datos del negocio son los mismos que los del negocio a asegurar?
            <input type="checkbox" name="datosNegocioMismos" value="si">
            si
            <input type="checkbox" name="datosNegocioMismos" value="no">
            no
            <br>
            <h1>datos del negocio a asegurar</h1>
            tipo de persona: Fisica
            <br>
            nombre(s) :
            <input name="nombre" type="text">
            <br>
            apellido paterno :
            <input name="apellidoP" type="text">
            <br>
            apellido materno :
            <input name="apellidoM" type="text">
            <br>
            fecha de nacimiento :
            <input name="fechaNacimiento" type="text">
            <br>
            sexo :
            <input name="sexo" type="text">
            <br>
            RFC :
            <input name="rfc" type="text">
            <br>
            ocupacion :
            <input name="ocupacion" type="text">
            <br>
            correo :
            <input name="correo" type="mail">
            <br>
            telefono :
            <input name="telefono" type="text">
            <br>
            CP :
            <input name="codigoPostal" type="text">
            <br>
            edo :
            <input name="estado" type="text">
            <br>
            municipio :
            <input name="municipio" type="text">
            <br>
            colonia :
            <input name="colonia" type="text">
            <br>
            giro del negocio :
            <input name="giroNegocio" type="text">
            <br>
            calle :
            <input name="calle" type="text">
            <br>
            numero exterior :
            <input name="numeExterior" type="text">
            <br>
            numero interior :
            <input name="numIterior" type="text">
            <br>
            <input type="checkbox" name="aceptoEntiendoCodiciones">
            acepto y entiendo las codiciones
            <br>
            <input type="checkbox" name="aceptoTarjeta">
            acepto que en mi tarjeta se cargue
            <br>
            <input type="checkbox" name="autorizo">
            autorizo
            <br>
            <input type="checkbox" name="aceptoEntiendoFecha">
            acepto y entiendo que la fecha de inicio
            <br>
            <input type="checkbox" name="deseo">
            deseo
            <br>
            ver principios de privacidad y confidencialidad de la informacion.
            <button name="continuar" type="submit">
                continuar
        </form>
        <?php } elseif($tipoPersona === "personaMoral"){ ?>
        <form method="post" id="cuartoFormulario" action="gracias.php">
            <h1>datos del contratante</h1>
            tipo de persona: Moral
            <br>
            razon social :
            <input name="razonSocial" type="text">
            <br>
            fecha de nacimiento :
            <input name="fechaConstitucionEmpresa" type="text">
            <br>
            RFC :
            <input name="rfc" type="text">
            <br>
            ocupacion :
            <input name="ocupacion" type="text">
            <br>
            nacinalidad :
            <input name="nacionalidad" type="text">
            <br>
            correo :
            <input name="correo" type="mail">
            <br>
            telefono :
            <input name="telefono" type="text">
            <br>
            CP :
            <input name="codigoPostal" type="text">
            <br>
            edo :
            <input name="estado" type="text">
            <br>
            municipio :
            <input name="municipio" type="text">
            <br>
            colonia :
            <input name="colonia" type="text">
            <br>
            giro del negocio :
            <input name="giroNegocio" type="text">
            <br>
            calle :
            <input name="calle" type="text">
            <br>
            numero exterior :
            <input name="numExterior" type="text">
            <br>
            numero interior :
            <input name="numInterior" type="text">
            <br>
            <p>
                datos del representante legal de la compañia.
            </p>
            nombre(s) :
            <input name="nombre" type="text">
            <br>
            apellido paterno :
            <input name="apellidoP" type="text">
            <br>
            apellido materno :
            <input name="apellidoM" type="text">
            <br>
            ¿los datos del negocio son los mismos que los del negocio a asegurar?
            <input type="checkbox" name="datosNegocioMismos" value="si">
            si
            <input type="checkbox" name="datosNegocioMismos" value="no">
            no
            <br>
            <h1>datos del contratante</h1>
            tipo de persona: Moral
            <br>
            razon social :
            <input name="razonSocial" type="text">
            <br>
            fecha de nacimiento :
            <input name="fechaConstitucionEmpresa" type="text">
            <br>
            RFC :
            <input name="rfc" type="text">
            <br>
            ocupacion :
            <input name="ocupacion" type="text">
            <br>
            nacinalidad :
            <input name="nacionalidad" type="text">
            <br>
            correo :
            <input name="correo" type="mail">
            <br>
            telefono :
            <input name="telefono" type="text">
            <br>
            CP :
            <input name="codigoPostal" type="text">
            <br>
            edo :
            <input name="estado" type="text">
            <br>
            municipio :
            <input name="municipio" type="text">
            <br>
            colonia :
            <input name="colonia" type="text">
            <br>
            giro del negocio :
            <input name="giroNegocio" type="text">
            <br>
            calle :
            <input name="municipio" type="text">
            <br>
            numero exterior :
            <input name="municipio" type="text">
            <br>
            numero interior :
            <input name="municipio" type="text">
            <br>
            <p>
                datos del representante legal de la compañia.
            </p>
            nombre(s) :
            <input name="nombre" type="text">
            <br>
            apellido paterno :
            <input name="apellidoP" type="text">
            <br>
            apellido materno :
            <input name="apellidoM" type="text">
            <br>
            <input type="checkbox" name="aceptoEntiendoCodiciones">
            acepto y entiendo las codiciones
            <br>
            <input type="checkbox" name="aceptoTarjeta">
            acepto que en mi tarjeta se cargue
            <br>
            <input type="checkbox" name="autorizo">
            autorizo
            <br>
            <input type="checkbox" name="aceptoEntiendoFecha">
            acepto y entiendo que la fecha de inicio
            <br>
            <input type="checkbox" name="deseo">
            deseo
            <br>
            ver principios de privacidad y confidencialidad de la informacion.
            <button name="continuar" type="submit">
                continuar
        </form>
        <?php } ?>
    </body>
</html>