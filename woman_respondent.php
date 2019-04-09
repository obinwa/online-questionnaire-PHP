<?php 
include 'header_afterlogin.php';
?>
<script src = "Household.js"></script>
<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">WOMAN INTERVIEW - RESPONDENT'S BACKGROUND</h3>
          </div>
          <div class="panel-body">
<div class="col-sm-12">
				<form class="form-horizontal" onsubmit="return false">
				<div id="r102" class="form-group  row-fluid">
					<label for="rDOB" class="col-sm-4 control-label">Date of birth: </label>
					<div class="col-sm-8">
							<label for="rMonth" >Do you know your date of birth?</label>
							<div>
								<label for = "ykDOB">Yes</label>
								<input type="radio" name="kDOB" value="Yes" onclick="nextAndTieRadio.call(this,'r102','tDOB','kDOB')">
								<label for = "nkDOB">No, but I know my age</label> 
								<input type="radio" name="kDOB" value="No" onclick="nextAndTieRadio.call(this,'r102','r103B','kDOB')">
								<label for = "nkDOB">No and I don't know my age</label> 
								<input type="radio" name="kDOB" value="NoDk" onclick="nextAndTieRadio.call(this,'r102','r104','kDOB')">
								<!--input type="date" name="MonthOfBirth" min="01" max="12" class="form-control"  onblur="nextAndTie.call(this,'r103')"-->
							</div>

							<div style="display:none; " id="tDOB">
								<label  for="dateOfBirth">Enter your date of birth</label>
								<div>
									<input type="date" name="DateOfBirth"  class="form-control" onblur="nextAndTie.call(this,'r103');calculateAge('CAge');next('r104') " id="Calender">
								</div>
							</div>
						
					</div>
				</div>

				<div id="r103" class="form-group  row-fluid" style="display: none">
					<label for="rAge" class="col-sm-4 control-label">How old were you in your last birthday ?</label>
					<!--div name="rAge" -->
							<label for="AgeInYears">Age in completed years </label>
							<div class="col-sm-8">
								<input class="form-control" type="number" name="AgeInYears" min="00" id="CAge" disabled>
							</div>
					<!--/div-->
				</div>

				<div id="r103B" class="form-group  row-fluid" style="display: none">
					<label  class="col-sm-4 control-label">How old were you in your last birthday ?</label>
					<!--div name="rAge" -->
							<label for="AgeInYears">Age in completed years <sup>Type 98 for Don't know</sup></label>
							<div class="col-sm-8">
								<input class="form-control" type="number" name="AgeInYears" min="00" onblur="nextAndTie.call(this,'r104')" >
							</div>
					<!--/div-->
				</div>



				<div id="r104" class="form-group  row-fluid" style="display: none">
					<label for="attendedSchool" class="col-sm-4 control-label">Have you ever attended school ?</label>
					<div class="col-sm-8">
						<select class="form-control" name="attendedSchool" id="AS" onchange="showNextAndTie.call(this,'r104','AS','numb','96','numb')">
							<option></option>
							<option value="01" class="r105">Yes</option>
							<option value="02" class="r108">No</option>
						</select>
					</div>
				</div>

				<div id="r105" class="form-group  row-fluid" style="display: none" >
					<label for="SchoolLevel" class="col-sm-4 control-label">What is the highest level of school you attended:primary, secondary, or higher ?</label>
					<div class="col-sm-8">
						<select class="form-control" name="SchoolLevel" id="SL"onchange="showNextAndTie.call(this,'r105','SL','numb','96','numb')">
							<option></option>
							<option value="01" class="r106">Primary</option>
							<option value="02" class="r106">Secondary</option>
							<option value="03" class="r109C">Higher</option>
						</select>
					</div>
				</div>
					
				<div id="r106" class="form-group  row-fluid" style="display: none" >
					<label for="HighestLevelOfSchool" class="col-sm-4 control-label">What is the highest (class/form/year) you completed at that level? <sub>If completed less than one year record '00' </sub></label>
					<div class="col-sm-8">
						<input class="form-control" type="number" name="HighestLevelOfSchool" min="00" onblur="nextAndTie.call(this,'r108')">
					</div>
				</div>				

				<div id="r108" class="form-group  row-fluid" style="display: none" >
					<label for="ReadingTest" class="col-sm-4 control-label">Now I would like you to read this sentence to me. <sub>SHOW SENTENCES TO RESPONDENT. IF RESPONDENT CANNOT READ WHOLE SENTENCE, PROBE : Can you read any part of the sentence to me? </sub></label>
					<div class="col-sm-8">
						<select  class="form-control" name="ReadingTest" id = "RT" onchange='showNextAndTie.call(this,"r108","RT","OTrt","4","numb")'>  
							<option></option>
							<option value="1" class="r109">Cannot read at all</option>
							<option value="2" class="r109">Able to read only parts of sentence</option>
							<option value="3" class="r109">Able to read whole sentence</option>
							<option value="4" class="OTrt">No card with required language</option>
							<option value="5" class="r109">Blind/Visually impaired</option>
						</select>
					</div>
				</div>

				<div class="form-group  " id="OTrt" style="display: none" >
					<label for="OtherLanguage" class="col-sm-4 control-label">Specify language</label>
					<div class="col-sm-8">
						<input class="form-control" type="text" name="OtherLanguage" onblur="nextAndTie.call(this,'r109')">
					</div>
				</div>

			<div id="r109" class="form-group  row-fluid" style="display: none" >
				<label for="Religion" class="col-sm-4 control-label">What is your religion</label>
				<div class="col-sm-8">
					<select class="form-control" name="Religion" id = "RL" onchange='showNextAndTie.call(this,"r109","RL","OTrl","6","numb")'>  
						<option></option>
						<option value="1" class="r110">Chritianity</option>
						<option value="2" class="r110">Islam</option>
						<option value="3" class="r110">Traditional religion</option>
						<option value="4" class="r110">No religion</option>
						<option value="6" class="OTrl">Other</option>
					</select>
				</div>
			</div>

				<div class="form-group  row-fluid" id="OTrl" style="display: none" >
					<label for="OtherReligion" class="col-sm-4 control-label">Specify Religion</label>
					<div class="col-sm-8">
						<input class="form-control" type="text" name="OtherReligion" onblur="nextAndTie.call(this,'r110')">
					</div>
				</div>

				<div style="display: none" id="r109C">

					<div id="" class="form-group  row-fluid" >
						<label for="HighestLevelOfSchool" class="col-sm-4 control-label">What is the highest (class/form/year) you completed at that level? <sub>If completed less than one year record '00' </sub></label>
						<div class="col-sm-8">
							<input class="form-control" type="number" name="HighestLevelOfSchool" min="00" onblur="nextAndTie.call(this,'r110')">
						</div>

					</div>

					<div id="r109a" class="form-group  row-fluid"  >
					<label for="Religion" class="col-sm-4 control-label">What is your religion</label>
					<div class="col-sm-8">
						<select class="form-control" name="Religion" id = "RLa" onchange='showNextAndTie.call(this,"r109a","RLa","OTrla","6","numb")'>  
							<option></option>
							<option value="1" class="r110">Chritianity</option>
							<option value="2" class="r110">Islam</option>
							<option value="3" class="r110">Traditional religion</option>
							<option value="4" class="r110">No religion</option>
							<option value="6" class="OTrla">Other</option>
						</select>
					</div>
				</div>

					<div class="form-group  row-fluid" id="OTrla" style="display: none" >
						<label for="OtherReligion" class="col-sm-4 control-label">Specify Religion</label>
						<div class="col-sm-8">
							<input class="form-control" type="text" name="OtherReligion" onblur="nextAndTie.call(this,'r110')">
						</div>
					</div>

				
				</div>


			<div  class="form-group  row-fluid" id="r110" style="display: none" >
				<label for="EthnicGroup" class="col-sm-4 control-label">Ethnic group</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" name="EthnicGroup" onblur="nextAndTie.call(this,'r110')"> 
				</div>
			</div>



			<div id="numb">
				
			</div>

			
			<br><br><br><br><br>
			<div class="row-fluid form-group" >
    			<div class="col-sm-8 col-sm-offset-4">
        			<button class="btn btn-primary" onclick="submitTest()">Submit</button> 
    			</div>				
			</div>
			
		</form>

		<script>
