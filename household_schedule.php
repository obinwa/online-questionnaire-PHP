<?php 
include 'header_afterlogin.php';
?>
<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">HOUSEHOLD SCHEDULE</h3>
          </div>
          <div class="panel-body">
<div class="col-sm-12">
<form class="form-horizontal">
<div>
	<div id = "cont"></div>
	<div class="form-group">
	<label class="col-sm-4 control-label" for = "Name"><span class="required"></span>Name of Resident:</label>
	<div class="col-sm-8">
	<input type="text" name="Name" id="NM" class="form-control" onblur = "changeLabel()" required="">
	</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for = "Relationship" id = "RL" onload = "changeLabel()"><span class="required"></span>What is the relationship of (Name) to the head of the house-hold? 			</label>
		<div class="col-sm-8">
		<select name="Relationship" class="form-control">  
			<option value="01">HEAD</option>
			<option value="02">WIFE OR HUSBAND</option>
			<option value="03">SON OR DAUGHTER</option>
			<option value="04">SON-IN-LAW OR DAUGHTER-IN-LAW</option>
			<option value="05">GRANDCHILD</option>
			<option value="06">PARENT</option>
			<option value="07">PARENT-IN-LAW</option>
			<option value="08">BROTHER OR SISTER</option>
			<option value="09">NIECE/NEPHEW BY BLOOD</option>
			<option value="10">NIECE/NEPHEW BY MARRIAGE</option>
			<option value="11">OTHER RELATIVE</option>
			<option value="12">ADOPTED/FOSTER/STEPCHILD</option>
			<option value="13">DON'T KNOW</option>

		</select>
	</div>
	</div>
	<div class="form-group">
		<label  class="col-sm-4 control-label" for = "Sex" id = "SX"><span class="required"></span>Is (Name) male or female?			</label>
			<div name = "Sex" class="col-sm-8">
				<label for = "">Male</label>
				<input type="radio" name="rSex" value="M">
				<label for = "">Female</label>
				<input type="radio" name="rSex" value="F">
			</div>
	</div>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="Residency" id = "RS"><span class="required"></span>Does (Name) usually live here ?
		</label>
			<div name = "Residency" class="col-sm-8">  
				<label for = "PositiveRS">Yes</label>
				<input type="radio" name="rResidency" value="Yes">
				<label for = "NegativeRS">No</label> 
				<input type="radio" name="rResidency" value="No">					
			</div>
	</div>			
	<div class="form-group">
		<label class="col-sm-4 control-label" for="Night" id = "NG"><span class="required"></span>Did (Name) stay here last night?
		</label>
			<div name = "Night" class="col-sm-8"> 
					<label for = "PositiveNG">Yes</label>
					<input type="radio" name="rNight" value="Yes">
					<label for = "NegativeNG">No</label>
					<input type="radio" name="rNight" value="No">					
			</div>
	</div>
	
	<div class="form-group">
		 <label class="col-sm-4 control-label" form="Age" id="AG"><span class="required"></span>How old was (Name) at his/her last birthday?</label>
		<div class="col-sm-8">
				<input type="number" name="Age" class="form-control" min="0">
    </div>
	</div>
			
	<div class="form-group">
		<label class="col-sm-4 control-label" for="Pregnant" id = "PG"><span class="required"></span> Is (Name) currently pregnant?</label>
			<div name = "Pregnant" class="col-sm-8"> 
					<label for = "PositivePG">Yes</label>
					<input type="radio" name="rPregnant" value="Yes"> <!-- r in name for radio -->
					<label for = "NegativePG">No</label>
					<input type="radio" name="rPregnant" value="No">					
			</div>
	</div>

			<!--div>				
				<label>10)  *******************(Circling line number)</label>	
			</div-->


	<div class="form-group">				
		<label class="col-sm-4 control-label" for="School" id = "SC"><span class="required"></span> Has (Name) ever attended school?</label>
				<div name = "School" class="col-sm-8"> 
					<label for = "PositiveSC">Yes</label>
					<input type="radio" name="rSchool" value="Yes" onclick="makeVisible('pGR',true,'Degree')">
					<!-- r in name forradio button -->
					<label for = "NegativeSC">No</label>
					<input type="radio" name="rSchool" value="No" onclick="makeVisible('pGR',false,'Degree'); makeVisible('GrL',false,'Grade')" >
					
				</div>
			</div>

			
			<div id="pGR" class="form-group" style="display: none">
				<br>
				<label class="col-sm-4 control-label" for = "Degree" id = "DG"><span class="required"></span> What is the highest school (Name) has attended?  </label>
				<div class="col-sm-8">
				<select name="Degree" onchange="gradeDiv()" id="SGr" class="form-control" required=""> 
					<option value="01_3" >Pre-Primary/Kindergarten</option>
					<option value="02_6" >Primary</option>
					<option value="03_6" >Secondary</option>
					<option value="04_10">Higher</option>
					<option value="05">Don't Know</option>
				</select>
				</div>
			</div>

			<div class="form-group" id="GrL"></div>

			<div class="form-group">
				<label class="col-sm-4 control-label" for = "Sick" id = "SCK"><span class="required"></span> In the last two weeks, has (Name) been sick with a fever at any time?</label>
				<div name = "Sick" class="col-sm-8">
					<label for = "Yes">Yes</label>
					<input type="radio" name="rSick" value="Yes" onclick="createPopupN('TRc','TR','rTreatment')">
					<!-- r in name stands for radio button -->
					<label for = "No">No</label>
					<input type="radio" name="rSick" value="No" onclick="removePopupN('TRc','TR','rTreatment')">

					<label for = "DK">Don't Know</label>
					<input type="radio" name="rSick" value="DK" onclick="removePopupN('TRc','TR','rTreatment')"> 
				</div>
				</div>

				<div id="TR" class="form-group"></div>
			
	
			<div>
				<label></label>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
				<input type="button" class="btn btn-primary" name="save" value="Save and Add More Residents" onclick="submitVals('1')">
				</div>
				<div class="col-sm-2">
				<input type="button" class="btn btn-primary" name="save" value="Save Only" onclick="submitVals('0')">
				</div>
			</div>
			
		</div>
	</form>
