<?php
$controller = "Service";
require_once ("{$ROOT}{$DS}model{$DS}ModelService.php");

if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];
/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Nos services ";
        $view = "readAll";
       	$tab_u = ModelService::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['Sid'])){
			$id = $_REQUEST['Sid'];
			$u = ModelService::select($id);
				if($u!=null){
					$pagetitle = "Details d'un service'";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['Sid'])){
			$id = $_REQUEST['Sid'];
			$del = ModelService::select($id);
			if($del!=null){
			$del->delete($id);
			header('Location: index.php?controller=Service&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un service";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['Sid']) && isset($_REQUEST['n']) && isset($_REQUEST['emp']) ){
			$id   = $_REQUEST["sid"];
			$n    = $_REQUEST["n"];
            $emp = $_REQUEST["emp"];

			$recherche = ModelService::select($id);
			if($recherche==null){
				$u = new ModelService($id, $n, $emp) ;	
				$tab = array(
				"Sid" => $id,
                "Snom" => $n;
                "emp" => $emp;
				);				
				$u->insert($tab);
				$pagetitle = "Service Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
		if(isset($_REQUEST['Sid'])){
			$id = $_REQUEST['Sid'];
			$up = ModelService::select($id);
			if($up!=null){
				$pagetitle = "Modifier un service";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['Sid']) && isset($_REQUEST['n']) && isset($_REQUEST['emp']) ){
			$oldid = $_REQUEST['Sid'];
			$tab = array(
                $id = $_REQUEST["Sid"];
                $n  = $_REQUEST["n"];
                $emp  = $_REQUEST["emp"];
   			 );
			$o = ModelService::select($oldid);
			if($o!=null){
				$u = $o->update($tab, $oldid);		
				$pagetitle = "Service modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>