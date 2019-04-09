<?php

require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}
//if (!empty($_POST)) {
	//$h_id = trim($_POST['locality']);	
    $sql = "SELECT name FROM resident WHERE h_id =?";

            try {
                $stmt = $DB->prepare($sql);
				$stmt->bindValue(1, $_SESSION["household_id"]);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();
				foreach($results as $result){  
                        echo "<input class='form-control' type='checkbox' name='rSleptLN' value='".$result["name"]."'>".$result["name"];             
                    }                       
                } catch (Exception $ex) {
                $_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = $ex->getMessage();
            }





?>