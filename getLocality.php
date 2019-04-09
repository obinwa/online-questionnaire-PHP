<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}
if (!empty($_POST)) {
	$lga = trim($_POST['lga']);	
 $sql = "SELECT a_id, locality FROM locality WHERE lga_code =?";
	
	$out= "<option value=''></option>";
	
            try {
                $stmt = $DB->prepare($sql);
				$stmt->bindValue(1, $lga);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();
				foreach($results as $result){  
                        $out .= "<option value='".$result["a_id"]."'>".$result["locality"]."</option>";    
                    }                       
                } catch (Exception $ex) {
                $_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = $ex->getMessage();
            }
	echo $out;
}

?>