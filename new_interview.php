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
            <h3 class="panel-title">SET HOUSEHOLD INFORMATION FOR NEW INTERVIEW</h3>
          </div>
          <div class="panel-body">
<div class="col-sm-12">
<form class="form-horizontal">
<div class="form-group">
    <label class="col-sm-4 control-label" for="lga"><span class="required"></span>Pick LGA:</label>
    <div class="col-sm-8">
        <SELECT id="lga" class="form-control" name="lga" required="" onChange="setLocality()">
			<option value=""></option>
            <?php
                 $sql = "SELECT lgacode, lga_name FROM lga";

            try {
                $stmt = $DB->prepare($sql);

                // execute Query
                $stmt->execute();
                $results = $stmt->fetchAll();				
                foreach($results as $result){  
                    //echo $result["lgacode"];
                    echo "<option value='".$result["lgacode"]."'>".$result["lga_name"]."</option>";                   
                    }                       
                } catch (Exception $ex) {
                echo "an error occured";
            }

            ?>
        </SELECT>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label" for="locality"><span class="required"></span>Select locality:</label>
    <div class="col-sm-8">
        <SELECT id="locality" class="form-control" name="locality" required="" >
            
        </SELECT>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label" for="street"><span class="required"></span>Street Address:</label>
    <div class="col-sm-8">
        <input type="text" value="" placeholder="" id="street" class="form-control" name="street" required="" >
    </div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label" for="longtitude"><span class="required"></span>Longtitude:</label>
    <div class="col-sm-8">
        <input type="text" value="" placeholder="" id="longtitude" class="form-control" name="longtitude" required="" >
    </div>
</div>
	

<div class="form-group">
    <label class="col-sm-4 control-label" for="latitude"><span class="required"></span>Latitude:</label>
    <div class="col-sm-8">
        <input type="text" value="" placeholder="" id="latitude" class="form-control" name="latitude" required="" >
    </div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label" for="hh_name"><span class="required"></span>Household Head Name:</label>
    <div class="col-sm-8">
        <input type="text" value="" placeholder="" id="hh_name" class="form-control" name="hh_name" required="" >
    </div>
</div>

<div class="form-group">
    <label class="col-sm-4 control-label" for="hh_num"><span class="required"></span>Household Number:</label>
    <div class="col-sm-8">
        <input type="text" value="" placeholder="" id="hh_num" class="form-control" name="hh_num" required="" >
    </div>
</div>

<div class="form-group">    
    <label class="col-sm-4 control-label" for="q_lang"><span class="required"></span>Language of Questionnaire:</label>
    <div class="col-sm-8">
        <input type="text" value="ENGLISH" placeholder="" id="q_lang" class="form-control" name="q_lang" required="" disabled>
    </div>
</div>

<div class="form-group">    
    <label class="col-sm-4 control-label" for="i_lang"><span class="required"></span>Language of Interview:</label>
    <div class="col-sm-8">
        <SELECT id="i_lang" class="form-control" name="i_lang" required="" onChange="interview_lang()">
             <option value=""></option>
			 <option value="1">Hausa</option>
             <option value="2">Yoruba</option>
             <option value="3">Igbo</option>
             <option value="4">English</option>
			 <option value="5">Pidgin</option>
             <option value="6">Other</option>
         </SELECT>
    </div>
</div>

<div class="form-group" id="i_add_info" style="display:none;">
	<label class="col-sm-4 control-label" for="il_add_info">If others, specify:</label><div class="col-sm-8"><input type="text" value="" id="il_add_info" class="form-control" name="il_add_info"  ></div>
</div>

<div class="form-group">    
    <label class="col-sm-4 control-label" for="r_lang"><span class="required"></span>Native Language of Respondent:</label>
    <div class="col-sm-8">
        <SELECT id="r_lang" class="form-control" name="r_lang" required="" onChange="respondent_native_lang()">
			 <option value=""></option>
             <option value="1">Hausa</option>
             <option value="2">Yoruba</option>
             <option value="3">Igbo</option>
             <option value="4">English</option>
			 <option value="5">Pidgin</option>
             <option value="6">Other</option>
         </SELECT>
    </div>
</div>

<div class="form-group" id="r_add_info" style="display:none;">
	<label class="col-sm-4 control-label" for="rn_add_info">If others, specify:</label><div class="col-sm-8"><input type="text" value="" id="rn_add_info" class="form-control" name="rn_add_info" ></div>
</div>
<div class="form-group">    
    <label class="col-sm-4 control-label" for="translator"><span class="required"></span>Translator Used:</label>
    <div class="col-sm-8">
         <SELECT id="translator" class="form-control" name="translator" required="" >
			 <option value=""></option>
             <option value="1">Not at all</option>
             <option value="2">Sometime</option>
             <option value="3">All the time</option>
         </SELECT>
    </div>
