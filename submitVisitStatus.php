<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
    $v_status = trim($_POST['v_status']);
	$ov_add_info = trim($_POST['ov_add_info']);
	
	//$sql = "UPDATE visits SET v_status = :v_st, v_addinfo = :ov_add_info WHERE h_id = :h_id AND v_id = :v_id AND v_no = :v_no";
	
	 $sql = "UPDATE visits SET v_status=?, v_addinfo=? WHERE h_id=? AND v_id=? AND v_no=?";
	//echo $_SESSION["household_id"]." ".$_SESSION["v_id"]." ".$_SESSION["v_no"];

        try {
            $stmt = $DB->prepare($sql);
			
			//bind values
		/*	$stmt->bindValue(":v_st", $v_status);
            $stmt->bindValue(":ov_addinfo", $ov_add_info);
			$stmt->bindValue(":h_id", $_SESSION["household_id"]);
			$stmt->bindValue(":v_id", $_SESSION["v_id"]);
			$stmt->bindValue(":v_no", $_SESSION["v_no"]);
			*/
			$stmt->bindValue(1, $v_status);
            $stmt->bindValue(2, $ov_add_info);
			$stmt->bindValue(3, $_SESSION["household_id"]);
			$stmt->bindValue(4, $_SESSION["v_id"]);
			$stmt->bindValue(5, $_SESSION["v_no"]);
			
			// execute Query
            $stmt->execute();
			
			unset($_SESSION["household_id"]);
			unset($_SESSION["v_id"]);
			unset($_SESSION["v_no"]);		
					
			$_SESSION["errorType"] = "success";
			$_SESSION["errorMsg"] = "Visit status updated successfully.";
			
			echo "new_interview.php";
			
			} catch (Exception $ex) {
				//echo $ex->getMessage();
				$_SESSION["errorType"] = "danger";
				$_SESSION["errorMsg"] = $ex->getMessage();
			}

}
?>