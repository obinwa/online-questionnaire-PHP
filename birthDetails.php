<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">RECORD DETAILS OF ALL BIRTHS</h3>
          </div>
          <div class="panel-body">
<form class="form-horizontal" onsubmit="return false">
			<div class="well">
				<div class="col-sm-8" id="212">
					<div class="row-fluid form-group ">
						<label for="NameOfChild" class="control-label col-sm-1">Name</label>
						<div class="col-sm-11 ">
							<input type="text" name="NameOfChild" class="form-control" onblur="nextAndTie.call(this,'numb')">
						</div>
					</div>

					<div class="row-fluid form-group " >
						<div id="213">	
							<label class="control-label col-sm-1">Sex</label>
							<div class="col-sm-2">
								<select name="GenderOfChild" class="form-control" id="GC" onchange='showNextAndTie.call(this,"213","GC","numb","196","numb")'>
									<option></option>
									<option value="01" class="numb">Male</option>
									<option value="02" class="numb">Female</option>
								</select>
							</div>
						</div>

						<div id="214">	
							<label class="control-label col-sm-1">Twin</label>
							<div class="col-sm-2">
								<select name="Twin" class="form-control" id="TW" onchange='showNextAndTie.call(this,"numb","TW","numb","196","numb")'>
									<option></option>
									<option value="01" class="numb">Single </option>
									<option value="02" class="numb">Twin</option>
								</select>
							</div>
						</div>

						<div id="216">
							<label class="control-label col-sm-1">Alive</label>
							<div class="col-sm-2">
								<select name="Alive" class="form-control" id="AL" onchange='showNextAndTie.call(this,"numb","AL","numb","196","numb")'>
									<option></option>
									<option value="01"  class="217">Yes </option>
									<option value="02" class="numb">No</option>
								</select>
							</div>
						</div>

						<div id="218" >	
							<label class="control-label col-sm-1">Living with you</label>
							<div class="col-sm-2">
								<select name="ChildLivingWithYou" id="LV" onchange='showNextAndTie.call(this,"numb","LV","numb","196","numb")' class="form-control">
									<option></option>
									<option value="01" class="numb">Yes </option>
									<option value="02" class="numb" >No</option>
								</select>
							</div>
						</div>
					</div>

					<!--<div class="row-fluid col-sm-12 form-group">
						
					</div>

					<div class="row-fluid col-sm-12 form-group">
						
					</div>-->

			
				<div class="row-fluid form-group">
					
					<div class="col-sm-12">
						<label class="col-sm-10 control-label">ASK : Were there any other births between the present child and and previous child, including any child who died after birth</label>
					</div>

					<!--div class="col-sm-6">
						<div class="row-fluid col-sm-12 form-group">
						
						</div>

						<div class="row-fluid col-sm-12 form-group">
							<div class="col-sm-6">
								<input type="button" name="NextBirth" class="form-control " value="NEXT BIRTH" onclick="reload('BirthInfo')">
							</div>
							<div class="col-sm-4">
								
							</div>
							<div class="col-sm-4 ">
							
							</div>
						</div>
						
					</div-->
					

				</div>
				
			</div>

			<div class="col-sm-4">
					
						<div class="row-fluid form-group" >
							<div class="well" id="215">
								<label class="control-label">Date of birth</label>
								<br/>
								<input class="form-control" type="date" name="DateOfBirth" id="DOB" onblur="calculateAge('DOB','Age','217') ; nextAndTie.call(this,'numb')" >
								<br/>	
								<br>					
							</div>

						</div>

						<div class="row-fluid form-group" id="217" style="display: none">
							<div class="">
								<label class="control-label col-sm-2">Age</label>
								<div class="col-sm-10">
									<input type="number" name="Age" class="form-control" id="AGe" disabled="">
								</div>
								
							</div>
						</div>
				</div>

				<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

			</div>

				<div class="row-fluid form-group" >
    			<div class="col-sm-4 col-sm-offset-1">
        			<button class="btn btn-primary" onclick="submitTest('1')">Submit and Add Another Birth</button> 
    			</div>
				<div class="col-sm-4">
        			<button class="btn btn-primary" onclick="submitTest('0')">Submit. No more Birth</button> 
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
		//$("#hM").val("01");
		var cont;
		var databaseString = {};

		var stackOfDivs = ['r501'] ;
		var stackOfNames = [] ;

		function submitTest(val)
		{
			var str = jQuery.param(databaseString);
			
			if(val=='1'){
				data = str+"&next=1";
			}else if(val=='0'){
				data = str+"&next=0";
			}
			//alert(data) ;
			
			$.ajax({
							type: "POST",
							url: "submitBirth.php",
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

			databaseString[key] = checkarray ;
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


			var nodeVal = document.getElementById(pId).value;
			//alert(nodeVal);
			var returnVal = '';
		
				//alert("In If");
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

		function calculateAge(Id,name,pId)
			{
				if(document.getElementById(pId).style.visibility != "none")
				{
					var date = new Date(document.getElementById(Id).value);
		            var today = new Date();

		            var timeDiff = Math.abs(today.getTime() - date.getTime());
		            var age1 = Math.floor(Math.ceil(timeDiff / (1000 * 3600 * 24)) / 365);

		            document.getElementsByName(name)[0].value = age1 ; //.toString()  ;
		            databaseString[name] = age1.toString() ;
		          }
	            
			}
</script>

<?php include 'footer_afterlogin.php'; ?>