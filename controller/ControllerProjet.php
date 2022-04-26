<?php
$controller = "Projet";
require_once ("{$ROOT}{$DS}model{$DS}ModelProjet.php");

if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];
/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des projets ";
        $view = "readAll";
       	$tab_u = ModelProjet::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['Pid'])){
			$id = $_REQUEST['Pid'];
			$u = ModelProjet::select($id);
				if($u!=null){
					$pagetitle = "Details d'un projet'";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['Pid'])){
			$id = $_REQUEST['Pid'];
			$del = ModelProjet::select($id);
			if($del!=null){
			$del->delete($id);
			header('Location: index.php?controller=Projet&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer un projet";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['Pid']) && isset($_REQUEST['n']) && isset($_REQUEST['resp']) && isset($_REQUEST['s_d'])
		&& isset($_REQUEST['e_d']) ){
			$id   = $_REQUEST["Pid"];
			$n    = $_REQUEST["n"];
            $resp = $_REQUEST["resp"];
			$s_d  = $_REQUEST["s_d"];
			$e_d  = $_REQUEST["e_d"];

			$recherche = ModelProjet::select($id);
			if($recherche==null){
				$u = new ModelProjet($id, $n, $resp, $s_d,$e_d) ;	
				$tab = array(
				"Pid" => $id,
                "Pnom" => $n;
                "resp" => $resp;
                "start_date"=> $s_d;
                "end_date"=>$e_d;
				);				
				$u->insert($tab);
				$pagetitle = "Projet Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
		if(isset($_REQUEST['Pid'])){
			$id = $_REQUEST['Pid'];
			$up = ModelProjet::select($id);
			if($up!=null){
				$pagetitle = "Modifier un projet";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
		if(isset($_REQUEST['Pid']) && isset($_REQUEST['n']) && isset($_REQUEST['resp']) && isset($_REQUEST['s_d'])
		&& isset($_REQUEST['e_d']) ){
			$oldid = $_REQUEST['Pid'];
			$tab = array(
                $id = $_REQUEST["Pid"];
                $n  = $_REQUEST["n"];
                $resp  = $_REQUEST["resp"];
                $s_d  = $_REQUEST["s_d"];
                $e_d  = $_REQUEST["e_d"];
   			 );
			$o = ModelProjet::select($oldid);
			if($o!=null){
				$u = $o->update($tab, $oldid);		
				$pagetitle = "Projet modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>