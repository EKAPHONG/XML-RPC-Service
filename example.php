<?php
// Configuration, please do not edit if you do not understand the system.
use EKAPHONG\XML_RPC;
require_once(__DIR__ . '/class/XML_RPC.php');
require_once(__DIR__ . '/config/config.php');
$xmlrpc = new XML_RPC();
// End of configuration

$output = $xmlrpc->getDecrypt($server, $app_id, $secret, "4451734c5168314e416873625167553d");

print_r($output);
//Output : hello world
?>
