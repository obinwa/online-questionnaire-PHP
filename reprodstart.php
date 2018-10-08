<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">REPRODUCTION DETAILS</h3>
          </div>
          <div class="panel-body">
<div class="col-sm-9">
<form class="form-horizontal" method="post">
		
			<div id="r201" class="form-group row-fluid">
				<label for="Birth" class="col-sm-4 control-label">Have you ever given birth ?</label>
				<div class="col-sm-8">
					<select class="form-control" name="GivenBirth" id="BR" onchange="showNextAndTie.call(this,'r201','BR','numb','06','numb')">
						<option></option>
						<option value="01" class="r202">Yes</option>
						<option value="02" class="r206">No</option>
					</select>
				</div>
			</div>

			<div id="r202"  class="form-group  row-fluid" style="display: none">
				<label for="Children" class="col-sm-4 control-label">Do you have any sons or daughters to whom you have given birth who are now living with you ?</label>
				<div class="col-sm-8">
					<select class="form-control" name="LivingWithSomeChildren" id="CH" onchange="showNextAndTie.call(this,'r202','CH','numb','06','numb')">
						<option></option>
						<option value="01" class="r203A">Yes</option>
						<option value="02" class="r204">No</option>
					</select>
				</div>
			</div>

			<div id="r203A"  class="form-group  row-fluid" style="display: none">
				<label for="NumberOfSons" class="col-sm-4 control-label">How many sons live with you ? <sub>If none record '00'.</sub></label>
				<div class="col-sm-8">
					<input class="form-control" type="number" name="NumberOfSons" onblur="nextAndTie.call(this,'r203B')">
				</div>
		    </div>

		    <div class="form-group  row-fluid" id="r203B" style="display: none" >
				<label for="NumberOfDaughters" class="col-sm-4 control-label">How many daughters live with you? <sub>If none record '00'.</sub></label>
				<div class="col-sm-8">
					<input type="number" name="NumberOfDaughters" class="form-control" onblur="nextAndTie.call(this,'r204')">
				</div>
			</div>

			<div id="r204" class="form-group  row-fluid" style="display: none" >
				<label for="ChildrenAliveButNotLivingWithYou" class="col-sm-4 control-label">Do you have any sons or daughters to whom you have given birth who are alive but do not live with you ?</label>
				<div class="col-sm-8">
					<select name="ChildrenAliveButNotLivingWithYou" id="CO" onchange="showNextAndTie.call(this,'r204','CO','numb','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="r205">Yes</option>
						<option value="02" class="r206">No</option>
					</select>
				</div>
			</div>

			<div id="r205"  style="display: none">
				<div  class="form-group  row-fluid">
					<label for="SonsAliveButNotLivingWithYou" class="col-sm-4 control-label">How many sons are alive but do not live with you ? ><sub>If none record '00'.</sub></label>
					<div class="col-sm-8">
						<input type="number" name="SonsAliveButNotLivingWithYou" id="sO"  onblur="nextAndTie.call(this,'r206')" class="form-control">
					</div>
				</div>
				<div  class="form-group  row-fluid">
					<label for="DaughterAliveButNotLivingWithYou" class="col-sm-4 control-label">How many daughters are alive but do not live with you ? <sub>If none record '00'.</sub></label>
					<div class="col-sm-8">
						<input type="number" name="DaughterAliveButNotLivingWithYou" id="dO"  onblur="nextAndTie.call(this,'r206')" class="form-control">
					</div>
				</div>
			</div>

			<div id="r206" class="form-group  row-fluid"  >
				<label for="DidChildDie" class="col-sm-4 control-label">Have you ever given birth to a boy or girl who was born alive but later died ? <sub>IF NO,PROBE: Any baby who cried, who made any movement, sound, or effort to breathe, or who showed any signs of life even if for a very short time?</sub></label>
				<div class="col-sm-8">
					<select name="DidChildDie" id="DC" onchange="showNextAndTie.call(this,'r206','DC','numb','06','numb')" class="form-control">
						<option></option>
						<option value="01" class="r207">Yes</option>
						<option value="02" class="r208">No</option>
					</select>
				</div>
			</div>

			<div id="r207" class="form-group   row-fluid" style="display: none">
			<div class="col-sm-12">
				<label for="NumDeadBoys" class="col-sm-4 control-label">How many boys died dead? <sub>If none record '00'</sub></label>
				<div class="col-sm-8">
					<input type="number" name="NumDeadBoys" id="dB" onblur="nextAndTie.call(this,'r208')" class="form-control">
				</div>
			</div>
			<div class="col-sm-12">
				<label for="NumDeadGirls" class="col-sm-4 control-label">How many girls have died ? <sub>If none record '00'.</sub></label>
				<div class="col-sm-8">
					<input type="number" name="NumDeadGirls" id="dG"  onblur="nextAndTie.call(this,'r208')" class="form-control">
				</div>
			</div>	
		</div>

		<div id="r208" class="form-group   row-fluid" style="display: none">
			<label class="col-sm-4 control-label">Just to make sure that I have this right, you have had a TOTAL of <input type="number" name="TotalBirth" readonly> births during your life.Is that correct</label>
			<div class="col-sm-8">
				<label for="Yrad"  >Yes</label>
					
				<input type="radio" name="TotalCorrect" onclick=" nextAndTieRadio.call(this,'r208','r210','TotalCorrect')" >
	
				<label for="Nrad" >No</label>
				
				<input type="radio" name="TotalCorrect" onclick="showmessage();nextAndTieRadio.call(this,'r208','numb','TotalCorrect')" >
					
				</div>
			</div>	
	

	
		<div id="r210" class="form-group   row-fluid" style="display: none;">
			<label for = "RecentBirths" class="col-sm-4 control-label">Now, I like to ask you about your more recent births. How many births have you had in the last 6 years ? <sub>If none, write '0'. </sub></label>
			<div class="col-sm-8">
				<input type="number" name="RecentBirths" class="form-control" onblur="nextSection.call(this,'BI','Quest224','r210')"> <!--onblur="next('r516D')">-->
			</div>
			
		</div> 		


		<!--div id="BI" style="display: none;">
			<label>Redirect to the birth details</label>
		</div-->
	
	<div id="numb">
			
		</div>

	
	
	<div class="form-group" id="BI" style="display: none;">
    <div class="col-sm-8 col-sm-offset-4">
        <button class="btn btn-primary" onclick="submitTest()">Go to birth details</button> 
    </div>
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

		var stackOfDivs = ['r201'] ;
		var stackOfNames = [] ;

		
		function nextSection(section1,section2,mId)
		{
			var numberResult = Number(document.getElementsByName(this.name)[0].value) ;

			if(numberResult > 0)
			{
				nextAndTieWithOption.call(this,section1,mId);
			}

			else
			{
				nextAndTieWithOption.call(this,section2,mId);
			}
		}


		function checkBirthNum()
		{
			var numBirths = Number(document.getElementsByName("NumberOfSons")[0].value) + Number(document.getElementsByName("NumberOfDaughters")[0].value) + Number(document.getElementsByName("SonsAliveButNotLivingWithYou")[0].value) + Number(document.getElementsByName("DaughterAliveButNotLivingWithYou")[0].value) + Number(document.getElementsByName("NumDeadBoys" )[0].value) + Number(document.getElementsByName("NumDeadGirls")[0].value) ;

			document.getElementsByName('TotalBirth')[0].value = numBirths ;
		}

		function transit(Id1)
		{
			var numBirths = Number(document.getElementsByName("NumberOfSons")[0].value) + Number(document.getElementsByName("NumberOfDaughters")[0].value) + Number(document.getElementsByName("SonsAliveButNotLivingWithYou")[0].value) + Number(document.getElementsByName("DaughterAliveButNotLivingWithYou")[0].value) + Number(document.getElementsByName("NumDeadBoys" )[0].value) + Number(document.getElementsByName("NumDeadGirls")[0].value) ;


			if(numBirths > 0)
			{
				next(Id1);
			}
			else
			{
				
			}
		}

		function submitTest()
		{
			
			var data = jQuery.param(databaseString);
			
			alert(data);
			
			$.ajax({
					type: "POST",
					url: "submitReproduction.php",
					cache: false,
					data: data,
					success: function(html)
				{					
					//alert("got here");
					alert(html);
					window.location = html;
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


		function nextAndTieRadio(divId,nextId,mainName)
		{
			var key = mainName;
			//var topOfStack ;
			if(this.checked ){

				popDivs(divId,nextId);
				popFromDict(mainName);
			 	databaseString[key] = this.value ;
				//alert(key + ": " + databaseString[key]);
				next(nextId);

			}

		}
		function showmessage()
		{

		}

		
		function submitTest()
		{
			var str = jQuery.param(databaseString);
			alert(str) ;
		}

		function nextAndTie(nextId)
		{
			var key = this.name ;
			checkBirthNum();

			if(this.value != ""){

			 databaseString[key] = this.value ;
			
			//alert(databaseString[QuestionDescription]);
			 next(nextId);
			}
		}

		function nextAndTieWithOption(nextId, mId)
		{
			var key = this.name ;
			checkBirthNum();

			if(this.value != ""){
				popDivs(mId,nextId);
			 databaseString[key] = this.value ;
			
			//alert(databaseString[QuestionDescription]);
			 next(nextId);}
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


		function reload(parentId)
		{
			var html = document.getElementById(parentId).innerHTML ;
			
			document.getElementById(parentId).innerHTML = html ;

		}
</script>

<?php include 'footer_afterlogin.php'; ?>