</div>
	
    
<div class="panel panel-primary">
	<div class="panel-heading">STUDY INFORMATION SHEET</div>	
  <div class="panel-body">	
	<p class="text-justify">Greetings! Thank you for taking the time to listen to/read information regarding this study. 

The Lagos State Ministry of Health is conducting this survey to determine the burden of malaria and to provide base-line data for future monitoring of malaria as the government rolls out interventional measures. 

During the survey, information will be collected using various methods. We will ask you some questions about bednet use in your home, and also about your health and your child[ren]’s health and about other things that are linked to malaria. We are also doing a survey of malaria in children. To do this, we will test children for malaria parasites in the blood. One way to test for malaria is to look for parasites in the blood, which includes taking a small sample of blood by fingerprick and examining under a microscope in a laboratory. Another way is to look at anaemia (low levels of blood), by taking a small sample of blood by fingerprick and examining with a hemocue machine.  If your child has low levels of blood, malaria or fever, we will give you treatment. This will cost you and your family nothing. 

Your participation in this study is voluntary, and you can stop your involvement at any time, without giving a reason.  If you do agree to participate, when you are ready, we will ask you some questions that will take about 30 minutes.  There is no risk to you in taking part in this study.  The benefit from this study is that children will be tested and if found sick will be provided treatment. There will not be any financial compensation for your participation in this study.  Your identity will be strictly kept confidential and your answers will be coded using only a number for identification. 

This research has been approved by the Lagos state Ministry of Health

If you have any questions or need any clarifications pertaining to this survey please feel free to ask the interviewer who bears this sheet, the malaria focal person of your LGA, or alternatively contact Dr. Wellington Oyibo, whose contact information is given below.  

Principal Investigator: Prof. Wellington Oyibo; College of Medicine, University of Lagos, Idi-Araba, Lagos. Tel: 08035374004 Email: wellao@yahoo.com 

Alternative contact: The Director, Disease Control, Lagos State Ministry of Health, Alausa, Ikeja, Lagos. Tel: 08038485245

Thank you very much for your time. If you agree to participate, we will now ask you to sign the consent form. </p>
	</div>
</div>	
	

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-4">
        <button class="btn btn-success"  onclick="valSubmission('true')">Consented. Please Continue</button> 
    </div>
	<div class="col-sm-4">
        <button class="btn btn-danger" onclick="valSubmission('false')">Did not Consent. STOP!</button> 
    </div>
</div>


<script>     
	 
	function respondent_native_lang(){
		        
        var val = document.getElementById('r_lang').value;		
        if (val == "6"){
			document.getElementById('r_add_info').style.display= 'block';
        }else{
			document.getElementById('r_add_info').style.display= 'none';
        }
        
    }
    
    function interview_lang(){
               
        var val = document.getElementById('i_lang').value;		
        if (val == "6"){ 
			document.getElementById('i_add_info').style.display= 'block';
        }else{           
			document.getElementById('i_add_info').style.display= 'none';
        }
        
    }
	
	function setLocality(){
		var lga = document.getElementById('lga').value;
		var locality = document.getElementById('locality');
		data = 'lga='+lga;
		$.ajax({
			type: "POST",
			url: "getLocality.php",
			data: data,
			cache: false,
			success: function(html)
				{					
					$('#locality').html(html);
				}
			});
		
	
	}
	
	function valSubmission(val){
		var lga = document.getElementById('lga').value;
		var locality = document.getElementById('locality').value;
		var street = document.getElementById('street').value;
		var longtitude = document.getElementById('longtitude').value;
		var latitude = document.getElementById('latitude').value;
		var hh_name = document.getElementById('hh_name').value;
		var hh_num = document.getElementById('hh_num').value;		
		var q_lang = document.getElementById('q_lang').value;
		var i_lang = document.getElementById('i_lang').value;
		var i_add_info = document.getElementById('il_add_info').value;
		var r_lang = document.getElementById('r_lang').value;
		var r_add_info = document.getElementById('rn_add_info').value;
		var translator = document.getElementById('translator').value;
		var consented;
		if (val == "true"){
			consented = "1";
		}else if(val == "false"){
			consented = "0";
		}
		var data = 'lga='+lga+'&locality='+locality+'&street='+street+'&longtitude='+longtitude+'&latitude='+latitude+'&hh_name='+hh_name+'&hh_num='+hh_num+'&q_lang='+q_lang+'&i_lang='+i_lang+'&i_add_info='+i_add_info+'&r_lang='+r_lang+'&r_add_info='+r_add_info+'&translator='+translator+'&consented='+consented;
	//alert(data);
		$.ajax({
			type: "POST",
			url: "submitNewInterview.php",
			data: data,
			cache: false,
			success: function(html)
				{					
					window.location = html;
				}
			});
		
		
		
	}
</script>
<!--/form-->
</div>
<!--div class="col-sm-4">
</div-->

</div>
</div>
<script></script>
<?php include 'footer_afterlogin.php'; ?>