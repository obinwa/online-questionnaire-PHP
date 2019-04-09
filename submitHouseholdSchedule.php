<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}
//if(isset($_SESSION["household_id"]) && isset($_SESSION["v_id"])){
if (!empty($_POST)) {
	$name = trim($_POST['Name']);
    $night = trim($_POST['rNight']);	
    $school = trim($_POST['rSchool']);
	$pregnant = trim($_POST['rPregnant']);
    $residency = trim($_POST['rResidency']);
	$sex = trim($_POST['rSex']);
    $age = trim($_POST['Age']);
	$rel = trim($_POST['Relationship']);
	$sick = trim($_POST['rSick']);
	$next = trim($_POST['next']);//indicating the button clicked
	$grade="";$degree="";$treatment="";$treatmentPlace="";$cost="";
	
	if(isset($_POST['Grade'])){
		$grade = trim($_POST['Grade']);
	}
	
	if(isset($_POST['Degree'])){
		$degree = trim($_POST['Degree']);
	}
	
	if(isset($_POST['rTreatment'])){
		$treatment = trim($_POST['rTreatment']);
	}
	if(isset($_POST['TreatmentPlace'])){
		$treatmentPlace = trim($_POST['TreatmentPlace']);
	}
	if(isset($_POST['rCost'])){
		$cost = trim($_POST['rCost']);
	}    

  /*  if ($lga == "" || $locality == ""|| $street == ""|| $hh_name == ""|| $hh_num == ""|| $q_lang == ""|| $i_lang == ""|| $r_lang == ""|| $translator == ""|| $consented == "") {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Enter manadatory fields";
    } else {*/
        $sql = "INSERT INTO resident (name, rel, sex, usual_res, slept_in, age, attended_school, pregnant, edu_level, grade, has_fever, treated, treatment_source, treatment_cost, h_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($name, $rel, $sex, $residency, $night, $age, $school, $pregnant, $degree, $grade, $sick, $treatment, $treatmentPlace, $cost, $_SESSION["household_id"]);

            // execute Query
            $stmt->execute($data);
			$_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Records submitted successfully.";
			if($next=='1'){
				echo "household_schedule.php"; //add more residents
			}else{
				echo "household_characteristics.php";
			}
			 

			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
        	}		
      
    //}
    //echo "new_interview.php";
}

/*}else{
	$_SESSION["errorType"] = "warning";
    $_SESSION["errorMsg"] = "No household interview is active. Either create a new interview or resume a previous interview."
	
}*/


?>