var databaseString = {};
			var NamesOfCompulsoryFields =["MonthOfBirth","YearOfBirth"];

			var stackOfDivs = ['r102'] ;
			var stackOfNames = [] ;

			function submit()
			{
				var result = tieVals(databaseString,NamesOfCompulsoryFields);
				if(result != "" && result != null)
				{
					//Do Ajax sending
				}

			}

		function submitTest()
			{
				var data = jQuery.param(databaseString);
				
				alert(data) ;

				$.ajax({
								type: "POST",
								url: "submitWomanRespondent.php",
								cache: false,
								data: data,
								success: function(html)
									{	
										alert(html);
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


			function nextAndTieRadio(divId,nextId,mainName)
			{
				var key = mainName ;
				//var topOfStack ;
				if(this.checked ){

					popDivs(divId,nextId);
					popFromDict(mainName);
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
					//tnode.style.display = actionArray['Skip'];
					//var remove = skippedArray[pId];
					//undoSkip(remove);
					//next(cId);

					

					//pushName(tId,cId);
					//optionNext(pId);

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
					//undoSkip(cId);
					//var remove = skippedArray[pId];
					//undoSkip(remove);		
					//undoSkip(nextId);
					///optionNext(pId);

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

			function calculateAge(Id)
			{
				var date = new Date(document.getElementById("Calender").value);
            var today = new Date();

            var timeDiff = Math.abs(today.getTime() - date.getTime());
            var age1 = Math.floor(Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365);

            document.getElementById(Id).value = age1 ; //.toString()  ;
            databaseString['AgeInYears'] = age1.toString() ;
            
			}

			function _calcAge() {
            
        	}

		</script>
	</div>
	</div>
</div>

<?php include 'footer_afterlogin.php'; ?>