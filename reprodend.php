<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">REPRODUCTION DETAILS CONTINUED</h3>
          </div>
          <div class="panel-body">
<div class="col-sm-9">
	<form class="form-horizontal">


		<div id="Quest224" class="form-group   row-fluid"  >
			<label for="Pregnant" class="col-sm-4 control-label">Are you pregnant now?</label>
			<div class="col-sm-8">
				<select name="Pregnant" id="PR" onchange="showNextAndTie.call(this,'Quest224','PR','numb','06','numb')" class="form-control">
					<option></option>
					<option value="01" class="r225">Yes</option>
					<option value="02" class="r226">No</option>
					<option value="08" class="r226">Not sure</option>
				</select>
			</div>
		</div>

		<div  class="form-group   row-fluid" id="r225" style="display: none">
			<label for="NumberOfMonthsPregnant" class="col-sm-4 control-label">How many months pregnant are you ? </label>
			<div class="col-sm-8">
				<input type="number" name="NumberOfMonthsPregnant" id="sO"   class="form-control">
			</div>
		</div>

		<div id="r226">
			
		</div>

		<div id="numb">
			
		</div>

	</form>

</div>
</div>
</div>

<script src = "Household.js"></script>
<script>
   var cont;
		var databaseString = {};

		var stackOfDivs = [] ;
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

		

		function nextBirth()
		{
			//reload another page
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
			var key = mainName ;
			//var topOfStack ;
			if(this.checked ){

				popDivs(divId,nextId);
				popFromDict(mainName);
			 	databaseString[key] = this.value ;
				alert(key + ": " + databaseString[key]);
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
			 next(nextId);}
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
			alert(nodeVal);
			var returnVal = '';
			if(nodeVal == flag) // go to other's text box
			{
				alert("In If");
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