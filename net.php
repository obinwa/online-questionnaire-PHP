<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">NET QUESTIONS </h3>
          </div>
          <div class="panel-body">
		<div class="col-sm-12">
			<div>
				<label>ASK RESPONDENT TO SHOW YOU THE NETS, IF MORE THAN THREE USE CLICK NEXT BUTTON</label>
			</div>

			<!--<div id="AllNets" >-->
				<div id="template">
				</div>
				<form class="form-horizontal">
					<div id="126"  class="form-group">					
						<label for="Holes" class="col-sm-4 control-label">Observe if the nets have holes</label>
						<div class="col-sm-8">
							<select name="NetHoles" id="NH" class="form-control" onchange="showNextAndTie.call(this,'126','NH','numb','96','numb')">
								<option></option>
								<option value="01" class="numb">Observed, but has holes</option>
								<option value="02"  class="numb">Observed, does not have holes</option>
								<option value="03" class="numb">Not observed</option>
							</select>
						</div>
					</div>

					<div id="127" class="form-group">						
						<label for="Hanging" class="col-sm-4 control-label">Observe or ask if net is hanging</label>
						<div class="col-sm-8">
							<select name="Hanging" class="form-control" id="NHg" onchange="showNextAndTie.call(this,'127','NHg','numb','96','numb')">
								<option></option>
								<optgroup label="Observed">
									<option value="01" class="numb">Hanging</option>
									<option value="02" class="numb">Not hanging</option>
								</optgroup>

								<optgroup label="Not Observed">
									<option value="03" class="numb">Hanging</option>
									<option value="04" class="numb">Not hanging</option>
								</optgroup>
							</select>
						</div>
					</div>				

				

					<div id="127A" class="form-group">
						<label for="NetColour" class="col-sm-4 control-label">Observe or ask for the colour of the mosquito net </label>
						<div class="col-sm-8">
							<select class="form-control" name="NetColour" id="CL" onchange="showNextAndTie.call(this,'127A','CL','OTcl','96','numb')">
								<option></option>
								<option value="01" class="127B"> Green</option>
								<option value="02" class="127B">Dark blue</option>
								<option value="03" class="127B">Light blue</option>
								<option value="04" class="127B">Red </option>
								<option value="05" class="127B">Black</option>
								<option value="06" class="127B">White</option>
								<option value="96" class="OTcl">Other</option>
							</select>
						</div>
					</div> 
								
					<div id = "OTcl" class="form-group" style="display: none">
							<label for = 'OtherNetColour' class="col-sm-4 control-label">Other, please specify</label>
							<div class="col-sm-8">
								<input type="text" name='OtherNetColour'class="form-control" onblur="nextAndTie.call(this,'127B')">
							</div>
						</div>


					<div id="127B"  class="form-group" style="display: none">
						<label for="NetShape" class="col-sm-4 control-label">Observe (or ask) the shape of the mosquito net</label>
						<div class="col-sm-8">
							<select class="form-control" name="NetShape" id="SH" onchange="showNextAndTie.call(this,'127B','SH','OTsh','06','numb')">
								<option></option>
								<option value="01" class="127C">Conical</option>
								<option value="02" class="127C">Rectangular</option>
								<option value = "06" class="OTsh">Other </option>
							</select>
						</div>
					</div>

						<div id = "OTsh"  class="form-group" style="display: none">
							<label for ='OtherNetShape' class="col-sm-4 control-label">Other, please specify</label>
							<div class="col-sm-8">
								<input type="text" name='OtherNetShape' class="form-control" onblur="nextAndTie.call(this,'127C')">
							</div>
						</div>


					<div id="127C"  class="form-group" style="display: none">
						<label for="NetSize" class="col-sm-4 control-label">Observe (or ask) the size of the mosquito net</label>
						<div class="col-sm-8">
							<select class="form-control" name="NetSize" id="SZ" onchange="showNextAndTie.call(this,'127C','SZ','OTsz','06','128')">
								<option></option>
								<option value="1" class="128">Cot/Crib</option>
								<option value="2" class="128">Single</option>
								<option value="3" class="128">Double</option>
								<option value="4" class="128">Triple</option>
								<option value = "06" class="OTsz">Other </option>
							</select>
						</div>
					</div>

						<div id = "OTsz"  class="form-group" style="display: none">
							<label for = 'OtherNetSize' class="col-sm-4 control-label">Other, please specify</label>
							<div class="col-sm-8">
								<input type="text" name='OtherNetSize' class="form-control"  onblur="nextAndTie.call(this,'128')">
							</div>
						</div>


						
						
					<div id = "128" class="form-group" style="display: none">
		
						<label for="NetAge" class="col-md-4 control-label">How many months ago did your household obtain the mosquito net  </label>
						<div class ="col-md-8">
							<select class= "form-control" name = "NetAge" id = "NA" onchange="showNextAndTie.call(this,'128','NA','OTna','01','numb')">
								<option></option>
								<option value = "00" class = "128A">Less than one month </option>
								<option value = "01" class = "OTna">Between one and thirty-six(36) months </option>
								<option value = "95" class = "128A">More than thirty-six(36) months ago </option>
								<option value = "98" class = "128A">Not sure</option>
							</select>
						</div>
					</div>  



					<div id = "OTna"  class="form-group" style="display: none">
						<label for = 'OtherNetAge' class="col-md-4 control-label">Specify the number of months </label>
						<div class = "col-sm-8">
							<input class="form-control" type="number" min = "1" max="36" name= 'OtherNetAge' onblur="nextAndTie.call(this,'128A')">
						</div>
					</div>

					<div id="128A" class="form-group" style="display: none">
						<label for="HowGetNet" class="col-sm-4 control-label">Did you get the net through a mass distribution campaign, an international care visit, or during an immunization visit</label>
						<div class = "col-sm-8 ">
							<select class="form-control" name="HowGetetNet" id="GN" onchange="showNextAndTie.call(this,'128A','GN','numb','96','numb')">
								<option></option>
								<option value="01" class="130">Yes, campaign</option>
								<option value="02" class="130">Yes, ANC</option>
								<option value="03" class="130">Yes, Immunization</option>
								<option value="04" class="129">No</option>
							</select>
						</div>
					</div>
				
					

					<div id = "129" class="form-group" style="display: none">
					<br>
						<label for="NetOrigin" class="col-sm-4 control-label">Where did you obtain this mosquito net ? </label>
						<div class="col-sm-8">
							<select class="form-control" name = "NetOrigin" id = "NOr" onchange="showNextAndTie.call(this,'129','NOr','OTnor','96','numb')">
								<option></option>
								<option value = "01" class = "130">Primary health centre/Health post </option>
								<option value = "02" class = "130">Government Hospital </option>
								<option value = "03" class = "130">Private Hospital </option>
								<option value = "04" class = "130">NGO Clinic </option>
								<option value = "05" class = "130">Mission Clinic </option>
								<option value = "06" class = "130">Mosque/Church</option>
								<option value = "07" class = "130">Pharmacy</option>
								<option value = "08" class = "130">Patent medicine store </option>
								<option value = "09" class = "130">Shop/Supermarket </option>
								<option value = "10" class = "130">Open Market </option>
								<option value = "11" class = "130">Hawker </option>
								<option value = "12" class = "130">School</option>
								<option value = "13" class = "130">Community directed distributors(CDD)</option>
								<option value = "96" class = "OTnor">Other</option>
								<option value = "98" class = "130">Don't know</option>
							</select>
						</div>
					</div>
						<div id = "OTnor" class="form-group" style="display: none">
							<label for ='OtherNetOrigin' class="col-sm-4 control-label">Specify source </label>
							<div class="col-sm-8">
								<input class="form-control" type="text" name='OtherNetOrigin'  onblur="nextAndTie.call(this,'130')">
							</div>
						</div>
	

					<div id = "130"  class="form-group" style="display: none">
						<label for="ObtainNet" class="col-sm-4 control-label">Did you buy the net or was it given to you for free ? </label>
						<div class="col-sm-8">
							<select class="form-control" name = "ObtainNet" id = "ObN" onchange="showNextAndTie.call(this,'130','ObN','numb','96','numb')">
								<option></option>
								<option value = "01" class = "131">Bought </option>
								<option value = "02" class = "132">Free </option>
								
								<option value = "08" class = "132">Don't know</option>
							</select>
						</div>
					</div>

					<div id = "131"  class="form-group" style="display: none">
						<label class="col-sm-4 control-label" for = "NetPrice">How much did you pay for the net in naira ? <sub>Write 99998 for don't know</sub></label>
						<div class="col-sm-8">
							<input class="form-control" type="number" name="NetPrice" onblur="nextAndTie.call(this,'132')">
						</div>
					</div>

					<div  class="form-group" id="132" style="display: none">
						<label class="col-sm-4 control-label" for="NetBrand">Observe or ask the type and brand of mosquito net.</label>
						<div class="col-sm-8">
							<select class="form-control" name="NetBrand" id="BR" onchange="showNextAndTie.call(this,'1','BR','numb','196','numb')">
								<option></option>
								<optgroup label="Long-lasting insecticide treated net(LLIN)">
									<option value="11" class="135">PERMANENT</option>
									<option value="12" class="135">OLYSET</option>
									<option value="13" class="135">ICONLIFE</option>
									<option value="14" class="135">DURANET</option>
									<option value="15" class="135">NETPROTECT</option>
									<option value="16" class="135">BASF INTERCEPTOR</option>
									<option value="17" class="135">OTHER/DK BRAND</option>
								</optgroup>
							</select>
						</div>
					</div>

					<div id = "133"  class="form-group" style="display: none">
						<label for="TreatNet" class="col-sm-4 control-label">Since you got the mosquito net, was it ever soaked or dippedin a liquid to kill or repel mosquito ? </label>
						<div class="col-sm-8">
							<select class="form-control" name = "TreatNet" id = "TrN" onchange="showNextAndTie.call(this,'133','TrN','numb','96','numb')">
								<option></option>
								<option value = "01" class = "134">YES </option>
								<option value = "02" class = "135">NO</option>
								
								<option value = "08" class = "135">NOT SURE</option>
							</select>	
						</div>
					</div>

					<div id = "134"  class="form-group" style="display: none">
						<label for="TimeLastTreated" class="col-sm-4 control-label">How many months ago was the net last soaked or dipped ? </label>
						<div class="col-sm-8">
							<select class="form-control" name = "TimeLastTreated" id = "TT" onchange="showNextAndTie.call(this,'134','TT','OTtt','112','numb')">
								<option></option>
								<option value = "00" class = "135">Less than one month </option>
								<option value = "01" class = "OTtt">Less than two years </option>
								<option value = "95" class = "135">More than twenty-four(24) months ago </option>
								<option value = "98" class = "135">Not sure</option>
							</select>
						</div>
					</div>

					<div id = "OTtt"  class="form-group" style="display: none">
							<label for = 'OtherNetTimeLastTreated' class="col-sm-4 control-label">Specify the number of months </label>
						<div class="col-sm-8">
							<input type="number" min = "1" max="24" class="form-control" name='OtherNetTimeLastTreated' onblur="nextAndTie.call(this,'135')">
						</div>
					</div>
				

					<div id = "135"  class="form-group" style="display: none">
						<label for="SleptInNetLastNight" class="col-sm-4 control-label">Did anyone sleep inside this mosquito net last night ? </label>
						<div class="col-sm-8">
							<select class="form-control" name = "SleptInNetLastNight" id = "SN" onchange="showNextAndTie.call(this,'135','SN','numb','96','numb'); getResidentSlept.call(this,'01','137','138')">
								<option></option>
								<option value = "01" class = "137">Yes </option>
								<option value = "02" class = "136">No</option>				
								<option value = "08" class = "138">Not sure</option>
							</select>
						</div>	
					</div>

					<div class="form-group" id = "136" style="display: none" >
						<label for="ReasonNoSleepInNet" class="col-sm-4 control-label">Why didn't anyone sleep inside this net ? </label>
						<div class="col-sm-8">
							<select class="form-control" name = "ReasonNoSleepInNet" id = "NS" onchange="showNextAndTie.call(this,'136','NS','OTns','96','138')">
								<option></option>
								<option value = "01" class = "138">No Mosquitoes</option>
								<option value = "02" class = "138">No Malaria</option>
								<option value = "03" class = "138">Too Hot</option>
								<option value = "04" class = "138">Difficult to Hang</option>
								<option value = "05" class = "138">Don't Like Smell</option>
								<option value = "06" class = "138">Feel 'Closed In' or Constrained</option>
								<option value = "07" class = "138">Net Too Old or Torn</option>
								<option value = "08" class = "138">Net Too Dirty </option>
								<option value = "09" class = "138">Net Not Available Last Night (Washing)</option>
								<option value = "10" class = "138">Feel ITN chemicals are Unsafe</option>
								<option value = "11" class = "138">ITN Provokes Coughing </option>
								<option value = "12" class = "138">Usual User(s) Did Not Sleep Here Last Night</option>
								<option value = "13" class = "138">Net Not Needed Last Night</option>
								<option value = "14" class = "138">No Space to Hang</option>
								<option value = "96" class = "OTns">Other</option>
								<option value = "98" class = "138">Don't know</option>
							</select>
						</div>
					</div>

						<div class="form-group" id = "OTns" style="display: none">
							<label class="col-sm-4 control-label" for = 'OtherReasonNoSleepInNet'>Specify other reasons </label>
							<div class="col-sm-8">
								<input class="form-control" type="text" name='OtherReasonNoSleepInNet'  onblur="nextAndTie.call(this,'138')"class="form-control">
							</div>
						</div>

					

				<div id="numb" class = "numbC">
					
				</div >
					
				<div class="form-group" id = "137">					
				</div>
					
				<div class="form-group" style ="display: none" id="138" >
					<div class="col-sm-offset-4 col-sm-4">
                        <button class="btn btn-primary" type="submit" onclick="nextNet('1')">Save and check another net</button> 
                    </div>
					<div class="col-sm-4">
                        <button class="btn btn-primary" type="submit" onclick="nextNet('0')">Save only</button> 
                    </div>
                </div>	
					
					
		</form>

		<script>
			
			var databaseString = {};
			
			function nextNet(val)
			{
				var str = jQuery.param(databaseString);
				var checkarray=[];
				$("input:checkbox[name=rSleptLN]:checked").each(function(){checkarray.push($(this).val());});
				str +="&rSleptLN="+checkarray;
				str += "&next="+val;//this handles indicate the button clicked
				//alert(document.getElementByName('rSleptLN')[0].checked);				
				//alert(str);
				$.ajax({
							type: "POST",
							url: "submitNet.php",
							cache: false,
							data: str,
							success: function(html)
								{	
									//alert(html);
									window.location=html;
								}
							});
				
			}

			function saveText(GId,Id)
			{
				var key = Id ;
				var valueDef = document.getElementById(GId).value ;

				 databaseString[key] = valueDef ;
			}

			function nextAndTie(nextId,)
			{
				var key = this.name ;
				databaseString[key] = this.value ;
				//alert(databaseString[QuestionDescription]);
				next(nextId);
			}

			function showNextAndTie(tId,pId,cId,flag,nextId)
			{
				var key = this.name ;
				var selectNode = document.getElementsByName(this.name)[0];
			   	var optionNode = selectNode.options[selectNode.selectedIndex];
			   	databaseString[key] = optionNode.value ;

			   	showNext(tId,pId,cId,flag,nextId);
			}
			
			function getResidentSlept(val1, val2, val3){
				var key = this.name ;
				var selectNode = document.getElementsByName(key)[0];
				var dest = document.getElementById(val2);
				if(selectNode.value == val1){
					$.ajax({
							type: "POST",
							url: "getResidentSleptInHouse.php",
							cache: false,
							success: function(html)
								{	
									//alert(html);
									dest.innerHTML = html;				
								}
							});
				}
				nextAndTie.call(this,val3);
			}


		</script>
<script src="Household.js"></script>
</div>
</div>
</div>

<?php include 'footer_afterlogin.php'; ?>