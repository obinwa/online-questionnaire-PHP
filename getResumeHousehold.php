<?php

require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}
if (!empty($_POST)) {
	$locality = trim($_POST['locality']);	
    $sql = "SELECT DISTINCT household.h_id, household.h_headname, household.h_gno FROM household, visits WHERE household.a_id =? AND household.u_email = ? AND visits.v_status<>'1' AND household.h_id=visits.h_id";

            try {
                $stmt = $DB->prepare($sql);
				$stmt->bindValue(1, $locality);
				$stmt->bindValue(2, $_SESSION["user_id"]);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();
				echo "<option value=''></option>";
                foreach($results as $result){  
                        echo "<option value='".$result["h_id"]."'>".$result["h_gno"]."_".$result["h_headname"]."</option>";                   
                    }                       
                } catch (Exception $ex) {
                $_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = $ex->getMessage();
            }
}
?>