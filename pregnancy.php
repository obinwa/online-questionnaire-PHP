<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">PREGNANCY AND INTERMITTENT PREVENTIVE TREATMENT </h3>
          </div>
          <div class="panel-body">
<div class="col-sm-9">
<form class="form-horizontal " onsubmit="return false">
			<div id="p301" class="form-group row row-fluid">
				<label for="NameRecentBirth" class="col-sm-4 control-label" >Name of the most recent birth </label>
				<div class="col-sm-8">
					<SELECT class="form-control" name="NameRecentBirth" id = "pN" onChange="nextAndTie.call(this,'p302')">
			<option value=""></option>
            <?php
                 $sql = "SELECT birth_id, nameofchild FROM births WHERE h_id=?";

            try {
                $stmt = $DB->prepare($sql);
				$stmt->bindValue(1, $_SESSION["household_id"]);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();				
                foreach($results as $result){  
                    
                    echo "<option value='".$result["birth_id"]."'>".$result["nameofchild"]."</option>";                   
                    }                       
                } catch (Exception $ex) {
                echo "an error occured";
            }

            ?>
        </SELECT>
					<!--input type="text" name="NameRecentBirth" id = "pN" onblur="nextAndTie.call(this,'p302')" class=" form-control"--> <!--onblur="changeLabel()" -->
				</div>
			</div>

			<div id="p302" class="form-group row row-fluid" >
				<label for="AntenatalCare" class="col-sm-4 control-label">When you were pregnant with (Name), did you see anyone for antenatal care for this pregnancy ?</label>
				<div class="col-sm-8">
					<select name="AntenatalCare" id="pAN" onchange='showNextAndTie.call(this,"p302","pAN","numb","06","numb")' class=" form-control">
						<option></option>
						<option value="01" class="p303">Yes</option>
						<option value="02" class="p304">No</option>
					</select>
				</div>
			</div>

			<div id="p303"  class="form-group row-fluid row" style="display: none;" >
				<label for="HealthPersonnel" class="col-sm-4 control-label" >Whom did you see ?</label>
				<div name='HealthPersonnel' class="col-sm-8 form-">
		
					<label for="Doctor" class="col-sm-4 control-label">DOCTOR</label>
					<div class="col-sm-8">
						<input type="checkbox" value="A" name="Sec3HealthPersonnel"  onclick="nextAndTieCheck.call(this,'p304');Increment.call(this)" class="form-control">
					</div>

					<label for="Nurse/Midwife" class="col-sm-4 control-label">NURSE/MIDWIFE</label>
					<div class="col-sm-8">
						<input type="checkbox" value="B" name="Sec3HealthPersonnel" onclick="nextAndTieCheck.call(this,'p304');Increment.call(this)" class="form-control">
					</div>

					<label for="AuxiliaryMidwife" class="col-sm-4 control-label">AUXILIARY MIDWIFE</label>
					<div class="col-sm-8">
						<input type="checkbox"  value="C" name="Sec3HealthPersonnel"  onclick="nextAndTieCheck.call(this,'p304');Increment.call(this)" class="form-control">
					</div>

					<div class="row-fluid row">
						<label for="CHEW" class="col-sm-6 control-label ">COMMUNITY HEALTH EXTENSION WORKER (CHEW)</label>
						<div class="col-sm-4">
							<input type="checkbox"  value="D" name="Sec3HealthPersonnel"  onclick="nextAndTieCheck.call(this,'p304');Increment.call(this)" class="form-control">
						</div>
						<div class="col-sm-2">
							
						</div>
					</div>

					<div class="row-fluid row">
						<label for="TraditionalBirthAttendant" class="col-sm-4 control-label">TRADITIONAL BIRTH ATTENDANT</label>
						<div class="col-sm-8">
							<input type="checkbox"   value="E" name="Sec3HealthPersonnel"  onclick="nextAndTieCheck.call(this,'p304')" class="form-control">
						</div>
					</div>

					<div class="row-fluid row">
						<label for="VHW" class="col-sm-4 control-label">VILLAGE HEALTH WORKER (VHW) </label>
						<div class="col-sm-8">
							<input type="checkbox"   value="F" name="Sec3HealthPersonnel"  onclick="nextAndTieCheck.call(this,'p304')"  class="form-control">
						</div>
					</div>


					<div class="row-fluid row">
						<label for="RMC" class="col-sm-4 control-label">RURAL MODEL CAREGIVER(RMC)</label>
						<div class="col-sm-8">
							<input type="checkbox"   value="G" name="Sec3HealthPersonnel"  onclick="nextAndTieCheck.call(this,'p304')"  class="form-control">
						</div>
					</div>

					<div class="row-fluid row">

						<label for="CDD" class="col-sm-6 control-label">COMMUNITY DIRECTED DISTRIBUTOR(CDD)</label>
						
						<div class="col-sm-4">
							<input type="checkbox"   value="H" name="Sec3HealthPersonnel"  onclick="nextAndTieCheck.call(this,'p304')"  class="form-control">
						</div>
						<div class="col-sm-2">
							
						</div>
					</div>

					<div class="row-fluid row">
						<label for="SawOTHER" class="col-sm-4 control-label">OTHER</label>
						<div class="col-sm-8">
							<input type="checkbox"   value="X" name="Sec3HealthPersonnel"   class="form-control"  onclick="nextAndTieCheck.call(this,'OTcm')">
						</div>
					</div>

					<div class="row-fluid row" style="display: none">
						<div id="OTcm">
							<label class="col-sm-4 control-label">Specify other</label>
							
							<div class="col-sm-8">
								<input type="text" name="OtherMedicalPractitioner" class="form-control" onblur="nextAndTie.call(this,'p304')">
							</div>
						</div>
					</div>
				</div>
			</div>

				
			<div id="p304" class="form-group row-fluid" style="display: none" >
				<label for="FansidarDuringPregnancy" class="col-sm-4 control-label">During this pregnancy, did you take SP/Fansidar to keep you from getting malaria ?</label>
				<div class="col-sm-8">
					<select name="FansidarDuringPregnancy" id="pSP" onchange="showNextAndTie.call(this,'p304','pSP','numb','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="p307">Yes</option>
						<option value="02" class="p311">No</option>
						<option value="08" class="p311">Don't know</option>
					</select>
				</div>
			</div>

					
			<div id="p307" class="form-group row-fluid" style="display: none" > <!--style="display: none"-->
				<label for="FrequencyOfFansidar" class="col-sm-4 control-label">How many times did you take SP/Fansidar during this pregnancy ?</label>
				<div class="col-sm-8">
					<input type="number" name="FrequencyOfFansidar" max="99" class="form-control" onblur="nextAndTie.call(this,'p308')">
				</div>
			</div>

						<div  class="form-group row-fluid" id="p308" style="display: none">
							<button class="col-sm-offset-4 span3" onclick="nextSection.call(this,'p309','p311','p308')">Click button to Continue</button>  <!--Based on the selection of the check boxes in p303 -->
						</div> 

			<div id="p309" class="form-group row-fluid" style="display: none">
				<label for="FansidarSource" class="col-sm-4 control-label">Did you get SP/Fansidar during any antenatal care visit, during anither visit to a health facility or from another source ?</label>
				<div class="col-sm-8">
					<select name="FansidarSource" id="WF" onchange="showNextAndTie.call(this,'p309','WF','numb','16','numb')" class="form-control">
						<option></option>
						<option value="01" class="p310">ANTENATAL VISIT</option>
						<option value="02" class="p310">ANOTHER FACILITY VISIT</option>
						<option value="03" class="p310">COMMUNITY HEALTH EXTENSION WORKER</option>
						<option value="06" class="p310">OTHER SOURCE</option>
					</select>
				</div>
			</div>

			<div id="p310" class="form-group row-fluid" style="display: none">
				<label for="AntenatalNet" class="col-sm-4 control-label">Did you receive a mosquito net during an antenatal care visit ?</label>
				<div class="col-sm-8">
					<select name="AntenatalNet" id="pNA" onchange="showNextAndTie.call(this,'p310','pNA','numb','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="p311" >Yes</option>
						<option value="02" class="p311" >No</option>
					</select>
				</div>
			</div>
					<!--</div>
				</div>-->

				<div class="form-group row-fluid" id="p311" style="display: none">

				<div class="row-fluid form-group" >
    			<div class="col-sm-4 col-sm-offset-1">
        			<button class="btn btn-primary" onclick="submitTest('1')">Submit and Add Another Record</button> 
    			</div>
				<div class="col-sm-4">
        			<button class="btn btn-primary" onclick="submitTest('0')">Submit. No more Pregnancy Record</button> 
    			</div>
				</div>
				</div>

				<div id="numb">
					
				</div>

		</form>	

