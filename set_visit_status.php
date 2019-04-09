<?php 
include 'header_afterlogin.php';
?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">SET VISIT STATUS (This should be done after each visit interview)</h3>
          </div>
          <div class="panel-body">
<div class="col-sm-9">
<form class="form-horizontal" method="POST">
<div class="form-group">
    <label class="col-sm-4 control-label" for="v_status"><span class="required"></span>Visit Status:</label>
    <div class="col-sm-8">
        <SELECT id="v_status" class="form-control" name="v_status" required="" onChange="visit()">
             <option value="1">Completed</option>
             <option value="2">No household member at home or no competent respondent at home at time of visit</option>
             <option value="3">Entire household absent for extended period of time</option>
             <option value="4">Postponed</option>
             <option value="5">Refused</option>
             <option value="6">Dwelling vacant or address not a dwelling</option>
             <option value="7">Dwelling destroyed</option>
             <option value="8">Dwelling not found</option>
             <option value="9">Other</option>
         </SELECT>
    </div>
</div>
<div class="form-group" id="v_add_info">    
</div>

<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <button class="btn btn-primary" type="submit" onclick="submit_status()">Submit Status</button> 
    </div>
</div>
<script>
    function visit(){
        out = `<label class="col-sm-4 control-label" for="ov_add_info"><span class="required"></span>If others, specify:</label><div class="col-sm-8"><input type="text" value="" id="ov_add_info" class="form-control" name="ov_add_info" required="" ></div>`;
        
        var sel = document.getElementById('v_status').value;
        if (sel == "9"){ 
            document.getElementById('v_add_info').innerHTML= out;
        }else{
            document.getElementById('v_add_info').innerHTML="";
        }
        
    }
	
	function submit_status(){
		var sel = document.getElementById('v_status').value;
		var v_status, ov_add_info;
        if (sel == "9"){ 
            v_status = document.getElementById('v_status').value;
			ov_add_info = document.getElementById('ov_add_info').value;
        }else{
            v_status = document.getElementById('v_status').value;
			ov_add_info = "";
        }
		//var v_status = document.getElementById('v_status').value;
		//var ov_add_info = document.getElementById('ov_add_info').value;
		data = 'v_status='+v_status+'&ov_add_info='+ov_add_info;
		//alert(data);
		$.ajax({
			type: "POST",
			url: "submitVisitStatus.php",
			data: data,
			cache: false,
			success: function(html)
				{					
					window.location=html;
				}
			});
		
	
	}
	
      
</script>
</form>
</div>
</div>
</div>
<?php include 'footer_afterlogin.php'; ?>