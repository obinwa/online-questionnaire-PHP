<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
	$IdOfChild = trim($_POST['IdOfChild']);	
	$AgeOfChild = trim($_POST['AgeOfChild']); 
	$Body_Weight = trim($_POST['Body_Weight']); 
	$AuxTemp = trim($_POST['AuxTemp']); 
	$Height = trim($_POST['Height']); 
	$studyNumber = trim($_POST['studyNumber']); 
	$ParasiteDensity = trim($_POST['ParasiteDensity']); 
	$ParasiteSpecies = trim($_POST['ParasiteSpecies']); 	
	$ParasiteStage = trim($_POST['ParasiteStage']); 	
	$Illness_Symptoms = trim($_POST['Illness_Symptoms']);	
	$AnaemiaConsent = trim($_POST['AnaemiaConsent']); 
	$MalariaConsent = trim($_POST['MalariaConsent']); 
	$HemoglibinLevel = trim($_POST['HemoglibinLevel']); 
	$MalariaRDT_Code = trim($_POST['MalariaRDT_Code']); 
	$MalariaRDT_Result = trim($_POST['MalariaRDT_Result']); 
	$MalariaMicroscopy = trim($_POST['MalariaMicroscopy']); 
	$ParasiteCount = trim($_POST['ParasiteCount']); 
	$TakenMedication_L2weeks = trim($_POST['TakenMedication_L2weeks']); 
	$Accepted_Medication = trim($_POST['Accepted_Medication']); 
	$Prescription = trim($_POST['Prescription']); 
	$next = trim($_POST['next']);//indicating the button clicked
	
	
	
	
	$sql = "INSERT INTO biomarker (r_id, ageofchild, weight, auxtemp, height, studynumber, parasitedensity, parasitespecies, parasitestage, illnesssymptoms, anaemiaconsent, malariaconsent,heamoglobin, malariaRDTcode, malariaRDTresult, malariamicroscopy, parasitecount, takenmedicationl2weeks, acceptedmedication, precription, u_email, h_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";	
   
        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($IdOfChild,$AgeOfChild,$Body_Weight,$AuxTemp,$Height,$studyNumber,$ParasiteDensity,$ParasiteSpecies,$ParasiteStage,$Illness_Symptoms,$AnaemiaConsent,$MalariaConsent,$HemoglibinLevel,$MalariaRDT_Code,$MalariaRDT_Result,$MalariaMicroscopy,$ParasiteCount,$TakenMedication_L2weeks,$Accepted_Medication,$Prescription,$_SESSION["user_id"],$_SESSION["household_id"]);

            // execute Query
            $stmt->execute($data);

				$_SESSION["errorType"] = "success";
				$_SESSION["errorMsg"] = " Records submitted successfully.";				

				if($next=='1'){
					echo "biomarker.php"; //add more biths
				}else{
					echo "set_visit_status.php";
				}
			 

			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
			echo $ex->getMessage();
        	}		
 
}

?>