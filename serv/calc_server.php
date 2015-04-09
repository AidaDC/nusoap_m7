<?php
	require_once 'nusoap.php';

	$soap = new soap_server;
	$soap->configureWSDL('AddService', 'http://2daw13.cesnuria.com/curs_php/serv');
	$soap->wsdl->schemaTargetNamespace = 'http://2daw13.cesnuria.com/curs_php/serv';
	$soap->register('Add', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://2daw13.cesnuria.com/curs_php/serv');
	$soap->register('Rest', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://2daw13.cesnuria.com/curs_php/serv');
	$soap->register('Multiply', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://2daw13.cesnuria.com/curs_php/serv');
	$soap->register('Divide', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://2daw13.cesnuria.com/curs_php/serv');
	$soap->service(isset($HTTP_RAW_POST_DATA) ?$HTTP_RAW_POST_DATA : '');

function Add($a, $b){
	return $a + $b;
}
function Rest($a, $b){
	return $a - $b;
}

function Multiply($a, $b){
	return $a * $b;
}

function Divide($a, $b){
	return $a / $b;
}
?>

