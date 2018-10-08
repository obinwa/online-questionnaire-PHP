<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {
	$Child = trim($_POST['Child']);
	$BeenIll = trim($_POST['BeenIll']); 
	$MalariaSuspicion = trim($_POST['MalariaSuspicion']); 
	$BloodTest = trim($_POST['BloodTest']);    
	$TestedForMalaria = trim($_POST['TestedForMalaria']);
    $Malariatest = trim($_POST['Malariatest']);
	$MalariatestReport = trim($_POST['MalariatestReport']);
    $AdviceForTreatment = trim($_POST['AdviceForTreatment']);
	
	$SoughtTreatment = trim($_POST['SoughtTreatment']); 
	$SoughtOther = trim($_POST['SoughtOther']); 
	$SoughtOtherMedicalSources = trim($_POST['SoughtOtherMedicalSources']);    
	$FirstseekTreatment = trim($_POST['FirstseekTreatment']);
    $OtherFSeekTreatment = trim($_POST['OtherFSeekTreatment']);
	$DelayBeforeSeekingAdvice = trim($_POST['DelayBeforeSeekingAdvice']);
    $radioTakeMedicine = trim($_POST['radioTakeMedicine']);
	
	$Mediation = trim($_POST['Mediation']); 
	$TimeBeforeTakngFansidar = trim($_POST['TimeBeforeTakngFansidar']); 
	$TimeBeforeTakngChloroquine = trim($_POST['TimeBeforeTakngChloroquine']);    
	$TimeBeforeTakngAmodiaquinie = trim($_POST['TimeBeforeTakngAmodiaquinie']);
    $TimeBeforeTakngArtesunate = trim($_POST['TimeBeforeTakngArtesunate']);
	$TimeBeforeTakngQuinie = trim($_POST['TimeBeforeTakngQuinie']);
    $TimeBeforeTakngACT = trim($_POST['TimeBeforeTakngACT']);
	
	$OtherMedications = trim($_POST['OtherMedications']);
    $TimeBeforeTakngOtherAntimalaria = trim($_POST['TimeBeforeTakngOtherAntimalaria']);
	
	$next = trim($_POST['next']);//indicating the button clicked
	
	
	$sql = "INSERT INTO fever_children (r_id,ill, malariasuspicion, bloodtest, tested4malaria, malariatest, mtestreport, advice4treatment, soughttreatment, soughtother, soughtothermedsources, firstseektreatment, otherseektreatment, delayb4seekingadvice, takemedicine, mediation, tb4fansidar, tb4chloroquine, tb4amodiaquinie, tb4artesunate, tb4quinie, tb4ACT, othermedications, tb4otherantimalaria, h_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";	
   
        try {
            $stmt = $DB->prepare($sql);
			
			$data = array($Child,$BeenIll,$MalariaSuspicion,$BloodTest,$TestedForMalaria,$Malariatest,$MalariatestReport,$AdviceForTreatment,$SoughtTreatment,$SoughtOther, $SoughtOtherMedicalSources, $FirstseekTreatment, $OtherFSeekTreatment, $DelayBeforeSeekingAdvice,$radioTakeMedicine,$Mediation,$TimeBeforeTakngFansidar,$TimeBeforeTakngChloroquine,$TimeBeforeTakngAmodiaquinie,$TimeBeforeTakngArtesunate,$TimeBeforeTakngQuinie,$TimeBeforeTakngACT,$OtherMedications,$TimeBeforeTakngOtherAntimalaria, $_SESSION['household_id']);

            // execute Query
            $stmt->execute($data);

				$_SESSION["errorType"] = "success";
				$_SESSION["errorMsg"] = " Records submitted successfully.";				

				if($next=='1'){
					echo "feverChildren.php"; //add more biths
				}else{
					echo "malariaKnowledge.php";
				}
			 

			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = "Something went wrong. Records not submitted".$ex->getMessage();
        	}		
 
}

?>