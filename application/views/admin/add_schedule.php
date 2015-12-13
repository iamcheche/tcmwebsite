<div class = "container">
	<div class = "col-md-1"></div>
	<div class =  "col-md-10">
		<div class="row">
			<?php 
				$days = array('id' => 'days' , 'name' => 'days', 'class' => 'form-control', 'placeholder' => 'Days'  );
				$time_start = array('id' => 'time_start' , 'name' => 'time_start', 'class' => 'form-control', 'placeholder' => 'time start'  );
				$time_end = array('id' => 'time_end' , 'name' => 'time_end', 'class' => 'form-control', 'placeholder' => 'time end'  );
				$room = array('id' => 'room' , 'name' => 'room', 'class' => 'form-control', 'placeholder' => 'room'  );
				//$professor = array('id' => 'professor' , 'name' => 'professor', 'class' => 'form-control', 'placeholder' => 'professor'  );
				$course_code = array('id' => 'course_code' , 'name' => 'course_code', 'class' => 'form-control', 'placeholder' => 'course code'  );
			?>

				<?php
                    echo form_open('adminhome/add_schedule');
       
                    echo form_label('Days');
                    echo form_input($days);
                    echo '<br>';
					echo '<div id = "error">' . form_error('days') . '</div>';
                    echo '<br /><br />';
                	                
                	echo form_label('Time Start');
                    echo form_input($time_start);
                    echo '<br>';
                    echo '<div id = "error">' . form_error('time_start') . '</div>';
                    echo '<br /><br />';

                    echo form_label('Time End');
                    echo form_input($time_end);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('time_end') . '</div>';
                    echo '<br /><br />';

                	echo form_label('Room');
                    echo form_input($room);
                    echo '<br>';
                	echo '<div id = "error">' . form_error('room') . '</div>';
                    echo '<br /><br />';
                	
                	echo form_label('Professor');
                    echo "<select name='professor' id='professor' class='form-control'>";
                    if (count($get_professors)) {
                        foreach ($get_professors as $professor) {
                            echo "<option value='". $professor['professor_username'] . "'>" . $professor['professor_username'] . "</option>";
                        }
                    }
                    echo "</select><br/>";

                	
                	echo form_label('Course Code');
                    echo "<select name='course_code' id='course_code' class='form-control'>";
                    if (count($get_course)) {
                        foreach ($get_course as $course) {
                            echo "<option value='". $course['course_code'] . "'>" . $course['course_code'] . "</option>";
                        }
                    }
                    echo "</select><br/>";

                	echo form_submit('submit', 'Add Schedule');
                    echo '<br /><br />';
                    echo form_close();
                ?>
		</div>	
	</div>
	<div class = "col-md-1"></div>
</div>