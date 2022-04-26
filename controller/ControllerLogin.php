<?php
$controller = "Login";
require_once ("{$ROOT}{$DS}model{$DS}ModelLogin.php");

if(isset($_REQUEST['action']))	

	$action = $_REQUEST['action'];
/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des Login ";
        $view = "readAll";
       	$tab_u = ModelLogin::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;

	case "read":	
		if(isset($_REQUEST['Lid'])){
			$id = $_REQUEST['Lid'];
			$u = ModelLogin::select($id);
				if($u!=null){
					$pagetitle = "Details d'une connexion'";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['Lid'])){
			$id = $_REQUEST['Lid'];
			$del = ModelLogin::select($id);
			if($del!=null){
			$del->delete($id);
			header('Location: index.php?controller=Login&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Enregistrer une connection";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
		if(isset($_REQUEST['Lid']) && isset($_REQUEST['Username']) && isset($_REQUEST['Pwd']) && isset($_REQUEST['Date'])   ){
			$id  = $_REQUEST["Lid"];
			$username = $_REQUEST["Username"];
            $Pwd = $_REQUEST["Pwd"];
            $Date = $_REQUEST["Date"];

			$recherche = ModelLogin::select($id);
			if($recherche==null){
				$u = new ModelLogin($id, $Username, $Pwd) ;	
				$tab = array(
				"Lid" => $id,
                "Username" => $Username;
                "Pwd" => $Pwd;
                "Date" => $Date;
				);				
				$u->insert($tab);
				$pagetitle = "Login Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
		if(isset($_REQUEST['Lid'])){
			$id = $_REQUEST['Lid'];
			$up = ModelLogin::select($id);
			if($up!=null){
				$pagetitle = "Modifier un login";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
        if(isset($_REQUEST['Lid']) && isset($_REQUEST['Username']) && isset($_REQUEST['Pwd']) && isset($_REQUEST['Date'])   ){
			$oldid = $_REQUEST['Lid'];
			$tab = array(
                $id  = $_REQUEST["Lid"];
                $username = $_REQUEST["Username"];
                $Pwd = $_REQUEST["Pwd"];
                $Date = $_REQUEST["Date"];
   			 );
			$o = ModelLogin::select($oldid);
			if($o!=null){
				$u = $o->update($tab, $oldid);		
				$pagetitle = "Login modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}
?>