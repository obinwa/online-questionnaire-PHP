<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

//if (!empty($_POST)) {
	$hadMalaria=trim($_POST['hadMalaria']);
	$Malaria_Symptoms=trim($_POST['Malaria_Symptoms']);
	$OtherSymptoms=trim($_POST['OtherSymptoms']);
	$Malaria_Risks=trim($_POST['Malaria_Risks']);
	$Causes_Malaria=trim($_POST['Causes_Malaria']);
	$WaysOfAvoidingMalaria=trim($_POST['WaysOfAvoidingMalaria']);
	$Malaria_Avoidance=trim($_POST['Malaria_Avoidance']);
	$Malaria_Prevention=trim($_POST['Malaria_Prevention']);
	$OtherMalaria_Prevention=trim($_POST['OtherMalaria_Prevention']);
	$OtherMalaria_Avoidance=trim($_POST['OtherMalaria_Avoidance']);
	$Malaria_PregPrevention=trim($_POST['Malaria_PregPrevention']);
	$OtherMalaria_PregPrevention=trim($_POST['OtherMalaria_PregPrevention']);
	$MalariaTreatable=trim($_POST['MalariaTreatable']);
	$MalariaMedications=trim($_POST['MalariaMedications']);
	$Child_MalariaMedications=trim($_POST['Child_MalariaMedications']);
	$OtherChild_MalariaMedications=trim($_POST['OtherChild_MalariaMedications']);
	$SeenMalariaMessage=trim($_POST['SeenMalariaMessage']);
	$OtherMalariaMessage=trim($_POST['OtherMalariaMessage']);
	$MalariaMessage=trim($_POST['MalariaMessage']);
	$seeMalaria_Message=trim($_POST['seeMalaria_Message']);
	$OtherseeMalaria_Message=trim($_POST['OtherseeMalaria_Message']);
	$Chances_Of_Malaria=trim($_POST['Chances_Of_Malaria']);
	$MedicineWorksWellForPregnantWomen=trim($_POST['MedicineWorksWellForPregnantWomen']);
	$MalariaTests = trim($_POST['MalariaTests']);
	$ACTsWorksWell=trim($_POST['ACTsWorksWell']);
	$SleptInNet=trim($_POST['SleptInNet']);
	$Encouragement_SleepInNet=trim($_POST['Encouragement_SleepInNet']);
	$OtherEncouragement_SleepInNet=trim($_POST['OtherEncouragement_SleepInNet']);
	$NetColour=trim($_POST['NetColour']);
	$OtherNetColour=trim($_POST['OtherNetColour']);
	$ChoiceOfNetShape=trim($_POST['ChoiceOfNetShape']);
	$otherChoiceOfNetShape=trim($_POST['otherChoiceOfNetShape']);
	$NetSize=trim($_POST['$NetSize']);
	$otherNetSize=trim($_POST['otherNetSizes']);
	$ChoiceNetSize=trim($_POST['ChoiceNetSize']);
	$OtherChoiceNetSize=trim($_POST['OtherChoiceNetSize']);
	
	
 $sql =	"INSERT INTO malaria_knowledge (hadmalaria, malariasymptoms, othersymptoms, malariarisk, malariacauses, waysavoidingmalaria, malariaavoidance, malariaprevention, othermalprevention, othermalavoidance, malariapregprevention, othermalpregprevention, malariatreatable, malariamedications, childmalmedications, otherchildmalmedications, seenmalariamsg, othermalariamsg, malariamsg, sourceseemalariamsg, othersourceseemalmsg, malariachances, medicineworkspregwomen, malariatest, ACTsworkswell, sleptinnet, encouragesleepnet, otherencouragesleepnet, netcolour, othernetcolour, choiceofnetshape, otherchoiceofnetshape, netsize, othernetsize, choicenetsize, otherchoicenetsize, h_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";	
   
  
	try {
            $stmt = $DB->prepare($sql);
			
			$data = array($hadMalaria,$Malaria_Symptoms,$OtherSymptoms,$Malaria_Risks,$Causes_Malaria,$WaysOfAvoidingMalaria,$Malaria_Avoidance,$Malaria_Prevention,$OtherMalaria_Prevention,$OtherMalaria_Avoidance,$Malaria_PregPrevention,$OtherMalaria_PregPrevention,$MalariaTreatable,$MalariaMedications,$Child_MalariaMedications,$OtherChild_MalariaMedications,$SeenMalariaMessage,	$OtherMalariaMessage,$MalariaMessage,$seeMalaria_Message,$OtherseeMalaria_Message,$Chances_Of_Malaria,$MedicineWorksWellForPregnantWomen,$MalariaTests,$ACTsWorksWell,$SleptInNet,	$Encouragement_SleepInNet,$OtherEncouragement_SleepInNet,$NetColour,$OtherNetColour,$ChoiceOfNetShape,$otherChoiceOfNetShape,$NetSize,$otherNetSize,$ChoiceNetSize,$OtherChoiceNetSize, $_SESSION['household_id']);   

            // execute Query
            $stmt->execute($data);

				$_SESSION["errorType"] = "success";
				$_SESSION["errorMsg"] = " Records submitted successfully.";			

					echo "biomarker.php"; 

			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
				
        	}		
 
//}

?>