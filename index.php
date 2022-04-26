<?php

$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;
$controleur_default = "Client" ;

if(!isset($_REQUEST['controller']))
				$controller=$controleur_default;
			else 
				$controller = $_REQUEST['controller'];

if(!isset($_REQUEST['action']))
		$_REQUEST['action'] = "readAll";
					
switch ($controller) {
			case "employer" :
				require ("{$ROOT}{$DS}controller{$DS}controllerEmployer.php");
				break;
				
			case "client" :
				require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
				break;	
				
			case "projet" :
				require ("{$ROOT}{$DS}controller{$DS}controllerProjet.php");
				break;
			case "service" :
				require ("{$ROOT}{$DS}controller{$DS}controllerService.php");
				break;
			case "login" :
			    require ("{$ROOT}{$DS}controller{$DS}controllerOldprojet.php");
				break;
}
?>