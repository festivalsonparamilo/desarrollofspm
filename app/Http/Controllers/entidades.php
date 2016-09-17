<?php
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
//Entidades de la república mexicana
$entidades = array(
	1 => 'Aguascalientes',
	2 => 'Baja California',
	3 => 'Baja California Sur',
	4 => 'Campeche',
	5 => 'Coahuila',
	6 => 'Colima',
	7 => 'Chiapas',
	8 => 'Chihuahua',
	9 => 'Ciudad de Mexico',
	10 => 'Durango',
	11 => 'Guanajuato',
	12 => 'Guerrero',
	13 => 'Hidalgo',
	14 => 'Jalisco',
	15 => 'Estado de Mexico',
	16 => 'Michoacan',
	17 => 'Morelos',
	18 => 'Nayarit',
	19 => 'Nuevo Leon',
	20 => 'Oaxaca',
	21 => 'Puebla',
	22 => 'Queretaro',
	23 => 'Quintana Roo',
	24 => 'San Luis Potosi',
	25 => 'Sinaloa',
	26 => 'Sonora',
	27 => 'Tabasco',
	28 => 'Tamaulipas',
	29 => 'Tlaxcala',
	30 => 'Veracruz',
	31 => 'Yucatan',
	32 => 'Zacatecas',
);
function estadoFromClave($clave) {
	global $entidades;
	return $entidades[$clave];
}
function claveFromEstado($estado) {
	global $entidades;
	return array_search($estado, $entidades);
}
?>