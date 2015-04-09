<form action="calc_client.php">
<p>Selecciona la opcion:
<select name="operation">
	<option value="Add">Sumar</option>
	<option value="Rest">Restar</option>
	<option value="Multiply">Multiplicar</option>
	<option value="Divide">Dividir</option>
</select>
<p>Introduce el primer valor:<input name="val1" ></input></p>
<p>Introduce el segundo valor:<input name="val2" ></input></p>
</p>
<input type="submit"  value="calcular"></input>
</form>


<?php
 
require_once ('nusoap.php');


$wsdl="http://2daw13.cesnuria.com/curs_php/serv/calc_server.php?wsdl";
$client = new nusoap_client($wsdl,'wsdl');

$valor1= $_REQUEST['val1'];
$valor2= $_REQUEST['val2'];
$oper=$_REQUEST['operation'];


$params = array('a' => $valor1, 'b'=>$valor2);
$result= $client->call($oper,$params);



echo '<h2>Resultat</h2><pre>';
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<p><b>Error: '.$err.'</b></p>';
} else {
	// Display the result
	print_r($result);
}

?>



