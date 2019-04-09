<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">FEVER IN CHILDREN</h3>
          </div>
          <div class="panel-body">
<div class="col-sm-12">
<form class="form-horizontal" onsubmit="return false">
	
	<div  id="chn" class="form-group">
		<label for="Child" class="col-sm-4 control-label">Name of Child</label>
		<div class="col-sm-8">	
		<SELECT class="form-control" name="child" id = "child" onChange="showNextAndTie.call(this,'chn','child','numb','X','numb')">
			<option class='f404' value=""></option>
            <?php
                 $sql = "SELECT r_id, name FROM resident WHERE h_id=? AND age <=12";

            try {
                $stmt = $DB->prepare($sql);
				$stmt->bindValue(1, $_SESSION["household_id"]);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();				
                foreach($results as $result){  
                    
                    echo "<option class='f404' value='".$result["r_id"]."'>".$result["name"]."</option>";                   
                    }                       
                } catch (Exception $ex) {
                echo "an error occured";
            }

            ?>
        </SELECT>
		</div>
	</div>

	<div id="f404" class="form-group row-fluid" >
				<label for="BeenIll" class="col-sm-4 control-label">Has (Name) ever been ill with a fever at any time in the last 2 weeks?</label>
				<div name="BeenIll" class="col-sm-8">
					<label for="ill" class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="ill" value="01" onclick="nextAndTieRadio.call(this,'f404','f404A')">
					</div>

					<label for="ill" class="col-sm-2 control-label" >No</label>
					<div class="col-sm-1">
						<input type="radio" name="ill" value="02" onclick="nextAndTieRadio.call(this,'f404','f425')">
					</div>
					<label for="ill" class="col-sm-2 control-label">Don't Know</label>
					<div class="col-sm-1">
						<input type="radio" name="ill" value="08" onclick="nextAndTieRadio.call(this,'f404','f425')">
					</div>
				</div>
			</div>

			<div id="f404A" class="form-group row-fluid" style="display: none">
				<label for="suspectMalaria" class="control-label col-sm-4 ">	DId you suspect that (Name) had malaria ?</label>
				<div name="suspectMalaria" class="col-sm-8">
					<label for="MalariaSuspicion" class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="MalariaSuspicion" value="01" class="" onclick="nextAndTieRadio.call(this,'f404A','f405')">
					</div>

					<label for="MalariaSuspicion" class="col-sm-2 control-label">No</label>
					<div class="col-sm-1">
						<input type="radio" name="MalariaSuspicion" value="02" onclick="nextAndTieRadio.call(this,'f404A','f405')">
					</div>

					<label for="MalariaSuspicion" class="col-sm-2 control-label">Don't Know</label>
					<div class="col-sm-1">
						<input type="radio" name="MalariaSuspicion" value="08" onclick="nextAndTieRadio.call(this,'f404A','f405')">
					</div>
				</div>
			</div>

			<div id="f405" class="form-group row-fluid" style="display: none">
				<label for="blood" class="col-sm-4 control-label">	At any time during the illness, did (Name) have blood taken from (Name)'s finger or heel for testing?</label>
				<div name="blood" class="col-sm-8">
					<label for="BloodTest"  class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="BloodTest" value="01" onclick="nextAndTieRadio.call(this,'f405','f405A')">
					</div>

					<label for="BloodTest"  class="col-sm-2 control-label">No</label>
					<div class="col-sm-1">
						<input type="radio" name="BloodTest" value="02" onclick="nextAndTieRadio.call(this,'f405','f405A')">
					</div>

					<label for="BloodTest"  class="col-sm-2 control-label">Don't Know</label>
					<div class="col-sm-1">
						<input type="radio" name="BloodTest" value="08" onclick="nextAndTieRadio.call(this,'f405','f405A')">
					</div>
				</div>
			</div>

			<div id="f405A" class="form-group row-fluid" style="display: none">
				<label for="test" class="col-sm-4 control-label">	 Was (Name) tested for malaria ?</label>
				<div name="MalariaTest" class="col-sm-8">
					<label for="TestedForMalaria"  class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="TestedForMalaria" value="01" onclick="nextAndTieRadio.call(this,'f405A','f405B')">
					</div>

					<label for="TestedForMalaria"  class="col-sm-2 control-label">No</label>
					<div class="col-sm-1">
						<input type="radio" name="TestedForMalaria" value="02" onclick="nextAndTieRadio.call(this,'f405A','f406')">
					</div>

					<label for="TestedForMalaria"  class="col-sm-2 control-label">Don't Know</label>
					<div class="col-sm-1">
						<input type="radio" name="TestedForMalaria" value="08" onclick="nextAndTieRadio.call(this,'f405A','f406')">
					</div>
				</div>
			</div>

			<div id="f405B" class="form-group row-fluid" style="display: none">
				<label for="testResult" class="col-sm-4 control-label">	If yes, which test was conducted ?</label>
				<div name="testResult" class="col-sm-8">
					<label for="MalariatestReport"  class="col-sm-4 control-label">Rapid diagnostic test (RDT)</label>
					<div class="col-sm-1">
						<input type="radio" name="Malariatest" value="01" onclick="nextAndTieRadio.call(this,'f405B','f405C')">
					</div>

					<label for="MalariatestReport"  class="col-sm-4 control-label">Microscopic test in the laboratory</label>
					<div class="col-sm-1">
						<input type="radio" name="Malariatest" value="02" onclick="nextAndTieRadio.call(this,'f405B','f405C')">
					</div>

					
				</div>
			</div>

			
			<div id="f405C" class="form-group row-fluid" style="display: none">
				<label for="testResult" class="col-sm-4 control-label">	What was the result of the malaria test ?</label>
				<div name="testResult" class="col-sm-8">
					<label for="MalariatestReport"  class="col-sm-2 control-label">Positive</label>
					<div class="col-sm-1">
						<input type="radio" name="MalariatestReport" value="01" onclick="nextAndTieRadio.call(this,'f405C','f406')">
					</div>

					<label for="MalariatestReport"  class="col-sm-2 control-label">Negative</label>
					<div class="col-sm-1">
						<input type="radio" name="MalariatestReport" value="02" onclick="nextAndTieRadio.call(this,'f405C','f406')">
					</div>

					<label for="MalariatestReport"  class="col-sm-2 control-label">Don't Know</label>
					<div class="col-sm-1">
						<input type="radio" name="MalariatestReport" value="08" onclick="nextAndTieRadio.call(this,'f405C','f406')">
					</div>
				</div>
			</div>

			

			<div id="f406" class="form-group row-fluid" style="display: none">
				<label for="Advice" class="control-label col-sm-4">	Did you seek advice or treatment for illness from any source ?</label>
				<div name=Advice class="col-sm-8">
					<label for="AdviceForTreatment" class="control-label col-sm-2">Positive</label>
					<div class="col-sm-1">
						<input type="radio" name="AdviceForTreatment" value="01" onclick="nextAndTieRadio.call(this,'f406','f407'); next('f408')">
					</div>

					<label for="rA" class="col-sm-2 control-label">Negative</label>
					<div class="col-sm-1 ">
						<input type="radio" name="AdviceForTreatment" value="neg" value="02" onclick="nextAndTieRadio.call(this,'f406','f410')">
					</div>
				</div>
			</div>

			<div id="f407" class="form-group row-fluid" style="display: none">
				<label for="seekTreatment" class="control-label col-sm-4 ">	Where did you seek advice or treatment?</label>
				<div name='seekTreatment' class="col-sm-8" >
					<div class="row-fluid">
						<label class="control-label span3 col-sm-offset-3 "><b>PUBLIC MEDICAL SECTOR</b></label>
					</div>

					<div class="row-fluid">
						
						<label for="A" class="col-sm-2 control-label">Government Hospital</label>
						<div class="col-sm-1">
							<input type="checkbox" name="SoughtTreatment" value="A" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>
				

						<label for="B" class="col-sm-2 control-label">Government Health Centre</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="B" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>

						<label for="C" class="col-sm-2 control-label">Government Health Post</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="C" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>
					</div>

					<div class="row-fluid">
						<label for="D" class="col-sm-2 control-label">Free mobile clinic</label>
						<div class="col-sm-1">	
							<input type="checkbox" name="SoughtTreatment" value="D" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>

						<label for="E" class="col-sm-2 control-label">Role Model Caregiver/Community worker</label>
						<div class="col-sm-1 ">
							<input type="checkbox"  name="SoughtTreatment" value="E" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>

						<label for="F" class="col-sm-2 control-label">Other public </label>
						<div class="col-sm-1 ">
							<input type="checkbox"  name="SoughtTreatment" value="F"  onclick="nextAndTieCheck.call(this,'OTst')" class="form-control">
						</div>
					</div>
					<br>
					<br>

					<div class="row-fluid">
						<label class="control-label span3 col-sm-offset-3"><b>PRIVATE MEDICAL SECTOR</b></label>
					</div>

					<div class="row-fluid">
						<label for="G" class="col-sm-2 control-label">Private Hospital</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="G" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>
						
						<label for="H" class="col-sm-2 control-label">Pharmacy</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="H" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>

						<label for="I" class="col-sm-2 control-label">Chemist/PMV</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="I"  class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>
					</div> 

		
					<div class="row-fluid">
						<label for="J" class="col-sm-2 control-label">PVT Doctor</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="J" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>
						
						<label for="K" class="col-sm-2 control-label">PVT Mobile Clinic</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="K" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>

						<label for="L" class="col-sm-2 control-label">Other Private</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="L" onclick="nextAndTieCheck.call(this,'OTst')" class="form-control">
						</div>
					</div> 


					<br>
					<br>
					<div class="row-fluid">
						<label class=" span3 col-sm-offset-3 control-label"><b>OTHER SOURCE</b></label>
					</div>

					<div class="row-fluid">
						<label for="M" class="col-sm-2 control-label">Shop</label> 
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="M" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>

						<label for="N" class="col-sm-2 control-label">Traditional practitioner</label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="N" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>

						<label for="O" class="col-sm-2 control-label">Drug hawker </label>
						<div class="col-sm-1">
							<input type="checkbox"  name="SoughtTreatment" value="O" class="form-control" onclick="nextAndTieCheck.call(this,'f408')">
						</div>
					</div>

					<div class="row-fluid">
						<label for="X" class="col-sm-2 control-label">OTHER</label>
						<div class="col-sm-1">
							<input type="checkbox" name="SoughtOther" class="form-control" onclick="nextAndTieCheck.call(this,'OTst')">
						</div>
					</div>
				</div>
			</div>	
			
			<div style="display: none;" id="OTst" class="row-fluid form-group">
				<label for="Other" class="col-sm-4 control-label">Specify other </label>
					<div class="col-sm-8">
						<input type="text" name="SoughtOtherMedicalSources" class="form-control" onblur="nextAndTie.call(this,'f408')">
					</div>
			</div>

			<div id="f408" class="row-fluid" style="display: none;">
				<div class=" col-sm-offset-3 span3">
					<button onclick="nextSection('f409','f409A',0,2,true);changeStyle('f408','none')">CLICLK TO CONTINUE</button> <!-- Use result of 407 to determine next-->
				</div>
			</div>

			<div id="f409" class="form-group row-fluid" style="display: none;">
				<label for="FseekTreatment" class="col-sm-4 control-label"> Where did you first seek advice or treatment?</label>
					<div class="col-sm-8">
						<select name='FirstseekTreatment' id="FT" onchange="showNextAndTie.call(this,'f409','FT','numb','X','numb')" class="form-control">
							<option></option>
							<optgroup label="PUBLIC MEDICAL SECTOR">
								<option value="A" class="f409A">Government Hospital</option>
								<option value ="B" class="f409A">Government Health Centre</option>
								<option value="C" class="f409A">Government Health Post</option>
								<option value="D" class="f409A">Free mobile clinic</option>
								<option value="E" class="f409A">Role Model Caregiver/Community worker</option>
							</optgroup>

							<optgroup label = "PRIVATE MEDICAL SECTOR">	
								<option value="G" class="f409A">Private Hospital/Clinic</option>					
								<option value="H" class="f409A">Pharmacy</option>
								<option value="I" class="f409A">Chemist/PMV</option>
								<option value="J" class="f409A">PVT Doctor</option>
								<option value="K" class="f409A">PVT Mobile Clinic</option>
							</optgroup>
							<optgroup label="OTHER SOURCE">
								<option value="M" class="f409A">Shop</option>
								<option value="N" class="f409A">Traditional practitioner</option>
								<option value="O" class="f409A">Drug hawker </option>
								<option value="X" class="OTfs">OTHER</option>
							</optgroup>
						</select>
					</div>
			</div>
			
			<div style="display: none" id="OTfs" class="form-group row-fluid">
				<label for="Other" class="col-sm-4 control-label">Specify other </label>
					<div class="col-sm-8">
						<input type="text" name="OtherFSeekTreatment" class="form-control" onblur="nextAndTie.call(this,'f409A')">
					</div>
			</div>

			<div id="f409A" class="form-group row-fluid" style="display: none;">
				<label for="DelayBeforeSeekingAdvice" class="col-sm-4 control-label">How many days after the illness began did you first seek advice or treatment for (Name) ? <sub>If the same day, record '0'</sub></label>
				<div class="col-sm-8">
					<input type="number" name="DelayBeforeSeekingAdvice" class="form-control" onblur="nextAndTie.call(this,'f410')">
				</div>
			</div>

			<div id="f410" class="row-fluid form-group" style="display: none;">
				<label for="takeMedicine" class="col-sm-4 control-label"> At any time during the illness, did (Name) take any medicine for the illness?</label>
				<div name="takeMedicine" class="col-sm-8">
					<label for="rtm" class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="radioTakeMedicine" value="yes" class="" onclick="nextAndTieRadio.call(this,'f410','f411')">
					</div>

					<label for="rtm" class="col-sm-2 control-label">No</label>
					<div class="col-sm-1">
						<input type="radio" name="radioTakeMedicine" value="no" class="" onclick="nextAndTieRadio.call(this,'f410','f425')">
					</div>

					<label for="rbl" class="col-sm-2 control-label">Don't Know</label>
					<div class="col-sm-1">
						<input type="radio" name="radioTakeMedicine" value="don't_know" class=" " onclick="nextAndTieRadio.call(this,'f410','f425')">
					</div>
				</div>
			</div>

			<div id="f411" class="form-group row-fluid" style="display: none">

				<label for="Medicines" class="col-sm-4 control-label">What medicine did (Name) take ? RECORD ALL MENTIONED</label>
				
				<div name='Medicines' class="col-sm-8">


					<div class="row-fluid row form-group" >
						<div class="row-fluid row form-group">
							<label for="Took-SP/FANSIDAR/AMALAR/MALOXINE" class="col-sm-8 control-label">SP/FANSIDAR/AMALAR/MALOXINE</label>
							<div class="col-sm-1">
								<input type="checkbox" value="A" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'f414')">
							</div>
						</div>

						<div class="row row-fluid form-group " id="f414" style="display: none;">
							<label class="col-sm-4 ">How long after fever started did  (Name) first take SP/Fansidar ?</label>

							<div class="col-sm-8">
								<select class=" form-control" id="TF" name="TimeBeforeTakngFansidar" onchange="showNextAndTie.call(this,'f414','TF','numb','06','numb')">
									<option></option>
									<option value="0" class="numb">SAME DAY</option>
									<option value="1" class="numb">NEXT DAY</option>
									<option  value="2" class="numb">TWODAYS AFTER FEVER</option>
									<option  value="3" class="numb">THREE OR MORE DAYS AFTER FEVER</option>
									<option value="8" class="numb">DON'T KNOW</option>
								</select>	
							</div>
						</div>
					</div>

					<div class="row-fluid row form-group" >
						<div class="row-fluid row form-group">
							<label for="Took-CHLOROQUINE" class="col-sm-8 control-label">CHLOROQUINE</label>
							<div class="col-sm-1">
								<input type="checkbox" value="B" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'f416')">
							</div>
						</div>
			
						<div id="f416" class="form-group row-fluid row" style="display: none;">
							<label class="col-sm-4 ">How long after fever started did  (Name) first take Chloroquine ?</label>

							<div class="col-sm-8">
							<select class=" form-control" name="TimeBeforeTakngChloroquine" id="TC" onchange="showNextAndTie.call(this,'f416','TC','numb','06','numb')">
								
								<option></option>
								<option value="0" class="numb">SAME DAY</option>
								<option value="1" class="numb">NEXT DAY</option>
								<option  value="2" class="numb">TWODAYS AFTER FEVER</option>
								<option  value="3" class="numb">THREE OR MORE DAYS AFTER FEVER</option>
								<option value="8" class="numb">DON'T KNOW</option>
							</select>
							</div>
						</div>
					</div>



					<div class="row-fluid row form-group" >
						<div class="row-fluid row form-group">
							<label for="Took-AMODIAQUINE" class="col-sm-8 control-label">AMODIAQUINE</label>
							<div class="col-sm-1">
								<input type="checkbox" value="C" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'f418')">
							</div>
						</div>

						<div id="f418" class="form-group row row-fluid" style="display: none">
						<label class="col-sm-4 ">How long after fever started did  (Name) first take Amodiaquine ?</label>

						<div class="col-sm-8">
							<select class=" form-control" id="TAM" name="TimeBeforeTakngAmodiaquinie" onchange="showNextAndTie.call(this,'f418','TAM','numb','06','numb')">
								
								<option></option>
								<option value="0" class="numb">SAME DAY</option>
								<option value="1" class="numb">NEXT DAY</option>
								<option  value="2" class="numb">TWODAYS AFTER FEVER</option>
								<option  value="3" class="numb">THREE OR MORE DAYS AFTER FEVER</option>
								<option value="8" class="numb">DON'T KNOW</option>
							</select>
						</div>
						</div>
				   </div>
					
					<div class="row-fluid row form-group" >
						<div class="row-fluid row form-group">
							<label for="Took-ARTESUNATE-RECTAL" class="col-sm-6 control-label">ARTESUNATE RECTAL</label>
							<div class="col-sm-1">
								<input type="checkbox" value="D" name="Mediation" class="form-control"  onclick="nextAndTieCheck.call(this,'f418B')">
						   </div>
						</div>
							
						<div class="row-fluid row form-group">
							<label for="E" class="col-sm-6 control-label">ARTESUNATE INJECTION</label>
							<div class="col-sm-1">
								<input type="checkbox" value="E" name="Mediation" class="form-control"  onclick="nextAndTieCheck.call(this,'f418B')">
							</div>								
						</div>

						<div id="f418B" class="form-group row row-fluid" style="display: none;">
							<label class="col-sm-4 ">How long after fever started did  (Name) first take Artesunate ?</label>

							<div class="col-sm-8">
								<select class=" form-control" id="TAR" name="TimeBeforeTakngArtesunate" onchange="showNextAndTie.call(this,'f418B','TAR','numb','06','numb')">
							
									<option></option>
									<option value="0" class="numb">SAME DAY</option>
									<option value="1" class="numb">NEXT DAY</option>
									<option  value="2" class="numb">TWODAYS AFTER FEVER</option>
									<option  value="3" class="numb">THREE OR MORE DAYS AFTER FEVER</option>
									<option value="8" class="numb">DON'T KNOW</option>
								</select>	
							</div>
						</div>
					</div>

					<div class="row-fluid row form-group" >
						<div class="row-fluid row form-group">
							<label for="Took-QUININE-PILLS" class="col-sm-6 control-label">QUININE PILLS</label>
							<div class="col-sm-1">
								<input type="checkbox" value="F" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'f420')">
							</div>
							</div>
							
						<div class="row-fluid row form-group">
					
							<label for="Took-QUININE-INJECTION"  class="col-sm-6 control-label">QUINIE INJECTION/IV</label>
							<div class="col-sm-1">
								<input type="checkbox" value="G" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'f420')">
							</div>
						</div>

						<div id="f420" class="form-group row-fluid" style="display: none">
							<label class="col-sm-4 ">How long after fever started did  (Name) first take Quinie ?</label>

							<div class="col-sm-8">
								<select class=" form-control" id="TQ" name="TimeBeforeTakngQuinie" onchange="showNextAndTie.call(this,'f420','TQ','numb','06','numb')">
									
									<option></option>
									<option value="0" class="numb">SAME DAY</option>
									<option value="1" class="numb">NEXT DAY</option>
									<option  value="2" class="numb">TWODAYS AFTER FEVER</option>
									<option  value="3" class="numb">THREE OR MORE DAYS AFTER FEVER</option>
									<option value="8" class="numb">DON'T KNOW</option>
								</select>	
							</div>
						</div>
					</div>


					<div class="row-fluid row form-group" >
						<div class="row-fluid row form-group">
							<label for="Took-ACT"  class="col-sm-8 control-label">ARTEMISININ COMBINATION THERAPY(ACT)</label>
							<div class="col-sm-1">
								<input type="checkbox" value="H" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'f422')">
							</div>
						</div>

						<div id="f422" class="form-group row-fluid" style="display: none">
							<label class="col-sm-4 ">How long after fever started did  (Name) first take Artemsinin combination therapy ?</label>

							<div class="col-sm-8">
								<select class=" form-control" id="TACT" name="TimeBeforeTakngACT" onchange="showNextAndTie.call(this,'f422','TACT','numb','06','numb')">
									
									<option></option>
									<option value="0" class="numb">SAME DAY</option>
									<option value="1" class="numb">NEXT DAY</option>
									<option  value="2" class="numb">TWODAYS AFTER FEVER</option>
									<option  value="3" class="numb">THREE OR MORE DAYS AFTER FEVER</option>
									<option value="8" class="numb">DON'T KNOW</option>
								</select>	
							</div>
						</div>
					</div>





						<div class="form-group row-fluid row">
							<label for='Took-OTHER_ANTIMALARIA'  class="col-sm-8 control-label">OTHER ANTIMALARIA</label>
							<div class="col-sm-1">
								<input type="checkbox" value="I" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'OtherDrugs')">
							</div>
						</div>
						
			

					<div class="form-group row-fluid row">
						<label for="Took-PILL/SYRUP"  class="control-label col-sm-8">PILL/SYRUP</label>
						<div class="col-sm-1">
							<input type="checkbox" value="J" name="Mediation"  class="form-control" onclick="nextAndTieCheck.call(this,'numb')">
						</div>
					</div>

					<div class="form-group row-fluid row">
						<label for="Took-INJECTION"  class="col-sm-8 control-label">INJECTION</label>
						<div class="col-sm-1 ">
							<input type="checkbox" value="" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'numb')">
						</div>
					</div>

					

					<div class="form-group row-fluid row">
						<label for="Took-PARACETAMOL"  class="col-sm-8 control-label">PARACETAMOL</label>
						<div class="col-sm-1">
							<input type="checkbox" value="L" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'numb')">
						</div>
					</div>

					<div class="form-group row-fluid row">
						<label for="Took-ASPIRIN"  class="col-sm-8 control-label">ASPIRIN</label>
						<div class="col-sm-1">
							<input type="checkbox" value="M" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'numb')">
						</div>
					</div>

					<div class="form-group row-fluid row">
						<label for="Took-ACETANOPHEN"  class="col-sm-8 control-label">ACETAMINOPHEN</label>
						<div class="col-sm-1">
							<input type="checkbox" value="N" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'numb')">
						</div>
					</div>

					<div class="form-group row-fluid row">
						<label for="Took-IBUPROPHEN"  class="col-sm-8 control-label">IBUPROPHEN</label>
						<div class="col-sm-1">
							<input type="checkbox" value="O" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'numb')">
						</div>
					</div>
					
					<div class="form-group row-fluid row">
						<div class="form-group row-fluid row">
							<label for="Took-OTHER"  class="col-sm-8 control-label">OTHER</label>
							<div class="col-sm-1">
								<input type="checkbox" value="X" name="Mediation" class="form-control" onclick="nextAndTieCheck.call(this,'OtherDrugs')">
							</div>
						</div>
						

					</div>

					<div class="form-group row-fluid row">
						<label for="Z"  class="col-sm-8 control-label">DON'T KNOW</label>
						<div class="col-sm-1">
							<input type="checkbox" value="X" name="Mediation"  class="form-control">
						</div>
					</div>

					<div style="display: none;" id="OtherDrugs" class="row-fluid form-group">
					<label for="Other" class="col-sm-4 control-label">Specify other </label>
					<div class="col-sm-8">
						<input type="text" name="OtherMedications" class="form-control" onblur="nextAndTie.call(this,'numb');">
					</div>
				</div>


				</div>
			</div>

					<div id="f424" class="form-group row-fluid" style="display: none;">
					<label class="col-sm-4 ">How long after fever started did  (Name) first take  Other antimalaria?</label>

					<div class="col-sm-8">
						<select class=" form-control" id="TOA" name="TimeBeforeTakngOtherAntimalaria" onchange="showNextAndTie.call(this,'f414','TOA','numb','06','numb')">
							
							<option></option>
							<option value="0" class="numb">SAME DAY</option>
							<option value="1" class="numb">NEXT DAY</option>
							<option  value="2" class="numb">TWODAYS AFTER FEVER</option>
							<option  value="3" class="numb">THREE OR MORE DAYS AFTER FEVER</option>
							<option value="8" class="numb">DON'T KNOW</option>
						</select>
						
					</div>
				</div>

				

			<div id="f425" class="row row-fluid col-sm-offset-3 col-sm-6" style="display: none">
					<input type="button" name="" value="NEXT">
				</div>

			<div id="numb">
				
			</div>
	
			<div class="form-group row-fluid" id="p311" style="display: none">
			</div>
			
	<br>
	<br>
	<br>
	<br>
			<div class="row-fluid form-group" >
    			<div class="col-sm-4 col-sm-offset-4">
        			<button class="btn btn-primary" onclick="submitTest('1')">Submit and Add Another Record</button> 
    			</div>
				<div class="col-sm-4">
        			<button class="btn btn-primary" onclick="submitTest('0')">Submit and Stop</button> 
    			</div>
			</div>
			
	
	
		</form>
	

