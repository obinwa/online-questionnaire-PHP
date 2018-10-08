<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
	
	
	$kDOB = trim($_POST['kDOB']); 
	$DateOfBirth = trim($_POST['DateOfBirth']); 
	$AgeInYears = trim($_POST['AgeInYears']);    
	$attendedSchool = trim($_POST['attendedSchool']);
    $SchoolLevel = trim($_POST['SchoolLevel']);
	$HighestLevelOfSchool = trim($_POST['HighestLevelOfSchool']);
    $ReadingTest = trim($_POST['ReadingTest']);	
	$OtherLanguage = trim($_POST['OtherLanguage']);
	$Religion = trim($_POST['Religion']);
    $OtherReligion = trim($_POST['OtherReligion']);	
	$EthnicGroup = trim($_POST['EthnicGroup']);
	
	$sql = "INSERT INTO woman_respondent (knowDOB, dateofbirth, age, attendedschool, schoollevel, highestlevelofschool, readingtest, otherlanguage, religion, otherreligion, ethnic, h_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";	
   
        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($kDOB, $DateOfBirth, $AgeInYears, $attendedSchool,$SchoolLevel,$HighestLevelOfSchool, $ReadingTest,$OtherLanguage,$Religion,$OtherReligion,$EthnicGroup, $_SESSION['household_id']);

            // execute Query
            $stmt->execute($data);

				$_SESSION["errorType"] = "success";
				$_SESSION["errorMsg"] = " Records submitted successfully.";			

				echo "reprodstart.php";		 

			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted".$ex->getMessage();
				echo $ex->getMessage();
        	}		
 
}

?>