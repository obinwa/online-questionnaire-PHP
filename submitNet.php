<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}
//if(isset($_SESSION["household_id"]) && isset($_SESSION["v_id"])){
if (!empty($_POST)) {
	$NetHoles = trim($_POST['NetHoles']); 
	$Hanging = trim($_POST['Hanging']); 
	$NetColour = trim($_POST['NetColour']);    
	$NetShape = trim($_POST['NetShape']);
    $NetSize = trim($_POST['NetSize']);
	$NetAge = trim($_POST['NetAge']);
    $HowGetetNet = trim($_POST['HowGetetNet']);
	$ObtainNet = trim($_POST['ObtainNet']);	
	$NetBrand = trim($_POST['NetBrand']);
	$SleptInNetLastNight = trim($_POST['SleptInNetLastNight']);
	$next = trim($_POST['next']);//indicating the button clicked
	
	$OtherNetColour="";$OtherNetShape="";$OtherNetSize="";$OtherNetAge="";$ReasonNoSleepInNet ="";$OtherReasonNoSleepInNet ="";$NetPrice="";$rSleptLN="";$NetOrigin="";    
	
	
	if(isset($_POST['OtherNetColour'])){
		$OtherNetColour = trim($_POST['OtherNetColour']);
	}
	
	if(isset($_POST['OtherNetShape'])){
		$OtherNetShape = trim($_POST['OtherNetShape']);
	}
	
	if(isset($_POST['OtherNetSize'])){
		$OtherNetSize = trim($_POST['OtherNetSize']);
	}
	if(isset($_POST['OtherNetAge'])){
		$OtherNetAge = trim($_POST['OtherNetAge']);
	}
	if(isset($_POST['ReasonNoSleepInNet'])){
		$ReasonNoSleepInNet = trim($_POST['ReasonNoSleepInNet']);
	}  
	if(isset($_POST['OtherReasonNoSleepInNet'])){
		$OtherReasonNoSleepInNet = trim($_POST['OtherReasonNoSleepInNet']);
	}
	if(isset($_POST['NetPrice'])){
		$NetPrice = trim($_POST['NetPrice']);
	}
	if(isset($_POST['rSleptLN'])){
		$rSleptLN = trim($_POST['rSleptLN']);
	} 
	if(isset($_POST['NetOrigin'])){
		$NetOrigin = trim($_POST['NetOrigin']);
	} 

 
        $sql = "INSERT INTO net (NetHoles, Hanging, NetColour, NetShape, NetSize, NetAge, HowGetetNet, ObtainNet, NetBrand, SleptInNetLastNight, OtherNetColour, OtherNetShape,OtherNetSize,OtherNetAge,ReasonNoSleepInNet,OtherReasonNoSleepInNet,NetPrice,rSleptLN, NetOrigin, h_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($NetHoles, $Hanging, $NetColour, $NetShape, $NetSize, $NetAge, $HowGetetNet, $ObtainNet, $NetBrand, $SleptInNetLastNight, $OtherNetColour, $OtherNetShape,$OtherNetSize,$OtherNetAge,$ReasonNoSleepInNet,$OtherReasonNoSleepInNet,$NetPrice,$rSleptLN, $NetOrigin, $_SESSION['household_id']);

            // execute Query
            $stmt->execute($data);

				$_SESSION["errorType"] = "success";
				$_SESSION["errorMsg"] = " Records submitted successfully.";				

				if($next=='1'){
					echo "net.php"; //add more nets
				}else{
					echo "woman_repondent.php";
				}
			 

			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
        	}		
 
}

?>