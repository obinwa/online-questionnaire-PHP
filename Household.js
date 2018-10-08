
	var actionArray = {"Skip":"block","Unskip":"none"};
	var otherOption = {"DW":"OOT","OW":"OOT"};  // tie value within shownext for option type
	var skippedArray = {"1":"numb","DW":"numb","2":"numb","OW":"numb"};
		
		function showNext(tId,pId,cId,flag,nextId)
		{
			var nodeVal = document.getElementById(pId).value;
			//alert(nodeVal);
			//var returnVal = '';
			if(nodeVal == flag) // go to other's text box
			{
				//alert("In If");
				var tnode = document.getElementById(cId);
				//tnode.style.display = actionArray['Skip'];
				//var remove = skippedArray[pId];
				//undoSkip(remove);
				//next(cId);
				pushName(tId,cId);
				optionNext(pId);

			}
			else 
			{
				undoSkip(cId);
				//var remove = skippedArray[pId];
				//undoSkip(remove);
				undoSkip(nextId);
				optionNext(pId);
			}

			
			
		}

		function next(Id)
		{
			var nodeVal = document.getElementById(Id);
			//alert(nodeVal);
			//var tnode = document.getElementById(Id);
			nodeVal.style.display = actionArray['Skip'];
			//pushName(pId,Id);

		}

		function nextN(pId,Id)
		{
			var nodeVal = document.getElementById(Id);
			//alert(nodeVal);
			//var tnode = document.getElementById(Id);
			nodeVal.style.display = actionArray['Skip'];
			pushName(pId,Id);

		}

		
		function optionNext(Id)
		{

			var selectNode = document.getElementById(Id);
			//alert("name of select :"+selectNode.name);
			var optionNode = selectNode.options[selectNode.selectedIndex];
			//lert("type of element :"+optionNode);
			var optionClass = optionNode.className;
			//alert("class of option :"+optionClass);

			pushName(Id,optionClass);
			next(optionClass);
		}

		function pushName(Id,val)
		{
			//alert(Id+":"+val);
			var formerId ;
			if(skippedArray[Id] == null)
			{
				formerId = "numb"
			}

			else
			{
				 formerId = skippedArray[Id];
			}
			undoSkip(formerId);
			skippedArray[Id] = val;
		}	

		function undoSkip(Id)
		{
			var node = document.getElementById(Id);
			//alert(Id+":Undo");
			node.style.display = actionArray['Unskip'] ;
		}
