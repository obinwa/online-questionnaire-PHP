<?php 
include 'header_afterlogin.php';
?>
<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">HOUSEHOLD CHARACTERISTICS </h3>
          </div>
          <div class="panel-body">
<div class="col-sm-9">
	<form class="form-horizontal" onsubmit="return false">

		<div class="row row-fluid form-group" id="101">
			<label for = "SourceOdDrinkingWater" class="col-sm-4 control-label" >101)	 What is the main source of drinking water for the members of your house? </label>
			<div class="col-sm-8">
				<select name="SourceOfDrinkingWater" id = "DW" onchange='showNextAndTie.call(this,"101","DW","OT","96","102")' class="form-control">  
					<option></option>
					<optgroup label="Pipe Water">
						<option value="11" class ="104">Piped into dwelling</option>
						<option value="12" class ="104">Piped to yard/plot</option>
						<option value="13" class ="104">Piped to Neighbour</option>
						<option value="14" class ="102">Public tap/Standpipe</option>
					</optgroup>

					<optgroup label="Tubed underground water">
						<option value="21" class="102">Tubed well or borehole</option>
					</optgroup>


					<optgroup label="Dug Well">
						<option value="31" class="102">Protected well</option>
						<option value="32" class="102">Unprotected well</option>
					</optgroup>

					<optgroup label="Water From Spring">
						<option value="41" class ="102">Protected spring</option>
						<option value="42" class ="102">Unprotected spring</option>
					</optgroup>
					
					<optgroup label="Rain Water">
						<option value="51" class ="102">Rain</option>
					</optgroup>

					<optgroup label="Tanker Truck">
						<option value="61" class="102">Tanker truck</option>
					</optgroup>

					<optgroup label="Cart With Small Tank">
						<option value="71" class="102">Cart with small tank</option>
					</optgroup>

					<optgroup label="Surface Water">
						<option value="81" class="102">River/Dam/Lake/Pond/<br>Stream/Canal/Irrigation Channel</option>
					</optgroup>					

					<optgroup label="packaged Water">
						<option value="91" class ="101A">Bottled water</option>
						<option value="91" class="101A">Sachet water/Pure water</option>
					</optgroup>
					
					<option value="96" class="OT">Other, specify</option>

				</select>
			
				<br>
				<div id="OT" class="form-group row row-fluid" style="display: none;">
					<label for="OtherSourceOfDrinkingWater" class="col-sm-4 control-label">Specify other source of water</label>
					<div class="col-sm-8">
						<input type="text" name="OtherSourceOfDrinkingWater" id = "OT-WaterSource" class="form-control" onblur="nextAndTie.call(this,'102')">
					</div>
				</div>
			</div>
		</div>


		<div id="101A" class="row-fluid row form-group" style="display: none;">
			<label for = "SourceOfWaterForOtherPurposes" class="col-sm-4 control-label" >101A)	 What is the main source used by your household for other purposes such as cooking and handwashing? </label>
			<div class="col-sm-8">
				<select name="SourceOfWaterForOtherPurposes" id = "OW" onchange='showNextAndTie.call(this,"101A","OW","OT101A","96","numb")' class="form-control"> 
					<option></option> 
					<optgroup label="Pipe Water">
						<option value="11" class="104">Piped into dwelling</option>
						<option value="12" class="104">Piped to yard/plot</option>
						<option value="13" class="104">Piped to Neighbour</option>
						<option value="14" class="102">Public Tap/Standpipe</option>
					</optgroup>

					<optgroup label="Tubed underground water">
						<option value="21" class="102">Tubed well or borehole</option>
					</optgroup>

					<optgroup label="Dug Well">
						<option value="31" class="102">Protected well</option>
						<option value="32" class="102">Unprotected well</option>
					</optgroup>

					<optgroup label="Water From Spring">
						<option value="41" class="102">Protected spring</option>
						<option value="42" class="102">Unprotected spring</option>
					</optgroup>
					
					<optgroup label="Rain Water" >
						<option value="51" class="102">Rain</option>
					</optgroup>

					<optgroup label="Tanker Truck">
						<option value="61" class="102">Tanker truck</option>
					</optgroup>

					<optgroup label="Cart With Small Tank">
						<option value="71" class="102">Cart with small tank</option>
					</optgroup>

					<optgroup label="Surface Water">
						<option value="81" class="102">River/Dam/Lake/Pond/<br>Stream/Canal/Irrigation Channel</option>
					</optgroup>					

					<optgroup label="packaged Water">
						<option value="91" class="102">Bottled water</option>
						<option value="91" class="102">Sachet water/Pure water</option>
					</optgroup>
					
					<option value="96" class="OT101A">Other, specify</option>

				</select>
				
				<br>
				<div  id="OT101A" class="form-group row row-fluid" style="display: none;">
					<label for="OtherSourceOfWaterForOtherPurposes" class="col-sm-4 control-label">Source of water</label>
					<div class="col-sm-8">
						<input type="text" name="OtherSourceOfWaterForOtherPurposes" onblur="nextAndTie.call(this,'102')" class="form-control">
					</div>
				</div>
			</div>

			</div>

		</div>

	
		<div id="102" class="form-group row row-fluid" style="display: none;">
			<label for="WaterSource" class="col-sm-4 control-label">102)	 Where is that water source located?</label>
			<div class="col-sm-8">
				<select name="WaterSource" id="WtS" onchange="showNextAndTie.call(this,'102','WtS','numb','196','numb')"  class="form-control"> 
					<option></option>
					<option value="01" class="103" >In own dwelling</option>
					<option value="02" class="103">In own yard/plot</option>
					<option value="03" class="103">Elsewhere</option>
				</select>
			</div>
		</div>

		<div id="103" class="form-group row row-fluid" style="display: none;">
		
			<div>
				<label for ="Time" id="TM" class="col-sm-4 control-label">103) 	How long does it take (in minutes) to get there, get water, and come back?</label>
				<div class="col-sm-8">
					<input type="number" name="Time" onblur="nextAndTie.call(this,'104')" class="form-control">
					<sub><label>Type 9998 for I don't know</label></sub>
				</div>
			</div>
		</div>

		<div id="104" class="form-group row row-fluid" style="display: none;">
			
			<label for = "ToiletFacility" class="col-sm-4 control-label" >104) 	 What kind of toilet facility do members of your household usually use? </label>
			<div class="col-sm-8">
				<select name="ToiletFacility" id = "TL" onchange='showNextAndTie.call(this,"104","TL","OTt","96","105")' class="form-control"> 
						<option></option> 
					<optgroup label="Flush or pour flush toilet">
						<option value="11" class="105">Flush to piped sewer system</option>
						<option value="12" class="105">Flush to septic tank</option>
						<option value="13" class="105" >Flush to pit latrine</option>
						<option value="14" class="105" >Flush to somewhere else</option>
						<option value="15" class="105" >Flush, don't know where</option>
					</optgroup>

					<optgroup label="Pit Latrine">
						<option value="21" class="105" >Ventilated improved pit latrine</option>
						<option value="22" class="105" >Pit latrine with slab</option>
						<option value="23" class="105">Pit latrine without slab/Open pit</option>
					</optgroup>


					<optgroup label="Composting Toilet">
						<option value="31" class="105" >Composting Toilet</option>
					</optgroup>

					<optgroup label="Bucket Toilet">
						<option value="41" class="105">Bucket Toilet</option>
					</optgroup>
					
					<optgroup label="Hanging Toilet/Hanging Latrine">
						<option value="51" class="105" >Hanging Toilet/Hanging Latrine</option>
					</optgroup>

					<optgroup label="No Facility/Bush/Field">
						<option value="61" class="107" >No Facility/Bush/Field</option>
					</optgroup>
					
					<option value="96" class="OTt">Other, specify</option>

				</select>
				<br>
				<div  id="OTt" class="form-group row row-fluid" style="display: none;">
					<label for="OtherToiletFacility" class="col-sm-4">Other kind of toilet facility</label>
					<div class="col-sm-8">
						<input type="text" name="OtherToiletFacility" onblur="nextAndTie.call(this,'105')" class="form-control">
					</div>
				</div>
			</div>
		</div>

		<div id="105" class="form-group row row-fluid" style="display: none;">
	
			<label for = "SharedToilet" class="col-sm-4 control-label">105) 	Do you share this toilet facility with other households? </label>
			<div class="col-sm-8">
				<select name="SharedToilet" id = "SHT" onchange='showNextAndTie.call(this,"105","SHT","numb","96","numb")' class="form-control">  
					<option></option>
					<option value="11" class="106">Yes</option>
					<option value="12" class ="107">No</option>
				</select>
			</div>
		</div>

		<div id="106" class="form-group row row-fluid" style="display: none;">
			
			<label for="ToiletUse" class="col-sm-4 control-label">106) 	Including your own household, how many households use this facility ?</label>
			<div class="col-sm-8">
				<select name="ToiletUse" id = "TLu" onchange='showNextAndTie.call(this,"106","TLu","numb","96","numb")' class="form-control">  
					<option></option>
					<option value="01" class="107">One</option>
					<option value="02" class ="107">Two</option>
					<option value="03" class ="107">Three</option>	
					<option value="04" class="107">Four</option>
					<option value="05" class ="107">Five</option>
					<option value="06" class ="107">Six</option>	
					<option value="07" class="107">Seven</option>
					<option value="08" class ="107">Eight</option>
					<option value="09" class ="107">Nine</option>	
					<option value="95" class ="107">Ten or more</option>
					<option value="98" class ="107">Don't know</option>	
				</select>
			</div>
		</div>

		<div id="107" class="form-group row row-fluid" style="display: none;">
			
			<label for = "HouseholdFacilities" class="col-sm-4 control-label" >107) 	 Does your household have:</label>
			<div name="HouseholdFacilities" class="col-sm-8">

				<div class="form-group row row-fluid">
					<label for="Electricity" class="col-sm-4 control-label"> a)	Electricity ?</label>
					<div class="col-sm-8">
						<select name="Electricity" id = "EL" onchange='showNextAndTie.call(this,"107","EL","numb","196","numb")' class="form-control">  
							<option></option>
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>

				<div class="form-group row row-fluid">
			
					<label for="Radio" class="col-sm-4 control-label"> b)	A Radio ?</label>
					<div class="col-sm-8">
						<select name="Radio" id = "RD" onchange='showNextAndTie.call(this,"107","RD","numb","196","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>				
				
				<div class="form-group row row-fluid">			
					<label for="Television" class="col-sm-4 control-label"> c)	A Television ?</label>
					<div class="col-sm-8">
						<select name="Television" id = "Tel" onchange='showNextAndTie.call(this,"107","Tel","numb","196","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>				
			
				<div class="form-group row row-fluid">
					<label for="mPhone" class="col-sm-4 control-label"> d)	A mobile phone ?</label>
					<div class="col-sm-8">
						<select name="mPhone" id = "mP" onchange='showNextAndTie.call(this,"107","mP","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>	

				<div class="form-group row row-fluid">		
					<label for="nonMPhone" class="col-sm-4 control-label"> e) A non-mobile phone ?</label>
					<div class="col-sm-8">
						<select name="nonMPhone" id = "nmP" onchange='showNextAndTie.call(this,"107","nmP","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>				
					
				<div class="form-group row row-fluid">
					<label for="Refrigerator" class="col-sm-4 control-label"> f)	A Refrigerator?</label>
					<div class="col-sm-8">
						<select name="Refrigerator" id = "RF" onchange='showNextAndTie.call(this,"107","RF","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>				
				
				<div class="form-group row row-fluid">
					<label for="cableTV" class="col-sm-4 control-label"> g)	A cable Television?</label>
					<div class="col-sm-8">
						<select name="cableTV" id = "cTV" onchange='showNextAndTie.call(this,"107","cTV","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>	

				<div class="form-group row row-fluid">
					<label for="Generator" class="col-sm-4 control-label"> h)	A generator set?</label>
					<div class="col-sm-8">
						<select name="Generator" id = "GN" onchange='showNextAndTie.call(this,"107","GN","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>				

				<div class="form-group row row-fluid">
					<label for="AirConditioner" class="col-sm-4 control-label"> i)	An air conditioner?</label>
					<div class="col-sm-8">
						<select name="AirConditioner" id = "AC" onchange='showNextAndTie.call(this,"107","AC","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>	
				
				<div class="form-group row row-fluid">		
					<label for="Computer" class="col-sm-4 control-label"> j)	A computer?</label>
					<div class="col-sm-8">
						<select name="Computer" id = "CM" onchange='showNextAndTie.call(this,"107","CM","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>	

				<div class="form-group row row-fluid">
					<label for="EIron" class="col-sm-4 control-label"> k)	Electric Iron?</label>
					<div class="col-sm-8">
						<select name="EIron" id = "eIR" onchange='showNextAndTie.call(this,"107","eIR","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>	

				<div class="form-group row row-fluid">
					<label for="Fan" class="col-sm-4 control-label"> l)	Fan?</label>
					<div class="col-sm-8">
						<select name="Fan" id = "FN" onchange='showNextAndTie.call(this,"107","FN","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="108">Yes</option>
							<option value="No" class ="108">No</option>
						</select>
					</div>
				</div>

			</div>
		</div>	


		<div id="108" class="form-group row row-fluid" style="display: none;">
			
			<label for = "Fuel"  class="col-sm-4 control-label">108) 		What type of fuel does your household mainly use for cooking? </label>
			<div class="col-sm-8">
				<select name="Fuel" id = "FL" onchange='showNextAndTie.call(this,"108","FL","OTf","96","109")' class="form-control">  
					<option></option>
					<option value="01" class ="109">Electricity</option>
					<option value="02" class ="109">Liquid propane gas/Cylinder</option>
					<option value="03" class ="109">Natural Gas</option>
					<option value="04" class ="109">Biogas</option>
					<option value="05" class ="109">Kerosene</option>
					<option value="06" class ="109">Coal, Lignite</option>
					<option value="07" class ="109">Charcoal</option>
					<option value="08" class ="109">Wood</option>
					<option value="09" class ="109">Straw/Shrubs/Grass/Sawdust</option>
					<option value="10" class ="109">Agricultural crop</option>
					<option value="11" class ="109">Animal Dung</option>
					<option value="95" class ="109">No food cooked in household</option>
				
					<option value="96" class="OTf">Other, specify</option>

				</select>

				<br>
				<div id="OTf" class="form-group row row-fluid" style="display: none;">
					<label for="Other_Fuel" class="col-sm-4 control-label">Other type of fuel</label>
					<div class="col-sm-8">
						<input type="text" name="Other_Fuel" onblur="nextAndTie.call(this,'109')" class="form-control">
					</div>
				</div>
			</div>
		</div>		

		<div id="109" class="form-group row row-fluid" style="display: none;">
			
			<label for = "FloorMaterial" class="col-sm-4 control-label">109) 		What is the main material of the floor of your house? </label>
			<div class="col-sm-8">
				<select name="FloorMaterial" id = "FlM" onchange='showNextAndTie.call(this,"109","FlM","OTfm","96","110")' class="form-control">  
					<option></option>
					<optgroup label="Natural Floor">
						<option value="11" class ="110">Earth/Sand</option>
						<option value="12" class ="110">Dung</option>
					</optgroup>

					<optgroup label="Rudimentary Floor">
						<option value="21" class="110">Wood planks</option>
						<option value="22" class="110">Palm/Bamboo</option>
					</optgroup>


					<optgroup label="Finished Floor">
						<option value="31" class="110">Parquet or polished wood</option>
						<option value="32" class="110">Vinyl or Asphalt</option>
						<option value="33" class="110">Ceramic tiles</option>
						<option value="34" class="110">Cement</option>
						<option value="35" class="110">Carpet</option>
					</optgroup>
					
					<option value="96" class="OTfM">Other, specify</option>

				</select>
				
				<br>
				<div  id="OTfM" class="form-group row row-fluid" style="display: none;">
					<label for="OtherFloorMaterial" class="col-sm-4 control-label">Other kind of floor material </label>
					<div class="col-sm-8">
						<input type="text" name="OtherFloorMaterial" onblur="nextAndTie.call(this,'110')" class="form-control">
					</div>
				</div>
			</div>
		</div>

		<div id="110" class="form-group row row-fluid" style="display: none"> 
	
			<label for = "RoofMaterial"  class="col-sm-4 control-label">110)		What is the main material of the roof of your house? </label>
			<div class="col-sm-8">
				<select name="RoofMaterial" id = "RfM" onchange='showNextAndTie.call(this,"110","RfM","OTrm","96","111")' class="form-control">  
					<option></option>
					<optgroup label="Natural Roofing">
						<option value="11" class ="111">No Roof</option>
						<option value="12" class ="111">Thatch/Palm leaf</option>
						<option value="13" class ="111">Sod</option>
					</optgroup>

					<optgroup label="Rudimentary Roof">
						<option value="21" class="111">Rustic mat</option>
						<option value="22" class="111">Palm/Bamboo</option>
						<option value="23" class="111">Wood Planks</option>
						<option value="24" class="111">Cardboard</option>
					</optgroup>


					<optgroup label="Finished Roof">
						<option value="31" class="111">Zinc/Metal</option>
						<option value="32" class="111">Wood</option>
						<option value="33" class="111">Celamine/Cement Fiber</option>
						<option value="34" class="111">Ceramic tiles</option>
						<option value="35" class="111">Cement</option>
						<option value="36" class="111">Roofing Shingles</option>
					</optgroup>
					
					<option value="96" class="OTrM">Other, specify</option>

				</select>
			
				<br>
				<div  id="OTrM" class="form-group row row-fluid" style="display: none;">
					<label for="OtherRoofMaterial" class="col-sm-4 control-label">Other kind of roof material</label>
					<div class="col-sm-8">
						<input type="text" name="OtherRoofMaterial" onblur="nextAndTie.call(this,'111')" class="form-control">
					</div>
				</div>
			</div>
		</div>

		<div id="111" class="form-group row row-fluid" style="display: none;">
		
			<label for = "ExWallMaterial"  class="col-sm-4 control-label">111)		What is the main material of the roof of your house? </label>
			<div class="col-sm-8">
				<select name="ExWallMaterial" id = "EWM" onchange='showNextAndTie.call(this,"111","EWM","OTewm","96","112")' class="form-control">  
					<option></option>
					<optgroup label="Natural Walls">
						<option value="11" class ="112">No Wall</option>
						<option value="12" class ="112">Cane/Palm/Trunks </option>
						<option value="13" class ="112">Dirt</option>
					</optgroup>

					<optgroup label="Rudimentary Walls">
						<option value="21" class="112">Bamboo with mud</option>
						<option value="22" class="112">Stone with mud</option>
						<option value="23" class="112">Uncovered Adobe</option>
						<option value="24" class="112">Plywood</option>
						<option value="25" class="112">Cardboard </option>
						<option value ="26" class="112">Reused wood </option>
						
					</optgroup>

					<optgroup label="Finished Walls">
						<option value="31" class="112">Cement</option>
						<option value="32" class="112">Stone with lime/Cement</option>
						<option value="33" class="112">Bricks</option>
						<option value="34" class="112">Cement Blocks</option>
						<option value="35" class="112">Covered Adobe</option>
						<option value="36" class="112">Wood planks/Shingles</option>
					</optgroup>
					
					<option value="96" class="OTewm">Other, specify</option>

				</select>
			
				<br>
				<div  id="OTewm" class="form-group row row-fluid" style="display: none;">
					<label for="Other_ExWallMaterial" class="col-sm-4 control-label">Specify other option</label>
					<div class="col-sm-8">
						<input type="text" name="Other_ExWallMaterial" onblur="nextAndTie.call(this,'112')" class="form-control">
					</div>
				</div>
			</div>
		</div>

		<div id="112" class="form-group row row-fluid" style="display: none;">

			<label for="RoomNumber" class="col-sm-4 control-label">112)	 How many rooms in total are in your household, including rooms for sleeping and all other rooms ?</label>INCLUDING STRUCTURES BELONGING TO THE HOUSEHOLD DWELLERS
			<div class="col-sm-8">
				<input type="number" name="RoomNumber" onblur="nextAndTie.call(this,'112A')" class="form-control">
			</div>
		</div>

		<div id="112A" class="form-group row row-fluid" style="display: none;">

			<label for="SleepRoomNum" class="col-sm-4 control-label">112A)		 How many rooms in this household are used for sleeping  ?</label>
			<div class="col-sm-8">
				<input type="number" name="SleepRoomNum" onblur="nextAndTie.call(this,'112B')" class="form-control">
			</div>
		</div>

		<div id="112B" class="form-group row row-fluid" style="display: none;">
		
			<label for="SleepFacility" class="col-sm-4 control-label">112B)		 How many sleeping facilities are currently in use in this household, including any beds, mattresses, mats, or rugs ?</label>
			<div class="col-sm-8">
				<input type="number" name="SleepFacility" onblur="nextAndTie.call(this,'113')" class="form-control">
			</div>
		</div>


		<div id="113" class="form-group row row-fluid" style="display: none;">
	
			<label for = "Accessories" class="col-sm-4 control-label" >113) 	 Does any member of this household own:</label>
			<div name="Accessories" class="col-sm-8">

				<div  class="form-group row row-fluid">				
					<label for="Watch" class="col-sm-4 control-label"> a)	A watch ?</label>
					<div class="col-sm-8">
						<select name="Watch" id = "WT" onchange='showNextAndTie.call(this,"113","WT","numb","196","numb")' class="form-control">  
							<option></option>
							<option value="Yes" class="114">Yes</option>
							<option value="No" class ="114">No</option>
						</select>
					</div>
				</div>

				<div class="form-group row row-fluid">
					<label for="Phone" class="col-sm-4 control-label"> b)	A Mobile phone ?</label>
					<div class="col-sm-8">
						<select name="Phone" id = "MP" onchange='showNextAndTie.call(this,"113","MP","numb","196","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="114">Yes</option>
							<option value="No" class ="114">No</option>
						</select>
					</div>
				</div>				
				
				<div class="form-group row row-fluid">
					<label for="Bicycle" class="col-sm-4 control-label"> c)	A Bicycle ?</label>
					<div class="col-sm-8">
						<select name="Bicycle" id = "BCc" onchange='showNextAndTie.call(this,"113","BCc","numb","196","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="114">Yes</option>
							<option value="No" class ="114">No</option>
						</select>
					</div>
				</div>				
			
				<div class="form-group row row-fluid">
					<label for="MotorCycle" class="col-sm-4 control-label"> d)	A motorcycle or motor scooter ?</label>
					<div class="col-sm-8">
						<select name="MotorCycle" id = "MCs" onchange='showNextAndTie.call(this,"113","MCs","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="114">Yes</option>
							<option value="No" class ="114">No</option>
						</select>
					</div>
				</div>	

				<div class="form-group row row-fluid">
					<label for="AnimalCart" class="col-sm-4 control-label"> e) An animal drawn cart ?</label>
					<div class="col-sm-8">
						<select name="AnimalCart" id = "AdC" onchange='showNextAndTie.call(this,"113","AdC","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="114">Yes</option>
							<option value="No" class ="114">No</option>
						</select>
					</div>
				</div>				
					
				<div class="form-group row row-fluid">
					<label for="Car" class="col-sm-4 control-label"> f)	A Car or Truck?</label>
					<div class="col-sm-8">
						<select name="Car" id = "CT" onchange='showNextAndTie.call(this,"113","CT","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="114">Yes</option>
							<option value="No" class ="114">No</option>
						</select>
					</div>
				</div>				
				
				<div class="form-group row row-fluid">
					<label for="Boat" class="col-sm-4 control-label"> g)	A boat with a motor?</label>
					<div class="col-sm-8">
						<select name="Boat" id = "BT" onchange='showNextAndTie.call(this,"113","BT","numb","96","numb")' class="form-control"> 
							<option></option> 
							<option value="Yes" class="114">Yes</option>
							<option value="No" class ="114">No</option>
						</select>
					</div>
				</div>	
			
			</div>	
		</div>


		<div id="114" class="form-group row row-fluid" style="display: none;">
			
			<label for="AgricLand" class="col-sm-4 control-label">114)	Does any member of this household own any agricultural land ?</label>
			<div class="col-sm-8">
				<select name="AgricLand" id = "AL" onchange='showNextAndTie.call(this,"114","AL","numb","96","numb")' class="form-control"> 
					<option></option> 
					<option value="Yes" class="115">Yes</option>
					<option value="No" class ="116">No</option>
				</select>
			</div>
		</div>

		<div id="115" class="form-group row row-fluid" style="display: none;">
		
			<label for="HectaresQuestions" class="col-sm-4 control-label">115)		How many hectares of agricultural land do members of this household own ?</label>
			<div class="col-sm-8">
				<div class="form-group row row-fluid">
					<label>STANDARD PLOT = 60FT * 120FT (18M * 36M)<br>
							1 HECTARE = 6 PLOTS<br>
							IF 95.0 OR MORE PLOTS, RECORD HECTARES</label>
							<br>
				</div>
			

				<div name = "HectaresQuestions" class="form-group row row-fluid">
					<label for="plots" class="col-sm-4 control-label">PLOTS ......</label>
					<div class="col-sm-8">
						<input type="number" name="Number_PlotsOfLand" min="0" max="94.99"  onblur ="nextAndTie.call(this,'116')" class="form-control">
					</div>
					
					<br><br>
					<label for="hectares" class="col-sm-4 control-label">HECTARES ......</label>
					<div class="col-sm-8">
						<input type="number" name="Number_HectaresOfLand" min="0" max="94"  onblur="nextAndTie.call(this,'116')" class="form-control">
					</div>
					

					<label class="col-sm-4 control-label">95 hectares or more</label>
					<div class="col-sm-8 radio">
						<input type="radio" id ="mHectares" name="SizeOfLand" value="9950" onclick="nextAndTieRadio.call('115','116','SizeOfLand')" >
					</div>

					<label class="col-sm-4 control-label">Don't know</label>
					<div class="col-sm-8 radio">
						<input type="radio" id="DK" name="SizeOfLand" value="9958" onclick="nextAndTieRadio.call(this,'115','116','SizeOfLand')" >
					</div>
				</div>

			</div>

		</div>

		<div id="116" class="form-group row row-fluid"  style="display: none;">
		
			<label for="OwnAnimal" class="col-sm-4 control-label">116)	Does your household own any livestock, herds, other farm animals, or poultry ?</label>
			<div class="col-sm-8">
				<select name="OwnAnimal" id = "HN" onchange='showNextAndTie.call(this,"116","HN","numb","l95","117")' class="form-control">  
					<option></option>
					<option value="Yes" class="117">Yes</option>
					<option value="No" class="118">No</option>
				</select>
			</div>
		</div>	
		

		<div id="117"  class="form-group row row-fluid" style="display: none;" >
			
			<label for = "AnimalNum"  class="col-sm-4 control-label">117)		How many of the following animals does this household own?</label>

			<div name="AnimalNum" class="col-sm-8">
				<div class="form-group row row-fluid">
					<label for="Milk_Cattle" class="col-sm-4 control-label" > a)	Milk Cows or Bulls</label>
					<div class="col-sm-8">
						<select name="Milk_Cattle" id = "CB" onchange='showNextAndTie.call(this,"117","CB","OTCn","<95","118")' class="form-control">  
							<option></option>
							<option value="00" class="118">None</option>
							<option value="lt95" class="OTCn">Less than 95</option>
							<option value="95" class="118">95 or more</option>
							<option value="98" class ="118">Unknown</option>
						</select>
						<br>

						<div  id="OTCn" class="form-group row row-fluid"  style="display: none;" >
							<label for="NumberOfMilkCattle" class="col-sm-4 control-label">Specify Number,ENTER '00' FOR NONE, '95' WHEN NUMBER IS 95 0R GREATER, AND 98 FOR UNKNOWN </label>
							<div class="col-sm-8">	
								<input type="number" name="NumberOfMilkCattle" min="1" max="94" onblur="nextAndTie.call(this,'118')" class="form-control">
							</div>
						</div>
					</div>
				</div>
				


				<div  class="form-group row row-fluid">
					<label for="Other_Cattle" class="col-sm-4 control-label"> b)	Other Cows or Bulls</label>
					<div class="col-sm-8">
						<select name="Other_Cattle" id = "OTC" onchange='showNextAndTie.call(this,"117","OTC","OToc","<95","118")' class="form-control">  
							<option></option>
							<option value="00" class="118">None</option>
							<option value="lt95" class="OToc">Less than 95</option>
							<option value="95" class="118">95 or more</option>
							<option value="98" class ="118">Unknown</option>
						</select>
						<br>

					<div  id="OToc" class="form-group row row-fluid" style="display: none;" >
						<label for="NumberOfOtherCattle" class="col-sm-4 control-label">Specify Number ENTER '00' FOR NONE, '95' WHEN NUMBER IS 95 0R GREATER, AND 98 FOR UNKNOWN</label>
						<div class="col-sm-8">
							<input type="number" name="NumberOfOtherCattle" onblur="nextAndTie.call(this,'118')" class="form-control">
						</div>
					</div>
				</div>
			</div>		
				
				<div  class="form-group row row-fluid">
					<label for="BeastOfBurden" class="col-sm-4 control-label"> c)	Horses, Donkeys, or Mules ? </label>
					<div class="col-sm-8">
						<select name="BeastOfBurden" id = "BB" onchange='showNextAndTie.call(this,"117","BB","OTbb","<95","118")' class="form-control">  
							<option></option>
							<option value="00" class="118">None</option>
							<option value="lt95" class="OTbb">Less than 95</option>
							<option value="95" class="118">95 or more</option>
							<option value="98" class ="118">Unknown</option>
						</select>
						<br>

					<div  id="OTbb" class="form-group row row-fluid"  style="display: none;">
						<label for="NumberOfBeastOfBurden" class="col-sm-4 control-label">Specify Number ENTER '00' FOR NONE, '95' WHEN NUMBER IS 95 0R GREATER, AND 98 FOR UNKNOWN</label>
						<div class="col-sm-8">
							<input type="number" name="NumberOfBeastOfBurden" onblur="nextAndTie.call(this,'118')" class="form-control">
						</div>
					</div>
				</div>	
			</div>			
			
			<div  class="form-group row row-fluid">
					<label for="Goats" class="col-sm-4 control-label"> d)	Goats ?</label>
					<div class="col-sm-8">
						<select name="Goats" id = "GT" onchange='showNextAndTie.call(this,"117","GT","OTgt","<95","118")' class="form-control">  
							<option></option>
							<option value="00" class="118">None</option>
							<option value="lt95" class="OTgt">Less than 95</option>
							<option value="95" class="118">95 or more</option>
							<option value="98" class ="118">Unknown</option>
						</select>
						<br>

					<div  id="OTgt" class="form-group row row-fluid" style="display: none;">
						<label for="NumberOfGoats" class="col-sm-4 control-label">Specify Number ENTER '00' FOR NONE, '95' WHEN NUMBER IS 95 0R GREATER, AND 98 FOR UNKNOWN</label>
						<div class="col-sm-8">
							<input type="number" name="numberOfGoats" onblur="nextAndTie.call(this,'118')" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div  class="form-group row row-fluid">
				<label for="Sheep" class="col-sm-4 control-label"> e)	Sheep ?</label>
				<div class="col-sm-8">
					<select name="Sheep" id = "SH" onchange='showNextAndTie.call(this,"117","SH","OTSh","<95","118")' class="form-control">  
						<option></option>
						<option value="00" class="118">None</option>
						<option value="lt95" class="OTSh">Less than 95</option>
						<option value="95" class="118">95 or more</option>
						<option value="98" class ="118">Unknown</option>
					</select>
					<br>

					<div  id="OTSh" class="form-group row row-fluid" style="display: none;">
						<label for="NumberOfSheep" class="col-sm-4 control-label">Specify Number ENTER '00' FOR NONE, '95' WHEN NUMBER IS 95 0R GREATER, AND 98 FOR UNKNOWN</label>
						<div class="col-sm-8">	
							<input type="number" name="NumberOfSheep" onblur="nextAndTie.call(this,'118')" class="form-control">
						</div>
					</div>
				</div>
			</div>			
					
			<div  class="form-group row row-fluid">
				<label for="Chicken" class="col-sm-4 control-label"> f)	Chickens or other poultry</label>
				<div class="col-sm-8">
					<select name="Chicken" id = "CH" onchange='showNextAndTie.call(this,"117","CH","OTchp","<95","118")' class="form-control">  
						<option></option>
						<option value="00" class="118">None</option>
						<option value="lt95" class="OTchp">Less than 95</option>
						<option value="95" class="118">95 or more</option>
						<option value="98" class ="118">Unknown</option>
					</select>
					<br>

					<div  id="OTchp" class="form-group row row-fluid" style="display: none;">
						<label for="NumberOfChicken" class="col-sm-4 control-label">Specify Number ENTER '00' FOR NONE, '95' WHEN NUMBER IS 95 0R GREATER, AND 98 FOR UNKNOWN</label>
						<div class="col-sm-8">
							<input type="number" name="NumberOfChicken" onblur="nextAndTie.call(this,'118')" class="form-control">
						</div>
					</div>
				</div>
			</div>	

			</div>	
		</div>	


		<div id="118" class="form-group row row-fluid" style="display: none;">
			
			<label for="BankAccount" class="col-sm-4 control-label">118)		Does any member of this household have a bank account ?</label>
			<div class="col-sm-8">
				<select name="BankAccount" id = "BK" onchange='showNextAndTie.call(this,"118","BK","numb","l95","119")' class="form-control">  
					<option></option>
					<option value="Yes" class="119">Yes</option>
					<option value="No" class="119">No</option>
				</select>
			</div>
		</div>	


		<div id="119" class="form-group row row-fluid" style="display: none;">
			
			<label for="Fumigation" class="col-sm-4 control-label">119)		At any time in the past 12 months, has anyone come into your dwelling to spray the interior walls against mosquito ?</label>
			<div class="col-sm-8">
				<select name="Fumigation" id = "FM" onchange='showNextAndTie.call(this,"119","FM","numb","l95","numb")' class="form-control">  
					<option></option>
					<option value="Yes" class="120">Yes</option>
					<option value="No" class="121">No</option>
					<option value ="dontKnow" class="121">Don't know</option>
				</select>
			</div>
		</div>	

		<div id="120" class="form-group row row-fluid" style="display: none;">
		
			<label for="Fumigator" class="col-sm-4 control-label"> 120)		Who sprayed the dwelling?</label>
			<div class="col-sm-8">
				<select name="Fumigator" id = "FMr" onchange='showNextAndTie.call(this,"120","FMr","OTfr","X","121")' class="form-control">  
					<option></option>
					<option value="A" class="121">Government Worker/Programn</option>
					<option value="B" class="121">Private company</option>
					<option value="C" class="121">Non-governmental Organization(NGO)</option>
					<option value="Z" class="121">Don't know</option>
					<option value="X" class="OTfr">Other</option>
				</select>

				<br>
				<div  id="OTfr" class="form-group row row-fluid" style="display: none;">
					<label for="OtherFumigator">Specify other fumigator</label>
					<input type="text" name="OtherFumigator" onblur="nextAndTie.call(this,'121')" class="form-control">
				</div>
			</div>
		</div>
	
	
		<div id="121" class="form-group row-fluid row" style="display: none;">
			
			<label for="haveMNet" class="col-sm-4 control-label">121)	Does your household have any mosquito nets?</label>
			<div class="col-sm-8">
				<select name="haveMNet" id = "HMN" onchange='showNextAndTie.call(this,"121","HMN","numb","l95","numb")' class="form-control">  
					<option></option>
					<option value="Yes" class="121A">Yes</option>
					<option value="No" class="122">No</option>
				</select>
			</div>
		</div>	


		<div id="121A" class="form-group row row-fluid"  style="display: none;">
		
			<label for="SleepInNet" class="col-sm-4 control-label">121A)	Did anyone in your household sleep inside a mosquito net last night ?</label>
			<div class="col-sm-8">
				<select name="SleepInNet" id = "SIn" onchange='showNextAndTie.call(this,"121","SIn","OTsi","Yes","numb")' class="form-control">  
					<option></option>
					<option value="Yes" class="OTNsi">Yes</option>
					<option value="No" class="121B">No</option>
				</select>

				<div id="OTNsi" class="form-group" style="display: none;">
					<div class="form-group row row-fluid">
						<label for="NumberOfPeople_SleptInNet" class="col-sm-4 control-label">If yes, how many members of your household slept under LLIN</label>
						<div class="col-sm-8">
							<input type="number" name="NumberOfPeople_SleptInNet" onblur="nextAndTie.call(this,'125')" class="form-control">
						</div>
					</div>
				
					<div class="form-group row row-fluid">
						<label for="Cnum" class="col-sm-4 control-label">If yes, number of children under 5 years who slept under LLIN</label>
						<div class="col-sm-8">
							<input type="number" name="NumberOfChildrenUnder5_SleptInNet" class="form-control" onblur="nextAndTie.call(this,'125')">
						</div>
					</div>

					<div class="form-group row row-fluid">
						<label for="Cnum" class="col-sm-4 control-label">If yes, number of children aged 5 to 12 years who slept under LLIN</label>
						<div class="col-sm-8">
							<input type="number" name="NumberOfAged5-12_SleptInNet" class="form-control" onblur="nextAndTie.call(this,'125')">
						</div>
					</div>

					<div class="form-group row row-fluid">
						<label for="Pnum" class="col-sm-4 control-label">If yes, number of pregnant women who slept under LLIN</label>
						<div class="col-sm-8">
							<input type="number" name="NumberOfPregWomen_SleptInNet" class="form-control" onblur="nextAndTie.call(this,'125')">
						</div>
					</div>

				<br><br>
					<div class="col-sm-8">
						<!--button onclick="next('125')">Next Question</button-->
					</div>
					
				</div>
			</div>
		</div>	

			

		<div id="121B" class="form-group row row-fluid" style="display: none;">
	
			<label for="EncourageMentToSleepInNet" class="col-sm-4 control-label">What would encourage you to sleep inside a mosquito net?</label>
			<div class="col-sm-8">
				<select name="EncourageMentToSleepInNet" id = "SN" onchange='showNextAndTie.call(this,"121B","SN","OTEsn","X","125")' class="form-control">  
					<option></option>
					<option value="A" class="125">If net did not smell</option>
					<option value="B" class="125">Had a different shape/size</option>
					<option value="C" class="125">Had a different colour</option>
					<option value="D" class="125">If net were not itchy/irritating</option>
					<option value="E" class="125">If net were bigger/not claustrophobic</option>
					<option value="Z" class="125">Don't know</option>
					<option value="X" class="OTEsn">Other</option>
				</select>
			
				<div  id="OTEsn" class="form-group row row-fluid" style="display: none;">
					<label for="OtherEncouragementToSleepInNet" class="col-sm-4 control-label">Specify other reasons</label>
					<input type="text" name="OtherEncouragementToSleepInNet" onblur="nextAndTie.call(this,'125')" class="form-control">
				</div>
			</div>
		</div>
		

		<div id="122" class="form-group row row-fluid" style="display: none;">
		
			<label for="WhyNoNet" class="col-sm-4 control-label">122)	Why doesn't your household have any mosquito net ?</label>
			<div class="col-sm-8">
				<select name="WhyNoNet" id = "WN" onchange='showNextAndTie.call(this,"122","WN","OTwn","X","123")' class="form-control">  
					<option></option>
					<option value="A" class="123">No mosquitoes</option>
					<option value="B" class="123">Not available</option>
					<option value="C" class="123">Don't like to use nets</option>
					<option value="D" class="123">Too expensive</option>
					<option value="X" class="OTwn">Other</option>
				</select>

				<br>
				<div id="OTwn" class="form-group row row-fluid" style="display: none;">
					<label for="OtherReasonForNoNet" class="col-sm-4 control-label">Specify other reasons</label>
					<input type="text" name="Other_WhyNoNet" onblur="nextAndTie.call(this,'123')" class="form-control">
				</div>
			</div>
		</div>

		<div id="123" class="form-group row row-fluid" style="display: none;">
			
			<label for="ownNet" class="col-sm-4 control-label">123)	Has your household ever owned a mosquito net ?</label>
			<div class="col-sm-8">
				<select name="ownNet" id = "ON" onchange='showNextAndTie.call(this,"123","ON","numb","l95","numb")' class="form-control">  
					<option></option>
					<option value="Yes" class="124">Yes</option>
					<option value="No" class="139">No</option>
					<option value="No" class="139">Don't know</option>
				</select>
			</div>
		</div>	

		<div id="124" class="form-group row row-fluid" style="display: none;">
			
			<label for="WhyLackNet" class="col-sm-4 control-label">124)	Why doesn't your household no longer have any mosquito net ?</label>
			<div class="col-sm-8">
				<select name="WhyLackNet" id = "LN" onchange='showNextAndTie.call(this,"124","LN","OTln","X","139")' class="form-control">  
					<option></option>
					<option value="A" class="139">No mosquitoes</option>
					<option value="B" class="139">Not available</option>
					<option value="C" class="139">Don't like to use nets</option>
					<option value="D" class="139">Too expensive</option>
					<option value="E" class="139">net was old</option>
					<option value="F" class="139">Threw awway net</option>
					<option value="G" class="139">Have window nets</option>
					<option value="X" class="OTln">Other</option>
				</select>
				
				<br>
				<div  id="OTln" class="form-group row row-fluid" style="display: none;">
					<label for="Other_WhyLackNet" class="col-sm-4 control-label">Specify other reasons</label>
					<input type="text" name="Other_WhyLackNet" onblur="nextAndTie.call(this,'139')" class="form-control">
				</div>
			</div>
		</div>

		<div id="125" class="form-group row row-fluid" style="display: none;">
		
			<label for="NetNumber" class="col-sm-4 control-label">125)		How many mosquito nets does your household have ? </label>
			<div class="col-sm-8">
				<select name="NetNumber" id = "NN" onchange='showNextAndTie.call(this,"125","NN","numb","numb","numb")' class="form-control">  
					<option></option>
					<option value="01" class="126">One</option>
					<option value="02" class="126">Two</option>
					<option value="03" class="126">Three</option>
					<option value="04" class="126">Four</option>
					<option value="05" class="126">Five</option>
					<option value="06" class="126">Six</option>
					<option value="07" class="126">Seven or more</option>
				</select>
			</div>
		</div>

		<div id="126" class="form-group row row-fluid" style="display: none;">
		
			<label for="NetNumberForPreviousNight" class="col-sm-4 control-label">126)How many existing LLINs in your household was used the previous night ? </label>
			<div class="col-sm-8">
				<select name="NetNumberForPreviousNight" id = "NnumLastNight" onchange='showNextAndTie.call(this,"126","NumLastNight","numb","numb","numb")' class="form-control">  
					<option></option>
					<option value="01" class="numb">One</option>
					<option value="02" class="numb">Two</option>
					<option value="03" class="numb">Three</option>
					<option value="04" class="numb">Four</option>
					<option value="05" class="numb">Five</option>
					<option value="06" class="numb">Six</option>
					<option value="07" class="numb">Seven or more</option>
				</select>
			</div>
		</div>

		<div id="numb" class="numbC">
			
		</div>

		<div  id="139" >
			
		</div>
		<div>

		</div>
	<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
				<input type="button" class="btn btn-primary" value="Submit" onclick="submitTest()">
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
			
			var data = jQuery.param(databaseString);			
			//document.getElementById('my').innerHTML=str;
			//alert(data) ;
			$.ajax({
			type: "POST",
			url: "submitHouseholdCharacteristics.php",
			data: data,
			cache: false,
			success: function(html)
				{					
					
					window.location = html;
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


</script>

<?php include 'footer_afterlogin.php'; ?>