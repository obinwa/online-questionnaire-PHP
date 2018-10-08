<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">KNOWLEDGE OF MALARIA </h3>
          </div>
          <div class="panel-body">
<div class="col-sm-9">
<form class="form-horizontal" onsubmit="return false" method="POST" > <!--onclick="return false"-->
		<div>
			<div id="r501" class="row-fluid row form-group">
				<label for="hadMalaria" class="col-sm-4 control-label">Have you ever heard of an illness called malaria ?</label>
				<div class="col-sm-8">
					<select name="hadMalaria" id="hM" onchange="showNextAndTie.call(this,'r501','hM','numb','06','r502')" class="form-control">
						<option></option>
						<option value="01" class="r502">Yes</option>
						<option value="02" class="r516">No</option>
					</select>
				</div>

			</div>

			<div id="r502" class="row-fluid row form-group" style="display: none">
				<label for="Symptoms" class="col-sm-6 control-label">How can you tell if you have malaria ?</label>
				<div name='Symptoms' class="col-sm-6">
					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-offset-2 col-sm-8 checkbox">
							<input type="checkbox" value="A" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')"> FEVER</label>
					</div>

					
					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-offset-2 col-sm-8 checkbox">
						<!--<div class="col-sm-4">-->
							<input type="checkbox" value="B" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">CHILLS/SHIVERING</label>
						<!--</div>-->
					</div>


					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="C" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">HEADACHE </label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-offset-2 col-sm-8 checkbox">
							<input type="checkbox" value="D" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">JOINT PAIN</label>
					</div>

					<div class="row row-fluid form-group ">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="E" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">POOR APPETITE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="F" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="F" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">VOMITING</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="G" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="G" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">CONVULSION</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="H" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="H" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">COUGH</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="I" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="I" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">CATARRGH/NASAL CONGESTION</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="X" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'OTsm')">OTHER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="Z" name="Malaria_Symptoms" onclick="nextAndTieCheck.call(this,'r503')">DON'T KNOW</label>
					</div>
				</div>

				
			</div>

				<div  id="OTsm" class="form-group row row-fluid" style="display: none">
					<label for="OtherSymptoms" class="col-sm-4 col-sm-offset-4 control-label">Specify other </label>
					<div class="col-sm-4">
						<input type="text" name="OtherSymptoms" onblur="nextAndTie.call(this,'r503')" class="form-control">
					</div>
				</div>
			

			<div id="r503"  class="row-fluid row form-group" style="display: none">
				<label for="Risks" class="col-sm-6 control-label">Who are the most at risk to get malaria ?</label>
				<div name="Risks" class="col-sm-6">

					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox ">
							<input type="checkbox" value="A" name="Malaria_Risks" onclick="nextAndTieCheck.call(this,'r504')">CHILDREN</label>
					</div>

		
					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="B" name="Malaria_Risks" onclick="nextAndTieCheck.call(this,'r504')">PREGNANT WOMEN</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="C" name="Malaria_Risks" onclick="nextAndTieCheck.call(this,'r504')">ADULTS</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="D" name="Malaria_Risks" onclick="nextAndTieCheck.call(this,'r504')">ELDERLY</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="E" name="Malaria_Risks" onclick="nextAndTieCheck.call(this,'r504')">EVERYONE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="Z" name="Malaria_Risks" onclick="nextAndTieCheck.call(this,'r504')">DON'T KNOW</label>
					</div>
				</div>

			</div>

			<div id="r504"  class="form-group row row-fluid" style="display: none">
				<label for="Causes" class="col-sm-6 control-label">What causes malaria ?</label>
				<div name="Causes" class="col-sm-6">
				
					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="A" name="Causes_Malaria" onclick="nextAndTie.call(this,'r505')">MOSQUITOES</label>
					</div>

					
					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="B" name="Causes_Malaria" onclick="nextAndTie.call(this,'r505')">STAGNANT WATER</label>
					</div>

					
					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="C"  name="Causes_Malaria" onclick="nextAndTieCheck.call(this,'r505')">DIRTY SURROUNDING</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="D"  name="Causes_Malaria" onclick="nextAndTieCheck.call(this,'r505')">BEER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="E" name="Causes_Malaria"  onclick="nextAndTieCheck.call(this,'r505')">POOR APPETITE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="F" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="F" name="Causes_Malaria" onclick="nextAndTieCheck.call(this,'r505')">CERTAIN FOODS</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="X" name="Causes_Malaria" onclick="nextAndTieCheck.call(this,'OTcs')">OTHER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="Z" name="Causes_Malaria" onclick="nextAndTieCheck.call(this,'r509')">DON'T KNOW</label>
					</div>
				</div>
				</div>

			
			<div class="row row-fluid form-group" id="OTcs" style="display: none">
					<label for="Other" class="col-sm-4 col-sm-offset-4 control-label">Specify other </label>
					<div class="col-sm-4">
						<input type="text" name="Other" onblur="nextAndTie.call(this,'r505')" class="form-control">
					</div>
			</div>
			


			
			<div id="r505" class="form-group row row-fluid" style="display: none">
				<label for="avoidMalaria" class="col-sm-4 control-label">Are there ways to avoid getting malaria ?</label>
				<div class="col-sm-8">
					<select name="WaysOfAvoidingMalaria" id="aM" onchange="showNextAndTie.call(this,'r505','aM','numb','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="r506">Yes</option>
						<option value="02" class="r509">No</option>
					</select>
				</div>
			</div>

			<div id="r506" class="form-group row row-fluid" style="display: none">
				<label for="Avoidance"  class="col-sm-6 control-label">What are the ways to avoid getting malaria ?</label>
				<div name='DMalaria_Avoidance' class="col-sm-6">
				
					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="A" name="Malaria_Avoidance" onclick="nextAndTieCheck.call(this,'r507')">SLEEP INSIDE MOSQUITO NET</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="B" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">SLEEP INSIDE AN ITN/LIN</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="C" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">USE INSECTICIDE SPRAY</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="D" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">USE MOSQUITO COILS</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="E" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">KEEP DOORS AND WINDOWS CLOSED</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="F" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="F" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">USE INSECT REPELLANT</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="G" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="G" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">KEEP SURROUNDINGS CLEAN</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="H" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="H" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">CUT GRASS</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="I" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="I" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">ELIMINATE STAGNANT WATER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="X" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'OTav')">OTHER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  value="Z" name="Malaria_Avoidance"  onclick="nextAndTieCheck.call(this,'r507')">DON'T KNOW</label>
					</div>
				</div>

				

		
				<div id="OTav"  class="row row-fluid form-group" style="display: none">
					<label for="Other"  class="col-sm-4 col-sm-offset-4 control-label">Specify other </label>
					<div class="col-sm-4">
						<input type="text" name="OtherMalaria_Avoidance" onblur="nextAndTie.call(this,'r507')" class="form-control">
					</div>
				</div>

			</div>


			<div id="r507" class="form-group row row-fluid" style="display: none">
				<label for="Prevention" class="col-sm-6 control-label">What can you do to prevent yourself from getting malaria?</label>
				<div name='DMalaria_Prevention' class="col-sm-6">
				
					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="A"  name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">SLEEP INSIDE MOSQUITO NET</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="B" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">SLEEP INSIDE AN ITN/LIN</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="C" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">USE INSECTICIDE SPRAY</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="D" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">USE MOSQUITO COILS</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="E" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">KEEP DOORS AND WINDOWS CLOSED</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="F" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="F" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">USE INSECT REPELLANT</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="G" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="G" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">KEEP SURROUNDINGS CLEAN</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="H" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="H" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">CUT GRASS</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="I" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="I" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">ELIMINATE STAGNANT WATER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="J" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="I" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">SHUT DOORS/WINDOWS</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="X" name='Malaria_Prevention' onclick="nextAndTieCheck.call(this,'OTpr')">OTHER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="Z" name='Malaria_Prevention'  onclick="nextAndTieCheck.call(this,'r508')">DON'T KNOW</label>
					</div>
				</div>

				
				<div  id="OTpr" class="row row-fluid form-group" style="display: none">
					<label for="Other" class="col-sm-8 control-label">Specify other </label>
					<div class="col-sm-4">
						<input type="text" name="OtherMalaria_Prevention" onblur="nextAndTie.call(this,'r508')" class="form-control">
					</div>
				</div>
			</div>
		

				

			<div id="r508" class="form-group row row-fluid" style="display: none">
				<label for="PregPrevent" class="col-sm-6 control-label">What can a pregnant woman do to prevent  malaria?</label>
				<div name='DMalaria_PregPrevention' class="col-sm-6">

					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="A" name='Malaria_PregPrevention'  onclick="nextAndTieCheck.call(this,'r509')">SLEEP INSIDE MOSQUITO NET</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="B" name='Malaria_PregPrevention'  onclick="nextAndTieCheck.call(this,'r509')">SLEEP INSIDE AN ITN/LIN</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="C" name='Malaria_PregPrevention'  onclick="nextAndTieCheck.call(this,'r509')">KEEP ENVIRONMENT CLEAN</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="D" name='Malaria_PregPrevention'  onclick="nextAndTieCheck.call(this,'r509')">TAKE SP/FANSIDAR GIVEN DURING ANTENATAL CARE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="E" name='Malaria_PregPrevention'  onclick="nextAndTieCheck.call(this,'r509')">DARAPRIM TABLETS(SUNDAY-SUNDAY MEDICINE)</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="X" name='Malaria_PregPrevention' onclick="nextAndTieCheck.call(this,'OTpp')">OTHER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="Z" name='Malaria_PregPrevention'  onclick="nextAndTieCheck.call(this,'r509')">DON'T KNOW</label>
					</div>
				</div>
			</div>

			

				<div id="OTpp" class="row row-fluid form-group" style="display: none">
					<label for="Other" class="col-sm-8 control-label">Specify other </label>
					<div class="col-sm-4">
						<input type="text" name="OtherMalaria_PregPrevention' " onblur="nextAndTie.call(this,'r509')" class="form-control">
					</div>
				</div>
			

			<div id="r509" class="form-group row row-fluid" style="display: none">
				<label for="Treatable" class="col-sm-4 control-label">Can malaria be treated?</label>
				<div class="col-sm-8">
					<select name="MalariaTreatable" id="TR" onchange="showNextAndTie.call(this,'r509','TR','numb','06','r510')" class="form-control" >
						<option></option>
						<option value="01" class="r510">Yes</option>
						<option value="02" class="r512">No</option>
						<option value="03" class="r512">Don'tknow</option>
					</select>
				</div>
			</div>

			<div id="r510" class="form-group row row-fluid" style="display: none">
				<br>
				<label for="GenMedications" class="col-sm-6 control-label">What medicines are used to treat malaria ?</label>
				<div name='DMalariaMedications' class="col-sm-6">
				
					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name='MalariaMedications'   value="A" onclick="nextAndTieCheck.call(this,'r511')">SP/FANSIDAR</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name='MalariaMedications'   value="B" onclick="nextAndTieCheck.call(this,'r511')">CHLOROQUINE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name='MalariaMedications'   value="C" onclick="nextAndTieCheck.call(this,'r511')">ARTESUNATE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name='MalariaMedications'   value="D" onclick="nextAndTieCheck.call(this,'r511')">QININE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  name='MalariaMedications'  value="E" onclick="nextAndTieCheck.call(this,'r511')">ACT</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="F" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name='MalariaMedications'   value="F" onclick="nextAndTieCheck.call(this,'r511')">ASPIRIN/PANADOL/PARACETAMOL</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="G" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name='MalariaMedications'   value="E" onclick="nextAndTieCheck.call(this,'r511')">ANTIMALARIA(UNKNOWN COMPONENTS)</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name='MalariaMedications'   value="X"onclick="nextAndTieCheck.call(this,'OTpp')">OTHER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name='MalariaMedications'   value="Z" onclick="nextAndTieCheck.call(this,'r511')">DON'T KNOW</label>
					</div>

				
			

					<div  id="OTpp" class="form-group row row-fluid" style="display: none">
						<label for="Other" class="col-sm-4 control-label">Specify other </label>
						<div class="col-sm-8">
							<input type="text" name="OtherMalariaMedications" onblur="nextAndTie.call(this,'r511')" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div id="r511" class="form-group row row-fluid" style="display: none">
				<label for="DChild_MalariaMedications" class="col-sm-6 control-label">What medicines are used to treat children with malaria?</label>
				<div name="DChild_MalariaMedications" class="col-sm-6">
		
					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox"  name="Child_MalariaMedications"  value="A" onclick="nextAndTieCheck.call(this,'r512')">SP/FANSIDAR</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name="Child_MalariaMedications"  value="B" onclick="nextAndTieCheck.call(this,'r512')">CHLOROQUINE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name="Child_MalariaMedications"  value="C" onclick="nextAndTieCheck.call(this,'r512')">ARTESUNATE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name="Child_MalariaMedications"   value="D" onclick="nextAndTieCheck.call(this,'r512')">QININE</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name="Child_MalariaMedications"  value="E" onclick="nextAndTieCheck.call(this,'r512')">ACT</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="F" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name="Child_MalariaMedications"  value="F" onclick="nextAndTieCheck.call(this,'r512')">ASPIRIN/PANADOL/PARACETAMOL</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="G" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name="Child_MalariaMedications"   value="E" onclick="nextAndTieCheck.call(this,'r512')">ANTIMALARIA(UNKNOWN COMPONENTS)</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name="Child_MalariaMedications"   value="X"onclick="nextAndTieCheck.call(this,'OTcm')">OTHER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" name="Child_MalariaMedications"   value="Z" onclick="nextAndTieCheck.call(this,'r512')">DON'T KNOW</label>
					</div>

					<div  id="OTcm" class="form-group row row-fluid">
						<label for="Other" class="col-sm-4 control-label">Specify other </label>
						<div class="col-sm-8">
							<input type="text" name="OtherChild_MalariaMedications"  onblur="nextAndTie.call(this,'r512')" class="form-control">
						</div>
					</div>
				</div>
			</div>
			

			<div id="r512" class="form-group row row-fluid" style="display: none">
				<label for="SeenMalariaMessage" class="col-sm-4 control-label">In the past 6 months, have you seen or heard any message about malaria?</label>
				<div class="col-sm-8">
					<select name="SeenMalariaMessage" id="MS" onchange="showNextAndTie.call(this,'r512','MS','numb','06','r513')" class="form-control">
						<option></option>
						<option value="01" class="r513">Yes</option>
						<option value="02" class="r515">No</option>
					</select>
				</div>
			</div>
     
			<div id="r513" class="form-group row row-fluid" style="display: none">
				<label for="DMalariaMessage" class="col-sm-6 control-label">What messages about malaria have you seen or heard?</label>
				<div name='DMalariaMessage' class="col-sm-6">

					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="A" name='MalariaMessage' onclick="nextAndTieCheck.call(this,'r514')">Malaria is dangerous</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="B" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Malaria can kill</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="C" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Mosquitoes spread malaria</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="D" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Sleeping inside a mosquito net is important</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="E" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Who should sleep inside a mosquito net</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="F" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="F" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Seek treatment for fever </label>
					</div>

					<div class="row row-fluid form-group">
						<label for="G" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="G" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Seek treatment for fever promptly(within 24 hours)</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="H" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="H" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Importance of house spraying</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="I" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="I" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Environmental sanitation activities</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="J" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="J" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Seek testing before treatment for malaria</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="K" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="K" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Early registration for ANC</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="L" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="L" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">Pregnant women should take SP/Fansidar </label>
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="X" name='MalariaMessage' onclick="nextAndTieCheck.call(this,'OTpr')">OTHER</label>
					</div>

					<div class="row row-fluid form-group">
						<label for="Z" class="col-sm-8 col-sm-offset-2 checkbox">
							<input type="checkbox" value="Z" name='MalariaMessage'  onclick="nextAndTieCheck.call(this,'r514')">DON'T KNOW</label>
					</div>


					<div id="OTpr" class="form-group row row-fluid" style="display: none">
						<label for="Other" class="col-sm-4 control-label">Specify other </label>
						<div class="col-sm-8 ">
							<input type="text" name="OtherMalariaMessage" onblur="nextAndTie.call(this,'r514')" class="form-control">
						</div>
					</div>
				</div>
			</div>
			
			<div id="r514" class="form-group row row-fluid" style="display: none">
				<label for="seeMessage" class="col-sm-6 control-label">Where did you hear or see these messages?</label>
				<div name='seeMalaria_Message' class="col-sm-6">

					<div class="row row-fluid form-group">
						<label for="A" class="col-sm-8 col-sm-offset-2 checkbox">Radio</label>
							<input type="checkbox" value="A"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="B" class="col-sm-8 col-sm-offset-2 checkbox">Television</label>
							<input type="checkbox" value="B"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="C" class="col-sm-8 col-sm-offset-2 checkbox">Community health extension worker(CHEW)</label>
							<input type="checkbox" value="C"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="D" class="col-sm-8 col-sm-offset-2 checkbox">Village health extension worker(VHEW)</label>
							<input type="checkbox" value="D"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="E" class="col-sm-8 col-sm-offset-2 checkbox">Role model caregiver(RMC)</label>
							<input type="checkbox" value="E"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="F" class="col-sm-8 col-sm-offset-2 checkbox">Community directed distributor </label>
							<input type="checkbox" value="F"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="G" class="col-sm-8 col-sm-offset-2 checkbox">Mosque/Church</label>
							<input type="checkbox" value="G"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="H" class="col-sm-8 col-sm-offset-2 checkbox">Town announcer</label>
							<input type="checkbox" value="H"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="I" class="col-sm-8 col-sm-offset-2 checkbox">Community event</label>
							<input type="checkbox" value="I"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="J" class="col-sm-8 col-sm-offset-2 checkbox">Billboard</label>
							<input type="checkbox" value="J"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="K" class="col-sm-8 col-sm-offset-2 checkbox">Poster</label>
							<input type="checkbox" value="K"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="L" class="col-sm-8 col-sm-offset-2 checkbox">T-Shirt</label>
							<input type="checkbox" value="L"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="M" class="col-sm-8 col-sm-offset-2 checkbox">Leaflet/Fact sheet/Brochure</label>
							<input type="checkbox" value="M"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="N" class="col-sm-8 col-sm-offset-2 checkbox">Relative/Friend/Neighbour/School</label>
							<input type="checkbox" value="N"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="O" class="col-sm-8 col-sm-offset-2 checkbox">Social Media(Facebook,Twitter,etc) </label>
							<input type="checkbox" value="O"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="P" class="col-sm-8 col-sm-offset-2 checkbox">Antenatal care visit</label>
							<input type="checkbox" value="P"  name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'r515')">
					</div>

					<div class="row row-fluid form-group">
						<label for="X" class="col-sm-8 col-sm-offset-2 checkbox">OTHER</label>
							<input type="checkbox" value="X" name='seeMalaria_Message' onclick="nextAndTieCheck.call(this,'OTsm')">
					</div>
				
			
					<div id="OTsm" class="form-group row row-fluid" style="display: none">
						<label for="Other" class="col-sm-4 control-label">Specify other </label>
						<div class="col-sm-8">
							<input type="text" name="OtherseeMalaria_Message " onblur="nextAndTie.call(this,'r514')" class="form-control">
						</div>
					</div>
				</div>
			</div>
			

			<div id="r515" class="form-group row row-fluid" style="display: none">
				<label for = "Opinion" class="col-sm-4">I am going to ask you about your opinion of malaria.<br>
				Please tell me whether you agree or disagree with the following statements :</label>

				<div name="OPinion" class="col-sm-8">

					<div class="form-group row row-fluid">
						<label for="A" class="col-sm-6 control-label"> a)	My chances of getting malaria are the same whether or not  I sleep inside a treated mosquito net	.</label>
						<div class="col-sm-6">
							<select name="A" id = "515a" name="Chances_Of_Malaria" onchange='showNextAndTie.call(this,"r515","515a","numb","196","515A")' class="form-control">  
								<option></option>
								<option value="01" class="r515A">Yes</option>
								<option value="02" class ="r515A">No</option>
								<option value="08" class ="r515A">Don't know</option>
							</select>
						</div>
					</div>

					<div class="form-group row row-fluid">
						<label for="B" class="col-sm-6 control-label"> b)	The medicine given to pregnant women to prevent malaria works well to keep the mother healthy .</label>
						<div class="col-sm-6">
							<select name="B" id = "515b" name="MedicineWorksWellForPregnantWomen" onchange='showNextAndTie.call(this,"r515","515b","numb","196","515A")' class="form-control"> 
								<option></option> 
								<option value="01" class="r515A">Yes</option>
								<option value="02" class ="r515A">No</option>
								<option value="08" class ="r515A">Don't know</option>
							</select>
						</div>	
					</div>		
					
					<div class="form-group row row-fluid">
						<label for="C" class="col-sm-6 control-label" > c)	Malaria tests are a good way to know if someone really has malaria or not.</label>
						<div class="col-sm-6">
							<select name="C" id = "515c" name="MalariaTests" onchange='showNextAndTie.call(this,"r515","515c","numb","196","numb")' class="form-control"> 
								<option></option> 
								<option value="01" class="r515A">Yes</option>
								<option value="02" class ="r515A">No</option>
								<option value="08" class ="r515A">Don't know</option>
							</select>
						</div>	
					</div>

					<div class="form-group row row-fluid">
						<label for="D" class="col-sm-6 control-label"> ACTs work quickly to treat malaria .</label>
						<div class="col-sm-6">
							<select  id = "515d" name="ACTsWorksWell" onchange='showNextAndTie.call(this,"r515","515d","numb","196","numb")' class="form-control"> 
								<option></option> 
								<option value="01" class="r515A">Yes</option>
								<option value="02" class ="r515A">No</option>
								<option value="08" class ="r515A">Don't know</option>
							</select>
						</div>	
					</div>		
				</div>
			</div>



			<div id="r515A" class="form-group row row-fluid" style="display: none">
				<label for="SleepNet" class="col-sm-4 control-label"> Did you sleep inside mosquito net last night ?</label>
				<div class="col-sm-8">
					<select  id = "SNet" name="SleptInNet" onchange='showNextAndTie.call(this,"r515A","SNet","numb","196","numb")' class="form-control"> 
						<option></option> 
						<option value="01" class="r517">Yes</option>
						<option value="02" class ="r516">No</option>
					</select>
				</div>
			</div>	

			<div id="r516" class="form-group row row-fluid" style="display: none">
				<label for="Encourage" class="col-sm-4 control-label">What would encourage you to sleep inside a mosquito net ?</label>
				<div class="col-sm-8">
					<select  id="EN" name="Encouragement_SleepInNet" onchange="showNextAndTie.call(this,'r516','EN','OTen','G','numb')" class="form-control">
						<option></option>
						<option value="A" class="r516A">If net did not smell</option>
						<option value="B" class="r516A">Had a different shape/size</option>
						<option value="C" class="r516A">Had a different colour</option>
						<option value="D" class="r516A">If net were not itchy/irritating </option>
						<option value="E" class="r516A">If net were bigger/not clostrophobic</option>
						<option value = "F" class="r516A">White</option>
						<option value="G" class="OTen">Other</option>
						<option value="X" class="r516A">Don't know or No preference</option>
					</select>
					<br>
					<div id ="OTen" class="form-group row row-fluid" style="display: none">
						<label for = "OtherCl" class="col-sm-6 control-label">Other, specify </label>
						<div class="col-sm-6">
							<input type="text" name="OtherEncouragement_SleepInNet" onblur="nextAndTie.call(this,'r516A')" class="form-control">
						</div>
					</div>
				</div>
				
			</div>

			<div id="r516A" class="form-group row row-fluid" style="display: none">
				<label for="rColour" class="col-sm-4 control-label">If you had a choice, what colour of mosquito net do you prefer ?</label>
				<div class="col-sm-8">
					<select  id="rCL" name="NetColour" onchange="showNextAndTie.call(this,'r516A','rCL','OTrc','96','numb')" class="form-control">
						<option></option>
						<option value="01" class="r516B">Green</option>
						<option value="02" class="r516B">Dark blue</option>
						<option value="03" class="r516B">Light blue</option>
						<option value="04" class="r516B">Red </option>
						<option value="05" class="r516B">Black</option>
						<option value = "06" class = "r516B">White</option>
						<option value="96" class="OTrc">Other</option>
						<option value="98" class = "r516B">Don't know or no preference</option>
					</select>
					<br>
					<div id ="OTrc" class="form-group row row-fluid">
			
						<label for = "OtherRCl" class="col-sm-6 control-label">Other, specify </label>
						<div class="col-sm-6">
							<input type="text" name="OtherNetColour" onblur="nextAndTie.call(this,'r516B')" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div id="r516B" class="form-group row row-fluid" style="display: none">
				<label for="rShape" class="col-sm-4 control-label">If you had a choice,what shape of mosquito net would you prefer ?</label>
				<div class="col-sm-8">
					<select id="rSH" name="ChoiceOfNetShape" onchange="showNextAndTie.call(this,'r516B','rSH','OTrs','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="r516C">Conical</option>
						<option value="02" class="r516C">Rectangular</option>
						<option value ="06" class="OTrs">Other </option>
						<option value="08" class = "r516C">Don't know or no preference</option>
					</select>
					<br>
					<div id = "OTrs"  class="form-group row row-fluid">
						<br>
						<label for = "otherRSh" class="col-sm-6 control-label">Other, please specify</label>
						<div class="col-sm-6">
							<input type="text" name="otherChoiceOfNetShape" class="form-control" onblur="nextAndTie.call(this,'r516C')">
						</div>
					</div>
				</div>
			</div>

			<div id="r516C" class="form-group row row-fluid" style="display: none">
				<label for="rSize" class="col-sm-4 control-label">If you had a choice,what size of mosquito net would you prefer ?</label>
				<div class="col-sm-8">
					<select  id="RSZ" name="NetSize" onchange="showNextAndTie.call(this,'r516C','RSZ','OTrz','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="r516D">Cot/Crib</option>
						<option value="02" class = "r516D">Single</option>
						<option value="03" class = "r516D">Double</option>
						<option value="04" class = "r516D">Triple</option>
						<option value="06" class = "OTrz">Other </option>
						<option value="08" class = "r516D">Don't know or No preference</option>
					</select>
					<br>
					<div id = "OTsz" class="form-group row row-fluid" style="display: none">
						<br>
						<label for = "otherRSz" class="col-sm-6 control-label">Other, please specify</label>
						<div class="col-sm-6">
							<input type="text" name="otherNetSize" onblur="nextAndTie.call(this,'r516D')"  class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div id="r516D" class="form-group row row-fluid" style="display: none">
				<label for="rBrand" class="col-sm-4 control-label">If you had a choice,what size of mosquito net would you prefer ?</label>
				<div class="col-sm-8">
					<select  id="rBR" name="ChoiceNetSize" onchange="showNextAndTie.call(this,'r516D','rBR','numb','96','numb')" class="form-control">
						<option></option>
						<optgroup label="Long-lasting insecticide treated net(LLIN)">
							<option value="01" class="r516D">PERMANENT</option>
							<option value="02" class="r516D">OLYSET</option>
							<option value="03" class="r516D">ICONLIFE</option>
							<option value="04" class="r516D">DURANET</option>
							<option value="05" class="r516D">NETPROTECT</option>
							<option value="06" class="r516D">BASF INTERCEPTOR</option>
							<option value="96" class="OTrb">OTHER/DK BRAND</option>
							<option value="98" class = "r516D">Don't know or No preference</option>
						</optgroup>
					</select>
					<br>
					<div id="OTrb" class="form-group row row-fluid" >
						<br>
						<label for = "otherRB" class="col-sm-6 control-label">Other, please specify</label>
						<div class="col-sm-6">
							<input type="text" name="OtherChoiceNetSize" onblur="nextAndTie.call(this,'r516D')" class="form-control">
						</div>
						
					</div>	
				</div>	
			</div>	

			

		</div>
	
		<div id="r517">
			<br>

			<br>
			<br>

		</div>
	</div>
	<div id="numb">
		
	</div>
	
	<!--div id ="tope"></div-->
			
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
   var cont;
		var databaseString = {};
		var databaseCheck = {};

		var stackOfDivs = [] ;
		var stackOfNames = [] ;

		function submitTest()
		{
			var data = jQuery.param(databaseString);
			for (var key in databaseCheck) {
    			if (databaseCheck.hasOwnProperty(key)) {
					data += "&"+key+"="+databaseCheck[key];
					}
				}
			
			//alert(data) ;
			
			$.ajax({
							type: "POST",
							url: "submitMalariaKnowledge.php",
							cache: false,
							data: data,
							success: function(html)
								{	
									//alert(html);
									window.location=html;
								}
							});
				
		}

		
		function back() {
			// body...
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


			var nodeVal = document.getElementById(pId).value;
			//alert(nodeVal);
			var returnVal = '';		
				var tnode = document.getElementById(cId);				
				var optionClass = optionNode.className;

			popDivs(tId,optionClass);
			popFromDict(key);

				next(optionClass); 
				stackOfDivs.push(optionClass);
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