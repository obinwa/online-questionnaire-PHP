<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
    $h_id = trim($_POST['household']);
	$v_num = trim($_POST['v_num']);
	 $sql = "INSERT INTO visits (h_id, u_email, v_no) VALUES(?,?,?) ";

        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($h_id, $_SESSION["user_id"],$v_num);

            // execute Query
            $stmt->execute($data); 
			
			try {       
			//$sql2="SELECT v_id, h_id max(v_no) FROM visits WHERE h_id=? AND u_email=?";
			$sql2="SELECT v_id, h_id FROM visits WHERE h_id=? AND u_email=? AND v_no=?";
			$stmt2 = $DB->prepare($sql2);			
				// bind the values
               	$stmt2->bindValue(1, $h_id);
               	$stmt2->bindValue(2, $_SESSION["user_id"]);
				$stmt2->bindValue(3, $v_num);
								
			$stmt2->execute();
			$results = $stmt2->fetchAll();

            if (count($results) > 0) {				
						$_SESSION["household_id"] = $results[0]["h_id"];
						$_SESSION["v_id"] = $results[0]["v_id"];
						$_SESSION["v_no"] = $v_num;
						$_SESSION["errorType"] = "success";
						$_SESSION["errorMsg"] = "Visit successfully set.";                 

						//redirect("household_schedule.php");
					echo "household_schedule.php";
					
						exit;
					}else{ 
						$_SESSION["errorType"] = "warning";
						$_SESSION["errorMsg"] = "Something went wrong! May be household does not exist.";                 

						echo "new_interview.php";
						exit;
					}
           
			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = $ex->getMessage();
        	}
			
        } catch (Exception $ex) {
			//echo $ex->getMessage();
            $_SESSION["errorType"] = "danger";
            $_SESSION["errorMsg"] = $ex->getMessage();
        }

}
?>