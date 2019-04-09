<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
	$NameRecentBirth = trim($_POST['NameRecentBirth']); 
	$AntenatalCare = trim($_POST['AntenatalCare']); 
	$Sec3HealthPersonnel = trim($_POST['Sec3HealthPersonnel']);    
	$OtherMedicalPractitioner = trim($_POST['OtherMedicalPractitioner']);
    $FansidarDuringPregnancy = trim($_POST['FansidarDuringPregnancy']);
	$FrequencyOfFansidar = trim($_POST['FrequencyOfFansidar']);
    $FansidarSource = trim($_POST['FansidarSource']);	
	$AntenatalNet = trim($_POST['AntenatalNet']);
	$next = trim($_POST['next']);
	
	$sql = "INSERT INTO pregnancy (namerecentbirth, antenatalcare, healthpersonnel, othermedicalpract, fansidarduringpreg, fansidarfrequency, fansidarsource, antenatalnet, h_id) VALUES (?,?,?,?,?,?,?,?,?)";	
   
        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($NameRecentBirth, $AntenatalCare, $Sec3HealthPersonnel, $OtherMedicalPractitioner,$FansidarDuringPregnancy,$FrequencyOfFansidar,$FansidarSource,$AntenatalNet, $_SESSION['household_id']);

            // execute Query
            $stmt->execute($data);

				$_SESSION["errorType"] = "success";
				$_SESSION["errorMsg"] = "Records submitted successfully.";				

				if($next=='1'){
					echo "pregnancy.php"; //add more biths
				}else{
					echo "feverChildren.php";
				}
							 

			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
				//echo $ex->getMessage();
        	}		
 
}

?>