<?php

function generarNumSolicitud($longitud){
	$key='';
	$pattern = '1234567890';
	$max=strlen($pattern)-1;
	
	for($i=0;$i<$longitud;$i++)
		$key.=$pattern{mt_rand(0,$max)};
	return $key;
}

function calcularGastosExpedicion($primaNeta) {
	$gastosExpedicion = 0;

	if ($primaNeta >= 0 && $primaNeta <= 500) {
		$gastosExpedicion = 105;
	} elseif ($primaNeta > 500 && $primaNeta <= 2500) {
		$gastosExpedicion = 160;
	} elseif ($primaNeta > 2500 && $primaNeta <= 10000) {
		$gastosExpedicion = 315;
	} elseif ($primaNeta > 10000 && $primaNeta <= 20000) {
		$gastosExpedicion = 790;
	} elseif ($primaNeta > 20000 && $primaNeta <= 100000) {
		$gastosExpedicion = 1050;
	} elseif ($primaNeta > 100000 && $primaNeta <= 500000) {
		$gastosExpedicion = 1575;
	} elseif ($primaNeta > 500000 && $primaNeta <= 1000000) {
		$gastosExpedicion = 3150;
	} elseif ($primaNeta > 1000000) {
		$gastosExpedicion = 5250;
	}

	return number_format($gastosExpedicion,2);
}

function calcularIVA($q, $iva) {
	return number_format($q*$iva,2);
}

function calculaPrimaAnual($primaNeta){	
	$primaAnual = 0;
	
	$gastosExpedicion = calcularGastosExpedicion($primaNeta);
	$iva = calcularIVA($primaNeta+$gastosExpedicion, .16);
	$primaAnual = ($primaNeta+$gastosExpedicion+$iva);
	
	return number_format($primaAnual, 2, '.',',');
}

?>