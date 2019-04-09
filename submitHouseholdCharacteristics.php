<?php
require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

if (!empty($_POST)) {

$SourceOfDrinkingWater=trim($_POST['SourceOfDrinkingWater']);
$ToiletFacility=trim($_POST['ToiletFacility']);
$SharedToilet=trim($_POST['SharedToilet']);
$ToiletUse=trim($_POST['ToiletUse']);
$WaterSource=trim($_POST['WaterSource']);
$Time=trim($_POST['Time']);
$Electricity=trim($_POST['Electricity']);
$Radio=trim($_POST['Radio']);
$Television=trim($_POST['Television']);
$mPhone=trim($_POST['mPhone']);
$nonMPhone=trim($_POST['nonMPhone']);
$Refrigerator=trim($_POST['Refrigerator']);
$cableTV=trim($_POST['cableTV']);
$Generator=trim($_POST['Generator']);
$AirConditioner=trim($_POST['AirConditioner']);
$Computer=trim($_POST['Computer']);
$EIron=trim($_POST['EIron']);
$Fan=trim($_POST['Fan']);
$Fuel=trim($_POST['Fuel']);
$Other_Fuel=trim($_POST['Other_Fuel']);
$FloorMaterial=trim($_POST['FloorMaterial']);
$OtherFloorMaterial=trim($_POST['OtherFloorMaterial']);
$RoofMaterial=trim($_POST['RoofMaterial']);
$OtherRoofMaterial=trim($_POST['OtherRoofMaterial']);
$ExWallMaterial=trim($_POST['ExWallMaterial']);
$Other_ExWallMaterial=trim($_POST['Other_ExWallMaterial']);
$RoomNumber=trim($_POST['RoomNumber']);
$SleepRoomNum=trim($_POST['SleepRoomNum']);
$SleepFacility=trim($_POST['SleepFacility']);
$Watch=trim($_POST['Watch']);
$Phone=trim($_POST['Phone']);
$Bicycle=trim($_POST['Bicycle']);
$MotorCycle=trim($_POST['MotorCycle']);
$AnimalCart=trim($_POST['AnimalCart']);
$Car=trim($_POST['Car']);
$Boat=trim($_POST['Boat']);
$AgricLand=trim($_POST['AgricLand']);
$Number_PlotsOfLand=trim($_POST['Number_PlotsOfLand']);
$Number_HectaresOfLand=trim($_POST['Number_HectaresOfLand']);
$OwnAnimal=trim($_POST['OwnAnimal']);
$Milk_Cattle=trim($_POST['Milk_Cattle']);
$NumberOfMilkCattle=trim($_POST['NumberOfMilkCattle']);
$Other_Cattle=trim($_POST['Other_Cattle']);
$NumberOfOtherCattle=trim($_POST['NumberOfOtherCattle']);
$BeastOfBurden=trim($_POST['BeastOfBurden']);
$NumberOfBeastOfBurden=trim($_POST['NumberOfBeastOfBurden']);
$Goats=trim($_POST['Goats']);
$numberOfGoats=trim($_POST['numberOfGoats']);
$Sheep=trim($_POST['Sheep']);
$NumberOfSheep=trim($_POST['NumberOfSheep']);
$Chicken=trim($_POST['Chicken']);
$NumberOfChicken=trim($_POST['NumberOfChicken']);
$BankAccount=trim($_POST['BankAccount']);
$Fumigation=trim($_POST['Fumigation']);
$Fumigator=trim($_POST['Fumigator']);
$OtherFumigator=trim($_POST['OtherFumigator']);
$haveMNet=trim($_POST['haveMNet']);
$WhyNoNet=trim($_POST['WhyNoNet']);
$Other_WhyNoNet=trim($_POST['Other_WhyNoNet']);
$ownNet=trim($_POST['ownNet']);
$WhyLackNet=trim($_POST['WhyLackNet']);
$Other_WhyLackNet=trim($_POST['Other_WhyLackNet']);
$SleepInNet=trim($_POST['SleepInNet']);
$NumberOfPeople_SleptInNet=trim($_POST['NumberOfPeople_SleptInNet']);
$NumberOfChildrenUnder5_SleptInNet=trim($_POST['NumberOfChildrenUnder5_SleptInNet']);
$NumberOfAged5_12_SleptInNet=trim($_POST['NumberOfAged5_12_SleptInNet']);
$NumberOfPregWomen_SleptInNet=trim($_POST['NumberOfPregWomen_SleptInNet']);
$EncourageMentToSleepInNet=trim($_POST['EncourageMentToSleepInNet']);
$OtherEncouragementToSleepInNet=trim($_POST['OtherEncouragementToSleepInNet']);
$NetNumberForPreviousNight=trim($_POST['NetNumberForPreviousNight']);
$NetNumber=trim($_POST['NetNumber']);

	
 $sql = "INSERT INTO household_characteristics (sourcedrinkwater, toiletfacility, sharedtoilet, toiletuse, watersource, timetowatersource, electricity, radio, television, mobilephone, nonmobilephone, refrigerator, cabletv, generator, aircondition, computer, electriciron, fan, fuel, otherfuel, floormaterial, otherfloormaterial, roofmaterial, otherroofmaterial, exwallmaterial, otherexwallmaterial, roomnumber, sleeproomnum, sleepfacility, watch, phone, bicycle, motorcycle, animalcart, car, boat, agricland, numberplotsland, numberhectareland, ownanimals, milkcattle, nummilkcattle, othercattle, numothercattle, beastburden, numbeastburden, goats, numgoats, sheep, numsheep, chicken, numchicken, bankaccount, fumigation, fumigator, otherfumigator, havemosquitonets, whynonet, otherwhynonet, everownnet, whynomorenet, otherwhynomorenet, sleepinnet, numsleptinnet, childrenunder5sleptinnet, children5_12sleptinnet, pregwomensleptinnet, encouragesleepnet, otherencouragesleepnet, numnetlastnight, totalnumnet, h_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        try {
            $stmt = $DB->prepare($sql);
			
			$data=array($SourceOfDrinkingWater,$ToiletFacility,$SharedToilet,$ToiletUse,$WaterSource,$Time,$Electricity,$Radio,$Television,$mPhone,$nonMPhone,$Refrigerator,$cableTV,$Generator,$AirConditioner,$Computer,$EIron,$Fan,$Fuel,$Other_Fuel,$FloorMaterial,$OtherFloorMaterial,$RoofMaterial,$OtherRoofMaterial,$ExWallMaterial,$Other_ExWallMaterial,$RoomNumber,$SleepRoomNum,$SleepFacility,$Watch,$Phone,$Bicycle,$MotorCycle,$AnimalCart,$Car,$Boat,$AgricLand,$Number_PlotsOfLand,$Number_HectaresOfLand,$OwnAnimal,$Milk_Cattle,$NumberOfMilkCattle,$Other_Cattle,$NumberOfOtherCattle,$BeastOfBurden,$NumberOfBeastOfBurden,$Goats,$numberOfGoats,$Sheep,$NumberOfSheep,$Chicken,$NumberOfChicken,$BankAccount,$Fumigation,$Fumigator,$OtherFumigator,$haveMNet,$WhyNoNet,$Other_WhyNoNet,$ownNet,$WhyLackNet,$Other_WhyLackNet,$SleepInNet,$NumberOfPeople_SleptInNet,$NumberOfChildrenUnder5_SleptInNet,$NumberOfAged5_12_SleptInNet,$NumberOfPregWomen_SleptInNet,$EncourageMentToSleepInNet,$OtherEncouragementToSleepInNet,$NetNumberForPreviousNight,$NetNumber,$_SESSION["household_id"]);

            // execute Query
            $stmt->execute($data);
			$_SESSION["errorType"] = "success";
            $_SESSION["errorMsg"] = "Records submitted successfully.";			
			echo "woman_respondent.php";
			
			}catch (Exception $ex) {
				$_SESSION["errorType"] = "danger";
			$_SESSION["errorMsg"] =$ex->getMessage();
            	//$_SESSION["errorMsg"] = "Something went wrong. Records not submitted";
			
				//echo $ex->getMessage();
			//echo "<br>".var_dump($data);
        	}		
 
}




?>