</div>
</div>
</div>

<script src = "Household.js"></script>
<script>
  var flag308 = 0 ;
		var cont;
		var databaseString = {};
		var databaseCheck = {};

		var stackOfDivs = ['p301','p302'] ;
		var stackOfNames = [] ;

			
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
							url: "submitPregnancy.php",
							cache: false,
							data: data,
							success: function(html)
								{	
									//alert(html);
									window.location=html;
								}
							});
				
		}

		function saveLast()
		{
			cont = document.getElementsByTagName('html')[0];
		}

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

		function nextSection(Fid,Sid,Mid)  // from div with  id Mid, go to Fid fi flag is greater than zero, otherwise, go the div with id Sid
		{
			if(document.getElementById('p303').style.display !== "none" && flag308 > 0)
			{
				popDivs(Mid,Fid);
				
				next(Fid) ;
			}
			else
			{
				popDivs(Mid,Sid);
				next(Sid);
			}

			document.getElementById('p308').style.display = "none";
			document.getElementById('p303').style.display = "none"

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
			var key = this.name ;
			//var topOfStack ;
			if(this.checked ){

				popDivs(divId,nextId);
				popFromDict(mainName);
			 	databaseString[key] = this.value ;
				//alert(key + ": " + databaseString[key]);
				next(nextId);

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

		function searchDivs(Id)
		{
			for(i = 0 ; i < stackOfDivs.length ; i++)
			{
				if(Id.trim() === stackOfDivs[i].trim())
				{
					return true ;
					//alert("seen div"  ) ;
				}
			}

			return false ;
		}

		function popDivs(mainId,nextId)
		{
			if(searchDivs(mainId) == true)
			{ //alert("In pop div");
				while(stackOfDivs.length >= 0)
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
						//alert("In pop div");
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
						alert("popping name" + topOfStack + "from dictionary");
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


		function newType()
		{
			var node = document.createElement('div');
			var val = document.getElementById('r501').innerHTML ;
			node.innerHTML = val ;
			var parent = document.getElementById('vv');
			parent.appendChild(node);

		} 
</script>

<?php include 'footer_afterlogin.php'; ?>