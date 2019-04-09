<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}
//if(isset($_SESSION["household_id"]) && isset($_SESSION["v_id"])){
if (!empty($_POST)) {
	$IRS_Spraying = trim($_POST['IRS_Spraying']); 
	$HeardOf_IndoorSpraying = trim($_POST['HeardOf_IndoorSpraying']); 
	$SprayedHome_SinceLastYear = trim($_POST['SprayedHome_SinceLastYear']);    
	$WhoSprayed = trim($_POST['WhoSprayed']);
    $Indoor_SprayPesticide = trim($_POST['Indoor_SprayPesticide']);
	$Reason_SprayingPesticide = trim($_POST['Reason_SprayingPesticide']);
    $GovernmentSprayHouse = trim($_POST['GovernmentSprayHouse']);
	$Nogov_spray = trim($_POST['Nogov_spray']);	
	$Reason_NotSprayingPesticide = trim($_POST['Reason_NotSprayingPesticide']);
	
	
	$otherSprayer="";$otherReason_SprayingPesticide="";$otherReason_NotSprayingPesticide="";$otherReason_gov_spray="";
	
	if(isset($_POST['otherSprayer'])){
		$otherSprayer = trim($_POST['otherSprayer']);
	}
	
	if(isset($_POST['otherReason_SprayingPesticid'])){
		$otherReason_SprayingPesticide = trim($_POST['otherReason_SprayingPesticid']);
	}
	
	if(isset($_POST['otherReason_NotSprayingPesticide'])){
		$otherReason_NotSprayingPesticide= trim($_POST['otherReason_NotSprayingPesticide']);
	}
	if(isset($_POST['otherReason_gov_spray'])){
		$otherReason_gov_spray = trim($_POST['otherReason_gov_spray']);
	}
	
$sql = "INSERT INTO irspray (irs_spraying, sprayedsince, sprayedby, irs_pesticide, reasonsprayp, otherreasonsprayp, othersprayer, govtspray, nogovtspray, reasonnotspray, otherreasonnotspray, otherreasongovtspray, heardIRS, h_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)"; 
        
        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($IRS_Spraying, $SprayedHome_SinceLastYear, $WhoSprayed, $Indoor_SprayPesticide, $Reason_SprayingPesticide,$otherReason_SprayingPesticide, $otherSprayer, $GovernmentSprayHouse, $Nogov_spray, $Reason_NotSprayingPesticide,$otherReason_NotSprayingPesticide, $otherReason_gov_spray,$HeardOf_IndoorSpraying, $_SESSION['household_id']);

            // execute Query
            $stmt->execute($data);	
			$_SESSION["errorType"] = "success";
			$_SESSION["errorMsg"] = "Record successfully submitted."; 

			echo "woman_respondent.php"; //Go to woman interview
			
			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
        	}		
 
}

?>