</div>
</div>
</div>

<script src = "Household.js"></script>
<script>
 var databaseString = {};
var databaseCheck = {};
		var NamesOfCompulsoryFields =["MonthOfBirth","YearOfBirth"];

		var stackOfDivs = [] ;
		var stackOfNames = [] ;

		function submit()
		{
			var result = tieVals(databaseString,NamesOfCompulsoryFields);
			if(result != "" && result != null)
			{
				//Do Ajax sending
			}

		}
	
	function submitTest(val)
		{
			var data = jQuery.param(databaseString);
			for (var key in databaseCheck) {
    			if (databaseCheck.hasOwnProperty(key)) {
					data += "&"+key+"="+databaseCheck[key];
					}
				}
			
			if(val=='1'){
				data += "&next=1";
			}else if(val=='0'){
				data += "&next=0";
			}
			//alert(data) ;
			
			$.ajax({
							type: "POST",
							url: "submitFeverChildren.php",
							cache: false,
							data: data,
							success: function(html)
								{	
									//alert(html);
									window.location=html;
								}
							});
				
		}

		
		function nextAndTie(nextId)
		{
			var key = this.name ;
			if(this.value != ""){
			 databaseString[key] = this.value ;
			stackOfDivs.push(nextId);
			stackOfNames.push(key);
			//alert(databaseString[QuestionDescription]);
			 next(nextId);
			}
		}


		function nextAndTieRadio(divId,nextId)
		{
			var key = this.name ;//mainName ;
			//var topOfStack ;
			if(this.checked ){

				popDivs(divId,nextId);
				popFromDict(key);
			 	databaseString[key] = this.value ;
				//alert(key + ": " + databaseString[key]);
				next(nextId);

			}

		}

			function searchDivs(Id)
		{
			for(i = 0 ; i < stackOfDivs.length ; i++)
			{
				if(Id.trim() === stackOfDivs[i].trim())
				{
					return true ;
				}
			}

			return false ;
		}

		function popDivs(mainId,nextId)
		{
			if(searchDivs(mainId) == true)
			{
				while(stackOfDivs.length > 0)
				{
					var topOfStack = stackOfDivs.pop() ;
					if(topOfStack === mainId)
					{
						break ;
					}
					else
					{
						
						document.getElementById(topOfStack).style.display = "none";
						//topOfStack = stackOfDivs.pop();
					}
				}
				
				stackOfDivs.push(mainId);	
				stackOfDivs.push(nextId) ;
			}

			else
			{
				stackOfDivs.push(mainId);	
				stackOfDivs.push(nextId) ;
			}
		}
		
		function search(name)
		{
			for(i = 0 ; i < stackOfNames.length ; i++)
			{
				if(name.trim() === stackOfNames[i].trim())
				{
					return true ;
				}
			}

			return false ;
		}

		function popFromDict(mainName)
		{
			if(search(mainName) === true)
			{
				while(stackOfNames.length > 0)
				{
					var topOfStack = stackOfNames.pop() ;
					if(topOfStack.trim() === mainName.trim())
					{
						
						break ;
					}
					else
					{
						//alert("popping name" + topOfStack + "from dictionary");
						databaseString[topOfStack] = "";
						//topOfStack = stackOfNames.pop();
					}
				}
				
				stackOfNames.push(mainName);
			//stackOfNames.push(nextName) ;
			}
			else
			{
				stackOfNames.push(mainName);
			}
		}

		function showNextAndTie(tId,pId,cId,flag,nextId)
		{
			var key = this.name ;
			var selectNode = document.getElementsByName(this.name)[0];
		   	var optionNode = selectNode.options[selectNode.selectedIndex];

		   	
		   	databaseString[key] = optionNode.value ;

		   	//showNext(tId,pId,cId,flag,nextId);

			var nodeVal = document.getElementById(pId).value;
			//alert(nodeVal);
			var returnVal = '';
			if(nodeVal == flag) // go to other's text box
			{
				//alert("In If");
				var tnode = document.getElementById(cId);

				var selectNode = document.getElementById(pId);
				///alert("name of select :"+selectNode.name);
				var optionNode = selectNode.options[selectNode.selectedIndex];
				///alert("type of element :"+optionNode);
				var optionClass = optionNode.className;
				///pushName(tId,cId);
				///optionNext(pId);

				popDivs(tId,optionClass);
				popFromDict(key);

				next(optionClass);

			}

			else 
			{

				var selectNode = document.getElementById(pId);
				///alert("name of select :"+selectNode.name);
				var optionNode = selectNode.options[selectNode.selectedIndex];
				///alert("type of element :"+optionNode);
				var optionClass = optionNode.className;
				///alert("class of option :"+optionClass);

				popDivs(tId,optionClass);
				popFromDict(key);

				//pushName(Id,optionClass);
				next(optionClass);
			}
		}

			function nextSection(section1,section2,arrayInd,check,greater)
			{
				//var numberResult = document.getElementsByName('SoughtTreatment').length ;
				var key = 'SoughtTreatment';
				var stringParam = "input:checkbox[name=" + key + "]:checked" ;
				var numberResult = $(stringParam).length ;

				if(greater == true)
				{
					if(numberResult > check || numberResult == check)
					{
						next(section1);
					}
					else
					{
						next(section2);
					}
				}
				else
				{
					if(numberResult == check)
					{
						next(section1);
					}
					else
					{
						next(section2);
					}
				}
				
			}

		function nextAndTieCheck(nextId)
		{
			var key = this.name ;
			var checkarray=[];
			var stringParam = "input:checkbox[name=" + key + "]:checked" ;
			$(stringParam).each(function(){checkarray.push($(this).val());});

			databaseCheck[key] = checkarray ;
			//alert(databaseString[key][3]);
			stackOfDivs.push(nextId);
			next(nextId);
		}

		function changeStyle(Id,param)
		{
			document.getElementById(Id).style.display = param ;
		}
		

		function showResults(name)
		{
			//alert("This is database string " + databaseString[name]);
		}
</script>

<?php include 'footer_afterlogin.php'; ?>