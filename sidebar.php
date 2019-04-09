
   <ul class="nav nav-sidebar">
        <?php
			//checking whether S_SESSION[h_id] and S_SESSION[v_id] are set. These are the parameters that determine the household that is currently being interviewed and the visit number. If these elements are set, then disable "new interview" and "resume previous interview" else enable them.
			if(isset($_SESSION['household_id']) && isset($_SESSION['v_id'])){
				echo "<li>Household INTERVIEW</li>";
				echo "<ul class='nav nav-sidebar'>";
				echo "<li class='disabled'><a href='new_interview.php'>New Interview</a></li>";
				echo "<li class='disabled'><a href='resume_interview.php'>Resume Previous Interview</a></li>";
				echo "<li><a href='set_visit_status.php'>Set Visit Status</a></li>";
				echo "<li><a href='household_schedule.php'>Household Schedule</a></li>";
        		echo "<li><a href='household_characteristics.php'>Household Characteristics</a></li>";
				echo "<li><a href='net.php'>Net Questions</a></li>";
				echo "<li><a href='indoorResidualSpray.php'>Indoor Residual Spray</a></li>";
				echo "</ul>";				
				echo "<li>Woman's Interview</li>";
				echo "<ul class='nav nav-sidebar'>";
				echo "<li><a href='woman_respondent.php'>Respondent Background</a></li";
				echo "<li><a href='reprodstart.php'>Reproduction info</a></li";
				echo "<li><a href='birthDetails.php'>Birth details</a></li";
				echo "<li><a href='reprodend.php'>Reproduction conclussion</a></li";
				echo "<li><a href='pregnancy.php'>Pregnancy</a></li";
				echo "<li><a href='feverChildren.php'>Fever in Children</a></li";
				echo "<li><a href='malariaKnowledge.php'>Knowledge of Malaria</a></li";
				echo "</ul>";
				echo "<li>Biomarker Interview</li>";
				echo "<ul class='nav nav-sidebar'>";
				echo "<li><a href='biomarker.php'>Biomarker </a></li";
				echo "</ul>";
			}else{			
				
				echo "<li>Household INTERVIEW</li>";
				echo "<ul class='nav nav-sidebar'>";
				echo "<li><a href='new_interview.php'>New Interview</a></li>";
				echo "<li><a href='resume_interview.php'>Resume Previous Interview</a></li>";
				echo "<li class='disabled'><a href='set_visit_status.php'>Set Visit Status</a></li>";
				echo "<li class='disabled'><a href='household_schedule.php'>Household Schedule</a></li>";
        		echo "<li class='disabled'><a href='household_characteristics.php'>Household Characteristics</a></li>";
				echo "<li class='disabled'><a href='net.php'>Net Questions</a></li>";
				echo "<li class='disabled'><a href='indoorResidualSpray.php'>Indoor Residual Spray</a></li>";
				echo "</ul>";				
				echo "<li>Woman's Interview</li>";
				echo "<ul class='nav nav-sidebar'>";
				echo "<li class='disabled'><a href='woman_respondent.php'>Respondent Background</a></li";
				echo "<li class='disabled'><a href='reprodstart.php'>Reproduction info</a></li";
				echo "<li class='disabled'><a href='birthDetails.php'>Birth details</a></li";
				echo "<li class='disabled'><a href='reprodend.php'>Reproduction conclussion</a></li";
				echo "<li class='disabled'><a href='pregnancy.php'>Pregnancy</a></li";
				echo "<li class='disabled'><a href='feverChildren.php'>Fever in Children</a></li";
				echo "<li class='disabled'><a href='malariaKnowledge.php'>Knowledge of Malaria</a></li";
				echo "</ul>";
				echo "<li>Biomarker Interview</li>";
				echo "<ul class='nav nav-sidebar'>";
				echo "<li class='disabled'><a href='biomarker.php'>Biomarker </a></li";
				echo "</ul>";
				
			}

		?>        
        
        
	    
    </ul>