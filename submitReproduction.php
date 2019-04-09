<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
	
	$GivenBirth = trim($_POST['GivenBirth']);
	$LivingWithSomeChildren = trim($_POST['LivingWithSomeChildren']);
	$NumberOfSons =trim($_POST['NumberOfSons']);
	$NumberOfDaughters = trim($_POST['NumberOfDaughters']);
	$ChildrenAliveButNotLivingWithYou =trim($_POST['ChildrenAliveButNotLivingWithYou']);
	$SonsAliveButNotLivingWithYou = trim($_POST['SonsAliveButNotLivingWithYou']);
	$DaughterAliveButNotLivingWithYou = trim($_POST['DaughterAliveButNotLivingWithYou']);
	$DidChildDie = trim($_POST['DidChildDie']);
	$NumDeadBoys = trim($_POST['NumDeadBoys']);
	$NumDeadGirls = trim($_POST['NumDeadGirls']);
	$RecentBirths = trim($_POST['RecentBirths']);
	$Pregnant=trim($_POST['Pregnant']);
	$NumberOfMonthsPregnant=trim($_POST['NumberOfMonthsPregnant']);	
	
	$sql ="INSERT INTO reproduction (givenbirth, livingwithchildren, numsons, numdaughters, childrenANLWY, numsonsANLWY, numdaughtersANLWY, childdie, numdeadboys, numdeadgirls, numrecentbirths, pregnant, nummonthspreg, h_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";	
	  
        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($GivenBirth, $LivingWithSomeChildren, $NumberOfSons,$NumberOfDaughters,$ChildrenAliveButNotLivingWithYou, $SonsAliveButNotLivingWithYou,$DaughterAliveButNotLivingWithYou,$DidChildDie,$NumDeadBoys,$NumDeadGirls, $RecentBirths, $Pregnant, $NumberOfMonthsPregnant, $_SESSION['household_id']);

            // execute Query
            $stmt->execute($data);

				$_SESSION["errorType"] = "success";
				$_SESSION["errorMsg"] = " Records submitted successfully.";				

				echo "birthDetails.php";
				
			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
				
				echo $ex->getMessage();
        	}		
 
}

?>