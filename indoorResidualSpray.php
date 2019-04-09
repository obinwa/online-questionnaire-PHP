<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">INDOOR RESIDUAL SPRAY </h3>
          </div>
          <div class="panel-body">
<div class="col-sm-9">
	<form class="form-horizontal" onsubmit="return false">
			<div >
				
			</div>

			<div id="Q1" class="form-group row-fluid" >
				<label for="IndoorSpraying" class="col-sm-4 control-label">Have you heard of indoor residual spraying with insecticide?</label>
				<div name="IndoorSpraying" class="col-sm-8">
					<label for="HeardOf_IndoorSpraying" class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="HeardOf_IndoorSpraying" value="01" onclick="nextAndTieRadio.call(this,'Q1','numb')">
					</div>

					<label for="HeardOf_IndoorSpraying" class="col-sm-2 control-label" >No</label>
					<div class="col-sm-1">
						<input type="radio" name="HeardOf_IndoorSpraying" value="02" onclick="nextAndTieRadio.call(this,'Q1','numb')">
					</div>
					
				</div>
			</div>

			<div id="Q2" class="form-group row-fluid" >
				<label for="IRS_SprayHome" class="col-sm-4 control-label">Has home been sprayed with IRS ?</label>
				<div name="IRS_SprayHome" class="col-sm-8">
					<label for="IRS_Spraying" class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="IRS_Spraying" value="01" onclick="nextAndTieRadio.call(this,'Q2','numb')">
					</div>

					<label for="IRS_Spraying" class="col-sm-2 control-label" >No</label>
					<div class="col-sm-1">
						<input type="radio" name="IRS_Spraying" value="02" onclick="nextAndTieRadio.call(this,'Q2','numb')">
					</div>
					
				</div>
			</div>

			<div id="Q3" class="form-group row-fluid" >
				<label for="Sprayed_SinceLastYear" class="col-sm-4 control-label">At any time during the last 12 months, has anyone come into your dwelling to spray the interioir walls against mosquitoes?</label>
				<div name="Sprayed_SinceLastYear" class="col-sm-8">
					<label for="SprayedHome_SinceLastYear" class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="SprayedHome_SinceLastYear" value="01" onclick="nextAndTieRadio.call(this,'Q3','numb')">
					</div>

					<label for="SprayedHome_SinceLastYear" class="col-sm-2 control-label" >No</label>
					<div class="col-sm-1">
						<input type="radio" name="SprayedHome_SinceLastYear" value="02" onclick="nextAndTieRadio.call(this,'Q3','numb')">
					</div>
					
				</div>
			</div>

			<div id="Q4" class="form-group row row-fluid" >
				<label for="WhoSprayed" class="col-sm-4 control-label">Who sprayed the dwelling ?</label>
				<div class="col-sm-8">
					<select name="WhoSprayed" id="SP"  onchange="showNextAndTie.call(this,'Q4','SP','OTsp','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="numb">Government worker/Program</option>
						<option value="02" class="numb">Private company</option>
						<option value="03" class="numb">NOn-governmental organization</option>
						<option value ="06" class="OTrs">Other </option>
						
					</select>
					<br>
					<div id = "OTrs"  class="form-group row row-fluid" style="display: none">
						<br>
						<label for = "otherSprayer" class="col-sm-6 control-label">Other, please specify</label>
						<div class="col-sm-6">
							<input type="text" name="otherSprayer" class="form-control" onblur="nextAndTie.call(this,'numb')">
						</div>
					</div>
				</div>
			</div>

			<div id="Q5" class="form-group row-fluid" >
				<label for="Indoor_Spray" class="col-sm-4 control-label">Do you believe in indoor spraying with pesticides?</label>
				<div name= "Indorr_Spray" class="col-sm-8">
					<label for="Indoor_SprayPesticide" class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="Indoor_SprayPesticide" value="01" onclick="nextAndTieRadio.call(this,'Q5','Q6')">
					</div>

					<label for="Indoor_SprayPesticide" class="col-sm-2 control-label" >No</label>
					<div class="col-sm-1">
						<input type="radio" name="Indoor_SprayPesticide" value="02" onclick="nextAndTieRadio.call(this,'Q5','Q7')">
					</div>
					
				</div>
			</div>

			<div id="Q6" class="form-group row row-fluid" style="display: none">
				<label for="Reason_Spraying" class="col-sm-4 control-label">If yes, why ?</label>
				<div class="col-sm-8">
					<select name="Reason_SprayingPesticide"  id="Rsp"  onchange="showNextAndTie.call(this,'Q6','Rsp','OTrsp','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="numb">It can reduce the number of mosquitoes</option>
						<option value="02" class="numb">It can kill other insects</option>
						<option value="03" class="numb">It can reduce malaria burden</option>
						<option value ="06" class="OTrsp">Other </option>
						
					</select>
					<br>
					<div id = "OTrsp"  class="form-group row row-fluid" style="display: none">
						<br>
						<label for = "otherReason_SprayingPesticide" class="col-sm-6 control-label">Other, please specify</label>
						<div class="col-sm-6">
							<input type="text" name="otherReason_SprayingPesticide" class="form-control" onblur="nextAndTie.call(this,'numb')">
						</div>
					</div>
				</div>
			</div>

			<div id="Q7" class="form-group row row-fluid" style="display: none">
				<label for="Reason_NotSpraying" class="col-sm-4 control-label">If no, why ?</label>
				<div class="col-sm-8">
					<select name="Reason_NotSprayingPesticide"  id="RNsp"  onchange="showNextAndTie.call(this,'Q7','RNsp','OTrspn','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="numb">It can reduce the number of mosquitoes</option>
						<option value="02" class="numb">It can kill other insects</option>
						<option value="03" class="numb">It can reduce malaria burden</option>
						<option value ="06" class="OTrspn">Other </option>
						
					</select>
					<br>
					<div id = "OTrspn"  class="form-group row row-fluid" style="display: none">
						<br>
						<label for = "otherReason_NotSprayingPesticide" class="col-sm-6 control-label">Other, please specify</label>
						<div class="col-sm-6">
							<input type="text" name="otherReason_NotSprayingPesticide" class="form-control" onblur="nextAndTie.call(this,'numb')">
						</div>
					</div>
				</div>
			</div>


				<div id="Q8" class="form-group row-fluid" >
				<label for="GovernmentSpray" class="col-sm-4 control-label">Are you willing to have your house sprayed by govenment officials ?</label>
				<div name= "GovernmentSpray" class="col-sm-8">
					<label for="GovernmentSprayHouse" class="col-sm-2 control-label">Yes</label>
					<div class="col-sm-1">
						<input type="radio" name="GovernmentSprayHouse" value="01" onclick="nextAndTieRadio.call(this,'Q5','numb')">
					</div>

					<label for="GovernmentSprayHouse"class="col-sm-2 control-label" >No</label>
					<div class="col-sm-1">
						<input type="radio" name="GovernmentSprayHouse" value="02" onclick="nextAndTieRadio.call(this,'Q5','Q9')">
					</div>
					
				</div>
			</div>

			<div id="Q9" class="form-group row row-fluid" style="display: none">
				<label for="gov_spray" class="col-sm-4 control-label">If no, why ?</label>
				<div class="col-sm-8">
					<select name="Nogov_spray"  id="gsp"  onchange="showNextAndTie.call(this,'r516B','gsp','OTgsp','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="numb">Cultural reasons</option>
						<option value="02" class="numb">It is ineffective</option>
						<option value="03" class="numb">It is toxic/poisonous</option>
						<option value ="06" class="OTgsp">Other </option>
						
					</select>
					<br>
					<div id = "OTgsp"  class="form-group row row-fluid" style="display: none">
						<br>
						<label for = "otherReason_gov_spray" class="col-sm-6 control-label">Other, please specify</label>
						<div class="col-sm-6">
							<input type="text" name="otherReason_gov_spray" class="form-control" onblur="nextAndTie.call(this,'numb')">
						</div>
					</div>
				</div>
			</div>


			<div id="numb">
				
			</div>

					

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <button class="btn btn-primary"  onclick="submitTest()">Save</button> 
    </div>
</div>
</form>
</div>
</div>
</div>

<script src = "Household.js"></script>
<script>
   var databaseString = {};
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

		function submitTest()
		{
			
			var str = jQuery.param(databaseString);	
			//alert(str);
			$.ajax({
							type: "POST",
							url: "submitIRS.php",
							cache: false,
							data: str,
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
				if(name.trim() === stackOfDivs[i].trim())
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
				var numberResult = ArrayOfNumberValues[arrayInd] ;

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

			databaseString[key] = checkarray ;
			//alert(databaseString[key][3]);
			stackOfDivs.push(nextId);
			next(nextId);
		}
	
	
</script>

<?php include 'footer_afterlogin.php'; ?>