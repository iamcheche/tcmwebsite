<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<h1 style="background-color:#444; color:#fff; text-align:center;"><?php echo $course_code ?></h1>
        <div class="row">
		    <div class="col-md-6" style="text-align: center;">
	        	
	        </div>
	        <div class="col-md-6" style="text-align: center;">
	        	<a href="<?php echo base_url('studenthome'); ?>" style = "background-color:#222; color:#fff; text-decoration:none; border-radius:5px; padding: 5px;" > <b>Return Home</b></a>
	        </div>
        </div>

			<?php 
		           
				function get_data($table_name, $strtablename){

					$total = 0;
		            $count = 0;
		            echo "<tr><td colspan='4' style='text-align:center; background-color:#333;color:#fff;'><b>". $strtablename ."</b></td></tr>";
					if(isset($table_name)) : foreach ($table_name as $row) :
		                    echo "<tr>";

		                    	echo "<th>";
		                    	echo $row->name;
		                    	echo "</th>";	

		                    	echo "<th>";
			           			echo $row->raw_score;
			                    echo "</th>";

			                    echo "<th>";
			                    echo $row->total_items;
			                    echo "</th>";

			                    echo "<th>";
			                    echo $row->percent;
								echo "</th>";
		                								
								echo "</tr>";
		                    	$count++;
		                    	$total += $row->percent; 
		                    	$percent = $total/$count; 
		                endforeach;
		                	echo "<tr>";
		                	echo "<td colspan='3' style = 'text-align:left;'><b>Total " .  $strtablename ." Percentage</b></td>";
							
		                	echo "<td>";
								if(isset($percent)){
			           				echo $percent;
			           				return $percent;
			                   	}else{
			                    	echo "No Records yet.";
			                    }
			                echo "</td>";				        
			                echo "</tr>";

			               
		            else :     
			            echo "No records were returned";
			        endif;       

				}


			?>
			<div class = "table-responsive">
				
					<table class = "table" style="width:100%; text-align:center;">
						<thead style="background-color:#222; color:#fff;">
		            		<tr>
		            			<th colspan="4" style= "text-align:center;"><b >PRELIM</b></th>
		            		</tr>
		            		<tr>
		            			<th style="text-align:center;">Component Name</th>
		            			<th style="text-align:center;">Raw Score</th>
		      					<th style="text-align:center;">Total Score</th>
		            			<th style="text-align:center;">Percentage</th>
		            		</tr>
		            	</thead>	            	
		            	
		            	<tbody class = "table-striped" style="background-color:#e5e5ff; width: 100%"> 
		            		
		            		<?php 
		            			$pct_hw = get_data($assignments, 'Assignments');
								$pct_sw = get_data($seatworks, 'Seatworks'); 
 							 	$pct_q = get_data($quizzes, 'Quizzes');
 							 	$pct_att = get_data($attendance, 'Attendance');
 							 	$pct_rec = get_data($recitations, 'Recitation');

 							 	if ($this->uri->segment(3) != "MATH113"){
 							 		$pct_lab = get_data($lab_activities, 'Laboratory Activities');	
 							 	}
 							 	
 							 	echo "<tr>";

 							 	echo "<td colspan= '3' style = 'text-align:left;''><b>Class Standing </b> </td><td>"; 
	 							 	if ($this->uri->segment(3) != "MATH113"){
	 							 		$class_standing = ($pct_hw * 0.05) + ($pct_sw * 0.05) + ($pct_rec * 0.05) + ($pct_att * 0.05) + ($pct_q * 0.6) + ($pct_lab * 0.2);
	 							 	}else{
	 							 		$class_standing = ($pct_hw * 0.05) + ($pct_sw * 0.05) + ($pct_rec * 0.05) + ($pct_att * 0.05) + ($pct_q * 0.6) ;
	 							 	}
 							 	echo $class_standing;
 							 	echo "</td></tr>";

 							 	$pct_ex = get_data($exams, 'exams');
 							 	
 							 	echo "<tr style = 'background-color: #333; color:#fff;'>";
 							 	echo "<td colspan= '3' ><b>PRELIM GRADE </b> </td><td>"; 
 							 	
 							 	$grade = ($pct_ex * 0.5) + ($class_standing * 0.5);
								
								if ($pct_ex == 0 || $class_standing == 0){
									echo " NO GRADES TO BE SHOWN. ";
								} else {
									echo "<b>" . $grade . "</b>";
 							 		
								}
								echo "</td></tr>";


 							?>						
			            	<hr > 
		            		</tbody>
					</table>
			</div> 
	</div>
	<div class="col-md-1"></div>
	
</div>
	