<?php
$controller = "Client";
require_once ("{$ROOT}{$DS}model{$DS}ModelEmployer.php");

if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];

	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des employeurs ";
        $view = "readAll";
       	$tab_u = ModelEmployer::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['EMPncin'])){
			$ncin = $_REQUEST['EMPncin'];
			$u = ModelEmployer::select($ncin);
				if($u!=null){
					$pagetitle = "Details d'employeur";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['EMPncin'])){
			$ncin = $_REQUEST['EMPncin'];
			$del = ModelEmployer::select($ncin);
			if($del!=null){
			$del->delete($ncin);
			header('Location: index.php?controller=Employer&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un employeur";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['ncin']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])
		&& isset($_REQUEST['d'])&& isset($_REQUEST['j'])&& isset($_REQUEST['h'])){
			$ncin = $_REQUEST["ncin"];
			$n = $_REQUEST["n"];
			$p = $_REQUEST["p"];
			$d = $_REQUEST["d"];
			$j = $_REQUEST["j"];
			$h = $_REQUEST["h"];
			
			$recherche = ModelEmployer::select($ncin);
			if($recherche==null){
				$u = new ModelEmployer($ncin, $n, $p,$d,$j,$h) ;	
				$tab = array(
				"EMPncin" => $ncin,
                "EMPnom" => $n;
                "EMPprenom" => $p;
                "EMPdate_naissance"=> $d;
                "job" => $j;
                "hire_date"=>$h;
				);				
				$u->insert($tab);
				$pagetitle = "Employeur Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
		if(isset($_REQUEST['EMPncin'])){
			$ncin = $_REQUEST['EMPncin'];
			$up = ModelEmployer::select($ncin);
			if($up!=null){
				$pagetitle = "Modifier l'employeur";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['ncin']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])
		&& isset($_REQUEST['d'])&& isset($_REQUEST['j'])&& isset($_REQUEST['h'])){
			$oldncin = $_REQUEST['ncin'];
			$tab = array(
                $ncin = $_REQUEST["ncin"];
                $n = $_REQUEST["n"];
                $p = $_REQUEST["p"];
                $d = $_REQUEST["d"];
                $j = $_REQUEST["j"];
                $h = $_REQUEST["h"];
   			 );
			$o = ModelEmployer::select($oldncin);
			if($o!=null){
				$u = $o->update($tab, $oldncin);		
				$pagetitle = "Employeur modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>
