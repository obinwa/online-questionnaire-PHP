<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");	
} elseif ((!isset($_SESSION["household_id"]) || $_SESSION["household_id"] == "") || (!isset($_SESSION["v_id"])||$_SESSION["v_id"]="")) {
	redirect("household_schedule.php");		
}

if (!empty($_POST)) {
	$lga = trim($_POST['lga']);
    $locality = trim($_POST['locality']);
	$street = trim($_POST['street']);
	$longtitude = trim($_POST['longtitude']);
	$latitude = trim($_POST['latitude']);
    $hh_name = trim($_POST['hh_name']);
	$hh_num = trim($_POST['hh_num']);
    $q_lang = trim($_POST['q_lang']);
	$i_lang = trim($_POST['i_lang']);
    $i_add_info = trim($_POST['i_add_info']);
	$r_lang = trim($_POST['r_lang']);
    $r_add_info = trim($_POST['r_add_info']);
	$translator = trim($_POST['translator']);
    $consented = trim($_POST['consented']);

    if ($lga == "" || $locality == ""|| $street == ""|| $hh_name == ""|| $hh_num == ""|| $q_lang == ""|| $i_lang == ""|| $r_lang == ""|| $translator == ""|| $consented == "") {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Enter manadatory fields";
    } else {
        $sql1 = "INSERT INTO household (a_id, h_street, longtitude, latitude, h_headname, h_gno, questionnaire_lang, interview_lang, il_add_info, native_lang, nl_add_info, translator, consented, u_email) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";

        try {
            $stmt1 = $DB->prepare($sql1);
			
			$data = array($locality, $street, $longtitude, $latitude, $hh_name, $hh_num, $q_lang, $i_lang, $i_add_info, $r_lang, $r_add_info, $translator, $consented, $_SESSION["user_id"]);

            // execute Query
            $stmt1->execute($data);
			
			echo"got here1";
       
			
		try {       
			$sql2="SELECT h_id, h_gno, h_headname, consented FROM household WHERE a_id=? AND h_street=? AND h_headname=? AND h_gno=? AND consented=?";
			
			$stmt2 = $DB->prepare($sql2);			
				// bind the values
               	$stmt2->bindValue(1, $locality);
               	$stmt2->bindValue(2, $street);
				$stmt2->bindValue(3, $hh_name);
               	$stmt2->bindValue(4, $hh_num);
				$stmt2->bindValue(5, $consented);
				
			$stmt2->execute();
			echo"got here2";
			$results = $stmt2->fetchAll();

            if (count($results) > 0) {
				$cons = $results[0]["consented"];
				if($cons>="1"){				
				
						$h_id = $results[0]["h_id"];				
					
						try {
								$sql3 = "INSERT INTO visits (h_id, u_email, v_no) VALUES(?,?,?) ";
								$stmt3 = $DB->prepare($sql3);
								$v_no =1;//when an household is created, it automatically means that is the first visit
								$data = array($h_id, $_SESSION["user_id"], $v_no);

								// execute Query
								$stmt3->execute($data); 
							echo"got here3";
								try {       
										$sql4="SELECT v_id, h_id, v_no FROM visits WHERE h_id=? AND u_email=? AND v_no=?";

										$stmt4 = $DB->prepare($sql4);			
											// bind the values
											$stmt4->bindValue(1, $h_id);
											$stmt4->bindValue(2, $_SESSION["user_id"]);
											$stmt4->bindValue(3, $v_no);

										$stmt4->execute();
										$results = $stmt4->fetchAll();
										echo"got here4";

										if (count($results) > 0) {				
													$_SESSION["household_id"] = $results[0]["h_id"];
													$_SESSION["v_id"] = $results[0]["v_id"];
													$_SESSION["v_no"] = $v_no;									
													$_SESSION["errorType"] = "success";
													$_SESSION["errorMsg"] = "Data successfully inserted and visit info correctly set.";
													echo "household_schedule.php";
												}else{ 
													$_SESSION["errorType"] = "warning";
													$_SESSION["errorMsg"] = "Something went wrong! Visit information could not be set for current session. No active interview session set.";         

													echo "new_interview.php";													
												}

										}catch (Exception $ex) {
											$_SESSION["errorType"] = "danger";
											$_SESSION["errorMsg"] = $ex->getMessage();//Something went wrong! Visit information could not be set for current session. No active interview session set.
										}
							
							} catch (Exception $ex) {
								$_SESSION["errorType"] = "danger";
								$_SESSION["errorMsg"] = $ex->getMessage();//Visit information could not be inserted.
							}
					}elseif($cons=="0"){ 
						$_SESSION["errorType"] = "warning";
						$_SESSION["errorMsg"] = "Respondent did not consent but household information is successfully inserted.";									echo "new_interview.php";
					}
            } else {
				$_SESSION["errorType"] = "info";
                $_SESSION["errorMsg"] = "household does not yet exist in the database.";  
				echo "new_interview.php";
			}
			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
            	$_SESSION["errorMsg"] = $ex->getMessage();//Not able to set this created household as the current interview household.
        	}
			
        } catch (Exception $ex) {			
            $_SESSION["errorType"] = "danger";
            $_SESSION["errorMsg"] = $ex->getMessage();//Something went wrong! The household could not be created. Try creating a new interview.
        }
    }
    
}


?>