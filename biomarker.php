<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">Biomarker</h3>
          </div>
          <div class="panel-body">
<div class="col-sm-10">
<form class="form-horizontal" onsubmit="return false">
	<div  id="chn" class="form-group">
		<label for="IdOfChild" class="col-sm-4 control-label">Name of Child</label>
		<div class="col-sm-8">	
		<SELECT class="form-control" name="IdOfChild" id = "child" onChange="showNextAndTie.call(this,'chn','child','numb','196','numb')">
			<option class='b203' value=""></option>
            <?php
                 $sql = "SELECT r_id, name FROM resident WHERE h_id=? AND age <=12";

            try {
				// nothing jgkykyk
                $stmt = $DB->prepare($sql);
				$stmt->bindValue(1, $_SESSION["household_id"]);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();				
                foreach($results as $result){  
                    
                    echo "<option class='b203' value='".$result["r_id"]."'>".$result["name"]."</option>";                   
                    }                       
                } catch (Exception $ex) {
                echo "an error occured";
            }

            ?>
        </SELECT>
		</div>
	</div>

			<div  id="b203" class="form-group row row-fluid" >
				<label for="AgeOfChild" class="col-sm-4 control-label">Age of child</label>
				<div class="col-sm-8">
					<input type="number" name="AgeOfChild" onblur="nextAndTie.call(this,'b203B')" class="form-control">
				</div>
			</div>

			<div  id="b203B" class="form-group row row-fluid" style="display: none;">
				<label for="Body_Weight" class="col-sm-4 control-label">Body weight (in kg)</label>
				<div class="col-sm-8">
					<input type="number" step=".01" name="Body_Weight" onblur="nextAndTie.call(this,'b203C')" class="form-control">
				</div>
			</div>

			<div  id="b203C" class="form-group row row-fluid" style="display: none;">
				<label for="AuxTemp" class="col-sm-4 control-label">Auxillary temperature (in degree Celcius) </label>
				<div class="col-sm-8">
					<input type="number" step=".01" name="AuxTemp" onblur="nextAndTie.call(this,'b203D')" class="form-control">
				</div>
			</div>

			<div  id="b203D" class="form-group row row-fluid" style="display: none;">
				<label for="Height" class="col-sm-4 control-label">Height (in cm)</label>
				<div class="col-sm-8">
					<input type="number" name="Height" onblur="nextAndTie.call(this,'b207');nextE('b208')" class="form-control">
				</div>
			</div>

		

			<div  id="b207" class="form-group row row-fluid"  style="display: none" > 
				<label  class="col-sm-4 control-label">ASK CONSENT FOR ANAEMIA TEST FROM PARENT/OTHER ADULT RESPONNSIBLE FOR CHILD.</label>
				<div class="col-sm-8">
					<label  class="col-sm-12  ">As part of this survey, we are asking children all over the country to take an anaemia test. Anaemia is a serious health problem that usually result from poor nutrition, infection or chronic disease. This program will assist the government to develop programs to prevent and treat anaemia. <br>
					We ask that all children born in 2010 or later take part in anaemia testing in this survey and give a few drops of blood from finger or heel. The equipment used to take blood is clean and completely safe. It has never been used before and it will be thrown away after each test. <br>
					The blood will be tested for anaemia immediately, and the result will be told you right away. The result will be kept strictly confidential and will not be shared with anyone other than members of our survey team.<br><br>
					Do you have any question? <br>
					You can say yes to the test, or you can say no. It is up to you to decide.<br>
					Will you allow (Name of child) to take the anaemia test ? 
					</label> 
				</div>
			</div>


			<div id="b208" class="form-group row row-fluid" style="display: none;">
				<label for="AnaemiaConsent" class="col-sm-4 control-label">Was consent granted ?</label>
				<div class="col-sm-8">
					<select name="AnaemiaConsent" id="AnC" onchange="showNextAndTie.call(this,'b208','AnC','numb','196','numb');nextE('b210') " class="form-control"> 
						<option></option>
						<option value="01" class="b209" >GRANTED</option>
						<option value="02" class="b209">REFUSED</option>
						
					</select>
				</div>
			</div>

			<div  id="b209" class="form-group row row-fluid"  style="display: none">
				<label  class="col-sm-4 control-label">ASK CONSENT FOR MALARIA TEST FROM PARENT/OTHER ADULT RESPONNSIBLE FOR CHILD.</label>
				<div class="col-sm-8">
					<label  class="col-sm-12 ">As part of this survey, we are asking children all over the country to take an malaria test. Malaria is a serious health problem that usually result from poor nutrition, infection or chronic disease. This program will assist the government to develop programs to prevent and treat anaemia. <br>
					We ask that all children born in 2010 or later take part in anaemia testing in this survey and give a few drops of blood from finger or heel. The equipment used to take blood is clean and completely safe. It has never been used before and it will be thrown away after each test. (We will use blood from same finger or heel prick made for anaemia test). One blood drop will be tested for malaria immediately, and the result will be told to you right away. A few blood drops will be collected on a slide(s) and taken to a laboratory for testing. YOu will not be told the results of the laboratory testing. All results will be kept strictly confidential and will not be shared with anyone other than the memebers of our survey team. 
					<br><br>
					Do you have any question? <br>
					You can say yes to the test, or you can say no. It is up to you to decide.<br>
					Will you allow (Name of child) to take the anaemia test ? 
					</label> 
				</div>
			</div>

			<div id="b210" class="form-group row row-fluid" style="display: none;">
				<label for="MalariaConsent" class="col-sm-4 control-label">Was consent granted ?</label>
				<div class="col-sm-8">
					<select name="MalariaConsent" id="MlC" onchange="showNextAndTie.call(this,'b210','MlC','numb','196','numb')" class="form-control"> 
						<option></option>
						<option value="01" class="b213" >GRANTED</option>
						<option value="02" class="b213">REFUSED</option>
						<option value="04" class="b213">NOT PRESENT</option>
						<option value="06" class="b213">OTHER</option>
					</select>
				</div>
			</div>			

			<div id="b213" class="form-group row row-fluid" style="display: none" >
					<label for="" class="col-sm-4 control-label">Is hemoglobin level available ?</label>
					<div class="col-sm-8">
						<select name="HemoglibinLevel" id="HLb" onchange="showNextAndTie.call(this,'b213','HLb','numb','196','numb')" class="form-control"> 
							<option></option>
							<option value="993" class="b213B" >PRESENT</option>
							<option value="994" class="b214" >NOT PRESENT</option>
							<option value="995" class="b214">REFUSED</option>
							<option value="996" class="b214">OTHER</option>				
						</select>
					</div>
				</div>

			<div  id="b213B" class="form-group row row-fluid"  style="display: none"> <!-- style="display: none;"-->
				<label for="HemoglibinLevel" id="lH" class="col-sm-4 control-label">Record hemoglobin level here in the anemia and malaria brochure .</label>
				<div class="col-sm-8">
					<div class="col-sm-4 ">
						<input type="number" name="HemoglibinLevel" id="OThlb" onblur="nextAndTie.call(this,'b214')" onfocus="setfontColor('lH','black')" class=" form-control">
					</div>

					<div class="col-sm-4">
						
					</div>


				</div>
			</div>

			<div id="b214" class="form-group row row-fluid"   style="display: none">
					<label for="" class="col-sm-4 control-label">RECORD RESULT CODE OF MALARIA RDT</label>
					<div class="col-sm-8">
						<select name="MalariaRDT_Code" id="MRDT" onchange="showNextAndTie.call(this,'b214','MRDT','numb','196','numb')" class="form-control"> 
							<option></option>
							<option value="01" class="b215" >TESTED</option>
							<option value="04" class="b216" >NOT PRESENT</option>
							<option value="05" class="b216">REFUSED</option>
							<option value="06" class="b216">OTHER</option>				
						</select>
					</div>
				</div>

				<div id="b215" class="form-group row row-fluid"   style="display: none">
					<label for="" class="col-sm-4 control-label">RECORD THE RESULT OF THE MALARIA RDT HERE AND IN THE ANAEMIA AND MALARIA BROCHURE</label>
					<div class="col-sm-8">
						<select name="MalariaRDT_Result" id="MRr" onchange="showNextAndTie.call(this,'b215','MRr','numb','196','numb')" class="form-control"> 
							<option></option>
							<option value="01" class="b218" >POSITIVE</option>
							<option value="02" class="b215C" >NEGATIVE</option>
							<option value="06" class="b215C">OTHER</option>				
						</select>
					</div>
				</div>

				
				<div id="b215C" class="form-group row row-fluid"   style="display: none">
					<label for="" class="col-sm-4 control-label">Record result of malaria microscopy</label>
					<div class="col-sm-8">
						<select name="MalariaMicroscopy" id="Mmi" onchange="showNextAndTie.call(this,'b215C','Mmi','numb','196','numb')" class="form-control"> 
							<option></option>
							<option value="01" class="b215c" >POSITIVE</option>
							<option value="02" class="b215c" >NEGATIVE</option>
						</select>
					</div>
				</div>

				<div id="b215c" class="form-group row-fluid row" style="display: none">
					<label class="col-sm-4 control-label">Record parasite density</label>
					<div class="col-sm-8">
						<input type="number" name="ParasiteDensity" class="form-control" onblur="nextAndTie.call(this,'b215D')">		
					</div>
				</div>

				<div class="row-fluid form-group row" id="b215D" style="display: none">

					<label class="control-label col-sm-4">Record species</label>
					<div class="col-sm-8">
						<label for="" class="col-sm-2 control-label">Plasmodium falciparum</label>
						<div class="col-sm-1">	
							<input type="checkbox" name="ParasiteSpecies" value="01" class="form-control" onclick="nextAndTieCheck.call(this,'b215E')">
						</div>

						<label for="" class="col-sm-2 control-label">P. ovule</label>
						<div class="col-sm-1 ">
							<input type="checkbox"  name="ParasiteSpecies" value="02" class="form-control" onclick="nextAndTieCheck.call(this,'b215E')">
						</div>

						<label for="" class="col-sm-2 control-label">P. malariae  </label>
						<div class="col-sm-1 ">
							<input type="checkbox"  name="ParasiteSpecies" value="03" onclick="nextAndTieCheck.call(this,'b215E')" class="form-control">
						</div>
					</div>

				</div>

				<div class="row-fluid form-group row" id="b215E" style="display: none">

					<label class="control-label col-sm-4">Record stage</label>
					<div class="col-sm-8">
						<label for="" class="col-sm-2 control-label">Triphozoite</label>
						<div class="col-sm-1">	
							<input type="checkbox" name="ParasiteStage" value="01" class="form-control" onclick="nextAndTieCheck.call(this,'b215F')">
						</div>

						<label for="" class="col-sm-2 control-label">Schizonts</label>
						<div class="col-sm-1 ">
							<input type="checkbox"  name="ParasiteStage" value="02" class="form-control" onclick="nextAndTieCheck.call(this,'b215F')">
						</div>

						<label for="" class="col-sm-2 control-label">Gametocytess </label>
						<div class="col-sm-1 ">
							<input type="checkbox"  name="ParasiteStage" value="03" onclick="nextAndTieCheck.call(this,'b215F')" class="form-control">
						</div>
					</div>

				</div>

				<div id="b215F" class="form-group row row-fluid"   style="display: none">
					<label for="" class="col-sm-4 control-label">Parasite count</label>
					<div class="col-sm-8">
						<select name="ParasiteCount" id="PrC" onchange="showNextAndTie.call(this,'b215F','PrC','numb','196','numb')" class="form-control"> 
							<option></option>
							<option value="00" class="b216" >None</option>
							<option value="01" class="b216" >One</option>
							<option value="02" class="b216" >Two</option>
							<option value="03" class="b216" >Three</option>
							<option value="04" class="b216" >Four</option>
						</select>
					</div>
				</div>


				<div id="b216" class="form-group row row-fluid"  style="display: none" > 
					<label for="" class="col-sm-4 control-label"></label>
					<div class="col-sm-8">
						<button id="btnContinue" onclick="gotoNext.call(this)" >Click to continue</button>
					</div>
				</div>

				<div id="b217" class="form-group row row-fluid"   style="display: none">
					<label for="" class="col-sm-4 control-label">SAY THE FOLLOWING TO THE RESPONDENT</label>
					<div class="col-sm-8">
						<label for="" class="col-sm-8 control-label">The anaemia test shows that(Name of Child) has sever anaemia. Your child is very ill amd must be taken to a health facility immediately</label>
					</div>
				</div>

				<div id="b218"  class="form-group row-fluid row" style="display: none;" >
				<label for="" class="col-sm-4 control-label" >Does name suffer from anyof the following illnesses or symptoms : </label>
				<div name='Symptoms' class="col-sm-8 form-">
		
					<label for="" class="col-sm-4 control-label">Extreme weakness ?</label>
					<div class="col-sm-8">
						<input type="checkbox" value="A" name="Illness_Symptoms"  onclick="nextAndTieCheck.call(this,'b219');Increment.call(this)" class="form-control">
					</div>

					<label for="" class="col-sm-4 control-label">Heart problems ?</label>
					<div class="col-sm-8">
						<input type="checkbox" value="B" name="Illness_Symptoms" onclick="nextAndTieCheck.call(this,'b219');Increment.call(this)" class="form-control">
					</div>

					<label for="" class="col-sm-4 control-label">Loss of consciousness ?</label>
					<div class="col-sm-8">
						<input type="checkbox"  value="C" name="Illness_Symptoms"  onclick="nextAndTieCheck.call(this,'b219');Increment.call(this)" class="form-control">
					</div>

					<div class="row-fluid row">
						<label for="" class="col-sm-4 control-label ">Rapid or difficult breathing ?</label>
						<div class="col-sm-8">
							<input type="checkbox"  value="D" name="Illness_Symptoms"  onclick="nextAndTieCheck.call(this,'b219');Increment.call(this)" class="form-control">
						</div>
						
					</div>

					<div class="row-fluid row">
						<label for="" class="col-sm-4 control-label">Seizures</label>
						<div class="col-sm-8">
							<input type="checkbox"   value="E" name="Illness_Symptoms"  onclick="nextAndTieCheck.call(this,'b219');Increment.call(this)" class="form-control">
						</div>
					</div>

					<div class="row-fluid row">
						<label for="" class="col-sm-4 control-label">Abnormal bleeding </label>
						<div class="col-sm-8">
							<input type="checkbox"   value="F" name="Illness_Symptoms"  onclick="nextAndTieCheck.call(this,'b219');Increment.call(this)"  class="form-control">
						</div>
					</div>


					<div class="row-fluid row">
						<label class="col-sm-4 control-label">Jaundice or yellow skin</label>
						<div class="col-sm-8">
							<input type="checkbox"   value="G" name="Illness_Symptoms"  onclick="nextAndTieCheck.call(this,'b219');Increment.call(this)"  class="form-control">
						</div>
					</div>

					<div class="row-fluid row">

						<label  class="col-sm-4 control-label">Dark urine</label>
						
						<div class="col-sm-8">
							<input type="checkbox"   value="H" name="Illness_Symptoms"  onclick="nextAndTieCheck.call(this,'b219');Increment.call(this)"  class="form-control">
						</div>
						<div class="col-sm-2">
							
						</div>
					</div>

					<div class="row-fluid row">
						<label  class="col-sm-4 control-label">None of the above</label>
						<div class="col-sm-8">
							<input type="checkbox"   value="Y" name="Illness_Symptoms"   class="form-control"  onclick="nextAndTieCheck.call(this,'b219')">
						</div>
					</div>

				</div>
			</div>

			<div  class="form-group row-fluid" id="b219" style="display: none">
				<button class="col-sm-offset-4 span3" onclick="gotoNext2.call(this)">Click button to Continue</button>  
			</div> 

			<div id="b221" class="form-group row row-fluid"   style="display: none">
				<label for="" class="col-sm-4 control-label">In the past two weeeks, has (NAME) taken or is taking medication given by a doctor or health centre to treat the malaria ?<br>BY ASKING TO SEE TREATMENT</label>
				<div class="col-sm-8">
					<select name="TakenMedication_L2weeks" id="Tmed" onchange="showNextAndTie.call(this,'b221','Tmed','numb','196','numb')" class="form-control"> 
						<option></option>
						<option value="01" class="b223" >YES</option>
						<option value="02" class="b224" >NO</option>
					</select>
				</div>
			</div>

			<div class="form-group row-fluid row" id="b222" style="display: none">
				<label class="col-sm-4 control-label">SEVERE MALARIA REFERRAL STATEMENT</label>
				<div class="col-sm-8">
					<label class="col-sm-12">The malaria test shows that (NAME OF CHILD) has malaria. Your child also has symptoms of severe malaria. THe malaria treatment I have will not help your child, and I cannot give you the medication. YOur child is very ill and must be taken to a health facility for further examination.</label>
				</div>
			</div>

			<div class="form-group row-fluid row" id="b223" style="display: none">
				<label class="col-sm-4 control-label">ALREADY TAKEN MEDICATION REFERRAL STATEMENT</label>
				<div class="col-sm-8">
					<label class="col-sm-12">You have told me that (Name of child) has already received ACT for malaria. Therefore, I cannot give you additional ACT. However, the test shows that he/she has malaria.If your child has a fver for two days after last dose of ACT,you should take the child to the nearest health facility for further examination.</label>

						<div  class="form-group row-fluid"  >
						<label for="" class="col-sm-2 control-label">Done</label>
							<div class="col-sm-1">
								<input type="radio" name="moveButton" value="01" onclick="nextE('229')">
							</div>
					</div> 
				</div>		
			</div>

			<div class="form-group row row-fluid" id="b224" style="display: none">
				<label class="col-sm-4 control-label">READ INFORMATION FOR MALARIA TREATMENT AND CONSENT STATEMENT TOPARENTS AND ADULT RESPONSIBLE FOR CHILD.</label>
				<div class="col-sm-8">
					<label class="col-sm-12">The malaria test shows that your child has malaria. We can give you free medicine. The medicine is called ACT. ACT is very effected and in a few days, it should get rid of the fever and other symptoms. You do not have to give the child the medine. This is up to you. Please tell me whether you accept the medicine or not.</label>
				</div>
			</div>

			<div id="b225" class="form-group row row-fluid"   style="display: none">
				<label for="" class="col-sm-4 control-label">Accepted medication ?</label>
				<div class="col-sm-8">
					<select name="Accepted_Medication" id="Amed" onchange="showNextAndTie.call(this,'b225','Amed','numb','196','numb')" class="form-control"> 
						<option></option>
						<option value="01" class="b227" >ACCEPTED</option>
						<option value="02" class="b229" >REFUSED</option>
						<option value="06" class="b229" >OTHER</option>
					</select>
				</div>
			</div>

			<div id="b227" class="form-group row row-fluid"   style="display: none">
				<label for="" class="col-sm-4 control-label">Treatment with ACT</label>
				<div class="col-sm-8">
					<select name="Prescription" id="Pr" onchange="showNextAndTie.call(this,'b227','Pr','numb','196','numb');next('b229')" class="form-control"> 
						<option></option>
						<option value="01" class="b227a" > (Weight< 5 kg) and (ages < 6 months )</option>
						<option value="02" class="b227b" > (5 kg <= Weight <= 14 kgs) and (6 months <=  ages <= 3 years)</option>
						<option value="03" class="b227c" > (15 kgs <= Weight <= 25 kgs) and   (4 years <= age <= 8 years)</option>
						<option value="04" class="b227d" >Weight > 25 kgs and age  > 8 years</option>
					</select>
					
				</div>
			</div>

			<div id="b227a" style="display: none">
				<label class="col-sm-4 control-label col-sm-offset-4"> Give nothing to the child, do not leave drugs. Tell parent to take child to health facility<br>
				If (Name) has high fever, dast or difficult breathing, is not able to drink or breastfeed, gets sicker or does not get betterin two days, you should take him or her to a health professional for treatment right away .
				 </label>
				
			</div>

			<div id="b227b" style="display: none">
				<label class="col-sm-4 control-label col-sm-offset-4"> Give 1 tablet twice a day for 3 days <br>
				If (Name) has high fever, dast or difficult breathing, is not able to drink or breastfeed, gets sicker or does not get betterin two days, you should take him or her to a health professional for treatment right away .</label>
				
			</div>

			<div id="b227c" style="display: none">
				<label class="col-sm-4 control-label col-sm-offset-4"> Give 2 tablets twice a day for 3 days<br>
				If (Name) has high fever, dast or difficult breathing, is not able to drink or breastfeed, gets sicker or does not get betterin two days, you should take him or her to a health professional for treatment right away . </label>
				
			</div>

			<div id="b227d" style="display: none">
				<label class="col-sm-4 control-label col-sm-offset-4"><br>
				If (Name) has high fever, dast or difficult breathing, is not able to drink or breastfeed, gets sicker or does not get betterin two days, you should take him or her to a health professional for treatment right away . </label>
				
			</div>





			<div id="b229" style="display: none">				
			</div>

			<div id="numb">				
			</div>
	
	<br> <br><br><br>
	
		<div class="row-fluid form-group" >
    			<div class="col-sm-4 col-sm-offset-4">
        			<button class="btn btn-primary" onclick="submitTest('1')">Submit and Do Another One</button> 
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
		//var NamesOfCompulsoryFields =["MonthOfBirth","YearOfBirth"];

		var stackOfDivs = [] ;
		var stackOfNames = [] ;

		var flag308 = 0 ;
	
		function Increment() {

			if(this.checked == true)
			{
				flag308 = flag308 + 1 ;
			}
			else
			{
				flag308 = flag308 -1 ;
			}
		}

		function submitTest(val)
		{
			var str = jQuery.param(databaseString);
			for (var key in databaseCheck) {
    			if (databaseCheck.hasOwnProperty(key)) {
					str += "&"+key+"="+databaseCheck[key];
					}
				}
			
			if(val=='1'){
				data = str+"&next=1";
			}else if(val=='0'){
				data = str+"&next=0";
			}
			//alert(data) ;		
			
			$.ajax({
							type: "POST",
							url: "submitBiomarker.php",
							cache: false,
							data: data,
							success: function(html)
								{	
									//alert(html);
									window.location=html;
								}
							});
				
				
		}

		function submit()
		{
			var result = tieVals(databaseString,NamesOfCompulsoryFields);
			if(result != "" && result != null)
			{
				//Do Ajax sending
			}

		}

		function nextE(Id_string) // extended next
		{
			stackOfDivs.push(Id_string);
			next(Id_string);
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

		function gotoNext() // the 'this' here should be an html element, from first usage, it is a button
		{
			//alert("In gotonext");
			var b213_chosenOption = document.getElementById("HLb").value ;
			var b213OtherVal = document.getElementById('OThlb').value ;
			popDivs('b216','numb');
			stackOfDivs.push('b216');

			if(b213_chosenOption.trim() === "993"  )
			{
				if(b213OtherVal == null || b213OtherVal == "")
				{
					//alert("Enter value for question marked red");
					document.getElementById('lH').style.color = "red";
				}
				else if( b213OtherVal != null & parseFloat(b213OtherVal) < 8.0 )
				{
					//stackOfDivs.push('b217'); // this push statement is needed because thre is no push into stack of divs in0 the next statement
					nextE('b217');
					nextE('b229');
				}
				else if(parseFloat(b213OtherVal) >= 8.0)
				{
					nextE('b229');
				}
			}
			else
			{
				//alert("In last else");
				nextE('b229');
			}

			document.getElementById(this.id).style.display = "none";

		}

		function gotoNext2() // the 'this' here should be an html element, from first usage, it is a button
		{
			//alert("In gotonext2");
			var b213_chosenOption = document.getElementById("HLb").value ;
			var b213OtherVal = document.getElementById('OThlb').value ;
			popDivs('b218','numb');
			stackOfDivs.push('b218');

			if(flag308 > 0)
			{
				nextE('b222');
				nextE('b229')
			}
			else
			{
				if(b213_chosenOption.trim() === "993"  )
				{
					if(b213OtherVal == null || b213OtherVal == "")
					{
						//alert("Enter value for question marked red");
						document.getElementById('lH').style.color = "red";
					}
					else if( b213OtherVal != null & parseFloat(b213OtherVal) < 8.0  )
					{
						nextE('b222');
						nextE('b227')
						
					}
					else if(parseFloat(b213OtherVal) >= 8.0)
					{
						nextE('b221');
					}
				}
			}

		}

		function setfontColor(Id_string,colour_string)
		{
			document.getElementById(Id_string).style.color= colour_string ;
		}  
</script>

<?php include 'footer_afterlogin.php'; ?>