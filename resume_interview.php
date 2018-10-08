<?php 
include 'header_afterlogin.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");	
} elseif ((isset($_SESSION["household_id"])) || (isset($_SESSION["v_id"]))) {
	redirect("household_schedule.php");		
}

?>

<div class="panel panel-primary">
  		<div class="panel-heading">
            <h3 class="panel-title">RESUME A PREVIOUS INTERVIEW </h3>
          </div>
          <div class="panel-body">
<div class="col-sm-9">
<form class="form-horizontal" method="POST">
<div class="form-group">
    <label class="col-sm-4 control-label" for="locality"><span class="required"></span>Select locality:</label>
    <div class="col-sm-8">
        <SELECT id="locality" class="form-control" name="locality" required="" onChange="setHousehold()" >
            <?php
                 $sql = "SELECT a_id, locality FROM locality";

            try {
                $stmt = $DB->prepare($sql);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();

                foreach($results as $result){  
                        echo "<option value='".$result["a_id"]."'>".$result["locality"]."</option>";                   
                    }                       
                } catch (Exception $ex) {
                echo "an error occured";
            }

            ?>
        </SELECT>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label" for="household"><span class="required"></span>Select household:</label>
    <div class="col-sm-8">
        <SELECT id="household" class="form-control" name="household" required="" onchange="computeVisitNo()">
            
        </SELECT>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label" for="v_num"><span class="required"></span>Visit number:</label>
    <div class="col-sm-8">
        <input type="number" min="2" value="" placeholder="" id="v_num" class="form-control" name="v_num" required="" >
    </div>
</div>


<div class="form-group">
    <div class="col-sm-8 col-sm-offset-4">
        <button class="btn btn-primary" type="submit" onclick="setVisitNo()">Continue</button> 
    </div>
</div>
<script>
   
   	function setHousehold(){
		var locality = document.getElementById('locality').value;
		var household = document.getElementById('household');
		var v_num = document.getElementById('v_num').value;
		data = 'locality='+ locality;
		$.ajax({
			type: "POST",
			url: "getResumeHousehold.php",
			data: data,
			cache: false,
			success: function(html)
				{					
					$('#household').html(html);
					$('#v_num').val("");
					$('#v_num').prop('disabled',false);
				}
			});
		
	
	}
	
	function setVisitNo(){
		var locality = document.getElementById('locality').value;
		var v_num = document.getElementById('v_num').value;
		var household = document.getElementById('household').value;
		if(locality!="" && household!="" && v_num!=""){		
		data = 'household='+ household+'&v_num='+v_num;
		//alert(data);
		$.ajax({
			type: "POST",
			url: "submitVisit.php",
			data: data,
			cache: false,
			success: function(html)
				{	
					//alert(html);
					window.location = html;					
				}
			});
		}else { alert("All fields must be filled");}
	
	}
	
	function computeVisitNo(){		
		var household = document.getElementById('household').value;
		data = 'household='+ household;
		$.ajax({
			type: "POST",
			url: "computeVisitNo.php",
			data: data,
			cache: false,
			success: function(html)
				{					
					//alert(html);
					var num = eval(html);
					num++;
					//alert(num);
					$('#v_num').val(num);
					$('#v_num').prop('disabled',true);
				}
			});
		
	
	}	
	
	
</script>
</form>
</div>
</div>
</div>
<?php include 'footer_afterlogin.php'; ?>