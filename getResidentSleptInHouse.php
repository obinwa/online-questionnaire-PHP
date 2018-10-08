<?php

require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}
//if (!empty($_POST)) {
	//$h_id = trim($_POST['locality']);	
    $sql = "SELECT r_id, name FROM resident WHERE h_id =? AND slept_in = 'Yes'";

            try {
                $stmt = $DB->prepare($sql);
				$stmt->bindValue(1, $_SESSION["household_id"]);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();
				if (count($results) > 0) {
				$out = "<label for='SleptInNet' class='col-sm-4 control-label'>Select all the people that slept under this net:</label>
					<div class='col-sm-8'>";
				foreach($results as $result){  
                 $out .= "<label class='checkbox-inline'><input type='checkbox' name='rSleptLN' value='".$result["r_id"]."'>".$result["name"]."</label>";
						
                    }					
					echo $out;
				}
                } catch (Exception $ex) {
                $_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = $ex->getMessage();
            }





?>