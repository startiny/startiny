<?php
$controller = "Client";
require_once ("{$ROOT}{$DS}model{$DS}ModelClient.php"); 

if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];

	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des client ";
        $view = "readAll";
       	$tab_c = ModelClient::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['ncin'])){
			$ncin = $_REQUEST['ncin'];
			$u = ModelClient::select($ncin);
				if($u!=null){
					$pagetitle = "Details du client";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['ncin'])){
			$ncin = $_REQUEST['ncin'];
			$del = ModelClient::select($ncin);
			if($del!=null){
			$del->delete($ncin);
			header('Location: index.php?controller=Client&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un Client";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['ncin']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])
		&& isset($_REQUEST['e'])&& isset($_REQUEST['d'])&& isset($_REQUEST['v'])&& isset($_REQUEST['s'])){
			$ncin = $_REQUEST["ncin"];
			$n = $_REQUEST["n"];
			$p = $_REQUEST["p"];
			$e = $_REQUEST["e"];
			$d = $_REQUEST["d"];
			$v = $_REQUEST["v"];
			$s = $_REQUEST["s"];
			
			$recherche = ModelClient::select($ncin);
			if($recherche==null){
				$u = new ModelClient($ncin, $n, $p,$e,$d,$v,$s) ;	
				$tab = array(
				"ncin" => $ncin,
                "nom" => $n,
                "prenom" => $p,
                "email" => $e,
                "date_naissance"=> $d,
                "ville" => $v,
                "service"=>$s
				);				
				$u->insert($tab);
				$pagetitle = "Client Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
		if(isset($_REQUEST['ncin'])){
			$ncin = $_REQUEST['ncin'];
			$up = ModelClient::select($ncin);
			if($up!=null){
				$pagetitle = "Modifier le client";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['ncin']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])
		&& isset($_REQUEST['e'])&& isset($_REQUEST['d'])&& isset($_REQUEST['v'])&& isset($_REQUEST['s'])){
			$oldncin = $_REQUEST['ncin'];
			$tab = array(
			    "ncin"=> $_REQUEST["ncin"],
				"n"   => $_REQUEST["n"],
				"$p"  => $_REQUEST["p"],
				"$e"  => $_REQUEST["e"],
				"$d"  => $_REQUEST["d"],
				"$v"  => $_REQUEST["v"],
				"$s"  => $_REQUEST["s"]
   			 );
			$o = ModelClient::select($oldncin);
			if($o!=null){
				$u = ModelClient::update($tab, $oldncin);		
				$pagetitle = "Client modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
