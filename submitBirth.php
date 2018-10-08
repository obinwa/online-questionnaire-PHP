<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
	$Alive = trim($_POST['Alive']); 
	$Twin = trim($_POST['Twin']); 
	$NameOfChild = trim($_POST['NameOfChild']);    
	$GenderOfChild = trim($_POST['GenderOfChild']);
    $DateOfBirth = trim($_POST['DateOfBirth']);
	$Age = trim($_POST['Age']);
    $ChildLivingWithYou = trim($_POST['ChildLivingWithYou']);	
	$next = trim($_POST['next']);//indicating the button clicked
	
	$sql = "INSERT INTO births(nameofchild, genderofchild, age, birth_status, life_status, dateofbirth, childlivingwithyou, h_id) VALUES (?,?,?,?,?,?,?,?)";	
   
        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($NameOfChild, $GenderOfChild, $Age,$Twin,$Alive, $DateOfBirth,$ChildLivingWithYou, $_SESSION['household_id']);

            // execute Query
            $stmt->execute($data);

				$_SESSION["errorType"] = "success";
				$_SESSION["errorMsg"] = " Records submitted successfully.";				

				if($next=='1'){
					echo "birthDetails.php"; //add more biths
				}else{
					echo "pregnancy.php";
				}
			 

			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
        	}		
 
}

?>