</div>
</div>
</div>

	<script>

		var ids = ["RL","SX", "RS","SCK", "NG","AG","PG","SC" ,"DG","GR"] ;
		var names = ["Name", "rSick","rSchool","rPregnant","rNight","Age","rResidency",
				 "rSex","Relationship"];

		var secondNames = ['TreatmentPlace'];
		var thirdNames = ['TreatmentChild',''];
		var Grade = [];

		childPops = {"TRc" : ` 		<div class="form-group">
									<!-- c in id for child -->
									<label class="col-sm-4 control-label" for = "TreatmentChild" id = "TRc" onload = "pushName('TreatmentChild')"><span class="required"></span> Did (Name) get any treatment for the fever in the last 2 weeks?</label>
									<div name = "TreatmentChild" class="col-sm-8">
										<label for = "Yes">Yes</label>
										<input type="radio" name="rTreatment" value="Yes" onclick="createPopupNN('TRcc','TRcP','TreatmentPlace','rCost')">
										<!-- r in name for radio button-->
										<label for = "No">No</label>
										<input type="radio" name="rTreatment" value="No" onclick="removePopupNN('TRcc','TRcP','TreatmentPlace','rCost')">
									</div>
								</div> <div id = "TRcP"> </div> ` ,

					"Test" : `lkjhgfghjkl`,

					"CS" : ``,

					"TRcc" : ` <br>
								<div class="form-group">
									<!-- c in id for child -->
									<label class="col-sm-4 control-label" for = "TreatmentPlace" id = "TRcc" onload = pushName("TreatmentPlace")><span class="required"></span> Where did (Name) first seek treatment?</label>
									<div class="col-sm-8">
										<select name="TreatmentPlace" class="form-control" required="">  
										<option value="01">Government Hospital</option>
										<option value="02">Government Health Centre</option>
										<option value="03">Government Health Clinic</option>
										<option value="04">Private Hospital/Clinic</option>
										<option value="05">Pharmacy</option>
										<option value="06">Private Doctor</option>
										<option value="07">Mobile Clinic</option>
										<option value="08">Chemist/PMV</option>
										<option value="09">Shop</option>
										<option value="10">Traditional Practitioner</option>
										<option value="11">Role Model/Caregiver/Community Worker</option>
										<option value="12">Drug Hawker</option>
										<option value="13">Mobile Clinic</option>
										</select>
									</div>
								</div> 
								<br> 
								<div class="form-group">
									<label class="col-sm-4 control-label" for = "Cost" id = "CS"><span class="required"></span> How much did the treatment cost?</label>
									<div name = "Cost" class="col-sm-8">
										<label for = "rCost" onload
										= pushName("rCost")>Less than 99990</label>
										<input type="radio" name="rCost" value="00000" >
										<!-- r in name stands for radio button -->
										<label for = "rCost">Greater than 99990</label>
										<input type="radio" name="rCost" value="99990" >
										<label for = "rCost">Free</label>
										<input type="radio" name="rCost" value="99995" >
										<label for = "rCost">Don't know</label>
										<input type="radio" name="rCost" value="99998" >
									</div>` 
								,
							}

			gradeLevels = ['one','two','three','four','five','six','seven','eight','nine','ten'];

		function getNum(text)
		{
			var holdText = text;
			var arrayOfString = holdText.split("_");
			var firstpart = arrayOfString[0];
			var number = eval(arrayOfString[1]);
			
			return number;
		}

			function gradeDiv()
			{
				var dNode = document.getElementById('SGr').value ;
				//alert(dNode);
				var num = getNum(dNode);
				var childNode = document.getElementById("GrL");
				//alert(num);
				//var newNode = document.getElementById("GrL");
				//var node = document.getElementById('');

				var start = `<label class="col-sm-4 control-label" for = "Grade" id = "GR" > <span class="required"></span> What is the highest grade (Name) completed at that level? </label>
 <div class="col-sm-8">
				<select class="form-control" name="Grade">` ;

				//alert("First select part" + start);
				for(var i = 0;i<num;i++)
				{
					var numString = gradeLevels[i];
					start = start + `<option value=` +(i+1) +` > Year ` + numString + `</option>`;
				}

				start = start + `</select></div>`;

				//alert(start);
				
				childNode.innerHTML = start ;
				//alert('done0');
				ids.push('GrL');
				changeLabelWithId("GrL");
				childNode.style.display="inline";
				pushName('Grade');
			}


		function pushName(name)
		{
			//alert(name);
			names.push(name);
		}	

		function show(name)
		{
			var arg = determineType(name);
			
			var node = $(arg).val();

			//alert(node);

		}

		// returns the suitable query string for JQUERY $(xx).val() 
		function determineType(name)
		{

			//alert(name);
			var node = document.getElementsByName(name)[0];
			var type = node.type ;
			var nameX = node.nodeName ;
			var returnVal = '';

			if( nameX == "INPUT" )
			{
				if(type == "radio")
				{
					returnVal = returnVal + "input[name=" + "'" + name + "']:checked";
				}
				else if(type == "text" || type == 'number')
				{
					returnVal = returnVal + "[name=" + "'" + name + "']";
				}
			}
			else if(nameX == "SELECT")
			{
				returnVal = returnVal + "[name=" + "'" + name + "'] option:selected";
			}
			
			return returnVal ;
		}				

		function validateInputs()
		{
			var allValid = false;			

			for(var i = 0;i< names.length ;i++)
			{ 
				var nodeQuery = determineType(names[i]);				
				var valueOfNode = $(nodeQuery).val();				
				if(valueOfNode == '' || valueOfNode == null)
				{
					alert(names[i] + ' is not defined');
					alert('Some fields are empty');
					return false;
				}
			}

			//alert('All values validated');
			return true;	
		}

		

		function tieValues()
		{
			var canContinue = validateInputs();
			if(canContinue)
			{
				var all = "";
				for (var i = 0; i < names.length; i++) 
				{
					//var node = document.getElementsByName(names[i])[0];
					var nodeQuery = determineType(names[i]);
					var valueOfNode = $(nodeQuery).val();
					//alert(names[i] + ":" + valueOfNode);
					var modifiedName = "&" + names[i] + '=' + valueOfNode;
					all = all + modifiedName;
				}
				//alert(all);
			}

			return all;
		}

		function submitVals(st)
		{
			var canContinue = validateInputs();			
			if(canContinue)
			{
				var vals = tieValues();
				vals +="&next="+st;//this handles indicate the button clicked
				//alert(vals);
				$.ajax({
				type: "POST",
				url: "submitHouseholdSchedule.php",
				data: vals,
				cache: false,
				success: function(html)
				{					
					//$('.cont').html(htmlValue)
					window.location = html;
				}
			});
			}

			
		}

		function changeLabel()
		{
			var name = document.getElementById("NM").value ;

			for(i = 0;i < ids.length ; i++)
			{
				var id = ids[i];
				//alert((i+1) + "of"+ids.length + "is" + id);
				//alert(id + ":" );
				var text = document.getElementById(id).innerHTML ;
				//alert(id + ":" + text);

				if(name.trim().length == 0)
				{
					name = "Name";
				}
				var newText = parseText(text,name);

				document.getElementById(id).innerHTML = newText ;
			}
		}

		function changeLabelWithId(idVal)
		{
			var name = document.getElementById("NM").value ;

				var id = idVal;
				//alert(id + ":" );
				var text = document.getElementById(id).innerHTML ;
				//alert(id + ":" + text);

				if(name.trim().length == 0)
				{
					name = "Name";
				}
				var newText = parseText(text,name);

				document.getElementById(id).innerHTML = newText ;
			
		}

		function parseText(text,nameReplacement)
		{
			var holdText = text;
			var arrayOfString = holdText.split("(");
			var firstpart = arrayOfString[0];
			var subArray = arrayOfString[1].split(")");
			var secondPart = subArray[1];
			var result = firstpart + "(" + nameReplacement + ")" + secondPart ;

			return result ;
		}

		

		function createPopup(childId,parentId)
		{
			var child = childPops[childId];

			var parent = document.getElementById(parentId);
			parent.innerHTML = child;
			ids.push(childId);
			//var childNode = document.getElementById(childId);
			//var nodeName = 
			changeLabelWithId(childId);

			//tieValues();
		}

		function createPopupN(childId,parentId,nodeName)
		{
			var child = childPops[childId];

			var parent = document.getElementById(parentId);
			parent.innerHTML = child;
			ids.push(childId);
			//names.push()
			//var childNode = document.getElementById(childId);
			//var nodeName = 
			pushName(nodeName);
			changeLabelWithId(childId);

			//tieValues();
		}

		function createPopupNN(childId,parentId,nodeName1,nodeName2)
		{
			var child = childPops[childId];

			var parent = document.getElementById(parentId);
			parent.innerHTML = child;
			ids.push(childId);
			//names.push()
			//var childNode = document.getElementById(childId);
			//var nodeName = 
			pushName(nodeName1);
			pushName(nodeName2)
			changeLabelWithId(childId);

			//tieValues();
		}

		function removePopup(childId, parentId)
		{
			var child = document.getElementById(childId);
			var parent = document.getElementById(parentId);;

			parent.innerHTML = "";
			//ids.pop();

			//parent.removeChild(child);
		}

		function removePopupN(childId, parentId,nodeName)
		{
			var child = document.getElementById(childId);
			var parent = document.getElementById(parentId);
			//var childIndex = ids.indexOf(childId);
			parent.innerHTML = "";

			ids.pop();
			removeFromArray(nodeName,2); //names.pop();

			//parent.removeChild(child);
		}

		function removeFromArray(val,type)
		{
			//type 1 is for ids, type 2 is for names

			if(type == 1)
			{
				for(i = ids.length-1 ; i >= 0; i--)
				{
					if(ids[i] == val)
					{
						ids.splice(i,1);
					}
				}
			}
			else if(type == 2)
			{
				for(i = names.length-1;i >= 0;i--)
				{
					if(names[i] == val)
					{
						names.splice(i,1);
					}
				}
			}
		}

		function removePopupNN(childId, parentId,nodeName1,nodeName2)
		{
			var child = document.getElementById(childId);
			var parent = document.getElementById(parentId);

			parent.innerHTML = "";
			ids.pop();
			removeFromArray(nodeName1,2);//names.pop();
			removeFromArray(nodeName2,2);

			//parent.removeChild(child);
		}

		function makeVisible(Id,flag,name)
		{
			var node = document.getElementById(Id);
			if(flag == true)
			{
				node.style.display = "inline";
				pushName(name); 
			}
			else if(flag == false)
			{
				node.style.display = 'none';
				removeFromArray(name,2)
			}
		}

	</script>
<?php include 'footer_afterlogin.php'; ?>