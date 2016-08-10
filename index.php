<?php





require __DIR__ . '/vendor/autoload.php';
require_once("include.php") ;



$r = new Connector();

$uri = "http://anoopnair.com/employee.json";
$response = Connector::get($uri)->send();

$json = $response->body ;
echo "\n\r" ;echo "\n\r" ;echo "\n\r" ; 
printf('%s is %s years old.', $json->name, $json->age) ;
echo "\n\r" ;echo "\n\r" ;echo "\n\r" ;


?>