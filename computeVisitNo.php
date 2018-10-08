<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
    $h_id = trim($_POST['household']);
	
       try {       
			//$sql2="SELECT v_id, h_id max(v_no) FROM visits WHERE h_id=? AND u_email=?";
			$sql2="SELECT max(v_no) AS max FROM visits WHERE h_id=? AND u_email=?";
			$stmt2 = $DB->prepare($sql2);			
			// bind the values
            $stmt2->bindValue(1, $h_id);
            $stmt2->bindValue(2, $_SESSION["user_id"]);				
								
			$stmt2->execute();
			$results = $stmt2->fetchAll();

            if (count($results) > 0) {				
					
				echo $results[0]["max"];
					
				}else{ 
						exit;
					}
           
			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = $ex->getMessage();
        	}
			
       
}
?>